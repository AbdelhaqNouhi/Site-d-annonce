<template>
<div>
    <div class="container col-lg-8 col-sm-12 post">
        <div class="col-lg-12 col-sm-12">
            <div class="user">
                <div class="media">
                    <img
                        src="https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="rounded-circle"
                        alt=""
                    />
                </div>
                <div class="text">
                    <div class="media-body ml-3 mt-3">hhhhhhhhhh</div>
                    <div class="text-muted small">gggggggggg</div>
                </div>

                <form>
                    <div>
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
                            <input type="hidden" name="id" value="" />
                            <input class="dropdown-item" type="submit" name="delete" value="Delete"/>

                            <input type="hidden" name="title" value="" />
                            <input type="hidden" name="description" value="" />
                            <input type="hidden" name="url" value="" />
                            <input type="hidden" name="id" value="" />
                            <input type="submit" class="dropdown-item" name="edit" value="Update"/>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="text mt-4">
                <div class="titel">
                    <h4>Lorem ipsum dolor</h4>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
        <div>
            <img src="https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-100 img-post" alt="..." />
        </div>
    </div>
    <Footer />
</div>
</template>

<script>
import Cookies from "js-cookie";
import Nav from "../components/Nav";
import Footer from "../components/Footer";

const client_Id = Cookies.get("id");
export default {
    name: "Offre",
    components: {
        Nav,
        Footer,
    },
}
</script>

<style lang="scss" scoped>
.post{
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 0 0 2rem 0;
  background-color: #D1D5DB;	
  border-radius: 1rem;
    margin: 82px auto;
}
.user {
  display: flex;
  align-items: center;
  gap: 1rem;
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
  color: #000000;
  margin-left: 1rem;
}
.titel{
  color: #000000;
}
.spa{
    width: fit-content;
    margin: 1rem;
    padding: 0.5rem;
    color: #000000;
    background-color: #000000;
    border-radius: 0.5rem;  
    border: 1px solid #000000; 
}
</style>
