<template>
<div>
  
	<h4 v-if="genLang == 'de'" class="mt-5">Die Anmeldung wird erst am 14.6.21 aufgeschaltet</h4>
	<h4 v-if="genLang == 'fr'" class="mt-5">Plus d'informations</h4>

	
</div>
</template>

<script>
import {store} from "../store.js";
//import tile from "./tile.vue"

export default {
    components: {
        //tile,
    },
    name: "jkAnmeldung",
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
