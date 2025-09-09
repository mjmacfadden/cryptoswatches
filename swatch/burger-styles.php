<?php
     $og_image = 'https://mjmacfadden.github.io/cryptoswatches/img/featured-img/burger-styles-featured-img.jpg'; // Set before including header
    include '../header.php'; // Include header
?>
<div class="swatch-hero position-relative" style="background-color:;">
  <div class="ratio ratio-16x9">
    <video autoplay muted loop playsinline poster="poster.jpg">
      <source src="vid/burger-styles-pack-opening.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <!-- Chevron overlay -->
  <a href="swatch/burger-styles.php#swatch-description" 
     class="position-absolute bottom-0 start-50 translate-middle-x mb-3 text-white fs-1">
    <i class="bi bi-chevron-double-down"></i>
  </a>
</div>

<div class="container my-4 pb-4 shadow-img">
    <div class="row mt-4 pb-5" id="swatch-description">
        <h1>The Genesis Gradient Pack</h1>
        <h4>by Michael Macfadden</h4>
        <h2>The Build A Burger Pack</h2>
        <p>Each &ldquo;Build A Burger Pack&rdquo; contains nine ingredient crypto swatches. Each of the nine crypto swatches has an equal chance of being one of the five ingredients featured below: Bun, Lettuce, Beef, Cheese, or special sauce. Lucky pack recipients will have enough ingredients to build one of the burgers featured below.</p>
    </div>
    <div class="row">    
        <div class="col d-flex justify-content-center align-items-center mb-4">
            <img src="img/000099.png" class="img-fluid lightbox" alt="Burger Styles">
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-4">
            <img src="img/000100.png" class="img-fluid lightbox" alt="Burger Styles">
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-4">
            <img src="img/000101.png" class="img-fluid lightbox" alt="Burger Styles">
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-4">
            <img src="img/000102.png" class="img-fluid lightbox" alt="Burger Styles">
        </div>
        <div class="col d-flex justify-content-center align-items-center mb-4">
            <img src="img/000103.png" class="img-fluid lightbox" alt="Burger Styles">
        </div>
    </div>
</div>
<div style="background:#f1f1f1;">
    <div class="container pt-1 pb-3 shadow-img">
        <div class="row" id="swatch-description">
            <h2>Burger Blends</h2>
            <p>In case it isn&rsquo;t obvious, you&rsquo;ll need one &ldquo;ingredient&rdquo; crypto swatch for each ingredient featured in the burgers below. A single would require: 2 buns, 1 Lettuce, 1 Beef, 1 Cheese, and 1 Special Sauce for example. Lucky pack recipients may be able to build a triple burger with just one pack.</p>
        </div>
        <div class="row">    
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000104.png" class="img-fluid lightbox" alt="Burger Styles">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000105.png" class="img-fluid lightbox" alt="Burger Styles">
            </div>
            <div class="col d-flex justify-content-center align-items-center mb-4">
                <img src="img/000106.png" class="img-fluid lightbox" alt="Burger Styles">
            </div>
        </div>
    </div>
</div>
<div style="background:#161616;" class="py-5">
    <div class="container my-4 shadow-img">
        <div class="row pt-4 pb-5" id="swatch-description">
            <div class="col-sm-6 text-light">
                <h2>About the Build A Burger Pack</h2>
                <h3>The Build a Burger Pack</h3>
                <p>We&rsquo;ve teamed up with&nbsp;<strong><a title="@burger_styles" href="https://twitter.com/burger_styles" target="_blank" rel="noopener">@burger_styles</a></strong>&nbsp;to bring you a fun pack filled with tastey NFTs. Buy a pack below, then open it to reveal your ingredients, and then blend them to form the burger of your dreams.</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center align-items-center mb-4">
                <img src="img/burger-styles-pack.jpg" class="img-fluid lightbox" alt="Burger Styles">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="swatch/cryptopups.php"><i class="bi bi-arrow-left"></i> CRYPTOPUPS</a>
            </div>
            <div class="col-6 text-end">
                <a href="swatch/low-poly-media.php">LOW POLY MEDIA <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>


<?php
    include '../footer.php'; // Include footer
?>
