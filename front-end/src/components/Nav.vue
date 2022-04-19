<template>
    <nav>
        <div class="container-lg navbar">
            <div class="col-2 col-lg-4 col-md-1 logo">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-slate-900 rounded-full col-lg-2" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
            </div>
            <div>
                <router-link class="col-2" v-if="!clientId" to="/">Home</router-link>
            </div>
            <div>
                <router-link v-if="!clientId" to="Offre">Offre</router-link>
            </div>
            <div class="col-3 col-lg-4">
                <router-link v-if="!clientId" to="Demande">Demande</router-link>
            </div>

                <router-link to="Login" v-if="!clientId"><button>login</button></router-link>
                <router-link to="Sing_up" v-if="!clientId"><button>Regester</button></router-link>
                <button @click="logout" v-if="clientId" >logout</button>
        </div>
    </nav>
</template>

<script>
import Cookies from "js-cookie";
export default {
    name: "Nav",
    inject:["clientId","setClientId"],
    data(){
        return {
            clientId: this.clientId
        }
    },
    methods:{
        logout(){
            Cookies.remove("id");
            this.setClientId("");
            this.$router.replace("/")
        }
    },
    props:{
        title: String,
    },
}
</script>


<style lang="scss" scoped>
* {
    background-color: #4B5563;
    list-style: none;
    text-decoration: none;
}
.navbar {
    display: flex;
    justify-content: space-around
}
nav {
    h1{
        font-weight: bold;
        color: #406882;
        font-size: 1rem;
    }
    
    a {
        font-size: 12px;
        color: white;
    }
    a:hover{
        color: #111827;
    }
    button{
        font-size: 8px;
        width: 3rem;
        height: 1.5rem;
        border: none;
        border-radius: 0.5rem;
        color: white;
        background-color: #111827;
        @media only screen and(min-width: 992px){
          font-size: 12px;
          width: 4rem;
         }
    }
}
</style>