<template>
    <div class="adminpage">
        <h3 class="text-center">Tambah Data Bidang Profesi</h3>
        <div class="row">
            <!-- <div class="col-md-12">
                <form @submit.prevent="addBidangprofesi">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" v-model="bidangprofesi.nama">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div> -->
                        <div class="col-sm-12 ">
                            <div class="container_card">
                                <div class="card">
                                    <div class="form">
                                        <form @submit.prevent="addBidangprofesi">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label class="sidetitle">Nama Pekerjaan</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" class="form-control" v-model="bidangprofesi.nama">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <input type="submit" value="Add Data" class="savedata">
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
        methods: {
            addBidangprofesi() {

                this.axios
                    .post('http://localhost:8000/api/bidangProfesi/add', this.bidangprofesi)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>