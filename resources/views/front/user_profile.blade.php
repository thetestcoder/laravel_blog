@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')



    <!-- USER PROFILE -->
    <div class=gdlr-core-page-builder-body>
        <div class="widget akea-align-center">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    @include('profile.show')


                </div>
            </div>
        </div>
    </div>










@endsection
