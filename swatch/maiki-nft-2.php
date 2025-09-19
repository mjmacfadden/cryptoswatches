<?php
     $og_image = 'https://mjmacfadden.github.io/cryptoswatches/img/featured-img/-featured-img.png'; // Set before including header
    include '../header.php'; // Include header
?>
<div class="swatch-hero py-5" style="background-color:#735ED3;">
    <div class="container my-4 shadow-img">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="img/000429.png" class="img-fluid" alt="Maiki_NFT">
        </div>
        <a href="swatch/maiki-nft-2.php#swatch-description">
            <i class="bi bi-chevron-double-down"></i>
        </a>
    </div>
</div>

<div class="container my-4 shadow-img">
    <div class="row mt-4 pb-5" id="swatch-description">
        <h1>MAIKI_NFT</h1>
        <h4>by Michael Macfadden</h4>
        <video preload="metadata" style="width: 100%; height: auto;" controls>
            <!-- Replace video.mp4 with your file path -->
            <source src="vid/maiki-nft.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="swatch-footer py-5" style="background-color:#B9AEE9;">
    <div class="container my-4 shadow-img">
        <div class="row mt-4">
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000427.png" class="img-fluid lightbox" alt="Maiki_NFT">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000428.png" class="img-fluid lightbox" alt="Maiki_NFT">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000429.png" class="img-fluid lightbox" alt="Maiki_NFT">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000430.gif" class="img-fluid lightbox" alt="Maiki_NFT">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="swatch/esthetic_monte.php"><i class="bi bi-arrow-left"></i> ESTHETIC_MONTE</a>
            </div>
            <div class="col-6 text-end">
                <a href="swatch/dollzbroken.php">DOLLZBROKEN <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
    include '../footer.php'; // Include footer
?>
