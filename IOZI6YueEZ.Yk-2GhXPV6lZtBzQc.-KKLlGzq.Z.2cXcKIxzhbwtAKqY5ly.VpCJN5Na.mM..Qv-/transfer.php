<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>File Transfer</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="transfer">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <?php
        $allowed_ids = array("fileees.zip", "anothershit.zip");
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
            <span class="pathname-current transfer"></span
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
        <?php
        $file_path = $id; // replace $id with the actual value of your variable

        if (file_exists($file_path)) {
            $file_size = filesize($file_path);
        
            // convert to KB, MB, GB, or TB as appropriate
            if ($file_size >= 1099511627776) { $file_size = sprintf('%.2f TB',
        $file_size / 1099511627776); } elseif ($file_size >= 1073741824) {
        $file_size = sprintf('%.1f GB', $file_size / 1073741824); } elseif
        ($file_size >= 1048576) { $file_size = sprintf('%.0f MB', $file_size /
        1048576); } elseif ($file_size >= 1024) { $file_size = sprintf('%.0f
        KB', $file_size / 1024); } else { $file_size = sprintf('%d bytes',
        $file_size); } } else { echo 'File not found'; } ?>
        <h2>
          <?php echo $id; ?>
        </h2>
        <br />
        <h2><?php echo $file_size ?></h2>

        <br />
        <a href="<?php echo $id; ?>"
          ><section class="btn-area flex-center">
            <div id="btn"></div>
            <div class="btn-shadow"></div>
          </section>
        </a>

        <?php
        $logFile = '../AO.klFxA0NYSZ-VoK7TNhGXX7IQX7v1QkP.oTpagd6dKLdep9.5dR.5nL-I3D1vZ-on2ywieY-Z./logs-transfer.txt';
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
        
        // Append the log to the downloads.txt file
        $log = "File '$id' was downloaded at $time from I.P. $location.\n";
        file_put_contents($logFile, $log, FILE_APPEND);
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
