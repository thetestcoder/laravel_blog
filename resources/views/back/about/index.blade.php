@extends('back.layouts.master')
@section('title', 'About about')
@section('content')
    <br>
    <!-- DATA TABLE -->
    <h3 class="title-5 m-b-35">Hakkımda Sayfasını Düzenle</h3>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
            <tr>
                <th>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </th>
                <th>Title</th>
                <th>Ana İçerik / Main Content</th>
                <th>Başarılar</th>
                <th>İlkeler</th>
                <th>Görsel</th>
                <th>Status / Durum</th>
                <th>Islemler</th>
            </tr>
            </thead>

                <tbody>
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{$about->title}}</td>
                    <td>{!! \Illuminate\Support\Str::limit($about->content, 50) !!}</td>
                    <td>{!! \Illuminate\Support\Str::limit($about->basarilar, 50) !!}</td>
                    <td>{!! \Illuminate\Support\Str::limit($about->ilkeler, 50) !!}</td>
                    <td>
                        <img src="{{asset($about->image)}}" width="400" height="400">
                    </td>
                    <td>
                        <input class="switch" type="checkbox" data-on="Yayında" data-off="Yayında Değil" data-onstyle="success" data-offstyle="danger" @if($about->status==1) checked
                               @endif data-toggle="toggle">
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Görüntüle">
                                <i class="zmdi fa-desktop"></i>
                            </a>
                            <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </a>
                            <a page-id="#" class="item remove-click" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                </tbody>


        </table>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sayfayı Sil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" id="aboutAlert">

                    </div>
                </div>
                <div class="modal-footer">
                    <form method="post" action="#">
                        @csrf
                        <input type="hidden" name="id" id="remove_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button id="deleteButton" type="submit" class="btn btn-primary">Sayfa Sil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


@endsection
