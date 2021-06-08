<template>
<div>
  <div class="row mb-3">
    <tile @click.native="desktop = true, laptop = false, mac = false, ipad = false" :title="genLang == 'de' ? 'Donnerstag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Donnerstag' : 'Interner Bereich FR'" :colWidth="3" :active="desktop"/>
    <tile @click.native="desktop = false, laptop = true, mac = false, ipad = false" :title="genLang == 'de' ? 'Freitag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Freitag' : 'Interner Bereich FR'" :colWidth="3"  :active="laptop" />
    <tile @click.native="desktop = false, laptop = false, mac = true, ipad = false" :title="genLang == 'de' ? 'Samstag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Freitag' : 'Interner Bereich FR'" :colWidth="3"  :active="mac" />
    <tile @click.native="desktop = false, laptop = false, mac = false, ipad = true" :title="genLang == 'de' ? 'Sonntag ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-calendar-day'" :description="genLang == 'de' ? 'Detailansicht Sonntag' : 'Interner Bereich FR'" :colWidth="3"  :active="ipad"/>
  </div>
  <hr>
  <h4>Hier sehen Sie das Programm sobald dieses final ausgearbeitet ist.</h4>
  <div v-if="desktop">

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
    name: "jkAnleitung",
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
