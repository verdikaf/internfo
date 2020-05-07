<template>
    <div class="adminpage">
        <center>
        <h1 class="text-center" style="color:white">Bidang Profesi</h1>
        <br/>
        <router-link to="/add" class="btn btn-logout2 text-center" style="text-decoration:none" >Tambah</router-link>
        </center>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr class="table-head">
                <th>ID</th>
                <th>Name</th>
                <th class="col-15">Actions</th>
            </tr>
            </thead>
            <tbody class="table-body">
            <tr v-for="book in bidang_profesi" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.nama }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: book.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-info" @click="deleteBook(book.id)">Delete</button>
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