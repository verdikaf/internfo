<template>
    <div class="adminpage" id="mainadmin">
        <center>
            <img :src="internfo" style="width:100%;" alt="">
        <p class="headtitle">Internfo</p>
        <br><br><br><br>
        <p  class="headsubtitle">Welcome to Admin Page</p>
        <router-link to="/bidangprofesi" class="btn btn-dashboard text-center" style="text-decoration:none" >Bidang Profesi</router-link> 
        <router-link to="/pelamar" class="btn btn-dashboard text-center" style="text-decoration:none" >Pelamar</router-link> 
        <router-link to="/perusahaan" class="btn btn-dashboard text-center" style="text-decoration:none" >Perusahaan</router-link>
        </center>

        
    </div>
</template>

<script>
    export default { 
        name: 'mainadmin',
        components:{
            internfo: '/assets/images/logo/Inferno_type_whi.png'
        }
        }
</script>

<script>
    export default {
       
        data() {
            return {
                //internfo: 'assets/images/logo/Inferno_type_whi.png',
                bidang_profesi: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/bidangProfesi')
                .then(response => {
                    this.bidang_profesi = response.data;
                });
        },
        methods: {
            deleteBook(id) {
                this.axios
                    .delete(`http://localhost:8000/api/bidangProfesi/delete/${id}`)
                    .then(response => {
                        let i = this.bidang_profesi.map(item => item.id).indexOf(id); // find index of your object
                        this.bidang_profesi.splice(i, 1)
                    });
            }
        }
    }
</script>