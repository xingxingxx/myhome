@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method=get action="/">
                            <div class="form-group row" style="padding: 10px;">
                                <div class="col-md-6 offset-md-3 text-md-right">
                                    <input type="text" name="q" class="form-control" value="{{ $q ?: '' }}">
                                </div>
                                <div class="col-md-1 text-md-left">
                                    <input type=submit class="btn btn-primary" value="搜索">
                                </div>
                            </div>
                        </form>
                        <hr>
                        @foreach($links as $link)
                            <div class="">
                                <h5><span><img style="height:26px;"
                                               src="{{ $link->icon ?: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADPklEQVRYR8VX0VUbMRDc6SCpAKgAUgGmgugqADowFcQd4A5wKtCmgkAFmAqADuhg8uae5KxlGewX8qwf+84+aXZ3ZncOduCFA59vewFIKZ2Z2aWZ6fMLAH0ayaWZvZnZvZn9cndd77R2ApBSujKzHwCOw64PZqbrF4Exs9P6G0ndu3F3/wjFuwBSSjrgDsCE5E8zWwK41Xd3vxqG4Z7kvbvPUkoLAJckr81sUr4rI9fuLkDdtRVASmliZhnAK0llQJs8AnjKOSftFgGE6yN3P1G5ACxIHpnZxbaydAHocAC/a6TaPKU0AzAleVYjagEoYwCelQV3X5Tnama+9UBsAChpfyxkUuTjGobhpaQ73luVoP5PpTCzc2WhuffdzARirRwbABSVNiA5C0UT4xW9No8b1NLombqUhSuS86IM3a/Piy8XkQxrAMR2AHcfMfdffic5RHWsAeilOZBr6e7TeHjLgZhySTbnLCKvVq88KwCFtY8kxdiYUtWfkViBFxscKMSbSq455zbDldwrQkYAc+k95zx2txCN5LQN2DYA9aCTlnQly3N3F0f+tuJCvreq8QCgbvbV3dVuV+udElQ59rKp7villmeVgWEYliTFj8h+6X8E0KYzcGPshC0xS9k2AJR+okyP/IgAVGehawdJldXGIWbWk+GIBcCsI1v9pJKmGtAaADN7bXQ+argMGg2fdokvKkuv15+b2VPoBfVZzZejHoCDl0DSOxwJRQ6ZjdjDi6bfY/TnyfA/NKJZzln8iT1loz/s04pfZEJ27AMawd1WXJrdylm1rTIByB22f9qtttV3xzFJ+TtZq9r5xIM7kjexTwCYF0M6mo+ypHPZNj1f5alSyNrJTa0NqK4hASBJZnfXJuPax5C0aS5+MZE8btv5NktWB5Aik7t9K874NrqajyxZSqlGfkFyspMlqxEXVUhmz8XZLksWnqur6ZlSWfWc83ExtbcATrYdvjYLeixTBAA0H2TRlI2HwoWFyrPFlosnp7Jl+j/J1KY9nrXri4n0KwCy2OMqLx/6KqKJpPGl5YnktDU2vSB3AhDKokMk1fG9QJkpn+OgKtNUI33ri0gLYi8An9YMwkYHB/AHaOD7Pz096NEAAAAASUVORK5CYII=' }}"></span>&nbsp;
                                    <a style="color:#333;" target="_blank"
                                       href="{{ $link->url }}">{{ $link->title }}</a>

                                </h5>
                                <p style="color:#555;">
                                    {{ $link->description }}
                                </p>
                                <p>
                                    <a style="color:#555;" class=""
                                       href="{{ route('edit',['id'=>$link->id]) }}">编辑&emsp;</a>
                                    <a style="color:#555;" class=""
                                       href="{{ route('delete',['id'=>$link->id]) }}">删除</a>
                                </p>
                                <hr>
                            </div>
                        @endforeach
                        {!! $links->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection