<template>
<div>
   
    <div class="row mb-3">
        <tile @click.native="kassiere = true, worker = false, macuser = false" :title="genLang == 'de' ? 'Kassier/innen ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fas fa-money-bill-wave'" :description="genLang == 'de' ? 'Kassier/Innen von Bezirken klicken bitte hier. ' : 'Interner Bereich FR' " :colWidth="4" :active="kassiere" />
		<tile @click.native="kassiere = false, worker = false, macuser = true" :title="genLang == 'de' ? 'Mac Benutzer/innen ' : 'Interner Bereich FR'" :external="false" :icon="'front-icon fab fa-apple'" :description="genLang == 'de' ? 'Mac Benutzer/innen klicken bitte hier. ' : 'Interner Bereich FR' " :colWidth="4" :active="macuser" />
        <tile @click.native="kassiere = false, worker = true, macuser = false" :title="genLang == 'de' ? 'Mitarbeiter/innen ': 'Microsoft 365 '" :external="false" :icon="'front-icon fas fa-user-friends'" :description="genLang == 'de' ? 'Mitarbeiter/innen der zentralen Dienste klicken bitte hier.': 'FR'" :colWidth="4" :active="worker" />
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

<div v-if="worker">
<h3>1. Download VPN-Client</h3>

<p>Lade den VPN-Client herunter: <a class="inline-link" href="mitarbeiter__ssl_vpn_client.exe">Mitarbeiter VPN Client</a></p>
<p>Für Mac lade die VPN-Konfig herunter: <a href="mitarbeiter__ssl_vpn_config.ovpn">Mitarbeiter VPN Konfig</a> </p>


<h3>2. Installation VPN-Client</h3>

<p>Wenn der Download abgeschlossen ist, führe die Installationsdatei aus. </p>
<img>
<p>Nun errscheint in der Taskleiste ein Ampelsymbol welches auf rot steht. </p>
<img class="explainimg" src="../assets/vpn/ampel.png">
<h3>3. Verbinden</h3>

<p>Öffne das Kontext-Menü mit einerm Rechtsklick auf das Aampelsymbol und wähle Verbinden. </p>
<img  class="explainimg" src="../assets/vpn/verbinden.png">
<p>Nun erscheint ein Login-Fenster. Gebe die dir zur Verfügung gestellten <b>allgemienen</b> VPN-Angaben ein. Bestätige mit OK. </p>
<img  class="explainimg" src="../assets/vpn/vpnloginma.png">
<p>Die Ampel wechselt nach ein paar Sekunen auf Grün.</p>
</div>

<div v-if="macuser">
    <h2>1. Installation Tunnelblick</h2>

<p>Laden Sie den VPN-Client herunter:<a class="inline-link" href="Tunnelblick_3.7.7_build_5150.dmg" download> Tunnelblick_3.7.7_build_5150.dmg</a></p>
<p>Öffnen Sie <b>Tunnelblick_3.7.7_build_5150.dmg</b> mit einem <b>Doppelklick.</b></p>
<p>Klicken Sie <b>doppelt</b> auf das Tunnel-Symbol.</p>
<p><img class="explainimg" src="../assets/vpn/tunnelblick-installer.png" /></p>
<p>Bestätigen sie die Installation mit Ihrem Administrator-Passwort Ihres Macs.</p>
<p><img class="explainimg" src="../assets/vpn/tunnelblick-adminbestaetigung.png" /></p>
<p>Nun erschein ein Tunnel-Symbol oben rechts in der Statusleiste (Neben dem W-LAN-Symbol). </p>

<h2>2. Konfiguration Tunnelblick</h2>

<p>Laden Sie die Konfigurations-Datei für Tunnelblick herunter: <a class="inline-link" href="kassiere__ssl_vpn_config.ovpn" download>kassiere__ssl_vpn_config.ovpn</a></p>
<p>Wechseln sie in den <b>Dowload-Ordner</b> und öffnen sie die Datei  <b>kassiere__ssl_vpn_config.ovpn</b> mit einem <b>Doppelklick</b></p>
<p>Wählen sie <b>Nur für diesen Benutzer.</b></p>
<p><img class="explainimg" src="../assets/vpn/tunnelblick-verbindungsinstallation.png" /></p>
<p>Bestätigen Sie die Installtion der Konfiguration mit ihrem Administrator-Passwort Ihres Macs.</p>

<p>Die nachfolgende Warnmeldung können sie mit OK bestätigen.</p>

<h2>3. Tunnelblick Verbinden</h2>

