<template>
<div>
    <div class="hh">
        <div class="col-11 col-lg-6 p-0 login">
            <form @submit.prevent="login">
                <h1>Sing_in</h1>
                <label>E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" required v-model="email">
                <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required v-model="password">
                    <input class="botton" type="submit" name="reserve" value="Login">        
            </form>
        </div>
    </div>
    <Footer />
</div>
</template>

<script>
import { ref } from "vue";;
import Cookies from 'js-cookie';
import Footer from './Footer.vue';


const header = {
    'content-type': 'application/json',
     'Access-Control-Allow-Methods': 'POST', 
    'Access-Control-Allow-Origin': '*',
    'Access-Control-Allow-Headers': 'Content-Type', 
};

export default {
    name: "Login",
    inject:["setUser_id"],
    components: {
        Footer,
    },
    data() {
        return {
            email: "",
            password: "",
        }
    },
    methods: {
        async login() {
            const res = await fetch('http://localhost:8000/api/login', {
                method: 'POST',
                headers: header,
                body : JSON.stringify({
                    email: this.email,
                    password: this.password,
                }),
            });
            const data = await res.json();
            if (data!=false) {
                this.setUser_id(data.id);
                Cookies.set('id', data.id);
                this.$router.push('/Offre')
                console.log(data.id);
            }else{
                alert("Login failed");
            }
           
        }
    },
};
</script>

<style  lang="scss" scoped>

.hh{
    display: flex;
    justify-content: center;
    margin: 90px auto;
    h1{
        font-size: 1.5rem;
        margin-bottom:  2rem;
    }
}

form{
    padding: 2rem;
    height: 100%;
    width: 100%;
    border-radius: 0.5rem;
    background-color: #D1D5DB;
}
    input{
        color: #000000;
        border-radius: 0.5rem;
        border: none;
        width: 100%;
        margin: 1rem 0;
        padding: 0.5rem 0.5rem;
        font-size: 14px;
    }

.botton{
    color: white;
    background-color: #111827;
}
</style>