# AN Interactive 3D – Diet Soda

A standalone WordPress theme that ports the Diet Soda interactive 3D landing page into a native theme structure. It does not require Elementor, a paid plugin, or a page-builder embed.

**Repository:** https://github.com/ahmednabil9/an-interactive-3d-wordpress-theme  
**Author:** Ahmed Nabil  
**Current version:** 0.1.0 — foundation / first integration pass

## What is included

- A standalone WordPress theme with `front-page.php`, `functions.php`, and native enqueueing.
- Responsive CSS carried over from the improved source HTML (desktop, tablet, mobile, small screens, reduced-motion and keyboard focus rules).
- The original 3D product stage, decorative GLB models, flavor cards, flavor switching, GSAP animation and bubble effects.
- Native WordPress Customizer sections for copy, product names/prices, navigation labels, color palette, product-can images and 3D/texture asset URLs.
- Original and responsive HTML source references under `docs/source/`.
- External CTA, contact and navigation destinations remain intentionally unconnected placeholders.

## Install

1. Download the repository as a ZIP (Code → Download ZIP), or use the packaged theme ZIP when one is provided.
2. In WordPress open **Appearance → Themes → Add New Theme → Upload Theme**.
3. Upload the ZIP, install, and activate.
4. Open **Appearance → Customize**. Look for:
   - **AN 3D — Content & Branding**
   - **AN 3D — Visuals & 3D Assets**
   - **AN 3D — Colors**
5. Save/publish your changes.

## Admin controls in this foundation release

- Brand name, hero headline and description, CTA label, award copy, right-side headline and contact label.
- Flavor names and prices, navigation labels.
- Product can images via the WordPress Media Library.
- Main product, leaves, cherry and blueberry GLB/GLTF URLs; material texture URLs; bubble image URL.
- Main green/blue background palette, accent and text colors.

The 3D assets currently use the original external asset URLs as defaults. Replace them with URLs you own or have permission to use before commercial deployment. WordPress hosting must allow access to the selected model and texture files. GLB/GLTF uploads are not automatically enabled by this theme; use a trusted media host or configure a secure MIME policy separately.

## Important implementation notes

- This is an initial theme foundation, not yet a final commercial release.
- The source design uses `<model-viewer>` and GSAP from their public CDNs. A future production pass should decide whether to bundle/pin these dependencies locally, add robust fallbacks, and test loading behavior under restrictive CSP/network conditions.
- Visual validation on real browsers/devices is still required. The responsive source has been syntax-checked, but this repository version has not yet been certified through a full cross-browser QA matrix.
- The original source HTML is preserved in `docs/source/index-original.html`; the responsive revision is `docs/source/index-responsive.html`.
- Shop, checkout, contact, and navigation destinations are placeholders by design until the real client integrations are specified.

## Development roadmap

1. Complete responsive and cross-browser QA, including model loading and touch interactions.
2. Expand the Customizer controls to include section visibility, detailed layout/position controls, animation toggles and responsive behavior.
3. Add configurable navigation/CTA destinations and a real product/store integration when requested.
4. Add fallback states, performance budgets, accessibility checks and release packaging.
5. Create a client-facing setup guide, demo content and commercial service packages.

## Requirements

- WordPress 6.0+
- PHP 7.4+
- A modern browser with WebGL support for the full 3D experience

## License and asset rights

Theme PHP/CSS/JS code is intended to be distributed under GPL-2.0-or-later. Third-party libraries, hosted 3D models, textures, fonts and images retain their respective licenses and ownership. Verify all asset permissions before redistribution or client work.