<p>Klicken Sie in der Statusleiste auf das Tunnel-Symbol und wählen Sie <b>"kassiere__ssl_vpn_config" verbinden</b></p>
<p><img class="explainimg" src="../assets/vpn/tunnelblick-verbinden.png" /></p>
<p>Nun erscheint ein Anmeldefenster. Bitte geben sie die ihnen zur verfügung gestellten Informationen ein (Bitte geben Sie <b>nicht</b> ihre persönlichen Daten ein, die benögtigen Sie erst später).</p>
<p><img class="explainimg" src="../assets/vpn/tunnelblick-anmeldung.png" /></p>
<p>In der oberen rechten Ecke erscheint nun ein Verbindungsstatusfenster. Sobald dieses eine grüne Schrift zeigt, ist die Verbindung erfolgreich hergestellt.</p>

<h2>4. Installation Microsoft Remote Desktop</h2>

<p><a class="inline-link" href="https://itunes.apple.com/ch/app/microsoft-remote-desktop-10/id1295203466?mt=12" target="_blank" >Klicken Sie auf diesen Link</a> und danach auf <b>Anzeigen in: Mac App Store</b></p>
<p>Klicken Sie auf <b>LADEN</b></p>
<p><img class="explainimg" src="../assets/vpn/rdp-laden.png" /></p>
<p>Sobald der Download beendet wurde, erscheint ein Button <b>ÖFFNEN</b>. Klicken Sie diesen an.</p>
<p>Nun sehen sie ein leeres Microsoft Remote Desktop Fenster.</p>

<h2>5. Konfiguration Microsoft Remote Desktop</h2>

<p>Laden Sie die Konfigurationsdatei herunter: <a href="DWare_Bezirke_extern_windows.rdp" download>DWare_Bezirke_extern_windows.rdp</a></p>
<p>Wechseln Sie in den Downloads Ordner.</p>
<p>Entfernen sie die Endung <b>.txt</b> indem Sie die Datei umbenennen.</p>
<p><img class="explainimg" src="../assets/vpn/rdp-dateiendung.png" /></p>
<p>Sie werden nun gefragt ob Sie wirklich die Dateiendung ändern wollen. Bestätigen sie mit <b>.rdp verwenden</b></p>
<p>Öffnen sie die .rdp Datei nun mit einem Doppelklick. Es erscheint ein Fenster von Microsoft Remote Desktop.</p>
<p>Bestätigen sie mit <b>Continue</b></p>
<p><img class="explainimg" src="../assets/vpn/rdp-anmeldebestaetigung.png" /></p>
<p>Nun erscheint ein Anmeldefenster. Bitte geben sie hier ihre <b>persönlichen</b> Anmeldedaten ein. </p>
<p><b>HINWEIS:</b> Bitte löschen sie die Angabe EMKDOM\ nicht, geben sie stattdessen ihren Benuzernamen nach EMKDOM\ ein.</p>
<p><img class="explainimg" src="../assets/vpn/rdp-anmeldung.png" /></p>
<p>Bestätigen Sie mit <b>Done</b></p>
<p>Bestätigen Sie mit <b>Continue</b></p>
<p><img class="explainimg" src="../assets/vpn/rdp-anmeldebestaetigung.png" /></p>
<p>Nun sind Sie wie gewohnt auf dem Server. </p>

<h2>6. Hinzufügen lokaler Laufwerke</h2>
<p>Öffnen Sie <b>Microsoft Remote Desktop.</b></p>
<p>Klicken Sie im Menu am oberen Bildschirmrand auf <b>Connections</b> und anschliessend auf <b>import Desktops...</b></p>
<p><img class="explainimg" src="../assets/vpn/RDP-ImportDesktops.png" /></p>
<p>Wählen Sie die zu bearbeitende Remote-Desktop-Verbindung aus.</p>
<p><img class="explainimg" src="../assets/vpn/RDP-ChooseFile2.png" /></p>
<p>Nun erscheint diese Verbindung im Microsoft Remote Desktop Fenster. Klicken sie auf den Bleistift um die Verbindung zu editieren.</p>
<p><img class="explainimg" src="../assets/vpn/RDP-Connections.png" /></p>
<p>Wechseln Sie auf <b>Local Resources.</b></p>
<p><img class="explainimg" src="../assets/vpn/RDP-EditResources.png" /></p>
<p>Klicken Sie auf das + Symbol um eine Lokale Resource hinzuzufügen.</p>
<p>Wählen Sie den Order auf ihrem Mac, den sie auch auf dem Server verbunden haben möchten.</p>
<p>Stellen Sie sicher, dass unter <b>User Account, Ask me every time</b> ausgewählt ist </p>
<p>Bestätigen Sie mit <b>Save</b></p>
<p>Wenn Sie nun die Verbindung mit einem Doppelklick starten, wird der lokale Ordner ihres Macs auf dem Server als Netzlaufwerk angezeigt.</p>
<p><b>HINWEIS:</b>Stellen Sie sicher, dass in jedem Fall beim Login <b>EMKDOM\</b> vor ihrem Benutzernamen steht (Das \ ist ein Backslash, auf dem Mac mit der Tastenkombination alt + shift + 7 hinzuzufügen).</p>

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
