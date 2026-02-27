# Index – A minimal portfolio and blog theme for Kirby CMS

![Screenshot of the Index Theme for Kirby CMS](kirby-index-theme-screenshot.jpg)

A minimal portfolio and blog theme for Kirby CMS. Built for Kirby 5 + PHP 8.4.

Index is built for easy updates, not elaborate structure. No menu, no case studies, no complex navigation – because in my experience, that's where people get stuck and stop updating their portfolios.

List your work. Write when you want. That's it. The templates are simple to extend if you need more later.

## Features

### RSS Feed
Built-in RSS feed for your blog. Let readers subscribe and follow your writing without any extra setup.

### Sitemap
Automatic XML sitemap generation for search engines. Better indexing out of the box.

### Minimal CSS
Under 6kb of CSS. Fast loading, easy to understand, simple to modify. No preprocessors, no frameworks, no complexity.

### Adjustable colors (two-color palette)
Pick your primary and accent color. That's it. The constraint keeps your site cohesive and makes customization trivial. Change two variables, done.

### Geist font family
Ships with [Geist](https://vercel.com/font) by Vercel — Geist Pixel as the main display font, Geist Sans for body text. Both are licensed under the [SIL Open Font License](assets/fonts/OFL.txt) and load fast. Swap them out by overriding the CSS variables.

### Two blog listing styles
Choose between an index-style listing grouped by year, or a continuous feed that shows full posts in chronological order. Toggle between them from the Panel.

### Breadcrumbs and basic SEO fields
Essential SEO handled for you. Page titles, meta descriptions, breadcrumbs for navigation context. The basics done right.

### No build tools
No npm, no build process, no compilation step. Edit templates, refresh browser. That's it. Perfect for quick tweaks and easy deployment.

### Extensible via snippet overrides
Drop a `header-extra.php` snippet into `site/snippets/` to inject project-specific `<head>` content — OG images, analytics, custom meta tags — without touching the theme.

## Installation

### Requirements

- PHP 8.4 or higher
- A web server
- Kirby 5 (license required for production, see License section below)

### How to install this theme

Index is installed as a Kirby plugin. Starting from a basic Kirby installation:

1. Open your Kirby project folder. You should see a `site/` directory at the root.
2. Inside `site/`, look for a `plugins/` folder. If it doesn't exist, create it.
3. Download or clone this repository into that folder so the structure looks like this:

```
site/
└── plugins/
    └── index-theme/
        ├── index.php
        ├── blueprints/
        ├── templates/
        └── ...
```

4. That's it. Kirby picks up the plugin automatically on next load — no configuration needed.
5. Navigate to `/panel` in your browser to set up your content.

### Customisation

Kirby always checks `site/templates/`, `site/snippets/`, and `site/blueprints/` before the plugin. To override anything from the theme without modifying the plugin itself, place a file with the same name in the corresponding `site/` folder.

For example, to customise the header, create `site/snippets/header.php` and Kirby will use that instead of the plugin's version.

## What's Kirby?

-   **[getkirby.com](https://getkirby.com)** – Get to know the CMS.
-   **[Try it](https://getkirby.com/try)** – Take a test ride with our online demo. Or download one of our kits to get started.
-   **[Documentation](https://getkirby.com/docs/guide)** – Read the official guide, reference and cookbook recipes.
-   **[Issues](https://github.com/getkirby/kirby/issues)** – Report bugs and other problems.
-   **[Feedback](https://feedback.getkirby.com)** – You have an idea for Kirby? Share it.
-   **[Forum](https://forum.getkirby.com)** – Whenever you get stuck, don't hesitate to reach out for questions and support.
-   **[Discord](https://chat.getkirby.com)** – Hang out and meet the community.
-   **[YouTube](https://youtube.com/kirbyCasts)** - Watch the latest video tutorials visually with Bastian.
-   **[Mastodon](https://mastodon.social/@getkirby)** – Spread the word.
-   **[Bluesky](https://bsky.app/profile/getkirby.com)** – Tell a friend.

## License

Index is a theme for Kirby 5 and is not a free product. You must purchase a Kirby license from [getkirby.com](https://getkirby.com/buy) to use it in production.

The theme files (templates, snippets, assets, etc.) are provided under the MIT License. You're free to use and modify them as long as you include the original license and copyright notice.
