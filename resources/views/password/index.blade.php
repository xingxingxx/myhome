@extends('layouts.app_password')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">

                        <pre>
{{ $password->content }}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection