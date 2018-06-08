<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class BookMarkController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $links = Link::when($q, function ($query) use ($q) {
            $query->where('title', 'like', '%' . $q . '%');
        })
            ->where('user_id', \Auth::user()->id)
            ->OrderBy('frequency', 'desc')
            ->OrderBy('created_at', 'desc')
            ->paginate(25)
            ->appends(['q' => $q]);
        return view('bookmark.index', compact('links', 'q'));
    }

    public function query(Request $request)
    {
        $q = $request->q;
        $links = Link::when($q, function ($query) use ($q) {
            $query->where('title', 'like', '%' . $q . '%');
        })
            ->where('user_id', \Auth::user()->id)
            ->OrderBy('frequency', 'desc')
            ->OrderBy('created_at', 'desc')
            ->limit(15)
            ->get(['id','title','url','icon']);
        return response()->json($links);
    }

    public function create()
    {
        return view('bookmark.create');
    }

    public function store(Request $request)
    {
        $url = trim($request->url);
        $data = $this->add($url);
        Link::create($data);
        return redirect('/');
    }

    private function add($url)
    {
        $doc = new \DOMDocument();
        @$doc->loadHTMLFile($url);
        $xpath = new \DOMXPath($doc);

        //查询标题
        $title = $xpath->query('//title');
        if ($title->length) {
            $title = $title->item(0)->nodeValue;
        } else {
            $title = $url;
        }

        //查询icon
        $elems = parse_url($url);
        $serverName = ($elems['scheme'] ?? '') . '://' . ($elems['host'] ?? '');
        $icon = $xpath->query('//link[contains(translate(@rel,"ABCDEFGHIJKLMNOPQRSTUVWXYZÆØÅ","abcdefghijklmnopqrstuvwxyzæøå"),"icon")]');
        if ($icon->length) {
            $icon = $icon->item(0)->getAttribute('href');
            if (strpos($icon, '//') === false) {
                $icon = $serverName . '/' . ltrim($icon, '/');
            }
        } else {
            $icon = $serverName . '/favicon.ico';
        }
//        $icon = $this->getDefaultIcon($icon);


        //查询description
        $description = $xpath->evaluate('string(//meta[contains(@name, "description")]/@content)');
        if (!$description) {
            $description = $title;
        }
        return [
            'url'         => $url,
            'title'       => $title,
            'user_id'     => \Auth::user()->id,
            'icon'        => $icon,
            'description' => $description,
        ];

    }

    private function getDefaultIcon($icon)
    {
        $curl = curl_init($icon);
        // 不取回数据
        curl_setopt($curl, CURLOPT_NOBODY, true);
        // 发送请求
        $result = curl_exec($curl);
        $found = false;
        // 如果请求没有发送失败
        if ($result !== false) {
            // 再检查http响应码是否为200
            $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($statusCode == 200) {
                $found = true;
            }
        }
        curl_close($curl);
        if ($found) {
            return $icon;
        } else {
            return '';
        }
    }

    public function edit($id)
    {
        $link = Link::findOrFail($id);
        return view('bookmark.edit', compact('link'));
    }

    public function update($id, Request $request)
    {
        $link = Link::findOrFail($id);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->icon = $request->icon;
        $link->save();
        return redirect('/');
    }

    public function delete($id)
    {
        Link::destroy($id);
        return back();
    }

    public function importView()
    {
        return view('bookmark.import');
    }

    public function import(Request $request)
    {
        $file = $request->file('bookmark');
        $doc = new \DOMDocument();
        @$doc->loadHTMLFile($file);
        $xpath = new \DOMXPath($doc);
        $links = $xpath->query('//a|//A');
        if ($links->length) {
            foreach ($links as $link) {
                $url = $link->getAttribute('href');
                $data = $this->add($url);
                Link::create($data);
            }
        }
        return redirect('/');
    }
}
