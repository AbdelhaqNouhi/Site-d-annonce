<template>
<div>
    <div class="hh">
        <div class="col-11 col-lg-6 p-0 login">
            <form>
            <h1>Sing_in</h1>
                <label>E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" v-model="reference_client">
                <label>Password</label>
                    <input type="text" name="password" placeholder="Password" v-model="reference_client">
                    <input class="botton" type="submit" name="reserve" value="Login" @click.prevent="login">        
            </form>
        </div>
    </div>
    <Footer />
</div>
</template>

<script>
import { ref } from "vue";
import swal from 'sweetalert';
import Cookies from 'js-cookie';
import Footer from './Footer.vue';

export default {
    name: "Login",
    inject:["setClientId"],
    components: {
        Footer,
    },
    data() {
        return {
            reference_client: "",
            reference_admin: ""
        };
    },
    methods: {
        login_client() {
            if(this.reference_client != ""){
            fetch("http://localhost/gestion-rndv/back-end/controllers/C-loginClient.php", {
                method: "post",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    reference_client: this.reference_client
                })
            })
            .then((res) => res.json())
            .then((data) => {
            if ((this.reference_client == data.reference_client.reference_client)) {
                Cookies.set('id',data.reference_client.id)
                this.setClientId(data.reference_client.id);
                console.log(data.reference_client.reference_client);
                this.$router.push('/Reservation');
            }else{
                swal({
                  title: "Reference incorrect",
                  text: "plz membre your reference",
                  icon: "error",
                  button: "ok",
               });
            }
            });
            }
        },
        login_admin() {
            if(this.reference_admin != ""){
            fetch("http://localhost/gestion-rndv/back-end/controllers/C-login_admin.php", {
                method: "post",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    reference_admin: this.reference_admin,
                })
            })
            .then((res) => res.json())
            .then((data) => {
            if ((this.reference_admin == data.reference_admin.reference_admin)) {
                // console.log(data.reference_admin.reference_admin);
                // console.log(reference_admin);
                Cookies.set('admin_id',data.reference_admin.id);
                this.setClientId(data.reference_admin.id);
                this.$router.push('/Dashboardadmin');
            }else{
                swal({
                  title: "Reference incorrect",
                  text: "plz membre your reference",
                  icon: "error",
                  button: "ok",
               });
            }
            });
            }
        },
    }
};
</script>

<style  lang="scss" scoped>

.hh{
    display: flex;
    justify-content: center;
    margin: 90px 0;
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