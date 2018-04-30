@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">导入链接</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="bookmark" class="col-md-4 col-form-label text-md-right">URL</label>

                                <div class="col-md-6">
                                    <input id="bookmark" type="file"
                                           class="form-control{{ $errors->has('bookmark') ? ' is-invalid' : '' }}"
                                           name="bookmark" required autofocus>

                                    @if ($errors->has('bookmark'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bookmark') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
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
