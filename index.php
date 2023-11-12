<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex collapse navbar-collapse" id="navbarSupportedContent">
      <?php
      $activeBeranda = '';
      $activeTentangKami = '';
      $activeKontakKami = '';
      if (isset($_GET['page']) && $_GET['page'] == 'beranda') {
        $activeBeranda = 'active';
        $activeTentangKami = '';
        $activeKontakKami = '';
      } else if (isset($_GET['page']) && $_GET['page'] == 'tentang-kami') {
        $activeBeranda = '';
        $activeTentangKami = 'active';
        $activeKontakKami = '';
      } else if (isset($_GET['page']) && $_GET['page'] == 'kontak-kami') {
        $activeBeranda = '';
        $activeTentangKami = '';
        $activeKontakKami = 'active';
      }
      ?>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $activeBeranda ?>" href="?page=beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $activeTentangKami ?>" href="?page=tentang-kami">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $activeKontakKami ?>" href="?page=kontak-kami">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <?php
  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'tentang-kami') {
      include './pages/tentang-kami.php';
    } else if ($_GET['page'] == 'kontak-kami') {
      include './pages/kontak-kami.php';
    } else {
      include './pages/beranda.php';
    }
  } else {
    include './pages/beranda.php';
  }
  ?>
</div>

</body>
</html>
