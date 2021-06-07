<template>
<div>
    <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Online-Support' : 'Interner Bereich FR'" :external="true" :icon="'front-icon fas fa-hands-helping'" :description="genLang == 'de' ? 'Teamviewer Suport-Software herunterladen' : 'Interner Bereich FR'" :colWidth="12" url="https://get.teamviewer.com/2qs5m7v" :blank="true"/>
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
