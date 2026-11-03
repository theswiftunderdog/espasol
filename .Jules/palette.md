# Palette's Journal

## 2024-11-03 - Form Accessibility & Focus Restoration in Legacy PHP UI
**Learning:** Legacy PHP templates often omit semantic headers and form `<label>` elements while using universal `outline: none;` resets in CSS. Adding visually hidden `.sr-only` labels paired with input `id` attributes restores full screen-reader accessibility without disrupting established visual layouts. Furthermore, in Chromium, inputs with custom borders require `:focus` rather than `:focus-visible` to reliably display focus rings during tab navigation.
**Action:** Pair form inputs with `.sr-only` labels and ensure `:focus` is styled on input boxes and `:focus-visible` on buttons/links, avoiding global `outline: none;`.
