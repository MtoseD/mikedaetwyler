<?php include "heading.php"; ?>



<!-- Post-Its -->
<ul class="security-ul">
  <li class="security-li">
    <a class="security-a" href="#openModal1">
      <h2 class="security-h2">Windows Login</h2>
      <p class="security-p">
        <ul class="security-p-ul">
          <li>Wie sicher ist es?</li>
          <li>Wie erhöhe ich die Sicherheit?</li>
        </ul>
      </p>
    </a>
  </li>
  <!-- <li class="security-li">
    <a class="security-a" href="#openModal2">
      <h2 class="security-h2">MAC Spoofing</h2>
      <p class="security-p">
        <ul class="security-p-ul">
          <li>Comming Soon</li>
        </ul>
      </p>
    </a>
  </li> -->
  <li class="security-li">
    <a class="security-a" href="themes.php#vpn">
      <h2 class="security-h2">VPN</h2>
      <p class="security-p">
        <ul class="security-p-ul">
          <li>Was ist VPN?</li>
          <li>Wie funktioniert VPN?</li>
          <li>Zugriff auf regionale Inhalte</li>
        </ul>
      </p>
    </a>
  </li>
  <li class="security-li">
    <a class="security-a" href="#openModal3">
      <h2 class="security-h2">Passwörter</h2>
      <p class="security-p">
        <ul class="security-p-ul">
          <li>Starke Passwörter</li>
          <li>Brute Force</li>
          <li>Wie kann ich mir meine Passwörter merken?</li>
        </ul>
      </p>
    </a>
  </li>
</ul>



<!-- Windows Login -->
<div id="openModal1" class="modalDialog">
  <div>
    <a href="#close" title="close" class="close"><i class="far fa-times-circle"></i></a>
    <h1 class="modal-title">Windows Login</h1>
    <h3>Wie sicher ist es?</h3>
    <p>
      Um es kurz zu fassen: <em>gar nicht</em>. In 2-3 Minuten hat man als Laie das Windows-Login-Passwort umgangen.<br><br>
    </p>
    <h3>Wie erhöhe ich die Sicherheit?</h3>
    <p>
      Einen guten Schutz bietet hierbei Bitlocker. BitLocker ist eine Sicherheitsfunktion von Microsoft, die in bestimmten Versionen
      des Windows-Betriebssystems integriert ist. Das Feature sorgt für die Verschlüsselung der Systemlaufwerke, Festplatten oder
      Wechseldatenträger. Die gespeicherten Daten sind gegen Diebstahl und unbefugtes Lesen geschützt. <br><br>

      Eine andere Möglichkeit ist Secure Boot im
      <a href="https://de.wikipedia.org/wiki/BIOS#:~:text=Das%20BIOS%20%5B%CB%88ba%C9%AA.,PC%20und%20%2Dkompatible%20eingef%C3%BChrt%20wurden.&text=Aufgabe%20des%20BIOS%20ist%20es,das%20Starten%20eines%20Betriebssystems%20einzuleiten." target="_blank">BIOS</a>
      zu aktivieren. Secure Boot verhindert, dass sich Schadsoftware vor dem Start eines
      Betriebssystems einnisten kann. Zudem verhindert es, dass ein Medium wie bspw. ein USB-Stick einfach so ein Betriebssystem booten
      kann. <br>
      Damit diese Einstellung nicht einfach von einem potentiellen Eindringling geändert werden kann empfiehlt es sich ein
      <a href="https://www.inonet.com/wiki/bios-passwort-erstellen/" target="_blank">BIOS-Passwort</a> zu setzen. <br><br>

      Microsoft empfiehlt seit Windows 10 die Anmeldung mit einer
      <a href="https://www.heise.de/tipps-tricks/PIN-Login-bei-Windows-10-so-funktioniert-s-3961196.html#anchor_2" target="_blank">PIN</a>.
      Das hat vor allem sicherheitstechnische Gründe, denn eine PIN ist im Gegensatz zu einem Kennwort immer mit dem entsprechenden Gerät verknüpft.
      Wenn Sie sich mit Ihrem Microsoft-Konto an Ihrem PC anmelden, sind Benutzername und Kennwort nicht lokal auf dem Gerät gespeichert und werden bei
      der Anmeldung an einen Server übertragen. Auf dem Weg dorthin könnten die Daten von Hackern abgefangen werden, die dann Zugriff
      auf alle Dienste haben, die mit Ihrem Microsoft-Konto verbunden sind - beispielsweise Outlook oder OneDrive. Eine PIN wird
      hingegen nicht an einen Server geschickt und dort gespeichert, sondern dient einzig und allein zur Entsperrung eines
      bestimmten Gerätes.
    </p>
  </div>
