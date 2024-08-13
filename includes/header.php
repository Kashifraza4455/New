<!DOCTYPE html>
<html>

<head>
  <title><?php if (isset($page) && is_string($page)) {
            echo $page;
          } else {
            echo 'project ';
          } ?></title>
  <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                      echo $pageDesc;
                                    } else {
                                      echo 'desired description';
                                    } ?> />
  <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                  echo $pageTag;
                                } else {
                                  echo 'desired tag';
                                } ?> />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="images/logo.png" type="image/png" sizes="114*114">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <!-- link owl carasoul  -->
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <!-- link slick carasoul  -->
  <link href="css/slick.css" rel="stylesheet" type="text/css">
  <link href="css/slick-theme.css" rel="stylesheet" type="text/css">

  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  
</head>

<body>
  <div class="header1">
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <img src="images/logo.png" alt="" class="img-fluid" style="width: 10%;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
          </ul>
          <form class="d-flex">
            <div class="header">
              <a href="button.php">LOGIN</a>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </div>