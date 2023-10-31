<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Store | Adam Sochorec</title>
  </head>

  <body id="store-index" class="store">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h1 class="reveal">Recently published</h1>
            <p class="reveal">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui
              voluptatem blanditiis expedita omnis corrupti id rem perspiciatis
              possimus, cumque cum optio ut illo incidunt laborum ad magnam est,
              architecto dignissimos.
            </p>
            <a href="./product" class="cta flex-center hideCTA-max reveal"
              >Learn more &#8250;</a
            >
          </div>
          <div class="grid-item v-stretch reveal">
            <img src="./2021-04-13-00596.jpg" />
            <a href="./product" class="cta flex-center hideCTA-min reveal"
              >Learn more &#8250;</a
            >
          </div>
        </div>
        <hr class="reveal" />
        <!-- PRODUCTS START -->
        <section class="product-grid">
          <!-- PRODUCT 1 START -->
          <div class="grid-item reveal">
            <img class="reveal" src="./prints/21041385565587.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 1 END -->
          <!-- PRODUCT 2 START -->
          <div class="grid-item reveal">
            <img src="./prints/21041425600.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 2 END -->
          <!-- PRODUCT 3 START -->
          <div class="grid-item reveal">
            <img src="./prints/21042289925635.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 3 END -->
          <!-- PRODUCT 4 START -->
          <div class="grid-item reveal">
            <img src="./prints/21042593335697.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 4 END -->
          <!-- PRODUCT 5 START -->
          <div class="grid-item reveal">
            <img src="./prints/21071948976502.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 5 END -->
          <!-- PRODUCT 6 START -->
          <div class="grid-item reveal">
            <img src="./prints/21082261146778.jpg" />
            <div class="text-wrapper flex-center">
              <h3>Wall print</h3>
              <p>Lorem ipsim dolor kokot mrdka</p>
              <a href="./product" class="cta cta-2 flex-center">Buy &#8250;</a>
            </div>
          </div>
          <!-- PRODUCT 6 END -->
          <!-- PRODUCT 7 START -->
        </section>
      </article>
      <!-- PRODUCTS END -->
      <!-- CONTACT FORM START -->

      <!-- CONTACT FORM END -->
    </main>
    <?php echo $blog['extra-footer'] ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>