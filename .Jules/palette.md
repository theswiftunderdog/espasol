# Palette's Journal

## 2025-05-18 - Keyboard Focus Visibility and SR Labels
**Learning:** Removing global `outline: none` and pairing form inputs with visually hidden `<label>` tags (.sr-only) significantly improves accessibility for keyboard and screen reader users without compromising existing visual design.
**Action:** Always replace global `outline: none` with branded `:focus-visible` styles and provide explicit `<label>` elements for form inputs.
