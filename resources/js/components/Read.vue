<template>
  <div>
   <div class="row">
      <div class="col-md-12">
        <br>
        <br>
        <div class="row">
          <div class="col-md-10">
            <h4>Persons</h4>
          </div>
          <div class="col-md-2">
            <router-link class="btn btn-primary w-100" to="/create">+ Tambah</router-link>
          </div>
        </div>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="bidang_profesi in bidang_profesis" :key="bidang_profesi.id">
              <td style="width:40%">{{bidang_profesi.nama}}</td>
              <td style="width:20%">
                <router-link class="btn btn-warning" :to="'/detail/'+bidang_profesi.id">Update</router-link>
                <button class="btn btn-danger" v-on:click="deleteData(bidang_profesi.id)">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      bidang_profesis: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      axios.get("http://localhost:8000/admin/api/bidangProfesi").then(response => {
        this.bidang_profesis = response.data;
      });
    },
    deleteData(id) {
      axios.delete("http://localhost:8000/admin/api/bidangProfesi/" + id).then(response => {
        this.loadData();
      });
    }
  }
};
</script>
