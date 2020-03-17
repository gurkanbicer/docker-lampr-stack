<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Gürkan Biçer">
    <title>LAMP-R Stack</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <meta name="theme-color" content="#563d7c">
  </head>
  <body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">LAMP-R Stack</h1>
            <p class="lead">Your local development environment.</p>
            <h4>Installed builts:</h4>
            <ul>
              <li><?php echo apache_get_version(); ?></li>
              <li>
              <?php
              $link = mysqli_connect("mysql", "root", "secret", null);
                if (mysqli_connect_errno()) {
                  printf("MySQL connecttion failed: %s", mysqli_connect_error());
                } else {
                  printf("MySQL Server %s", mysqli_get_server_info($link));
                }
                mysqli_close($link);
              ?>
              </li>
              <li>PHP <?php echo phpversion(); ?></li>
              <li>
                <?php
                  $redis = new Redis();
                  $redis->connect('redis', 6379);
                  echo "Redis Version: " .  $redis->info()['redis_version'];
                ?>
              </li>
            </ul>
            <h4>Links:</h4>
            <ul>
              <li><a href="http://localhost:8080">PhpMyAdmin</a></li>
              <li><a href="/phpinfo.php">PHP Info</a></li>
            </ul>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">LAMP-R Stack with Docker</span>: <a href="https://www.github.com/gurkanbicer/docker-lampr-stack.git">@gurkanbicer</a>
        </div>
    </footer>
</body>
</html>
