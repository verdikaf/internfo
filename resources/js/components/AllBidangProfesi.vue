<template>
    <div>
        <h3 class="text-center">All Books</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="bidangprofesi in bidang_profesi" :key="bidangprofesi.id">
                <td>{{ bidangprofesi.nama }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: bidangprofesi.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBidangprofesi(bidangprofesi.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
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
                .get('http://localhost:8000/api/bidang_profesi')
                .then(response => {
                    this.bidang_profesi = response.data;
                });
        },
        methods: {
            deleteBidangprofesi(id) {
                this.axios
                    .delete(`http://localhost:8000/api/bidangprofesi/delete/${id}`)
                    .then(response => {
                        let i = this.bidang_profesi.map(item => item.id).indexOf(id); // find index of your object
                        this.bidang_profesi.splice(i, 1)
                    });
            }
        }
    }
</script>