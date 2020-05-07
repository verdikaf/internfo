<template>
    <div class="adminpage">
        <center>
        <h1 class="text-center" style="color:white">Data Pelamar</h1>
        <br/>
        </center>

        <table class="table table-bordered">
            <thead class="table-head">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody class="table-body">
            <tr v-for="book in pelamar" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.nama }}</td>
                <td>{{ book.alamat }}</td>
                <td>{{ book.tempat_lahir }} {{book.tgl_lahir}}</td>
                <td>{{ book.email }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pelamar: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/pelamar')
                .then(response => {
                    this.pelamar = response.data;
                });
        },
        methods: {
            
        }
    }
</script>