<template>
    <div class="adminpage">
        
        <h3 class="text-center">Tambah Data Bidang Profesi</h3>
        <div class="row">
        <!-- <h3 class="text-center">Edit Book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateBidangprofesi">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="bidangprofesi.nama">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div> -->
                        <div class="col-sm-12 ">
                            <div class="container_card">
                                <div class="card">
                                    <div class="form">
                                        <form @submit.prevent="updateBidangprofesi">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label class="sidetitle">Nama Pekerjaan</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" class="form-control" v-model="bidangprofesi.nama">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <input type="submit" value="Update" class="savedata">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                bidangprofesi: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/bidangProfesi/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.bidangprofesi = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateBidangprofesi() {
                this.axios
                    .post(`http://localhost:8000/api/bidangProfesi/update/${this.$route.params.id}`, this.bidangprofesi)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>