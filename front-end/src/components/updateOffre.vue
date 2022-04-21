<template>
<div>
    <form>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                    <h2 class="modal-title" id="staticBackdropLabel">Update Post</h2>
                    <button @click="kell=false" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="title" placeholder="title">
                </div>
                <div class="modal-body">
                    <input type="text" name="type" placeholder="type">
                </div>
                <div class="modal-body">
                    <input type="text" name="description" placeholder="description">
                </div>
                <div class="modal-body">
                    <input type="text" name="url" placeholder="URL:">
                </div>
                <div class="modal-body">
                    <input type="text" name="prix" placeholder="prix">
                </div>
                <div class="modal-footer">
                    <input class="btn w-100" type="Submit" name="Goo" value="Goo">
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
        name: "UpdateOffre",

        data() {
            return {
                kell: false,
            };
        },
    };
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