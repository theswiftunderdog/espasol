## 2024-06-04 - Accessible Form Focus States and Semantic Structure

**Learning:** Restoring default focus behavior and enhancing it with `:focus-visible` and `outline-offset` provides a significantly better keyboard experience than the default or suppressed (outline: none) styles. Pairing this with semantic headings and screen-reader-only labels ensures accessibility for all users without impacting the visual design.

**Action:** Always check for `outline: none` in global styles and replace with meaningful `:focus-visible` states. Use `<h3>` for form titles and `.sr-only` for labels when the design calls for placeholder-only visuals.
