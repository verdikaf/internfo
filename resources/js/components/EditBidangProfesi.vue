<template>
    <div>
        <h3 class="text-center">Edit Book</h3>
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
                .get(`http://localhost:8000/api/bidangprofesi/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.bidangprofesi = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateBidangprofesi() {
                this.axios
                    .post(`http://localhost:8000/api/bidangprofesi/update/${this.$route.params.id}`, this.bidangprofesi)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>