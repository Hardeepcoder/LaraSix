@extends('layouts.app')
@section('content')
<div class="container" id="app">
   
     <div v-for="post in news.data">
            <h3>@{{post.title}}</h3>
            <p>@{{post.content}}</p>
            <hr/>
     </div>

     <page-number :data="news" @pagination-change-page="allposts"></page-number>
</div>
@endsection
