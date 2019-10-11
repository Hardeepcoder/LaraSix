<template>
       <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4" v-for='post in news' :key='post.id'>
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" 
                  :style="{backgroundImage:'url(\'' + '../public/img/' + post.pic + '\')'}"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">{{post.title}}</a>
                    </h5>
                    <p class="card-text">{{post.content}}</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">By
                      <a class="text-fiord-blue" href="#">Alene Trenton</a> in
                      <a class="text-fiord-blue" href="#">{{post.cat_id}}</a>
                    </span>
                  </div>
                </div>
              </div>
             
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.getPostsFun();
        }, 
        data(){
            return{
            news:[],
            }
        },
     
        methods:{
            getPostsFun(){
                let self = this;
             // alert('button clicked');
            axios.get('../api/news').then(function(res){
                console.log(res.data);
                self.news = res.data;
            });
            
              
            }
        }
    }
</script>
