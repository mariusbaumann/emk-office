<template>
<div>
  <div class="row mb-3">
    <tile @click.native="desktop = true, laptop = false, mac = false, ipad = false" :title="genLang == 'de' ? 'Windows Desktop ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-tv'" :description="genLang == 'de' ? 'Falls Sie über einen Desktop-Computer (Kasten mit angeschossenem Bildschirm) teilnehmen möchten klicken Sie bitte hier.' : 'Interner Bereich FR'" :colWidth="3" :active="desktop"/>
    <tile @click.native="desktop = false, laptop = true, mac = false, ipad = false" :title="genLang == 'de' ? 'Windows Laptop ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-laptop'" :description="genLang == 'de' ? 'Falls Sie über einen Laptop (auch: Notebook genannt, aufklappbar mit integriertem Bildschirm) teilnehmen möchten klicken Sie bitte hier.' : 'Interner Bereich FR'" :colWidth="3"  :active="laptop" />
    <tile @click.native="desktop = false, laptop = false, mac = true, ipad = false" :title="genLang == 'de' ? 'Mac ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fab fa-apple'" :description="genLang == 'de' ? 'Falls Sie über einen Mac teilnehmen möchten klicken Sie bitte hier.' : 'Interner Bereich FR'" :colWidth="3"  :active="mac" />
    <tile @click.native="desktop = false, laptop = false, mac = false, ipad = true" :title="genLang == 'de' ? 'iPad ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-tablet-alt'" :description="genLang == 'de' ? 'Falls Sie mit dem iPad teilnehmen möchten klicken Sie bitte hier.' : 'Interner Bereich FR'" :colWidth="3"  :active="ipad"/>
  </div>
  <hr>
  <div v-if="desktop">
  <p style="color: red"><b>Hinweis:</b> Ein Desktop-Computer verfügt nicht über ein eingebautes Mikrofon und hat keine Webcam (Internet-Kamera). Bitte stellen Sie also sicher, dass Sie eine externe USB-Webcam (Internet-Kamera, die über USB angeschlossen wird), sowie ein Mikrofon an ihrem Computer angeschlossen haben.</p> 


<h2>1. Download Zoom-Software</h2>

<p>Laden Sie die Zoom-Software herunter in dem Sie auf folgenden Link klicken: <a class="btn btn-primary" href="https://zoom.us/client/latest/ZoomInstaller.exe"><i class="fas fa-download"></i>Zoom herunterladen</a></p>

<p>Das Installationsprogramm landet nun in Ihrem Downloads-Ordner.</p>

<h2>2. Installieren</h2>

<p>Je nach Internet-Programm kann es unterschiedlich aussehen. Darum sehen Sie im Folgenden jeweils meherere Bilder nebeneinander, die verschiedne Varianten darstellen.</p>


<p> Wenn bei ihnen diese Abfrage kommt, klicken Sie bitte auf <b>Datei speichern</b>:</p>
<img class="explainimg" src="../assets/anleitungen/Firefox-1.png">


<p>Klicken Sie nun auf die heruntergelandene Datei <b> Zoominstaller.exe:</b></p>

<table>
	
	<tr>
	<td><img style="height: 200px" src="../assets/anleitungen/Firefox-2.png"></td>
	<td><img style="height: 100px" src="../assets/anleitungen/Chrome-1.png"></td>
	</tr>
	
</table>

<p>Wenn Sie keine der obigen Schaltflächen sehen, können Sie die Installation auch so starten:</p>
<p>Wechseln sie in den Datei-Explorer und klicken sie <b>doppelt</b> auf <b>Zoominstaller.exe</b></p>
<img style="width:600px" class="explainimg" src="../assets/anleitungen/Zoom-Explorer.png">


<p>Nun startet die Installation: </p>


<img class="explainimg" src="../assets/anleitungen/Zoom-Installer.png">


<p>Danach erscheint dieses Fenester: </p>
<img  class="explainimg" src="../assets/anleitungen/Zoom-Installed.png">
  </div>


  <div v-if="laptop">
    <h2>1. Download Zoom-Software</h2>

<p>Laden Sie die Zoom-Software herunter in dem Sie auf folgenden Link klicken: <a class="btn btn-primary" href="https://zoom.us/client/latest/ZoomInstaller.exe"><i class="fas fa-download"></i> Zoom herunterladen</a></p>

<p>Das Installationsprogramm landet nun in Ihrem Downloads-Ordner.</p>

<h2>2. Installieren</h2>

<p>Je nach Internet-Programm kann es unterschiedlich aussehen. Darum sehen Sie im Folgenden jeweils meherere Bilder nebeneinander, die verschiedne Varianten darstellen.</p>


<p> Wenn bei ihnen diese Abfrage kommt, klicken Sie bitte auf <b>Datei speichern</b>:</p>
<img class="explainimg" src="../assets/anleitungen/Firefox-1.png">


