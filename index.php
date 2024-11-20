<?php
    include 'header.php'; // Include header
?>

<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container my-4 shadow-img">
    <div class="row">
      <!-- First Row -->
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <a href="swatch/000036.php">
          <img src="img/000036_maik.gif" class="img-fluid" alt="Image 1">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <img src="img/000333.png" class="img-fluid" alt="Image 2" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-iframe-src="swatch/000333.php">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <img src="img/000337.png" class="img-fluid" alt="Image 3">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <img src="img/000342.gif" class="img-fluid" alt="Image 1">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <img src="img/000346.png" class="img-fluid" alt="Image 2">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
        <img src="img/000350.png" class="img-fluid" alt="Image 3">
      </div>
    </div>

    <div class="row">
        <!-- Second Row -->
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000364.png" class="img-fluid" alt="Image 1">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000368.png" class="img-fluid" alt="Image 2">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000372.png" class="img-fluid" alt="Image 3">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000376.png" class="img-fluid" alt="Image 1">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000380.png" class="img-fluid" alt="Image 2">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-4">
          <img src="img/000389.png" class="img-fluid" alt="Image 3">
        </div>
      </div>

</div>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <iframe id="lightboxIframe" src="" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php
    include 'footer.php'; // Include footer
?>
