<template>
  <div class="container">
    <div class="icon-line"></div>
      <a href="#"><div class="icon-logo-container"></div></a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
      <a class="navbar-brand" href="#"><img class="icon-logo" src="./assets/2716-991-max.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" :class="{ active: route === '/'}">
            <a class="nav-link" href="/">Startseite </a>
          </li>
          <li class="nav-item" :class="{ active: route === '/vpn'}">
            <a class="nav-link" href="vpn">VPN</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/downloads'}">
            <a class="nav-link" href="downloads">Downloads</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/jk2021'}">
            <a class="nav-link" href="jk2021">JK 2021</a>
          </li>
        </ul>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>



export default {
  name: 'App',
  components: {
  
  },
  data: function () {
    return { 
    lang: navigator.language || navigator.userLanguage,
    }
  },
  computed: {
    route: function() {
      return this.$route.path;
    }
	
  }
  
}

//app.lang = navigator.language || navigator.userLanguage; 
</script>

<style>
@import './assets/theme.css';
</style>
