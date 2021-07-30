<?php include "heading.php"; ?>


<!-- Themes Inhalt -->
<div class="themes-container">
    <h1 class="themes-title">Inhaltsverzeichnis</h1>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Suche nach Themen..." title="Type in a name">

    <ul id="myUL">
        <li><a href="#imgResolution">Bildauflösungen</a></li>
        <li><a href="#imgTechnology">Bildtechnologien</a></li>
        <li><a href="#browser">Browser</a></li>
        <li><a href="#fakeNews">Fake News</a></li>
        <li><a href="#raspiVSarudino">Raspberry Pi vs Arduino</a></li>
        <li><a class="myUL-last" href="#vpn">VPN</a></li>
    </ul>
</div>

<!-- Script -->
<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>


<!-- Bildauflösungen -->
<div class="themes-id" id="imgResolution">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Bildauflösungen</h1>
    <p>
    <div class="themes-content-table-container">
        <table class="themes-content-table">
            <thead>
                <tr class="table-heading">
                    <th>Abkürzung</th>
                    <th>Name</th>
                    <th>Pixel</th>
                    <th>Seitenverhältnis</th>
                    <th>Verwendung</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>HD</th>
                    <td>High Definition</td>
                    <td>1280 x 720</td>
                    <td>19:9</td>
                    <td>TV, Smartphone, Kamera, Spielkonsole...</td>
                </tr>
                <tr>
                    <th>Full HD</th>
                    <td>Full High Definition</td>
                    <td>1920 x 1080</td>
                    <td>16:9</td>
                    <td>TV, Smartphone, Kamera, Spielkonsole...</td>
                </tr>
                <tr>
                    <th>FHD+</th>
                    <td>Full HD+</td>
                    <td>2160 x 1080</td>
                    <td>18:9</td>
                    <td>Smartphone</td>
                </tr>
                <tr>
                    <th>WQHD</th>
                    <td>Wide Quad High Definition</td>
                    <td>2560 x 1440</td>
                    <td>16:9</td>
                    <td>Monitor, Smartphone</td>
                </tr>
                <tr>
                    <th>QHD+</th>
                    <td>Quad High Definition Plus</td>
                    <td>3200 x 1800</td>
                    <td>16:9</td>
                    <td>Smartphone</td>
                </tr>
                <tr>
                    <th>UHD (4k)</th>
                    <td>Ultra High Defitinion</td>
                    <td>3840 x 2160</td>
                    <td>16:9</td>
                    <td>TV, Smartphone, Kamera, Spielkonsole...</td>
                </tr>
                <tr>
                    <th>4K2K (DCI)</th>
                    <td>(Digital Cinema Initiatives))</td>
                    <td>4096 x 2160</td>
                    <td>21:9</td>
                    <td>Kino</td>
                </tr>
                <tr>
                    <th>5K2K (WUHD)</th>
                    <td>(Wide Ultra High Definition)</td>
                    <td>5120 x 2160</td>
                    <td>21:9</td>
                    <td>Monitor</td>
                </tr>
                <tr>
                    <th>UHD+ (5K)</th>
                    <td>Ultra High Definition Plus</td>
                    <td>5120 x 2880</td>
                    <td>16:9</td>
                    <td>Monitor, TV</td>
                </tr>
                <tr>
                    <th>6K</th>
                    <td>6K</td>
                    <td>6144 x 3456</td>
                    <td>16:9</td>
                    <td>Kamera</td>
                </tr>
                <tr>
                    <th>FUHD</th>
                    <td>Full Ultra High Definition</td>
                    <td>7680 x 4320</td>
                    <td>16:9</td>
                    <td>TV</td>
                </tr>
                <tr>
                    <th>8K (DCI)</th>
                    <td>(Digital Cinema Initiatives)</td>
                    <td>8192 x 4320</td>
                    <td>21:9</td>
                    <td>Kino</td>
                </tr>
                <tr>
                    <th>QUHD (16)</th>
                    <td>Quad Ultra High Definition</td>
                    <td>15360 x 8640</td>
                    <td>16:9</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <b>Quellen:</b> <a href="https://de.wikipedia.org/wiki/Bildaufl%C3%B6sung" target="_blank">de.wikipedia.org</a>
    </p>
</div>

<!-- Bildtechnologien -->
<div class="themes-id" id="imgTechnology">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Bildtechnologien</h1>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        <br><br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>

