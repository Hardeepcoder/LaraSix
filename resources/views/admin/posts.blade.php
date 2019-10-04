@extends('admin.master')
@section('title', 'Add New Post')
@section('content')
<div class="main-content-container container-fluid px-4">

            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">Blog Posts</h3>
              </div>
            </div>

            <div class="row">
            @foreach($data as $news)
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" 
                  style="background-image: url('{{url('/')}}/public/img/{{$news->pic}}');"></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">{{$news->title}}</a>
                    </h5>
                    <p class="card-text">{{$news->content}}</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">By
                      <a class="text-fiord-blue" href="#">Alene Trenton</a> in
                      <a class="text-fiord-blue" href="#">{{$news->cat_id}}</a>
                    </span>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
</div>
@endsection