</div>
<!-- MAC Spoofing 
<div id="openModal2" class="modalDialog">
  <div>
    <a href="#close" title="close" class="close"><i class="far fa-times-circle"></i></a>
    <h1 class="modal-title">MAC Spoofing</h1>
    <h3>Comming Soon</h3>
    <p></p>
  </div>
</div>-->
<!-- Passwörter -->
<div id="openModal3" class="modalDialog">
  <div>
    <a href="#close" title="close" class="close"><i class="far fa-times-circle"></i></a>
    <h1 class="modal-title">Passwörter</h1>
    <h3>Starke Passwörter</h3>
    <p>
      Ein starkes Passwort ist in der heutigen Zeit essenziell. Jedoch entstehen auch heute noch immer oftmals Passwörter
      wie Geburtsdaten, 123456 oder gar nur «password», welche ein Hacker in weniger als 1 Sekunde knacken kann. <br>
      Dies wird oft mittels des sogenannten «Brute-Force-Attacks» durchgeführt. Dabei wird mit einer Art von Wörterbuch
      der Benutzername mit möglichen Passwörtern abgeglichen. Insgesamt sind das ca. 7’100 mögliche Passwörter pro Sekunde. <br>
      <b>Ein starkes Passwort besteht aus mind. 10 Zeichen, Gross- und Kleinbuchstaben, Sonderzeichen und
        steht in keiner Verbindung zu einem reellen Wort.
      </b> <br>
      Im Web findet man verschiedene Tools mit welchem man das eigene Passwort testen kann.
      (Bspw. <a href="https://howsecureismypassword.net/" target="_blank">howsecureismypassword.net</a>)<br>
      Ich selbst brauchte eine gewisse Zeit, bis ich mir verinnerlichte, wie leichtsinnig ich meine Passwörter setzte.
      Deshalb begann ich bei jedem Login, das mir wichtig ist oder ein signifikantes Risiko besteht,
      individuelle Passwörter zu setzten sowie auch überall wo möglich die 2-Faktor-Identifizierung zu aktivieren. <br><br>
    </p>
    <h3>Passwort-Manager</h3>
    <p>
      Daraus resultiert natürlich eine hohe Anzahl an Passwörter, da diese heutzutage überall in Gebrauch sind. Ob nun bei Google,
      Twitter oder beim E-Banking. Man hat also unzählige Logins, bei welchen man sich jedes Mal ein neues Passwort ausdenken muss.
      Wie merkt man sich das?<br>
      Die Antwort ist: <em>gar nicht</em>. Für die meisten wird es nicht möglich sein sich eine hohe Anzahl, voneinander unabhängigen
      Zeichenkombinationen zu merken. Dafür gibt es heutzutage <b>Passwort-Manager</b> wie
      <a href="https://www.lastpass.com/de/" target="_blank">LastPass</a> oder <a href="https://www.dashlane.com/" target="_blank">Dashlane</a>.
      Dort können alle Passwörter und mehr eingetragen werden und sind von überall aus sicher zugänglich.<br>
      Man muss sich also lediglich noch ein Master-Passwort merken.
    </p>
  </div>
</div>



<!-- Script -->
<script>
  $(".open_popup").click(function() {
    $(this).parent(".popup_main").children(".popup_body").addClass("popup_body_show");
  });
  $(".popup_close").click(function() {
    $(".popup_body").removeClass("popup_body_show");
  });
  $(".popup_back").click(function() {
    $(".popup_body").removeClass("popup_body_show");
  });
</script>




<?php include "footer.php"; ?>