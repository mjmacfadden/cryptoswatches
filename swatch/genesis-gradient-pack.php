<?php
     $og_image = 'https://mjmacfadden.github.io/cryptoswatches/img/featured-img/-featured-img.jpg'; // Set before including header
    include '../header.php'; // Include header
?>
<div class="swatch-hero py-5" style="background-color:;">
    <div class="container my-4 shadow-img">
        <div class="d-flex justify-content-center align-items-center mb-4">
              <video controls width="720" poster="poster.jpg">
                <!-- MP4 (H.264) — most widely supported -->
                <source src="vid/genesis-gradient-pack-opening.mp4" type="video/mp4">

                <!-- Fallback content for very old browsers -->
                Your browser does not support HTML5 video. 
                <a href="videos/sample.mp4">Download the video</a>.
            </video>
        </div>
        <a href="swatch/.php#swatch-description">
            <i class="bi bi-chevron-double-down"></i>
        </a>
    </div>
</div>

<div class="container my-4 shadow-img">
    <div class="row mt-4 pb-5" id="swatch-description">
        <h1>The Genesis Gradient Pack</h1>
        <h4>by Michael Macfadden</h4>
        <h2>Common Crypto Swatches</h2>
        <p>The Genesis Gradient pack includes ten crypto swatches. Upon opening, nine of your ten crypto swatches will be of a common rarity. For each of those nine, you have an equal chance of receiving a yellow, green, or red crypto swatch.</p>
        <div>
        <h2>Dual-Blend Gradients</h2>
        <p>The 10th card offers an equal chance of receiving one of three dual gradients: a yellow/green, a yellow/red, or a red/green. Don&rsquo;t worry though. You can&nbsp;<a title="Blend" href="https://neftyblocks.com/c/cryptoswatch/blends" target="_blank" rel="noopener">blend</a>&nbsp;your common crypto swatches to make a dual gradient.</p>
        <div>
        <h2>Tri-Blend Gradients</h2>
        <h3>Max Supply 100</h3>
        <p>Only 100 Tri-Blend Gradient Crypto Swatches will ever exist. Earn one by blending each of the Dual-Blend Gradients above.</p>
        <p>Lucky pack owners could obtain a tri-blend by purchasing just one pack.</p>
        <p>In many cases, you can obtain the entire set by purchasing just two packs. Best of luck!</p>

    </div>
</div>

<div class="swatch-footer py-5" style="background-color:;">
    <div class="container my-4 shadow-img">
        <div class="row mt-4">
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/0000.png" class="img-fluid lightbox" alt="">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/0000.png" class="img-fluid lightbox" alt="">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/0000.png" class="img-fluid lightbox" alt="">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/0000.png" class="img-fluid lightbox" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="swatch/.php"><i class="bi bi-arrow-left"></i> </a>
            </div>
            <div class="col-6 text-end">
                <a href="swatch/.php"> <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
    include '../footer.php'; // Include footer
?>
