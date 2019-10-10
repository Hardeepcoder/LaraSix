<template>
         
 <div class="main-content-container container-fluid px-4">
            <div class="row" >
         
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4" v-for='post in news' :key='post.id'>
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" 
                  :style="{ backgroundImage: 'url(\'' + '../public/img/' +  post.pic + '\')' }"></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">{{post.title}}</a>
                    </h5>
                    <p class="card-text">{{post.content}}</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">
                      <a class="btn btn-primary btn-sm" href="#">Edit Post</a> 
                    
                      <a class="btn btn-success btn-sm" href="#">View Details</a> 
                    </span>
                  </div>
                </div>
              </div>
             
              
            </div>
           
         </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.getPostFun();
        }, 
         data(){
           return{
            isLoading: true,
            news:[]
           }
        
    },
       
        methods:{
          
            getPostFun(){
              let self = this;
            axios.get('../api/news').then(function (response) {
              self.news = response.data;
              //console.log(response.data);
            });
              
            }
        }
    }
    
</script>