<p>Klicken Sie nun auf die heruntergelandene Datei <b> Zoominstaller.exe:</b></p>

<table>
	
	<tr>
	<td><img style="height: 200px" src="../assets/anleitungen/Firefox-2.png"></td>
	<td><img style="height: 100px" src="../assets/anleitungen/Chrome-1.png"></td>
	</tr>
	
</table>

<p>Wenn Sie keine der obigen Schaltflächen sehen, können Sie die Installation auch so starten:</p>
<p>Wechseln sie in den Datei-Explorer und klicken sie <b>doppelt</b> auf <b>Zoominstaller.exe</b></p>
<img style="width:600px" class="explainimg" src="../assets/anleitungen/Zoom-Explorer.png">


<p>Nun startet die Installation: </p>


<img class="explainimg" src="../assets/anleitungen/Zoom-Installer.png">


<p>Danach erscheint dieses Fenester: </p>
<img  class="explainimg" src="../assets/anleitungen/Zoom-Installed.png">
</div>
<div v-if="mac">
<p style="color: red"><b>Hinweis:</b> Ein Mac mini oder Mac Pro verfügt nicht über ein eingebautes Mikrofon und hat keine Webcam (Internet-Kamera). Bitte stellen Sie in diesem Falle also sicher, dass Sie eine externe USB-Webcam (Internet-Kamera, die über USB angeschlossen wird), sowie ein Mikrofon an ihrem Computer angeschlossen haben.</p>

<h2>1. Download Zoom-Software</h2>

<p>Laden Sie die Zoom-Software herunter in dem Sie auf folgenden Link klicken: <a class="btn btn-primary" href="https://zoom.us/client/latest/Zoom.pkg"><i class="fas fa-download"></i> Zoom herunterladen</a></p>

<p>Wenn Sie gefragt werden, ob Sie den Download zulassen wollen, dann klicken Sie auf <b>Erlauben</b></p>
<img class="explainimg" src="../assets/anleitungen/Mac-1.png">

<p>Das Installationsprogramm landet nun in Ihrem Download-Ordner.</p>

<h2>2. Installieren</h2>


<p>Klicken Sie oben rechts im Safari-Browser auf den Download-Pfeil und danach <b>doppelt</b> auf Zoom.pkg:</p>
<img class="explainimg" src="../assets/anleitungen/Mac-2.png">

<p>Alternativ können Sie auch im Finder den Ordner <b>Downloads</b> öffnen und dort auf Zoom.pkg <b>doppelt</b> klicken.</p>
<img class="explainimg" src="../assets/anleitungen/Mac-2-1.png">


<p>Nun öffnet sich die Installation. Klicken Sie auf <b>Fortfahren</b></p>
<img class="explainimg" src="../assets/anleitungen/Mac-3.png">

<p>Klicken Sie auf <b>Installieren.</b></p>
<img class="explainimg" src="../assets/anleitungen/Mac-4.png">

<p>Geben Sie Ihr Passwort ein, um die Installation zu bestätigen. Klicken Sie auf <b>Software installieren</b></p>
<img class="explainimg" src="../assets/anleitungen/Mac-5.png">

<p>Klicken Sie auf <b>In den Papierkorb legen</b></p>
<img class="explainimg" src="../assets/anleitungen/Mac-6.png">

<p>Wenn Sie nun dieses Fenster sehen, sind Sie mit der Installation fertig:</p>
<img class="explainimg" src="../assets/anleitungen/Mac-8.png">
</div>
  <div v-if="ipad">
<h2>1. Download Zoom-Software</h2>

<p>Öffnen Sie den <b>App-Store</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-1.png">

<p>Tippen Sie auf  <b>Suchen</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-2.png">

<p>Geben Sie im Suchfeld <b>Zoom</b> ein und tippen Sie auf den Vorschlag <b>Zoom</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-3.png">

<p>Tippen Sie auf  <b>laden</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-4.png">

<p>Falls Sie gefragt werden, die Apple-ID zu bestätigen, drücken sie die  <b>Lock-Taste </b> (aussen am Rand des iPads) <b>doppelt</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-7.png">

<p>Falls Sie gefragt werden, das Apple-ID-Passwort einzugeben, geben Sie dieses bitte ein und bestätigen die Anfrage.</p>

<p>Nun wird <b>Zoom</b> heruntergeladen. Warten Sie, bis sich der Kreis ganz gefüllt hat und zu <b>Öffnen </b>wird.</p>
<img class="explainimg" src="../assets/anleitungen/ipad-5.png">

<p>Tippen Sie auf  <b>Öffnen</b></p>
<img class="explainimg" src="../assets/anleitungen/ipad-6.png">

<p>Wenn Ihr iPad nun folgendes anzeigt, sind Sie mit der Installation fertig.</p>
<img class="explainimg" src="../assets/anleitungen/ipad-8.png">
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
