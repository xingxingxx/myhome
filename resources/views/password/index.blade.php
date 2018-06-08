@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-defult" href="{{ route('password.edit',['id'=>$password->id]) }}">更新密码</a>
                        <pre>
{{ $password->content }}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection