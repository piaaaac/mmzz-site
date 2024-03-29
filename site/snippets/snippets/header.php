<?php
$url = "https://matildemozzanega.com/";
$url = $site->url();
$urlSocialImg = $url. "/assets/images/mmzz-social-card.jpg";
$title = randomLogo() ." ". $page->title();
$safeTitle = "MMZZZ ". $page->title();
$desc = "Matilde Mozzanega Jewellery Designer";
?>

<!DOCTYPE html><html><head>

  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?= $desc ?>">
  <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">

  <!-- TWITTER -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@matilde_muozz" />
  <meta name="twitter:title" content="<?= $safeTitle ?>" />
  <meta name="twitter:description" content="<?= $desc ?>" />
  <meta name="twitter:image" content="<?= $urlSocialImg ?>" />

  <!-- OG -->
  <meta property="og:url" content="<?= $url ?>" />
  <meta property="og:image" content="<?= $urlSocialImg ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= $safeTitle ?>" />
  <meta property="og:description" content="<?= $desc ?>" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164599705-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-XXXXXXXXXXXXX-1');
  </script>
  -->

  <!-- Vendor -->
  <script src="<?= $kirby->url('assets') ?>/lib/jquery-3.5.1/jquery-3.5.1.min.js"></script>
  
  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="<?= $kirby->url("assets") ?>/css/bootstrap-custom.css">
  <link rel="stylesheet" type="text/css" href="<?= $kirby->url("assets") ?>/css/index.css?v=2">

</head>
<body>