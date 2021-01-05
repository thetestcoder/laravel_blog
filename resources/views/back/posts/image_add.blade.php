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
                            <form action="{{route('admin.add_image_store', ['post_id'=>$data->id])}}" method="Image" enctype="multipart/form-data" class="form-horizontal">
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
                                            <input type="file" id="file-multiple-input" name="file[]" accept="image/*" multiple="multiple" class="form-control-file">
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
