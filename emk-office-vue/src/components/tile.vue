<template>
        <div :class="'col-' + colWidth">
			<a :href="url" :target="conTarget">
				<div class="kachel">
					<h5>{{ title }}<i v-if="external" class="fas fa-external-link-alt float-right"></i><span v-if="warningBadge" class="badge badge-warning float-right mr-2">{{ warningBadge }}</span><span v-if="dangerBadge" class="badge badge-danger float-right mr-2">{{ dangerBadge }}</span> </h5>
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
    props: ['title', 'external', 'icon', 'description', 'colWidth', 'url', 'blank', 'warningBadge', 'dangerBadge'], 
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
