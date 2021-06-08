<template>
<div>
  <div class="row mb-3">
		<tile :title="genLang == 'de' ? 'Anmeldung JK-Sonntag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-file-signature'" :description="genLang == 'de' ? 'Melden Sie sich zur JK2021 an. Die Plätze sind begrenzt!' : 'Interner Bereich FR'" :colWidth="12" url="jk2021/anmeldung" :warningBadge="'Anmeldestart: 14.06.2021'"/>
  </div>
  <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Anleitungen Zoomteilnahme ' : 'Documents JK 2021'" :external="false" :icon="'front-icon fas fa-desktop'" :description="genLang == 'de' ? 'Hier finden Sie Anleitungen zur Einrichtung und Teilnahme des Zoom' : 'Vous trouverez ici les documents les plus importants dans leur dernière version.'" :colWidth="6" :url="'/jk2021/anleitung'" />
    <tile :title="genLang == 'de' ? 'Programm ' : 'Accès à le domain interne'" :external="false" :icon="'front-icon far fa-calendar-alt'" :description="genLang == 'de' ? 'Hier finden Sie den aktuellen Ablauf der Jährlichen Konferenz' : 'Demander l\'accès à des documents'" :colWidth="6" :url="'/jk2021/programm'" />
  </div>
  <hr>
	<h4 v-if="genLang == 'de'">Weitere Informationen</h4>
	<h4 v-if="genLang == 'fr'">Plus d'informations</h4>
	<p v-if="genLang == 'de'">Hier finden Sie weitere Informationen zur Jährlichen Konferenz.</p> 
	<p v-if="genLang == 'fr'">Vous trouverez ici de plus amples informations sur la conférence annuelle.</p> 

	<div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Dokumente JK 2021 ' : 'Documents JK 2021'" :external="true" :icon="'front-icon fas fa-file'" :description="genLang == 'de' ? 'Hier finden Sie die wichtisten Dokumennte in der aktuellsten Fassung.' : 'Vous trouverez ici les documents les plus importants dans leur dernière version.'" :colWidth="6" :url="genLang == 'de' ? 'https://cloud.methodisten.ch/f/466921' : 'https://cloud.methodisten.ch/f/466906'" />
    <tile :title="genLang == 'de' ? 'Zugang interner Bereich ' : 'Accès à le domain interne'" :external="true" :icon="'front-icon fas fa-lock-open'" :description="genLang == 'de' ? 'Zugang zu den Dokumenten beantragen.' : 'Demander l\'accès à des documents'" :colWidth="6" :url="'https://anmeldung.methodisten.ch/registerform.php'" />
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
    name: "jkStartseite",
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
