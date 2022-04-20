<template>
    <div>
        <Nav />
        <router-view />
    </div>
</template>
<script>
import Nav from "./components/Nav.vue";
import {computed} from "vue";
import Cookies from "js-cookie";
export default{
    data(){
        return {
            User_id:""
        }
    },
    provide(){
        return {
            User_id: computed(() => this.User_id),
            setUser_id: this.setUser_id
        }
    },
    mounted(){
        this.User_id = Cookies.get("id")
    },
    methods:{
        setUser_id(id){
            this.User_id = id;
        }
    },
    components:{
        Nav,
    }
}

</script>


<style lang="scss" scoped>
</style>