<!-- Browser -->
<div class="themes-id" id="browser">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Browser</h1>
    <h3 class="themes-content-title">Definition</h3>
    <p>
        Browser oder auch Webbrowser (engl. to browse = stöbern...) sind spezielle Computerprogramme zur Darstellung von Webseiten
        im World Wide Web sowie allgemein von Dokumenten und Daten. Das Durchstöbern des World Wide Webs, beziehungsweise das
        aufeinanderfolgende Abrufen beliebiger Hyperlinks als Verbindung zwischen Webseiten mit Hilfe solch eines Programms, wird auch
        als Internetsurfen bezeichnet. Neben HTML-Seiten können Webbrowser verschiedene andere Arten von Dokumenten wie zum Beispiel
        Bilder und PDF-Dokumente anzeigen. Webbrowser stellen die Benutzeroberfläche für Webanwendungen dar.
        
    </p>
    <h3 class="themes-content-title">Geschichte</h3>
    <p>
        Tim Berners-Lee, ein Pionier des Hypertextes, entwickelte ab 1989 am CERN bei Genf (Schweiz) den ersten Webbrowser und -editor
        unter dem Namen WorldWideWeb (später Nexus) auf einer NeXT-Workstation. Eingelagerte Grafiken öffneten sich noch nicht automatisch,
        sondern mussten erst angeklickt werden. Im November 1990 beauftragte er Nicola Pellow mit der Entwicklung des minimalistischen
        Line Mode Browsers, der nur Text darstellen konnte, dafür aber auf "praktisch allen" Rechnern lief. Weihnachten 1990 waren
        beide Browser präsentationsreif. Im August 1991 machte Berners-Lee das Projekt und beide Browser in der Newsgruppe alt.hypertext
        öffentlich bekannt.
        <br><br>
        <i class="arrow-icon fas fa-arrow-right"></i>Bekannte Browser sind beispielsweise: Google Chrome, Microsoft Edge, Mozilla Firefox, Safari, Opera...
        <br><br>
        <b>Quellen:</b> <a href="https://de.wikipedia.org/wiki/Webbrowser" target="_blank">de.wikipedia.org</a>
    </p>
</div>

<!-- Fake News -->
<div class="themes-id" id="fakeNews">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Fake News</h1>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        <br><br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>

<!-- Raspberry Pi vs Arduino -->
<div class="themes-id" id="raspiVSarudino">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Raspberry Pi vs Arduino</h1>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        <br><br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
</div>

<!-- VPN -->
<div class="themes-id" id="vpn">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">VPN</h1>
    <h3 class="themes-content-title">Was ist VPN und wie funktioniert es?</h3>
    <p>
        VPN steht für "Virtual Private Network" und beschreibt die Möglichkeit eine geschützte Netzwerkverbindung unter Nutzung
        öffentlicher Netzwerke aufzubauen. VPNs verschlüsseln Ihren Internetverkehr und verschleiern Ihre Online-Identität.
        Damit erschweren sie es Dritten, Ihre Spuren im Internet zu verfolgen und Daten zu stehlen. Die Verschlüsselung findet dabei
        in Echtzeit statt.<br>
    </p>
    <h3 class="themes-content-title">Wie funktioniert VPN?</h3>
    <p>
        Ein VPN verbirgt Ihre IP-Adresse, indem das Netz sie über einen speziell konfigurierten Remote-Server umleitet, der von einem VPN-Host
        ausgeführt wird. Wenn Sie also mit einem VPN online surfen, wird der VPN-Server zum Ursprung Ihrer Daten. Dies macht es Ihrem
        Internetdienstanbieter (englisch: Internet Service Provider oder ISP) oder anderen Dritten unmöglich zu sehen, welche Webseiten Sie besuchen
        oder welche Informationen Sie im Internet eingeben. Ein VPN funktioniert wie ein Filter, der alle Daten, die Sie senden und empfangen,
        in „Kauderwelsch“ verwandelt. Selbst wenn jemand diese Daten in die Hände bekäme, wären sie nutzlos.
    </p>
    <h3 class="themes-content-title">Zugriff auf regionale Inhalte</h3>
    <p>
        Regionale Webinhalte sind nicht immer für den Zugriff von überall aus freigeschaltet.
        Dienste und Webseiten enthalten manchmal Inhalte, auf die nur aus bestimmten Teilen der Welt zugegriffen werden kann.
        Standardverbindungen verwenden lokale Server im Land, um Ihren Standort zu bestimmen. Dies bedeutet, dass Sie auf Reisen nicht auf Inhalte
        zu Hause und von zu Hause nicht auf internationale Inhalte zugreifen können. Mit VPN-Standort-Spoofing können Sie auf einen Server
        in anderen Ländern wechseln und Ihren Standort effektiv „ändern“. <br>
        Somit kann man sich Inhalte, welche bspw. auf Netflix nur in den USA erhältlich ist, auch in der Schweiz ansehen.
    </p>
    <i class="arrow-icon fas fa-arrow-right"></i>Bekannte VPN-Anbieter sind beispielsweise: NordVPN, CyberGhost VPN, ProtonVPN...
    <br><br>
    <b>Quellen:</b> <a href="https://www.kaspersky.de/resource-center/definitions/what-is-a-vpn" target="_blank">kaspersky.de</a>

</div>


<?php include "footer.php"; ?>