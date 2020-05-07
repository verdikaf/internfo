<template>
    <div class="adminpage" >
        <center>
        <p class="headtitle">Internfo</p>
        <br/>
        <p  class="headsubtitle">Welcome to Admin Page</p>
        <router-link to="/bidangprofesi" class="btn btn-dashboard text-center" style="text-decoration:none" >Bidang Profesi</router-link> 
        <router-link to="/pelamar" class="btn btn-dashboard text-center" style="text-decoration:none" >Pelamar</router-link> 
        <router-link to="/perusahaan" class="btn btn-dashboard text-center" style="text-decoration:none" >Perusahaan</router-link>
        </center>

        
    </div>
</template>

<script>
    export default {
        data() {
            return {
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