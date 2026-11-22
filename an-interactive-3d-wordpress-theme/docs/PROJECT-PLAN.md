# Project plan — AN Interactive 3D / Diet Soda

## Product goal
Turn the supplied Diet Soda interactive 3D landing page into a reusable, installable WordPress theme with native dashboard controls. The theme should not depend on a paid page builder or an HTML-embed plugin.

## Confirmed requirements
- Keep the original HTML as the source design reference.
- Fix desktop, tablet and mobile layouts before commercial release.
- Keep navigation, contact, Shop Now, checkout and store integrations as placeholders until destinations and integrations are agreed.
- Let site admins replace product images, backgrounds, 3D models/assets, copy, colors, typography and section content without editing theme code.
- Make the result reusable for client projects.
- Build a step-by-step learning track and a commercial service offer around this type of interactive 3D website.

## Current foundation
- Standalone theme shell and front-page template.
- Native Customizer controls for text, labels, product imagery, model/texture URLs and core colors.
- Responsive styles and interactive JavaScript ported from the responsive HTML source.
- Original and responsive HTML preserved under `source/`.

## Not yet complete
- Full controls for section visibility, detailed responsive positioning, typography families/sizes, animation options, and per-object transforms.
- Actual destination links, checkout, WooCommerce/store integration.
- Local packaging/pinning of third-party JS dependencies and robust no-WebGL fallback.
- Cross-browser visual QA on real desktop, tablet and mobile devices.
- Verify commercial redistribution rights for all hosted 3D models, textures, product imagery and fonts.

## Learning track
1. HTML/CSS layout and responsive breakpoints; inspect and map the source design.
2. JavaScript DOM events, animation loops, `requestAnimationFrame`, reduced motion and performance.
3. 3D on the web: GLB/GLTF, `<model-viewer>`, materials, textures, camera orbit and loading states.
4. WordPress theme structure: template hierarchy, `functions.php`, enqueueing, theme supports and escaping.
5. WordPress Customizer/Settings API: controls, media picker, sanitization, defaults and live preview.
6. Performance/accessibility: lazy loading, WebGL fallbacks, keyboard operation, contrast, mobile GPU budgets.
7. QA and release: test matrix, ZIP packaging, changelog, installation guide and versioning.
8. Commercial delivery: discovery brief, asset/license checklist, scope, revisions, hosting requirements, handover and support plan.
