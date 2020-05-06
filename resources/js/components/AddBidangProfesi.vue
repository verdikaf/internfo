<template>
    <div>
        <h3 class="text-center">Add</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBidangprofesi">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" v-model="bidangprofesi.nama">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
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
        methods: {
            addBidangprofesi() {

                this.axios
                    .post('http://localhost:8000/api/bidangprofesi/add', this.bidangprofesi)
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