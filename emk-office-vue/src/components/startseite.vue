<template>
<div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Jährliche Konferenz 2021 Startseite ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon far fa-calendar-alt'" :description="genLang == 'de' ? 'Zur Startseite Tagung Teil Schweiz' : 'Interner Bereich FR'" :colWidth="12" :url="'/jk2021'" :blank="false"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Interner Bereich ' : 'Interner Bereich FR'" :external="true" :icon="'front-icon fas fa-cloud'" :description="genLang == 'de' ? 'zum teilen von Inhalten mit Laien und Bezriken. ' : 'Interner Bereich FR' " :colWidth="6" :url="'https://cloud.methodisten.ch'" />
        <tile :title="genLang == 'de' ? 'Microsoft 365 ': 'Microsoft 365 '" :external="true" :icon="'front-icon fab fa-microsoft'" :description="genLang == 'de' ? 'Die Arbeitsumgebung für Mitarbeiter/innen der EMK.': 'FR'" :colWidth="6" :url="'https://portal.office.com'"/>
    </div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'VPN ' : 'VPN '" :external="false" :icon="'front-icon fas fa-exchange-alt'" :description="genLang == 'de' ? 'Per VPN mit der Zentralverwaltung verbinden. ' : 'FR' " :colWidth="6" :url="'/vpn'" />
        <tile :title="genLang == 'de' ? 'Downloads ': 'FR '" :external="false" :icon="'front-icon fas fa-download'" :description="genLang == 'de' ? 'Nützliche Werkzeuge zum Download ': 'FR'" :colWidth="6" :url="'/downloads'"/>
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
        }
    },
    computed: {

    },
}
</script>

<style  scoped>

</style>
