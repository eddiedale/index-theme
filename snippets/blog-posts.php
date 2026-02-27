<?php

// INDEX LISTING STYLE (DEFAULT)
if($style === 'index') {
    // function that returns the formatted date
    $callback = function($p) {
      return $p->date()->toDate('Y');
    };

    // group items using $callback
    $groupedItems = page('blog')->children()->listed()->sortBy('date', 'desc')->group($callback);

    // output items by year
    foreach ($groupedItems as $year => $itemsPerYear): ?>

         <h2><?= $year ?></h2>
        
        <ul>
            <?php foreach($itemsPerYear as $item): ?>
            <li>
                <a href="<?= $item->url() ?>">
                    <?= $item->title() ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

<?php 
} else { 
    // CONTINUOUS LISTING STYLE (DEFAULT)
    
    foreach (page('blog')->children()->listed()->sortBy('date', 'desc') as $article): ?>
    
    <article class="post">
    
      <main class="flow">
          
        <div class="meta-info">
            <time datetime="<?= $article->published('c') ?>">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 1.3125C3 1.16332 3.05926 1.02024 3.16475 0.914752C3.27024 0.809263 3.41332 0.75 3.5625 0.75C3.71168 0.75 3.85476 0.809263 3.96025 0.914752C4.06574 1.02024 4.125 1.16332 4.125 1.3125V2.25H7.875V1.3125C7.875 1.16332 7.93426 1.02024 8.03975 0.914752C8.14524 0.809263 8.28832 0.75 8.4375 0.75C8.58668 0.75 8.72976 0.809263 8.83525 0.914752C8.94074 1.02024 9 1.16332 9 1.3125V2.25C9.39782 2.25 9.77936 2.40804 10.0607 2.68934C10.342 2.97064 10.5 3.35218 10.5 3.75V9C10.5 9.39782 10.342 9.77936 10.0607 10.0607C9.77936 10.342 9.39782 10.5 9 10.5H3C2.60218 10.5 2.22064 10.342 1.93934 10.0607C1.65804 9.77936 1.5 9.39782 1.5 9V3.75C1.5 3.35218 1.65804 2.97064 1.93934 2.68934C2.22064 2.40804 2.60218 2.25 3 2.25V1.3125ZM3.375 4.5C3.17609 4.5 2.98532 4.57902 2.84467 4.71967C2.70402 4.86032 2.625 5.05109 2.625 5.25V8.625C2.625 8.82391 2.70402 9.01468 2.84467 9.15533C2.98532 9.29598 3.17609 9.375 3.375 9.375H8.625C8.82391 9.375 9.01468 9.29598 9.15533 9.15533C9.29598 9.01468 9.375 8.82391 9.375 8.625V5.25C9.375 5.05109 9.29598 4.86032 9.15533 4.71967C9.01468 4.57902 8.82391 4.5 8.625 4.5H3.375Z" fill="currentColor" style="fill:currentColor;"/>
                </svg>
                <?= $article->published('d.m.Y') ?>
            </time>
        </div>
        
          
          <h2>
              <a href="<?= $article->url() ?>">
                  <?= $article->title() ?>
              </a>
          </h2>
          
          <?= $article->text_content()->kt() ?>
          
      </main>
    
      
    
    </article>
    
    <?php endforeach; ?>

<?php } ?>
