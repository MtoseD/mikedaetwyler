<?php include "heading.php"; ?>



<div class="collapsible-container">
    <!-- Eigene Projekte -->
    <h2 class="documentaries-title-first">Eigene Projekte</h2>

    <button class="collapsible collapsible-first"><a id="lamp-server">Raspberry Pi - LAMP Server</a></button>
    <div class="content">
        <object class="collapsible-object" data="../documents/Raspberry Pi - LAMP Server.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/Raspberry Pi - LAMP Server.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <!-- <button class="collapsible">Raspberry Pi - Mail Server</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/Raspberry Pi - Mail Server.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/Raspberry Pi - Mail Server.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div> -->

    <button class="collapsible">Raspberry Pi - Objekterkennung</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/Raspberry Pi - Objekterkennung.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/Raspberry Pi - Objekterkennung.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <!-- <button class="collapsible">Arduino Project</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/ÜK 105 - Zusammenfassung.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/ÜK 105 - Zusammenfassung.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div> -->

    <!-- Allgemeines -->
    <h2 class="documentaries-title">Allgemeines</h2>

    <button class="collapsible">GitHub - Einführung</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/GitHub - Einführung.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/GitHub - Einführung.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <button class="collapsible">Tastenkombinationen</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/Tastenkombination.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/Tastenkombination.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <h2 class="documentaries-title">Informatiker - Lehre</h2>

    <!-- Informatiker - Lehre -->
    <button class="collapsible">Docker - Zusammenfassung</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/Zusammenfassung-Docker.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/Zusammenfassung-Docker.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <button class="collapsible">ÜK 105 - Zusammenfassung</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/ÜK 105 - Zusammenfassung.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/ÜK 105 - Zusammenfassung.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>

    <button class="collapsible">ÜK 330 - Zusammenfassung</button>
    <div class="content">
        <object class="collapsible-object" data="../documents/ÜK 330 - Spick.pdf" type="application/pdf">
            <div class=" btn-container mail-container">
                <a href="../documents/ÜK 330 - Spick.pdf"><button class="download-btn mail">Download<i class="download-icon fas fa-download"></i></button></a>
            </div>
        </object>
    </div>
</div>


<!-- Script -->
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>


<?php include "footer.php"; ?>