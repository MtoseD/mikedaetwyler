<?php include "heading.php"; ?>

<!-- Java Script -->




<!-- Post-Its -->
<ul class="security-ul">
  <li class="security-li">
    <a class="security-a" href="#">
    <div class="modal-dialog modal-dialog-scrollable modal-xl"></div>
      <h2 class="security-h2">Title #1</h2>
      <p class="security-p"></p>
    </a>
  </li>
  <li class="security-li">
    <a class="security-a" href="#myModal">
      <h2 class="security-h2">Title #2</h2>
      <p class="security-p"></p>
    </a>
  </li>
  <li class="security-li">
    <a id="myBtn" class="security-a" href="#">
      <div id="myModal" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, <br>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            <br><br>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, <br>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
      <p class="security-p"></p>
    </a>
  </li>
</ul>









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>

<!-- Trigger the modal with a button -->
<a href="#Modal" class="btn btn-info btn-lg">Open modal</a>
<!-- Modal -->
<div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
  </div>
  <div class="modal-body">
    <p>Some text in the modal.</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

  </div>
</div>
<script>
$('a[href$="#Modal"]').on( "click", function() {
   $('#Modal').modal('modal-content');
});
</script>




<?php include "footer.php"; ?>