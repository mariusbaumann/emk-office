<template>
<div>
 <!-- <div class="row mb-3">
    <tile @click.native="desktop = true, laptop = false, mac = false, ipad = false" :title="genLang == 'de' ? 'Windows Desktop ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-tv'" :description="genLang == 'de' ? 'Falls Sie über einen Desktop-Computer (Kasten mit angeschossenem Bildschirm) teilnehmen möchten klicken Sie bitte hier.' : 'Interner Bereich FR'" :colWidth="3" :active="desktop"/>
  </div>
  <hr>
  <div v-if="desktop">
  <p style="color: red"><b>Hinweis:</b> Ein Desktop-Computer verfügt nicht über ein eingebautes Mikrofon und hat keine Webcam (Internet-Kamera). Bitte stellen Sie also sicher, dass Sie eine externe USB-Webcam (Internet-Kamera, die über USB angeschlossen wird), sowie ein Mikrofon an ihrem Computer angeschlossen haben.</p> -->


<h2>1. Öffnen des Wahltool</h2>

<p>Öffnen Sie das Wahltool indem Sie auf diesen Knopf klicken: <a class="btn btn-primary" href="https://google.ch" target="_blank">Wahltool öffnen <i class="fas fa-external-link-alt"></i></a></p>

<h2>2. Einloggen</h2>

<p>Vor der Abstimmung erhalten Sie eine E-Mail mit ihrer Persönlichen ID-Nummer. Geben Sie diese ins ID-Feld ein.</p>
<p>Ebenso geben Sie das Passwort aus der E-Mail ins Passwort-Feld ein.</p>

<h2>3. Warten</h2>
<p>Nun sind Sie auf der Startseite des Abstimmungstools. Sie müssen nun nichts mer unternehmen, biss die Abstimmung startet. Lassen Sie das Fenster im Hintergrund geöffnet.</p>

<h2>3. Abstimmen</h2>
<p>Sobald eine Abstimmung stattfindet wird Sie in diesem Fenster automatisch angezeigt.</p>
<p>Beantworten Sie nun alle gestellten Fragen oder wählen Sie die gefragten Personen.</p>
<p>Klicken Sie auf weiter.</p>
<p>Überprüfen Sie die Auswahl.</p>
<p>Klicken Sie auf "Stimme verbindlich abgeben" wenn sie zufrieden sind, oder auf Korrigieren, sollte etwas falsch sein. </p>
<p>Wenn Sie die Stimme verbindlich abgegeben haben können Sie diese nicht mehr ändern. </p>


  </div>
<!--</div>-->
</template>

<script>
import {store} from "../store.js";
//import tile from "./tile.vue"

export default {
    components: {
       // tile,
    },
    name: "jkAnleitungWahl",
    data() {
        return {
            state: store.state,
            genLang: store.getLang(),
            phone: false,
            desktop: true,
            laptop: false,
            mac: false,
            ipad: false,
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
