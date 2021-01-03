@extends('back.layouts.master')
@section('title', 'POST PAGE')
@section('content')
<br>
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">All Posts</h3>
            <h4 class="title-5 m-b-25">{{$posts->count()}} adet yazı listelendi.</h4>
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
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item</button>
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
                        <th>Kategori</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Hit/Tıklanma</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                    <tbody>
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{$post->title}}</td>
                        <td>
                            <img src="{{$post->image}}" width="400" height="400">
                        </td>
                        <td class="desc">{{$post->getCategory->name}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->hit}}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </a>
                                <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href= "#"class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
            <!-- END DATA TABLE -->





@endsection
