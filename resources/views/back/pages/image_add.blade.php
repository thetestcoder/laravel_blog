@extends('back.layouts.master')
@section('title', 'Image PAGE')
@section('content')
<br>
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{$data->title}}</strong> Post'unun Görsel İçeriklerini Buradan Oluştur.
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('admin.admin_image_store', ['post_id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                        <label for="text-input" class=" form-control-label">Image Başlığı / Image Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder="Başlık giriniz..." class="form-control">
                                        <small class="form-text text-muted">Başlık içeriğiniz için çok önemlidir :)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">İçerik Görseli Seçiniz:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                            <input type="file" id="file-multiple-input" name="image" accept="image/*" multiple="multiple" class="form-control-file" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                         </div>
                    </div>
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
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    @foreach($images as $post)
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
                                    <img src="{{asset($post->image)}}" width="400" height="400">
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </a>
                                    <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Add">
                                        <i class="zmdi zmdi-image"></i>
                                    </a>
                                    <a href= "{{route('admin.admin_image_delete', ['id'=>$post->id, 'post_id'=>$data->id])}}" onclick="return confirm('Are you sure?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
</div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                'height':300
            });
        });
    </script>
@endsection
