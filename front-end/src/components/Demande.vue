<template>
    <div>
        <div class="container col-9 hh">
             <div class="search_feild focus:w-3/5 ">
                <form action="">
                    <input class="search_input " id="search" type="search" name="search" onkeyup="yo()" >
                    <button type="submit" class="search_btn"><img src="../assets/search-svgrepo-com.svg" alt=""></button>
                </form>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Demande</button>
            </div>   
        </div>
        <form >
            <div class="container col-12 col-lg-8 post">
                <div class="col-12 col-lg-7">
                    <img
                        src="https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="w-100 P-0 img-post"
                        alt="..."
                    />
                </div>
                <div class="col-12 col-lg-5">
                    <div class="user">
                        <div class="media m-0">
                            <img
                                src="https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="rounded-circle"
                                alt=""
                            />
                        </div>
                        <div class="text">
                            <div class="media-body m-0">hhhhhhhhhh</div>
                            <div class="text-muted small">gggggggggg</div>
                        </div>

                        <form>
                            <div class="more">
                                <a data-bs-toggle="dropdown"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="bi bi-three-dots point"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                        /></svg
                                ></a>

                                <ul class="dropdown-menu">
                                    <input
                                        class="dropdown-item"
                                        type="submit"
                                        name="delete"
                                        value="Delete"
                                    />
                                    <input
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        type="submit"
                                        class="dropdown-item"
                                        name="edit"
                                        value="Update"
                                    />
                                </ul>
                            </div>
                        </form>
                    </div>

                    <div class="text mt-5">
                        <div class="titel">
                            <h4>Lorem ipsum dolor</h4>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quisquam ipsum laboriosam earum consequatur facere dolorum quis, architecto exercitationem nostrum nisi</p>
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Prix: 299 $</h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>

         ------------------------------------------------------------

        <div v-for="post in posts">
            <div class="container col-12 col-lg-8 post">
                <div class="col-12 col-lg-7">
                    <img
                        :src="post.image"
                        class="w-100 P-0 img-post"
                        alt="..."
                    />
                </div>
                <div class="col-12 col-lg-5">
                    <div class="user">
                        <div class="media m-0">
                            <img
                                src="https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="rounded-circle"
                                alt=""
                            />
                        </div>
                        <div class="text">
                            <div class="media-body m-0">hhhhhhhhhh</div>
                            <div class="text-muted small">{{ post.created_at }}</div>
                        </div>

                    
                            <div class="more">
                                <a data-bs-toggle="dropdown"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="bi bi-three-dots point"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                        /></svg
                                ></a>

                                <ul class="dropdown-menu">
                                    <button class="dropdown-item" name="delete" @click="DeletOffre(post.id)">Delete</button>
                                    <button class="dropdown-item" name="update" data-bs-toggle="modals" data-bs-target="#staticBackdrop">Update</button>
                                </ul>
                            </div>
                    </div>

                    <div class="text mt-5">
                        <div class="titel">
                            <h4>{{ post.title}}</h4>
                        </div>
                        <div>
                            <p>{{ post.descriptions }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                    <h2 class="modal-title" id="staticBackdropLabel">Update Demande</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <input type="text" name="title" placeholder="title" value="">
                    </div>
                    <div class="modal-body">
                        <input type="text" name="type" placeholder="type" value="">
                    </div>
                    <div class="modal-body">
                        <input type="text" name="description" placeholder="description" value="">
                    </div>
                    <div class="modal-body">
                        <input type="text" name="url" placeholder="URL:" value="">
                    </div>
                    <div class="modal-footer">
                        <input class="btn w-100" type="Submit" name="Goo" value="Goo">
                    </div>
            </div>
            </div>
            </div>
        </form>
    <Footer />
    <AddDemande />
</div>
</template>

<script>
import { computed } from "vue";
import Cookies from "js-cookie";
import Nav from "../components/Nav";
import Footer from "../components/Footer";
import AddDemande from "./AddDemande.vue";

const header = {
    'content-type': 'application/json',
     'Access-Control-Allow-Methods': '*', 
    'Access-Control-Allow-Origin': '*',
    'Access-Control-Allow-Headers': 'Content-Type', 
};

export default {
    name: "Offre",
    components: {
    Nav,
    Footer,
    AddDemande
},

    data () {
        return {
            posts: [],
            update: [],
        }
    },

    methods: {
        async GetOffre() {
            const res = await fetch ('http://localhost:8000/api/GetDemande', {
                method: 'GET',
                headers: header,
            });
            const data = await res.json();
            if(data){
                console.log(data);
                this.posts = data;
            }
            else{
                alert("please create an Demande");
            }
        },

        async GetOneDemande(id) {
            console.log(id);
            const res = await fetch ('http://localhost:8000/api/GetOneDemande/'+id, {
                method: 'GET',
                headers: header,
            });
            const data = await res.json();
            if(data){
                this.update = data;
                console.log(data);
            }
            else{
                alert("please create an Offre");
            }
        },
        
        async DeletOffre(id) {
            console.log(id);
            const res = await fetch ('http://localhost:8000/api/DeleteDemande/'+id, {
                method: 'DELETE',
                headers: header,
            });
        }
    },

    mounted () {
        this.GetOffre();
    },
};
</script>

<style lang="scss" scoped>
.post {
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 2rem;
    padding: 1rem;
    background-color: #d1d5db;
    border-radius: 0.5rem;
    margin: 82px auto;
     @media only screen and(min-width: 992px){
        display: flex;
        justify-content: center;
        flex-direction: row;
    }
    img{
         border-radius: 0.5rem;
    }
}
.user {
    display: flex;
    align-items: center;
    gap: 1rem;
    form{
        margin-left: auto;
    }
}
.media {
    margin-left: 1rem;
    margin-top: 1rem;
    img {
        width: 3rem;
        height: 3rem;
    }
}
.text {
    display: flex;
    flex-direction: column;
    color: #000000;
    // margin-left: 1rem;
}
.titel {
    color: #000000;
}
.spa {
    width: fit-content;
    margin: 1rem;
    padding: 0.5rem;
    color: #000000;
    background-color: #000000;
    border-radius: 0.5rem;
    border: 1px solid #000000;
}
.more {
    width: 2rem;
    margin-left: auto
}
.hh {
    padding: 0 5rem;
    display: flex;
    justify-content: center;
    margin: 2rem auto;
     @media only screen and(min-width: 992px){
        justify-content: space-between;    
    }
    input{
        height: 2rem;
        width: 15rem;
        border: none;
        border-radius: 0.5rem;
        display: none;
        @media only screen and(min-width: 992px){
          display: block;
        }
        
    }
button {
    width: 15rem;
    height: 2.5rem;
    font-size: 14px;
    align-items: center;
    border: none;
    border-radius: 0.5rem;
    color: white;
    background-color: #111827;
}
}
.demende {
    width: 25em;
    height: 2rem;
    border-radius: 0.5rem;
    font-size: 14px;
    align-items: center;
    border: none;
    color: white;
    background-color: #111827;
    margin: 2rem auto;   
}
.search_input{
    position: absolute;
    width: 90% !important;
    height: 35px;
    line-height: 42.5px;
    outline: none;
    border-radius: 20px;
    padding: 0 20px;
    left: 0%;
    transition: 1s;
    background-color: #cbd5e1;
    
}
.search_input:hover{
    width: 90%;
    left: 0;
    display: block;
    border: 1px solid;
    background-color: #d1d5db;
    border: none;

    /* border: 0; */
}

.search_feild{
    position: relative;
    display: flex;
    margin-top: 5px;
    transition: 0.6s;
    width: 3%;
}

.search_feild:hover{
    width: 25%;
}
.search_btn{
    width: 2rem !important;
    background-color: #d1d5db !important;
    position: absolute;
    right:10%;
    transition: 0.3s;
}

.res_head{
    display: flex;
    margin-top: 10px;
}
.search_btn img{
    right: 0;
    margin-top: 5px;
    margin-left: 4px;
    width: 20px;
    height: 20px;
}
</style>