@extends('back.layouts.master')
@section('title', 'Guncelle')
@section('content')
<br>
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                    <div class="card">
                        <div class="card-header">
                            <strong>Post</strong> Güncelle
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                               @method('PUT')
                                {{ csrf_field() }}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kullanıcı:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static">{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Post Başlığı / Post Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder="Başlık giriniz..." class="form-control" value="{{$post->title}}" >
                                        <small class="form-text text-muted">Başlık içeriğiniz için çok önemlidir :)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectLg" class=" form-control-label">Kategori</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                            <option value="0">Lütfen seçim yapınız.</option>
                                            @foreach($categories as $category)
                                            <option @if($post->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Başlık Görseli</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img src="{{asset($post->image)}}" class="rounded img-thumbnail" width="300">
                                        <br>
                                        <br>
                                        <input type="file" id="file-input" name="image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">İçerik</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="editor" name="content"  rows="9" placeholder="Lütfen içerik giriniz..." class="form-control">
                                            {!! $post->content !!}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">İçerik Görseli Seçiniz:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                            <input type="file" id="file-multiple-input" name="file[]" accept="image/*" multiple="multiple" class="form-control-file">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Güncelle
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                    </div>

            </div>
@endsection
@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':300
                }
            );
        });
   </script>
@endsection
