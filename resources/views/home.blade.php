@extends('layouts.app')
@section('content')

<div class="container" id="app">
<div class="row">
     @foreach(App\cats::all() as $c)
      <div class="m-1">
         <input type="checkbox" id="{{$c->id}}" class="mycat" value="{{$c->id}}" v-model="cat">
         <label for="{{$c->id}}" class="btn btn-sm border">{{$c->name}}<label>
      </div>
   @endforeach
</div>
  
     <div class="row">
       
         <div v-for="post in news.data" class="col-md-4 col-sm-12">
           <div class="card">
              <div class="card-body">
                <a class="text-fiord-blue"href="#"> @{{post.title.substring(0,20)}}</a>     
              </div>
              <div class="card-body">
                    <img :src="'public/img/' + post.pic" width="100%" height="200px"/>
              </div>
           </div>
           <br/>
        </div>

     </div>

     <page-number :data="news" @pagination-change-page="allposts"></page-number>
</div>
@endsection
