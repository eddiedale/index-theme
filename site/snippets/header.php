<!DOCTYPE html>
<html lang="<?= $site->lang() ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <meta content="<?= $page->title() ?> | <?= $site->title() ?>" property="og:title">
  <meta content="<?= $page->title() ?> | <?= $site->title() ?>" name="twitter:title">

  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" name="description">
  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" property="og:description">
  <meta content="<?= $page->metaDescription()->or($page->text_content()->striptags()->short(255)) ?>" name="twitter:description">

<?php if ($page->ogImage()->isNotEmpty()) : ?>
  <meta property="og:image" content="<?= $page->ogImage()->toFile()->url(); ?>">
  <meta property="twitter:image" content="<?= $page->ogImage()->toFile()->url(); ?>">
  <meta property="og:image:width" content="<?= $page->ogImage()->toFile()->width(); ?>">
  <meta property="og:image:height" content="<?= $page->ogImage()->toFile()->height(); ?>">
<?php elseif(site()->ogImage()->isNotEmpty()) : ?>
  <meta property="og:image" content="<?= site()->ogImage()->toFile()->url(); ?>">
  <meta property="twitter:image" content="<?= site()->ogImage()->toFile()->url(); ?>">
  <meta property="og:image:width" content="<?= site()->ogImage()->toFile()->width(); ?>">
  <meta property="og:image:height" content="<?= site()->ogImage()->toFile()->height(); ?>">
<?php endif ?>

  <meta content="<?= $site->title() ?>" property="og:site_name">
  <link href="<?= $page->url() ?>" rel="canonical">
  <meta content="<?= $page->url() ?>" property="og:url">
  <meta content="website" property="og:type">
  <meta content="summary" name="twitter:card">

  <?= css([
    '/assets/css/style.css',
  ]) ?>

</head>

<body>

