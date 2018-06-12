<?php

namespace App\Http\Controllers;

use App\BookBody;
use Illuminate\Http\Request;

/**
 * Class BookBodyController
 * @package App\Http\Controllers
 */
class BookBodyController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $book_id = $request->book_id;
        if ($book_id) {
            return view('book.body.create', compact('book_id'));
        } else {
            abort(404);
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $body = new BookBody();
        $body->title = $request->title;
        $body->book_id = $request->book_id;
        $body->parent_id = 0;
        $body->type = 0;
        $body->content = $request->content;
        $body->save();
        return redirect(route('book.show', ['book_id' => $body->book_id,'id'=>$body->id]));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = BookBody::findOrFail($id);
        return view('book.body.edit', compact('article'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $article = BookBody::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect(route('book.show', ['book_id' => $article->book_id, 'id' => $article->id]));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $article = BookBody::findOrFail($id);
        BookBody::destroy($id);
        return redirect(route('book.show', ['book_id' => $article->book_id]));
    }
}
