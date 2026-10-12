## 2026-10-12 - Explicit Form Focus Indicators & Screen Reader Labels
**Learning:** Legacy global `outline: none` styles hide critical keyboard focus states across form controls; pairing explicit focus styles (`.box:focus` and `:focus-visible`) with visually hidden `.sr-only` labels ensures both high-contrast keyboard navigation and full screen reader accessibility without altering visual design layout.
**Action:** Always replace global `outline: none` with custom theme-colored focus outlines (`--blue`/`--orange`) and include `.sr-only` utility classes for implicit form inputs.
