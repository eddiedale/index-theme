<?php snippet("header"); ?>

<article class="home">

  <h1 class="siteTitle"><?= site()->title() ?></h1>

  <?php if (site()->siteDescription()->isNotEmpty()): ?>
  <p><?= site()->siteDescription() ?></p>
  <?php endif ?>

  <?php if(page()->introText()->isNotEmpty()) : ?>
    <div class="flow">
      <?= page()->introText()->kt(); ?>
    </div>
  <?php endif; ?>


  <?php if(page()->highlightedProjects()->isNotEmpty()) : ?>
  <div class="highlightedProjects">
    <h2>Selected Projects</h2>

    <?php foreach (page()->highlightedProjects()->toBlocks() as $block): ?>
      <div class="highlightedProject">
        <a href="<?= $block->link()->toUrl() ?>">
          <img src="<?= $block->image()->toFile()->url() ?>" alt="<?= $block->image()->toFile()->alt() ?>">
        </a>
        <a href="<?= $block->link()->toUrl() ?>">
          <h3><?= $block->title() ?></h3>
        </a>
      </div>
    <?php endforeach ?>
  </div>
  <?php endif; ?>


  <div>
    <h2>Other projects</h2>

    <ul>
    <?php foreach ($page->projects()->toStructure() as $project) : ?>
      <li class="flex-justify">
        <?php if ($project->url()->isNotEmpty()): ?>
        <a href="<?= $project->url() ?>"><?= $project->title() ?></a>
        <?php else: ?>
        <?= $project->title() ?>
        <?php endif; ?>
        <p><?= $project->year() ?></p>
      </li>
    <?php endforeach; ?>
    </ul>

  </div>

  <?php if(page()->textField()->isNotEmpty()) : ?>

    <div class="flow">
      <?= page()->textField()->kt(); ?>
    </div>

  <?php endif; ?>

</article>

<?php snippet("footer"); ?>
