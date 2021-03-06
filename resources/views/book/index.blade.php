@extends('layouts.app_book')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach($books as $key=>$vo)
                    <div class="card" @if($key>0) style="margin-top:20px;" @endif>
                        <div class="card-body">
                            <div style="float:left;width:200px;"><img style="width:100%;" src="{{ asset('uploads/file/'.$vo->cover) }}">
                            </div>
                            <div style="float:left;margin-left:20px;width:600px;">
                                <h3>{{ $vo->title }}</h3>
                                <p>{{ $vo->description }}</p>
                                <p> {{ $vo->author }}&nbsp;写于&nbsp;{{ $vo->created_at }}</p>
                                <div>
                                    <a href="{{ route('book.show',['id'=>$vo->id]) }}" class="btn btn-sm btn-primary">阅读本书</a>
                                    <a href="{{ route('book.edit',['id'=>$vo->id]) }}" class="btn btn-sm btn-primary">编辑</a>

                                    <form action="{{ route('book.delete',['id'=>$vo->id]) }}" method="POST"
                                          style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit"
                                               class="btn btn-sm btn-default"
                                               value="删除"
                                               onclick="return confirm('确定要删除吗？');">
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection