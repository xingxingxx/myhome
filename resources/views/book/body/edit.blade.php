@extends('layouts.app_article')

@section('content')
    <div style="padding:20px;">

        <form method="POST" action="{{ route('book.body.update',['id'=>$article->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input id="title" type="text" class="form-control" name="title"
                       value="{{ $article->title }}"
                       required autofocus>
            </div>
            <div class="form-group">
                <div id="content">
                    <textarea name="content">{{ $article->content }}</textarea>
                </div>
                @include('markdown::encode',['editors'=>['content']])
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    保存
                </button>
            </div>
        </form>
    </div>
@endsection
