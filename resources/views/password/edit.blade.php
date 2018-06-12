@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                         <form method="POST" action="{{ route('password.update',['id'=>$password->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                {{--<label for="description" class="col-md-1 col-form-label text-md-right">内容</label>--}}

                                <div class="col-md-12">
                                    <textarea id="description" rows="30" class="form-control" name="content">{{ $password->content }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        保存
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection