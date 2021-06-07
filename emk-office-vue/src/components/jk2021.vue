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
            <a class="nav-link" href="/">Übersicht</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/jk2021/jksonntag'}">
            <a class="nav-link" href="/jk2021/jksonntag">Anmeldung JK-Sonntag</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/downloads'}">
            <a class="nav-link" href="/jk2021/programm">Programm</a>
          </li>
          <li class="nav-item" :class="{ active: route === '/'}">
            <a class="nav-link" href="jk2021">Downloads</a>
          </li>
           </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
           <button @click="phone = !phone"  class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fas fa-phone mr-1"></i> Telefon</button>
            </li>
        </ul>
       
      </div>
    </nav>
    <div v-if="phone" class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Telefon-Nummer' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-phone'" :description="genLang == 'de' ? '' : 'Interner Bereich FR'" :colWidth="12" url="''" :bigmessage="'+41 xx xx xx'"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Anmeldung JK-Sonntag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon far fa-calendar-alt'" :description="genLang == 'de' ? 'Melden Sie sich zur JK2021 an. Die Plätze sind begrenzt!' : 'Interner Bereich FR'" :colWidth="12" url="''" :warningBadge="'Anmeldestart: 14.06.2021'"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Interner Bereich ' : 'Interner Bereich FR'" :external="true" :icon="'front-icon fas fa-cloud'" :description="genLang == 'de' ? 'zum teilen von Inhalten mit Laien und Bezriken. ' : 'Interner Bereich FR' " :colWidth="6" :url="'https://cloud.methodisten.ch'" />
        <tile :title="genLang == 'de' ? 'Microsoft 365 ': 'Microsoft 365 '" :external="true" :icon="'front-icon fab fa-microsoft'" :description="genLang == 'de' ? 'Die Arbeitsumgebung für Mitarbeiter/innen der EMK.': 'FR'" :colWidth="6" :url="'https://portal.office.com'"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'VPN ' : 'VPN '" :external="false" :icon="'front-icon fas fa-exchange-alt'" :description="genLang == 'de' ? 'Per VPN mit der Zentralverwaltung verbinden. ' : 'FR' " :colWidth="6" :url="'https://cloud.methodisten.ch'" />
        <tile :title="genLang == 'de' ? 'Downloads ': 'FR '" :external="false" :icon="'front-icon fas fa-download'" :description="genLang == 'de' ? 'Nützliche Werkzeuge zum Download ': 'FR'" :colWidth="6" :url="''"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Cloud-Apps ' : 'VPN '" :external="true" :icon="'front-icon fas fa-server'" :description="genLang == 'de' ? 'Auf im Data-Cencter betriebene Applikationen zugreifen. ' : 'FR' " :colWidth="6" :url="'https://emk.flyingcloud.ch'" :warningBadge="'Beta'" />
    </div> 
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
