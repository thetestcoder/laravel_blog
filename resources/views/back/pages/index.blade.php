@extends('back.layouts.master')
@section('title', 'page PAGE')
@section('content')
    <br>
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">All pages</h3>
            <h4 class="title-5 m-b-25">{{$pages->count()}} adet yazı listelendi.</h4>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                </div>
                <div class="table-data__tool-right">
                    <a href="{{route('admin.pages.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Sayfa Oluştur</a>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
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
                        <th>Görsel</th>
                        <th>Status / Durum</th>
                        <th>Islemler</th>
                    </tr>
                    </thead>
                    @foreach($pages as $page)
                    <tbody>
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{$page->title}}</td>
                        <td>
                            <img src="{{asset($page->image)}}" width="400" height="400">
                        </td>
                        <td class="desc"></td>
                        <td>
                            <input class="switch" page-id="{{$page->id}}" type="checkbox" data-on="Yayında" data-off="Yayında Değil" data-onstyle="success" data-offstyle="danger" @if($page->status==1) checked
                                   @endif data-toggle="toggle">
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href= "{{route('page', $page->slug)}}" class="item" data-toggle="tooltip" data-placement="top" title="Görüntüle">
                                    <i class="zmdi fa-desktop"></i>
                                </a>
                                <a href= "{{route('admin.pages.update', $page->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </a>
                                <a page-id="{{$page->id}}" page-title="{{$page->title}}" class="item remove-click" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    </tbody>
                    @endforeach

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
                    <div class="alert alert-danger" id="pageAlert">

                    </div>
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{route('admin.pages.delete', $page->id)}}">
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

    <script>
        $(function() {
            $('.switch').change(function() {
                id = $(this)[0].getAttribute('page-id');
                status=$(this).prop('checked');
                $.get("{{route('admin.pages.switch')}}", {id:id,status:status},  function(data, status) {});
            })
        })

        $(function() {
            $('.remove-click').click(function (){
                id = $(this)[0].getAttribute('page-id');
                name = $(this)[0].getAttribute('page-title');
                $('#deleteModal').show();
                $('#remove_id').val(id);
                $('#pageAlert').html(name+ ' sayfasını silmek istediğine emin misin?');
                $('#body').hide();
                $('#deleteModal').modal();
            });
        })
    </script>
@endsection
