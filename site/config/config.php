<?php

return [
    'debug' => false,
    'yaml.handler' => 'symfony',
    'panel.vue.compiler' => false,
    'contactEmail' => 'mail@test.com', // Used in "reply by email" on blog posts and rss feed 
    'routes' => [
        [
            'pattern' => 'feed.xml',
            'action'    => function () {
                $title          = site()->title();
                $description    = page('home')->siteDescription();
                $posts          = kirby()->collection('posts')->limit(60);
                $content        = snippet('rss-feed', compact('title', 'description', 'posts'), true);

                http_response_code(200);
                header('Content-Type: application/rss+xml; charset=UTF-8');
                header('Content-Length: ' . strlen($content));
                echo $content;
                die();
            }
        ],
        [
            'pattern' => 'sitemap.xml',
            'action'  => function() {
                $pages = site()->pages()->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option('sitemap.ignore', ['error']);

                $content = snippet('sitemap', compact('pages', 'ignore'), true);

                // return response with correct header type
                header('Content-Type: application/xml; charset=UTF-8');
                echo $content;
                exit;
            }
        ],
        [
          'pattern' => 'sitemap',
          'action'  => function() {
            return redirect('sitemap.xml', 301);
          }
        ]
      ],
      'sitemap.ignore' => ['error']
];
