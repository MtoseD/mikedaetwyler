<?php include "heading.php"; ?>




<div class="collapsible-container">
    <button class="collapsible collapsible-first">Raspberry Pi - LAMP Server</button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/Raspberry Pi - LAMP Server.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible">Raspberry Pi - Mail Server</button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/Raspberry Pi - Mail Server.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible">ÜK 105 - Zusammenfassung</button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
    <button class="collapsible"></button>
    <div class="content">
        <iframe class="collapsible-object" src="../documents/ÜK 105 - Zusammenfassung.pdf" frameborder="0"></iframe>
    </div>
</div>

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