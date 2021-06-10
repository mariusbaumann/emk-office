<template>
<div>
  <p>Klicken Sie auf einen der Tage um eine Detaildarstellung zu erhalten:</p>
  <div class="row mb-3">
    <tile @click.native="doo = true, fr = false, sa = false, so = false" :title="genLang == 'de' ? 'Donnerstag ' : 'Jeudi'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Donnerstag' : 'Vue detail de Jeudi'" :colWidth="3" :active="doo"/>
    <tile @click.native="doo = false, fr = true, sa = false, so = false" :title="genLang == 'de' ? 'Freitag ' : 'Vendredi'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Freitag' : 'Vue detail de Vendredi'" :colWidth="3"  :active="fr" />
    <tile @click.native="doo = false, fr = false, sa = true, so = false" :title="genLang == 'de' ? 'Samstag ' : 'Samedi'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Freitag' : 'Vue detail de Samedi'" :colWidth="3"  :active="sa" />
    <tile @click.native="doo = false, fr = false, sa = false, so = true" :title="genLang == 'de' ? 'Sonntag ' : 'Dimanche'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Sonntag' : 'Vue detail de Dimanche'" :colWidth="3"  :active="so"/>
  </div>
  <p><a @click="doo = false, fr = false, sa = false, so = false" class="btn btn-primary mr-2" target="_blank">{{ genLang == 'fr' ?  'Aperçu' : 'Übersicht' }}</a> <span class="float-right">Legende: <span class="badge badge-warning">15:30</span> Pausenzeit <span class="badge badge-secondary">15:45</span> Programmpunkt <span class="badge badge-danger">+5 min</span> Verspätung   <i class="fas fa-mug-hot"></i> Pause  <span class="badge badge-pill badge-secondary"><i class="fas fa-users"></i></span> Gruppenarbeit <span class="badge badge-pill badge-primary"><i class="fas fa-list-alt"></i></span> Wahltool (Polyas) <span class="badge badge-pill badge-info"><i class="fas fa-list-alt"></i></span> Zoom-Wahl</span></p>
  
  <!--<h4>Hier sehen Sie das Programm sobald dieses final ausgearbeitet ist.</h4>-->
<div class="row">
<runningTile v-if="doo == true || (doo == false && fr == false && sa == false && so == false)" :title="genLang == 'de' ? 'Donnerstag ' : 'Interner Bereich FR'" :colWidth="doo == true ? '12' : '3'" :data="state.jkProgrammDo" />
<runningTile v-if="fr == true || (doo == false && fr == false && sa == false && so == false)" :title="genLang == 'de' ? 'Donnerstag ' : 'Interner Bereich FR'" :colWidth="fr == true ? '12' : '3'" :data="state.jkProgrammFr" />
<runningTile v-if="sa == true || (doo == false && fr == false && sa == false && so == false)" :title="genLang == 'de' ? 'Donnerstag ' : 'Interner Bereich FR'" :colWidth="sa == true ? '12' : '3'" :data="state.jkProgrammSa" />
<runningTile v-if="so == true || (doo == false && fr == false && sa == false && so == false)" :title="genLang == 'de' ? 'Donnerstag ' : 'Interner Bereich FR'" :colWidth="so == true ? '12' : '3'" :data="state.jkProgrammSo" />

</div>
 



</div>
</template>

<script>
import {store} from "../store.js"
import tile from "./tile.vue"
import runningTile from "./runningTile.vue"
import axios from "axios"

export default {
    components: {
        tile,
        runningTile,
    },
    
    name: "jkAnleitung",
    data() {
        return {
            state: store.state,
            genLang: store.getLang(),
            phone: false,
            doo: false,
            fr: false,
            sa: false,
            so: false,
            publicPath: process.env.BASE_URL,
            // dataDo: this.state.jkProgrammDo,
            // dataFr: this.state.jkProgrammFr,
            // dataSa: this.state.jkProgrammSa,
            // dataSo: this.state.jkProgrammSo,
        }
    },
    computed: {
        route: function() {
      return this.$route.path;
      }
    },
    methods: {
      getNotifications: function() {
        axios
          .get('/programm.json')
          .then(response => (this.state = response.data));
      }
    },
    mounted: function () {
      this.getNotifications();
  window.setInterval(() => {
    this.getNotifications()
  }, 30000)
}
}
</script>

<style  scoped>

</style>
