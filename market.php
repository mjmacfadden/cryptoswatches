<?php
    include 'header.php'; // Include header
?>

<div class="container py-5">
    <div class="row">
        <div class="col text-center">
            <div class="spinner-border market-spinner" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <neftyblocks-market collection="cryptoswatch"> </neftyblocks-market>

        <script type="module">
            // for automatic updates of the market (can be very slow)
            //import 'https://unpkg.com/@neftyblocks/market@latest';
            // needs manual updating if new version is live (fastest)
            //import 'https://unpkg.com/@neftyblocks/market@0.6.2';
            import 'https://cdn.jsdelivr.net/npm/@neftyblocks/market@latest'
        </script>
    </div>
</div>

<?php
    include 'footer.php'; // Include footer
?>
