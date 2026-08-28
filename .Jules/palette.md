## 2025-05-18 - Form Input Focus Indicators in Custom CSS Systems
**Learning:** Overriding global `outline: none` rules with `:focus-visible` on `.box` text inputs may not trigger visible focus rings during programmatic keyboard navigation in Chromium without explicit `:focus` or `.form-container form .box:focus` rules.
**Action:** When restoring focus indicators on custom styled input fields (`.box`), apply both `:focus` and `:focus-visible` declarations with theme-consistent outlines and offset tokens (`--blue`, 2px offset).
