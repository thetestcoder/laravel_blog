@extends('back.layouts.master')
@section('title', 'POST PAGE')
@section('content')
    <br>
    <!-- DATA TABLE -->
    <h3 class="title-5 m-b-35">Ayarlar</h3>
    <div class="card-body">
        <form method="post" action="{{route('admin.settings.update')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Başlığı / Site Title</label>
                        <input type="text" name="title" required class="form-control" value="{{$setting->title}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Durumu / Site Status</label>
                        <select class="form-control" name="active">
                            <option @if($setting->status==1) selected @endif value="1">Aktif</option>
                            <option @if($setting->status==0) selected @endif value="0">Pasif</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Favicon</label>
                        <input type="file" name="favicon" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Github</label>
                        <input type="text" name="github" class="form-control" value="{{$setting->github}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control" value="{{$setting->linkedin}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Medium</label>
                        <input type="text" name="medium" class="form-control" value="{{$setting->medium}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-md btn-success">Güncelle</button>
            </div>
        </form>
    </div>

@endsection
