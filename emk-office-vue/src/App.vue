<template>
<div class="container">
	<div class="icon-line"></div>
	<a href="#"><div class="icon-logo-container"><img class="icon-logo" src="./assets/2716-991-max.png"></div></a>

	<div class="row mb-3">	
		<tile :title="'Jährliche Konferenz 2020 Startseite '" :external="false" :icon="'front-icon far fa-calendar-alt'" :description="'Zur Startseite Tagung Teil Schweiz'" :colWidth="12" :url="JK" :blank="false"/>
  </div>

  <div class="row mb-3">	
		<tile :title="genLang == 'de' ? 'Interner Bereich DE ' : 'Interner Bereich FR'" :external="true" :icon="'front-icon fas fa-cloud'" :description="genLang == 'de' ? 'zum teilen von Inhalten mit Laien und Bezriken. ' : 'Interner Bereich FR'" :colWidth="6" :url="'https://cloud.methodisten.ch'" />
    <tile :title="'Interner Bereich '" :external="false" :icon="'front-icon far fa-calendar-alt'" :description="'Zur Startseite Tagung Teil Schweiz'" :colWidth="6" :url="JK"/>
  </div>

	<div class="row mb-3">	
		<div class="col-6">
			<a href="https://cloud.methodisten.ch" target="_blank">
				<div class="kachel">
					<h5>Interner Bereich <i class="fas fa-external-link-alt"></i></h5>
					<i class="front-icon fas fa-cloud"></i><br/>
					<p>Zum teilen von Inhalten mit Laien und Bezriken. </p>
				</div>
			</a>
		</div>
		<div class="col-6">
			<a href="https://portal.office.com" target="_blank">
				<div class="kachel">
					<h5>Microsoft 365 <i class="fas fa-external-link-alt"></i></h5>
					<i class="front-icon fab fa-microsoft"></i><br/>
					<p>Die Arbeitsumgebung für Mitarbeiter/innen der zentralen Dienste.</p>
				</div>
			</a>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-6">
			<a href="/vpn" target="_blank">
				<div class="kachel">
					<h5>VPN</h5>
					<i class="front-icon fas fa-exchange-alt"></i><br/>
					<p>Per VPN mit der Zentralverwaltung verbinden.</p>
				</div>
			</a>
		</div>
		<div class="col-6">
			<a href="/downloads" target="_blank">
				<div class="kachel">
					<h5>Downloads</h5>
					<i class="front-icon fas fa-download"></i><br/>
					<p>Nützliche Werkzeuge zum Download </p>
				</div>
			</a>
		</div>
	</div>
	
	
</div>



</template>

<script>
import tile from './components/tile.vue';


export default {
  name: 'App',
  components: {
    tile
    
  },
  data: function () {
    return { 
    lang: navigator.language || navigator.userLanguage,
    }
  },
  computed: {
    genLang: function (data) {
		if (data.lang == "ch-FR" || data.lang == "fr-FR" || data.lang == "fr" ){
			return "fr";
		} else {
			return "de";
		}
	},
  }
  
}

//app.lang = navigator.language || navigator.userLanguage; 
</script>

<style>

</style>
