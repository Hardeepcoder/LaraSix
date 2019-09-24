@extends('admin.master')
@section('title', 'Add New Post')
@section('content')

        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <b>Great,</b> your post has been submitted successfully ! 
        </div>

       <add-post></add-post>
@endsection