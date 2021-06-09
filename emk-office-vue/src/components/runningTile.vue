<template>
    <div :class="'col-' + colWidth">
        <div v-for="(item, itemindex) in data" :key="itemindex" class="">
            <div  >
                        <div class="kachel-pgm mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5>
                                        <span v-if="item.now" class="badge badge-primary mr-1">Läuft</span>
                                        <span :class="{ 'badge badge-warning mr-1': item.break, 'badge badge-secondary mr-1': !item.break}">{{ item.timeStart }}</span>
                                        <span v-if="item.delay" class="badge badge-danger">{{ item.delay }}</span>
                                    </h5>
                                </div>
                                <div class="col-6">
                                    <h5><i v-if="item.break" class="fas fa-mug-hot mr-1 float-right" ></i><span v-if="item.groupwork" class="badge badge-pill badge-secondary mr-1 float-right" ><i class="fas fa-users"></i></span><span v-if="item.electionpoly" class="badge badge-pill badge-primary mr-1 float-right" ><i class="fas fa-list-alt"></i></span><span v-if="item.zoomelection" class="badge badge-pill badge-info mr-1 float-right"><i class="fas fa-list-alt"></i></span></h5>
                                </div>
                            </div>
                            <h5>  {{ genLang == 'fr' ? item.titleFR : item.title }}</h5>
                            <p>{{ item.description }}</p>
                            <hr v-if="item.buttons.length">
                            <a v-for="(button, buttonindex) in item.buttons" :key="buttonindex" :href="button.link" class="btn  mr-2" :class="[ !button.link ? 'btn-secondary disabled' : 'btn-primary' ]" target="_blank">{{ genLang == 'fr' ?  button.nameFR : button.name }}</a>
                            <hr v-if="item.results.length">
                            <h6 v-if="item.results.length">{{ genLang == 'fr' ? 'Resultats' : 'Wahlresultate' }} </h6>
                            <div v-for="(vote, voteindex) in item.results" :key="voteindex" >
                                <div class="mt-2"><p>{{ genLang == 'fr' ? vote.titleFR : vote.title }}</p></div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" :style="{width: persentageYes(vote.yes, vote.no, vote.empty) + '%'}" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">{{ vote.yes }} {{ genLang == 'fr' ? 'Oui' : 'Ja'}}</div>
                                    <div class="progress-bar bg-danger" role="progressbar" :style="{width: persentageNo(vote.yes, vote.no, vote.empty) + '%'}" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">{{ vote.no }} {{ genLang == 'fr' ? 'Non' : 'Nein'}}</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" :style="{width: persentageEmpty(vote.yes, vote.no, vote.empty) + '%'}" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">{{ vote.empty }} {{ genLang == 'fr' ? 'Expats' : 'Enthlaten'}}</div>
                                </div>
                            </div>
                            <hr v-if="item.subitems.length">
                            <div class="row">
                            <runningTile2 :colWidth="12" :data="item.subitems" :child="true"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    

</template>

<script>
import {store} from "../store.js";
import runningTile from "./runningTile.vue";

export default {
    name: "runningTile2",
    props: ['title', 'external', 'icon', 'description', 'colWidth', 'url', 'blank', 'warningBadge', 'dangerBadge', 'active', 'bigmessage', 'data', 'child' ], 
    components: {
        runningTile2: runningTile,
    },
    data() {
        return {
            state: store.state,
            genLang: store.getLang(),
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
    },
    methods: {
        persentageYes: function(yes, no, empty) {
            return yes / (yes + no + empty) * 100;
        },
        persentageNo: function(yes, no, empty) {
            return no / (yes + no + empty) * 100;
        },
        persentageEmpty: function(yes, no, empty) {
            return empty / (yes + no + empty) * 100;
        }
    }
    
}
</script>

<style  scoped>

.green-border {
    border-color: #aed361;
}

.big {
    font-size: 50px;
}

</style>
