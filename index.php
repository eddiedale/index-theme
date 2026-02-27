<?php

require_once __DIR__ . '/models/default.php';

Kirby::plugin('eddiedale/index-theme', [

    'blueprints' => [
        'site'           => __DIR__ . '/blueprints/site.yml',
        'files/default'  => __DIR__ . '/blueprints/files/default.yml',
        'pages/home'     => __DIR__ . '/blueprints/pages/home.yml',
        'pages/blog'     => __DIR__ . '/blueprints/pages/blog.yml',
        'pages/blogpost' => __DIR__ . '/blueprints/pages/blogpost.yml',
        'pages/default'  => __DIR__ . '/blueprints/pages/default.yml',
        'pages/error'    => __DIR__ . '/blueprints/pages/error.yml',
        'tabs/seo'       => __DIR__ . '/blueprints/tabs/seo.yml',
    ],

    'snippets' => [
        'header'          => __DIR__ . '/snippets/header.php',
        'header-extra'     => __DIR__ . '/snippets/header-extra.php',
        'footer'     => __DIR__ . '/snippets/footer.php',
        'blog-posts' => __DIR__ . '/snippets/blog-posts.php',
        'rss-feed'   => __DIR__ . '/snippets/rss-feed.php',
        'sitemap'    => __DIR__ . '/snippets/sitemap.php',
    ],

    'templates' => [
        'home'     => __DIR__ . '/templates/home.php',
        'blog'     => __DIR__ . '/templates/blog.php',
        'blogpost' => __DIR__ . '/templates/blogpost.php',
        'default'  => __DIR__ . '/templates/default.php',
        'error'    => __DIR__ . '/templates/error.php',
    ],

    'collections' => [
        'posts' => function ($site) {
            return $site->find('blog')->children()->listed()->sortBy('date', 'desc');
        },
    ],

    'pageModels' => [
        'default' => DefaultPage::class,
    ],

    'routes' => [
        [
            'pattern' => 'feed.xml',
            'action'  => function () {
                $title       = (string)site()->title();
                $description = (string)site()->siteDescription()->value() ?: '';
                $posts       = kirby()->collection('posts')->limit(999);
                $content     = snippet('rss-feed', compact('title', 'description', 'posts'), true);

                http_response_code(200);
                header('Content-Type: application/rss+xml; charset=UTF-8');
                header('Content-Length: ' . strlen($content));
                echo $content;
                die();
            },
        ],
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $pages   = site()->pages()->index();
                $ignore  = kirby()->option('sitemap.ignore', ['error']);
                $content = snippet('sitemap', compact('pages', 'ignore'), true);

                header('Content-Type: application/xml; charset=UTF-8');
                echo $content;
                exit;
            },
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return redirect('sitemap.xml', 301);
            },
        ],
    ],

]);
