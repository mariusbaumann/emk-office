<template>
<div>
   
    <div class="row mb-3">
        <tile :title="genLang == 'de' ? 'Kassier/innen ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-money-bill-wave'" :description="genLang == 'de' ? 'Kassier/Innen von Bezirken klicken bitte hier. ' : 'Interner Bereich FR' " :colWidth="4" :url="'https://cloud.methodisten.ch'" />
		<tile :title="genLang == 'de' ? 'Mac Benutzer/innen ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fab fa-apple'" :description="genLang == 'de' ? 'Mac Benutzer/innen klicken bitte hier. ' : 'Interner Bereich FR' " :colWidth="4" :url="'https://cloud.methodisten.ch'" />
        <tile :title="genLang == 'de' ? 'Mitarbeiter/innen ': 'Microsoft 365 '" :external="false" :icon="'front-icon fas fa-user-friends'" :description="genLang == 'de' ? 'Mitarbeiter/innen der zentralen Dienste klicken bitte hier.': 'FR'" :colWidth="4" :url="'https://portal.office.com'"/>
    </div>
    
<hr>
<div v-if="kassiere">
<h3>1. Download VPN-Client</h3>

<p>Laden Sie den VPN-Client herunter: <a class="inline-link" href="https://emk-office.ch/vpn/kassiere__ssl_vpn_client.exe" download>Kassiere VPN Client</a></p>


<h3>2. Installation VPN-Client</h3>

<p>Wenn der Download abgeschlossen ist, führen Sie die Installationsdatei aus. </p>
<img>
<p>Nun errscheint in der Taskleiste ein Ampelsymbol welches auf rot steht. </p>
<img class="explainimg" src="../assets/vpn/ampel.png">
<h3>3. Verbinden</h3>

<p>Öffnen Sie das Kontext-Menü mit einerm Rechtsklick auf das Aampelsymbol und wählen Sie Verbinden. </p>
<img style="width:300px" class="explainimg" src="../assets/vpn/verbinden.png">
<p>Nun erscheint ein Login-Fenster. Geben Sie die ihnen zur Verfügung gestellten <b>allgemienen</b> VPN-Angaben ein. Bestätigen Sie mit OK. </p>
<img  class="explainimg" src="../assets/vpn/vpnlogin.png">
<p>Die Ampel wechselt nach ein paar Sekunen auf Grün.</p>

<h3>4. Remotedesktop-Verbindung</h3>

<p>Laden Sie die Konfigurationsdatei für die Remote-Desktop-Verbindung herunter: <a class="inline-link" href="https://emk-office.ch/vpn/DWare_Bezirke_extern_windows.rdp" download="https://emk-office.ch/vpn/DWare_Bezirke_extern_windows.rdp">DWare_Bezirke_extern_windows.rdp</a></p>

<p>Öffnen Sie diese Datei mit einem Doppelklick und melden Sie sich mit ihren <b>persönlichen</b> Login-Daten an. </p>

<p><img class="explainimg"  src="../assets/vpn/rdplogin.png"></p>

<h3>5. Verbindung trennen (Wichtig)</h3>

<p>Da die Anzahl gleichzeitiger Verbindungen begrenzt ist, ist es essentiell die Verbindung nach Gebrauch wieder zu trennen. Dazu führen Sie bitte folgende Schritte aus:</p>

<p>Schliessen Sie DWare, so das Sie den Desktop des Servers sehen (Grauer hintergrund)</p>
<p>Klicken Sie doppelt auf das das grüne Pfeilsymbol auf dem Desktop.</p>
<p><img class="explainimg" style="width: 50px" src="../assets/vpn/trennen.png"></p>
<p>Die Remote-Desktop-Verbindung wird nun getrennt und Sie landen wieder auf dem Desktop ihres lokalen Computers</p>
<p>Klicken Sie, mit einem Rechtsklick, rechts unten auf das Ampelsymbol (siehe Punkt 2) und klicken Sie auf <b>Trennen</b></p>

<h3>6. Laufwerk C: des eigenen Computers aktivieren (optional)</h3>
<p>Falls Sie gerne das Laufwerk C: des eigenen Computers auch auf dem Server sehen möchten (z.B. um Dokummente zu ihnen zu verschieben) befoglen Sie bitte die nachfolgendnen Schritte: </p>

<p>Klicken Sie mit einem <b>Rechtsklick</b> auf die Datei <b>DWare_Bezirke_extern_windows.rdp</b></p>
<p>Klicken Sie auf <b>Bearbeiten</b></p>
<p><img  class="explainimg" src="../assets/vpn/remote-desktop-verbindung-bearbeiten.png"></p>

<p>Im folgenden Fenster wählen Sie den Abschnitt <b>Lokale Ressourccen</b> und klicken Sie auf <b>Weitere:</b></p>
<p><img class="explainimg" src="../assets/vpn/ressourcen-oeffnen.png"></p>
<p>Klicken Sie auf das Plus-Symbol neben <b>Laufwerke</b> um die Kategorie aufzuklappen. Aktivieren Sie <b>OS (C:), </b>bestätigen Sie mit OK.</p>
<p><img class="explainimg" src="../assets/vpn/laufwerk-aktivieren.png" /></p>
<p>Wechseln Sie in den Bereich <b>Allgemein</b>und dann auf <b>Speichern</b></p>
<p><img class="explainimg" src="../assets/vpn/speichern-allgemein.png" /></p>
<p>Danach können Sie sich Verbinden und das Laufwerk C: Ihres Computers wird nun auf dem Server verbunden. </p>
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
    name: "vpn",
    data() {
        return {
            state: store.state,
            genLang: store.getLang(),
            kassiere: true,
            macuser: false,
            worker: false,
        }
    },
    computed: {

    },
}
</script>

<style  scoped>

</style>
