<template>
<div>
    <div class="hh">
        <div class="col-11 col-lg-6 p-0 sing_up">
            <form @submit.prevent="register">
                <h1>Sing_up</h1>
                <label>Nom</label>
                <input required type="text" name="nom" placeholder="Nom" v-model="nom">
                <label>Prenome</label>
                <input required type="text" name="prenome" placeholder="Prenome" v-model="prenome">
                <label>E-mail</label>
                <input required type="text" name="email" placeholder="E-mail" v-model="email">
                <label>Password</label>
                <input required type="password" name="password" placeholder="Password" v-model="password">
                <input class="botton" type="submit" name="regester" value="Regester">
            </form>
        </div>
    </div>
    <Footer />
</div>
</template>

<script>
// import { METHODS } from "http";
import Nav from "../components/Nav";
import Footer from './Footer.vue';
  
const UserId = Cookies.get('id');
const header = {
    'content-type': 'application/json',
     'Access-Control-Allow-Methods': 'POST', 
    'Access-Control-Allow-Origin': '*',
    'Access-Control-Allow-Headers': 'Content-Type', 
};
 
export default {
    name: "Sing_up",
    components: {
        Nav,
        Footer,
    },
    data() {
        return {
            nom: "",
            prenom: "",
            email: "",
            password: "",
            id: UserId,
        }
    },
    methods: {
        register() {
            fetch('http://localhost:8000/api/register', {
                method: 'POST',
                headers: header,
                body : JSON.stringify({
                    nom: this.nom,
                    prenome: this.prenome,
                    email: this.email,
                    password: this.password,
                }),
            }).then((res) => res.json())
                console.log(this.nom, this.prenome, this.email, this.password);
        }
    }
}
</script>

<style  lang="scss" scoped>
.hh{
    display: flex;
    justify-content: center;
    margin: 82px auto;
}

form{
    padding: 2rem;
    height: 100%;
    width: 100%;
    border-radius: 0.5rem;
    background-color: #D1D5DB;

    // width: 5rem;
   h1{
        font-size: 1.5rem;
        margin-bottom:  2rem;
    }
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