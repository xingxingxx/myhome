@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach($books as $key=>$book)
                    <div class="card" @if($key>0) style="margin-top:20px;" @endif>
                        <div class="card-body">
                            <div style="float:left;width:200px;"><img style="width:100%;" src="{{ $book->cover }}">
                            </div>
                            <div style="float:left;margin-left:20px;width:600px;">
                                <h3>{{ $book->title }}</h3>
                                <p>{{ $book->description }}</p>
                                <p> {{ $book->author }}&nbsp;写于&nbsp;{{ $book->created_at }}</p>
                                <p><a href="{{ route('book.show',['id'=>$book->id]) }}" class="btn btn-sm btn-primary">阅读本书</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection