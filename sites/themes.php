<?php include "heading.php"; ?>


<!-- Themes Inhalt -->
<div class="themes-container">
    <h1 class="themes-title">Inhaltsverzeichniss</h1>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Suche nach Themen..." title="Type in a name">

    <ul id="myUL">
        <li><a href="#imgResolution">Bildauflösung</a></li>
        <li><a href="#imgTechnology">Bildtechnologien</a></li>
        <li><a href="#browser">Browser</a></li>
        <li><a href="#fakeNews">Fake News</a></li>
        <li><a class="myUL-last" href="#raspiVSarudino">Raspberry Pi vs Arduino</a></li>
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


<!-- Bildauflösung -->
<div class="themes-id" id="imgResolution">placeholder</div>
<div class="themes-container-content">
    <h1 class="themes-content-title">Bildauflösung</h1>
    <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
        <br><br>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
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
    <p>
        Browser oder auch Webbrowser (engl. to browse = stöbern...) sind spezielle Computerprogramme zur Darstellung von Webseiten 
        im World Wide Web sowie allgemein von Dokumenten und Daten. Das Durchstöbern des World Wide Webs, beziehungsweise das 
        aufeinanderfolgende Abrufen beliebiger Hyperlinks als Verbindung zwischen Webseiten mit Hilfe solch eines Programms, wird auch 
        als Internetsurfen bezeichnet. Neben HTML-Seiten können Webbrowser verschiedene andere Arten von Dokumenten wie zum Beispiel 
        Bilder und PDF-Dokumente anzeigen. Webbrowser stellen die Benutzeroberfläche für Webanwendungen dar.
        <br><br>
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


<?php include "footer.php"; ?>