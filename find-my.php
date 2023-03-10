<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find My</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="find-my">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <?php
        $allowed_ids = array("bike", "drone", "SSD", "leatherman", "MacBook", "mouse", "AirPods", "keys", "wallet", "bottle", "helmet", "iPhone");
        $id = $_GET["id"];
        
        if (!in_array($id, $allowed_ids)) {
            http_response_code(404);
            include('404.php');
            exit;
        }
        ?>
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname-current find-my"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <dotlottie-player
          src="/img/lottie/track.lottie"
          background="transparent"
          speed="1"
          autoplay
          loop
        ></dotlottie-player>
        <h2>
          It looks like you have found my
          <?php echo $id; ?>, please <a href="/#contact">write me</a> or give me
          a call at <a href="tel:50104776p45">+4550104776</a>! <br /><br />
          Thanks!
        </h2>

        <!-- logs - url: https://adamsochorec.com/find-my?id=xxx -->
        <?php
          $logFile = 'AO.klFxA0NYSZ-VoK7TNhGXX7IQX7v1QkP.oTpagd6dKLdep9.5dR.5nL-I3D1vZ-on2ywieY-Z./logs-find-my.txt';
          $id = $_GET['id'];
          $time = date('Y-m-d H:i:s');
      
          // Get the user's geolocation
          $location = "";
          if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
              $location = $_SERVER['HTTP_CLIENT_IP'];
          } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
              $location = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
              $location = $_SERVER['REMOTE_ADDR'];
          }

        // Append the log to the logs.php file
        $log = "QR code '$id' was scanned at $time from I.P. $location.\n";
        file_put_contents($logFile, $log . file_get_contents($logFile));
        ?>
        <hr />
      </article>
    </main>
    <script
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
