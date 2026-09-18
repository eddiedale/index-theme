# Your Index site

This folder is a complete [Kirby](https://getkirby.com) site running the
[Index theme](https://github.com/eddiedale/index-theme) — Kirby and the theme
are already included, with starter content in place.

## Run it

- **On a web server:** point the server at this folder and open the site.
- **Locally, no server needed:** open a terminal in this folder and run

  ```bash
  php -S localhost:8000 kirby/router.php
  ```

  then visit `http://localhost:8000`.

Open `/panel` in the browser and create your account. That's it — start writing.

## Make it yours

Edit content in the Panel. Colors, fonts and options live in the Panel's site
settings. Your customisations belong in `site/` and `content/` — the theme stays
untouched in `site/plugins/index-theme/`, so theme updates never overwrite your work.
To override any template or snippet, place a file with the same name in the matching
`site/` folder ([details](https://github.com/eddiedale/index-theme#customisation)).

## Update

- **Theme:** replace `site/plugins/index-theme/` with the latest
  [theme release](https://github.com/eddiedale/index-theme/releases)
  — or `composer update eddiedale/index-theme` if you use Composer.
- **Kirby:** replace the `kirby/` folder with the latest
  [Kirby release](https://github.com/getkirby/kirby/releases)
  — or `composer update getkirby/cms`.

## License

Kirby is free for local development; production use requires a
[Kirby license](https://getkirby.com/buy). The theme is MIT-licensed.
