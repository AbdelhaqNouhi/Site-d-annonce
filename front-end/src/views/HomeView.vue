<template>
<div>
    <div class="container home">
        <div class="about">
            <div>
                <h1>Lorem ipsum dolor sit</h1>
            </div>
            <div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae ipsa eveniet expedita, quod repudiandae quam, enim neque maxime, accusantium labore eaque facere culpa ipsum inventore nostrum. Quisquam quos voluptas sit.</p>
            </div>
            <button>Goo</button>
        </div>
        <div>
            <lottie-player
                autoplay
                loop
                mode="normal"
                src="https://assets8.lottiefiles.com/packages/lf20_1a8dx7zj.json"
                style="width: 450px; height: 400px;"
                >
            </lottie-player>
        </div>
    </div>
    <Footer />
</div>
</template>

<script>
import lottiefiles from 'lottie-web';
import Nav from "../components/Nav";
import Login from "../components/Login";
import Offre from '../components/Offre.vue';
import Demande from '../components/Demande.vue';
import Footer from "../components/Footer.vue";

export default {
    name: "App",
    components: {
    Nav,
    Login,
    Offre,
    Demande,
    Footer,
    lottiefiles
}, 
}
</script>
<style lang="scss" scoped>
.home{
    margin: 5rem auto;
    display: flex;
    gap: 4rem;
    justify-content: space-around;
}
.about{
    display: flex;
    flex-direction: column;
    gap: 3rem;

    button{
        font-size: 14px;
        width: 8rem;
        height: 2rem;
        border: none;
        border-radius: 0.5rem;
        color: white;
        background-color: #111827;
    }
}
</style>
