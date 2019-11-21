<template>
    <div class="container" style="margin-top:50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                 
                    <div class="card-body">
                     <div class="col-lg-3 col-md-6 col-sm-12 mb-4" v-for='post in list' :key='post.id'>
                         {{post.title}}
                         </div>
                         
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
            this.allposts()
        },
        data() {
            return {
              list: []
            };
          },
          methods: {
          
                allposts($state){
                     let self = this;
                    axios.get('http://localhost:8888/larasix/allposts').then(res=>{
                    self.list = res.data;
                    console.log(res.data);
                    // $state.loaded();
                    })
                   
                   this.page = this.page + 1;
                }
                
               
 
            
          },
    }
</script>