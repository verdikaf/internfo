<template>
    <div class="adminpage">
        <h3 class="text-center" style="color:white">Data Perusahaan</h3><br/>

        <table class="table table-bordered">
            <thead class="table-head">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody class="table-body">
            <tr v-for="book in perusahaan" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.nama }}</td>
                <td>{{ book.alamat }}</td>
                <td>{{ book.deskripsi }}</td>
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
                perusahaan: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/perusahaan')
                .then(response => {
                    this.perusahaan = response.data;
                });
        },
        methods: {
            
        }
    }
</script>