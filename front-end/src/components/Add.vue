<template>
    <div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                    <h2 class="modal-title" id="staticBackdropLabel">Add Post</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="title" placeholder="title">
                </div>
                <div class="modal-body">
                    <input type="text" name="description" placeholder="description">
                </div>
                <div class="modal-body">
                    <input type="text" name="url" placeholder="URL:">
                </div>
                <div class="modal-footer">
                    <input class="btn w-100" type="Submit" name="Goo" value="Goo">
                </div>
            </div>
            </div>
            </div>
    </div>
</template>

<script lang="scss" scoped>
    export default {
        name: "Add",
    }
</script>

<style>
    .modal-content{
    background-color: #D1D5DB;
    height: 30rem;
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
    color: #d1d5db;
    border-radius: 0.5rem;
  }

</style>