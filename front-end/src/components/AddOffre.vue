<template>
<div>
    <form @submit.prevent="AddOffre">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                    <h2 class= "modal-title" id="staticBackdropLabel">Add Offre</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="title" placeholder="title" v-model="form.title">
                </div>
                <div class="modal-body">
                    <input type="text" name="type" placeholder="type" v-model="form.type">
                </div>
                <div class="modal-body">
                    <input type="text" name="description" placeholder="description" v-model="form.descriptions">
                </div>
                <div class="modal-body">
                    <input type="text" name="url" placeholder="URL:" v-model="form.image">
                </div>
                <div class="modal-body">
                    <input type="text" name="prix" placeholder="prix" v-model="form.prix">
                </div>
                <div class="modal-footer">
                    <input class="btn w-100" type="Submit" name="Goo" value="Goo" data-bs-dismiss="modal">
                </div>
            </div>
            </div>
            </div>
        </form>
    </div>
</template>

<script>
import Cookies from "js-cookie";

const header = {
    'content-type': 'application/json',
     'Access-Control-Allow-Methods': '*', 
    'Access-Control-Allow-Origin': 'POST',
    'Access-Control-Allow-Headers': 'Content-Type', 
};

const User_id = Cookies.get("id");
    export default {
        name: "Add",
         data () {
            return {
                form: {title: "", type: "", descriptions: "", image: "", prix: "", user_id: User_id},
            }
        },
         methods: {
            async AddOffre() {
                console.log(User_id);
                const res = await fetch ('http://localhost:8000/api/AddOffre', {
                    method: 'POST',
                    headers: header,
                    body: JSON.stringify(this.form),
                });
                const data = await res.json();
                if(data){
                    this.posts.push(data);
                }else{
                    console.log("error");
                }
            }
        },
    }
</script>

<style lang="scss" scop>

.modal-content{
background-color: #D1D5DB;
height: 35rem;
}
.modal-body input{
  width: 100%;
}
.modal-title{
    color: #000000;
}
.modal-body input{
  padding: 1rem;
  border-radius: 0.5rem;
  border: #d1d5db 1px solid;
}
.btn{
    color: #ffffff;
  background-color: #111827;
}
  
  input{
    color: #111827;
    border-radius: 0.5rem;
    height: 2.5rem !important;
  }

</style>