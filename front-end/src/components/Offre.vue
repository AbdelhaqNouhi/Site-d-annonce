<template>
    <div>
        <div class="container hh">
            <div>
                <input type="text" placeholder="Search">
            </div>
            
        </div>
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
                    <div>
                        <button class="demende">Demende Now</button>
                    </div>
                </div>
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
    data() {
        return {
            form: { date: "", creneau: "", sujet: "", client_Id: client_Id },
            lists: [],
            id: null,
            times: [
                { date: "10 h à 10:30h" },
                { date: "11 h à 11:30h" },
                { date: "14 h à 14:30h" },
                { date: "15 h à 15:30h" },
                { date: "16 h à 16:30h" },
            ],
            time_creneau: [],
        };
    },
    methods: {
        filter_ceeneau() {},

        Get_rdv() {
            this.id = Cookies.get("id");
            // console.log(this.id);
            fetch(
                `http://localhost/gestion-rndv/back-end/controllers/C-lire_rdv.php?id=${this.id}`
            )
                .then((res) => res.json())
                .then((data) => {
                    this.lists = data;
                });
        },
        Reserve() {
            fetch(
                `http://localhost/gestion-rndv/back-end/controllers/C-creer_rdv.php`,
                {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(this.form),
                }
            ).then((res) => res.json());
        },
        Delete(id) {
            fetch(
                `http://localhost/gestion-rndv/back-end/controllers/C-supprimer_rdv.php`,
                {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ id: id }),
                }
            ).then((res) => res.json());
        },
        async Get_date_rdv() {
            let date = this.form.date;
            const res = await fetch(
                `http://localhost/gestion-rndv/back-end/controllers/C-lire_time_rdv.php?date=${date}`
            );
            const result = await res.json();
            if (result != "errore") {
                this.time_creneau = result.map((r) => r.creneau);
                this.times = this.times.filter(
                    (i) => !this.time_creneau.includes(i.date)
                );
            }
        },
    },
    mounted() {
        this.Get_rdv();
        this.Get_date_rdv();
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
    height: 2rem;
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

.modal-content{
    background-color: #D1D5DB;
    height: 30rem;
}
.modal-body input{
  width: 100%;
}
.modal-title{
    color: #000000;
}

.modal-body input{
  padding: 1rem;
  border-radius: 0.5rem;
  border: #d1d5db 1px solid;
}
.modal-footer{

  :hover{
    color: #d1d5db;
  }
  
  input{
    color: #d1d5db;
    background-color: #000000;
    border-radius: 0.5rem;
    border: #000000 1px solid;
  }
}
</style>
