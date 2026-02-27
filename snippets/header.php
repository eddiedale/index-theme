<!DOCTYPE html>
<html lang="<?= $site->lang() ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=2">

  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <meta content="<?= $page->title() ?> | <?= $site->title() ?>" property="og:title">
  <meta content="<?= $page->title() ?> | <?= $site->title() ?>" name="twitter:title">

  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" name="description">
  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" property="og:description">
  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" name="twitter:description">

  <?php snippet('header-extra') ?>

  <meta content="<?= $site->title() ?>" property="og:site_name">
  <link href="<?= $page->url() ?>" rel="canonical">
  <meta content="<?= $page->url() ?>" property="og:url">
  <meta content="website" property="og:type">
  <meta content="summary" name="twitter:card">

  <?= css([
    '/media/plugins/eddiedale/index-theme/css/style.css?v=1.01',
    '/media/plugins/eddiedale/index-theme/css/prism.css'
  ]) ?>

  <?php if (!$kirby->user()) : ?>
  <script async src="https://plausible.io/js/pa-CDt4qX-m5MLLNVMHjP4HB.js"></script>
  <script>
    window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
    plausible.init()
  </script>
  <?php endif; ?>


</head>

<body>

