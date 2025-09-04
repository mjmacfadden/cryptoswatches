<?php
     $og_image = 'https://mjmacfadden.github.io/cryptoswatches/img/featured-img/testing-featured-img.jpg'; // Set before including header
    include '../header.php'; // Include header
?>
<div class="swatch-hero py-5" style="background-color:#121212;">
    <div class="container my-4 shadow-img">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="img/000037a.gif" class="img-fluid" alt="Winand">
        </div>
        <a href="swatch/this-is-a-test.php#swatch-description">
            <i class="bi bi-chevron-double-down"></i>
        </a>
    </div>
</div>

<div class="container my-4 shadow-img">
    <div class="row mt-4 pb-5" id="swatch-description">
        <h1>This is a test</h1>
        <h4>by Michael Macfadden</h4>
        <p>A unique part of working on the blockchain is that there really is no undo button. Once your transaction is committed to the ledger, it&rsquo;s there forever. Ctrl (Command) + Z doesn&rsquo;t really work, and that&rsquo;s kind of the whole pont. That&rsquo;s how we know we can trust it.</p>
        <p>That does present a bit of challenge, however, to those learning the ins-and-outs this new technology. Sometimes you need to test various things and the only way to really do that is live. Thus, this crypto swatch is, and will be, the one we use whenever we are testing something out. Our first test was to figure out how to conduct time limited drops with specific start and stop times.</p>
        <p>If you scooped mint No. 11 during the five minute window that the drop was live, congrats! This crypto swatch is currently pretty rare. One more thing, while it does say, &ldquo;NOT FOR RESALE,&rdquo; we actually don&rsquo;t care if you resell it.</p>
    </div>
    <div class="row pt-5">
        <div class="col-6">
            <a href="swatch/maiki-nft.php"><i class="bi bi-arrow-left"></i> MAIKI NFT</a>
        </div>
        <div class="col-6 text-end">
            <a href="swatch/april-fools.php">THE 1ST OF APRIL <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>


<?php
    include '../footer.php'; // Include footer
?>
