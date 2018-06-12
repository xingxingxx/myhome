@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">编辑链接</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bookmark.update',['id'=>$link->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-md-right">标题</label>

                                <div class="col-md-8">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ $link->title }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-md-2 col-form-label text-md-right">URL</label>

                                <div class="col-md-8">
                                    <input id="url" type="text" class="form-control" name="url" value="{{ $link->url }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="icon" class="col-md-2 col-form-label text-md-right">图标</label>

                                <div class="col-md-8">
                                    <input id="icon" type="text" class="form-control" name="icon"
                                           value="{{ $link->icon }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-2 col-form-label text-md-right">描述</label>

                                <div class="col-md-8">
                                    <textarea id="description" rows="10" class="form-control" name="description">{{ $link->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        保存
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
