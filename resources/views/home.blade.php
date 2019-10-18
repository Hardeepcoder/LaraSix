@extends('layouts.app')
@section('content')
<div class="container" id="app">
      
        <div class="row">
       
         <div v-for="post in news.data" class="col-md-4 col-sm-12">
           <div class="card">
              
              <div class="card-body">
                      <a class="text-fiord-blue"href="#"> @{{post.title.substring(0,20)}}</a>     
              </div>
             
              <div class="card-body" >
                    <img :src="'public/img/' + post.pic" width="100%" height="200px"/>
              </div>

           </div>
           <br/>
          
        </div>

     </div>

     <page-number :data="news" @pagination-change-page="allposts"></page-number>
</div>
@endsection
