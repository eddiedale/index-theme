# Changelog

## 1.1.0 — Upcoming

### Changed
- Restructured entire theme as a self-contained Kirby plugin. Templates, snippets, blueprints, assets, collections, models, and routes are all registered via `Kirby::plugin()`. Top-level `site/` directories are now empty by default, with Kirby's native override system allowing per-project customisation.
- Replaced monospaced font with the [Geist](https://vercel.com/font) font family by Vercel. Geist Pixel is used as the main display font, Geist Sans for body text in blog posts. Both are open source.
- `siteDescription` field moved from the home page blueprint to the site blueprint, making it available globally (used on the home page and in the RSS feed).
- RSS feed title and description are now dynamic, pulling from the site title and site description fields rather than being hardcoded.

### Added
- Continuous blog listing style: full posts displayed in chronological order, selectable from the Panel alongside the existing index style.
- `header-extra` snippet hook: place `site/snippets/header-extra.php` to inject project-specific `<head>` content without modifying the theme.
- `replyUrl` field on the site blueprint for a reply-by-email link shown on blog posts and in the RSS feed.

---

## 1.0.2 — December 12, 2025

- Updated to Kirby 5.2.0.

---

## 1.0.1 — November 19, 2025

- Minor CSS improvements.

---

## 1.0.0 — November 18, 2025

- Initial release.
