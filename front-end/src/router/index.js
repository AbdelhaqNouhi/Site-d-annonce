import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import Login from "../components/Login.vue";
import Sing_up from "../components/Sing_up.vue";
import Offre from "../components/Offre.vue";
import Demande from "../components/Demande.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path: "/Login",
        name: "Login",
        component: Login,
    },
    {
        path: "/sing_up",
        name: "Sing_up",
        component: Sing_up,
    },
    {
        path: "/Offre",
        name: "Offre",
        component: Offre,
    },
    {
        path: "/Demande",
        name: "Demande",
        component: Demande,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
