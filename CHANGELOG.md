# Changelog

## Unreleased

### Changed
- Font variables renamed to `--font-primary` (headings, home, blog index, breadcrumbs, meta), `--font-secondary` (body copy) and a separate `--font-mono` for code. Body copy on all pages — not just blog posts — now uses the secondary font.
- Headings, `strong` and `b` are explicitly 700; both font families ship Regular (400) and Bold (700).
- Geist Pixel replaced with Geist Mono (Regular + Bold) as the main display font. Geist Sans remains the body font for posts.

### Removed
- Shortform-post handling introduced in 1.1.2: the `page.create:after` hook that set a date-based title/slug, the uuid placeholders in the blog post `create` block, and the logic that hid date-like titles in the continuous listing and RSS feed. New posts are created with a normal title again.

---

## 1.1.2 — March 25, 2026

### Added
- Pagination (10 posts per page) for the continuous blog listing.
- Shortform posts: date-slugged, title-less posts created straight from the Panel. (Removed again in the next release.)
- New blog posts are created as drafts.

### Fixed
- Removed an analytics script that had been committed to the header snippet by mistake.

---

## 1.1.1 — February 28, 2026

- Updated starter content and README.

---

## 1.1.0 — February 27, 2026

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
