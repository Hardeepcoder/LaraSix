<template>
         
 <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <form class="add-new-post" v-on:submit.prevent="addPostfun">
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Blog Posts</span>
                <h3 class="page-title">Add New Post</h3>
              </div>
            </div>
            <!-- End Page Header -->

            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                      
                      <input class="form-control form-control-lg mb-3" type="text" 
                      placeholder="Your Post Title" v-model="title">
                      <p class="text-danger" v-if="!$v.title.required">Please enter title</p>
                      <p class="text-danger" v-if="!$v.title.hardeep">Please enter atleast 4</p>
                      <!-- Txt Editor -->
                      <vue-editor v-model="content"></vue-editor>
                      <p class="text-danger" v-if="!$v.content.required">Please fill the content</p>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
              <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Actions</h6>
                    
                  </div>
                  <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                    
                      <li class="list-group-item d-flex px-3">
                        <button type="submit" :disabled="$v.$invalid" class="btn btn-accent ml-auto btn-md btn-block">
                          <i class="material-icons">file_copy</i> Publish </button>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- / Post Overview -->
                <!-- Post Overview -->
                
              </div>
            </div>
               </form>
         </div>
</template>

<script>
import {required, minLength} from "vuelidate/lib/validators"
import { VueEditor } from "vue2-editor";
    export default {
        mounted() {
            console.log('Component mounted.')
        }, 
        data(){
            return{
            title:'',
            content:'',
            }
        },
         validations:{
          title:{
            required,
            hardeep: minLength(4)
          },
          content:{
            required
          }
        },
        methods:{
            addPostfun(){
             axios.post('addPost',{
               'title': this.title,
               'content': this.content
             }).then((res)=>{
               console.log(res);
               alert(res);
             }).catch(function(error){
               console.log(error);
                 alert(error);
             }); 
            }
        }
    }
</script>
