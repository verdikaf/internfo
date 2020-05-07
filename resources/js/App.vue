<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
            
            <router-link to="/default" class="nav-item nav-link"><h1 class="headlogo">Internfo</h1></router-link>
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            
          <li class="nav-item">
            <router-link to="/bidangprofesi" class="nav-item nav-link">Bidang Profesi</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/pelamar" class="nav-item nav-link">Pemagang</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/perusahaan" class="nav-item nav-link">Perusahaan</router-link>
          </li>
          <li class="nav-item">
              <a href="#" @click.prevent="logout" type="button" class="btn btn-logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>
<script>
    export default {
        name: "Logout",
        methods: {
            logout() {
                axios.post('/logout')
                    .catch(error => {
                       window.location.href = '/login';
                    });
            }
        }
    }
</script>