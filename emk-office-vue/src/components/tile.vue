<template>
        <div :class="'col-' + colWidth">
			<a :href="url" :target="conTarget">
				<div class="kachel">
					<h5>{{ title }}<i v-if="external" class="fas fa-external-link-alt"></i></h5>
					<i :class="icon"></i><br/>
					<p>{{ description }}</p>
				</div>
			</a>
		</div>
</template>

<script>
import {store} from "../store.js";

export default {
    name: "tile",
    props: ['title', 'external', 'icon', 'description', 'colWidth', 'url', 'blank'], 
    data() {
        return {
            state: store.state,
        }
    },
    computed: {
        conTarget: function() {
            if (this.external) {
                return "_blank";
            } else {
                return "";
            }
        }
    }
    
}
</script>

<style  scoped>

</style>
