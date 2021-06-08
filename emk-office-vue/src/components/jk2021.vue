<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 ">
      <a class="navbar-brand" href="#">Jährliche Konferenz</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" :class="{ active: route === '/jk2021'}">
            <a class="nav-link" href="/jk2021">Übersicht</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/jk2021/anleitung'}">
            <a class="nav-link" href="/jk2021/anleitung">Anleitungen (Zoom)</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/jk2021/anmeldung'}">
            <a class="nav-link" href="/jk2021/anmeldung">Anmeldung JK-Sonntag</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/downloads'}">
            <a class="nav-link" href="/jk2021/programm">Programm</a>
          </li>
          
           </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
           <button @click="phone = !phone"  class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fas fa-phone mr-1"></i> {{ genLang == 'de' ? 'Hilfe-Telefon' : 'Telephone d\'aide'}}</button>
            </li>
        </ul>
       
      </div>
    </nav>
    <div v-if="phone" class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Telefon-Nummer' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-phone'" :description="genLang == 'de' ? '' : 'Interner Bereich FR'" :colWidth="12" url="''" :bigmessage="'+41 xx xx xx'"/>
    </div>
    <router-view></router-view>
</div>

</template>

<script>
import {store} from "../store.js";
import tile from "./tile.vue"

export default {
    components: {
        tile,
    },
    name: "startseite",
    data() {
        return {
            state: store.state,
            genLang: store.getLang(),
            phone: false,
        }
    },
    computed: {
        route: function() {
      return this.$route.path;
    }
    },
}
</script>

<style  scoped>

</style>
