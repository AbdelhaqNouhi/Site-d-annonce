<template>
<div class="body">
    <div class="container-lg mt-4 d-flex justify-content-between">
        <div class="col-md-4">
            <h1 class="text-info font-bold">Welcome Back !!!!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus tenetur accusantium laborum cum, perferendis officia nobis aut nemo modi a quasi praesentium! Ipsum possimus praesentium pariatur cupiditate amet natus.</p>
        </div>
    </div>
        <div class="col-md-4">
        <iframe src="https://embed.lottiefiles.com/animation/102642"></iframe>
        </div>

</div>
</template>

<script>
import Nav from "../components/Nav";
import Login from "../components/Login";
import Offre from '../components/Offre.vue';
import Demande from '../components/Demande.vue';
// import Footer from "../components/Footer.vue";

export default {
    name: "App",
    components: {
    Nav,
    Login,
    Offre,
    Demande
    // Footer
}, 
}
</script>
<style scoped>
.body{
    display: flex;
    flex-direction: column;;
}
</style>
