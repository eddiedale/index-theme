<?php snippet('header'); ?>

<article class="defaultPage">

    <div aria-label="Breadcrumb" class="breadcrumbs">
        <a href="<?= $site->url() ?>">Home</a> /
        <a class="current" href="<?= $page->url() ?>" aria-current="page"><?= $page->title()->esc() ?></a>
    </div>

    <h1><?= $page->title()->esc() ?></h1>

    <div class="flow">
        <?= $page->text_content()->kt() ?>
    </div>

</article>

<?php snippet('footer'); ?>
