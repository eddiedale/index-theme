# Changelog

## 1.3.0 — Upcoming

Beginner-friendly installation: the kit.

### Added
- **Index Kit**: every release now ships `index-kit.zip` — a complete ready-to-run site (Kirby core, theme, starter content bundled). Unzip, open `/panel`, done. Built automatically by a release workflow from the new `kit/` skeleton.
- `version` field in composer.json so the Kirby Panel shows the theme version. Bump it as part of each release.

### Changed
- README installation rewritten around two paths: the kit for beginners, `composer require`/submodule for existing Kirby sites. The Plainkit walkthrough, conflicting-files surgery, and manual starter-content copy are gone.
- Plugin installs are leaner: `kit/`, `content/` (starter content), CI, and the screenshot are excluded from composer dists and release archives via `.gitattributes` export-ignore. They remain in the git repo, where the kit build uses them.

---

## 1.2.0 — August 31, 2026

A design pass. Same structure, quieter and more coherent: one size, one weight, hierarchy by opacity.

### Changed
- Geist Pixel replaced with Geist Mono as the primary font. Geist Sans stays for body copy and now also ships real italics (Regular Italic + Bold Italic). Both families ship 400 and 700.
- Font variables renamed: `--font-primary` (headings, home page, blog index, breadcrumbs, meta), `--font-secondary` (body copy on all pages, not just posts) and a separate `--font-mono` for code so a serif primary never leaks into code blocks.
- Headings, `strong` and `b` are explicitly 700; `h1` uses `text-wrap: balance`. Type scale tightened (14–18px body, h1/h2/h3 at 200/140/120%).
- Links: the underline rests at 40% opacity and thickens to 2px on hover instead of disappearing. Focus ring uses the current colour.
- Home page: name and tagline share one line (`.masthead`); section headings ("Selected Projects", "Other projects") removed; tagline and project categories muted; project rows separated by hairlines with an underline only on hover; thumbnails cropped to 4:3 and wrapped in a single link with their title; grid stacks on narrow screens.
- Blog index: years are muted labels at body size; post titles set in the secondary font.
- Blog post: the date moved from the footer to the right of the breadcrumb line (long titles truncate); equal 2rem spacing above and below the `h1`.
- Content rhythm: elements directly after a subheading sit `.5em` below it; stacked headings hug; figures get 2.5rem breathing room; `hr` renders as the theme's `· · ·` separator.
- Blockquote is no longer a boxed block: primary font, hanging quotation mark, muted attribution line.
- Code blocks are plain inverted mono with no syntax highlighting; inline code wraps with the sentence. Selection colours are inverted inside code blocks so selecting text stays visible.
- Lists indent `1.25em` instead of the browser default.
- `style.css` now loads as the only stylesheet; the `?v=` cache-buster is bumped with every CSS change.

### Removed
- Prism.js and its stylesheet, including the code copy button. The theme now ships zero JavaScript.
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
