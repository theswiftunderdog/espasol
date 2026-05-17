## 2026-05-17 - [Accessible Labels and Focus States]
**Learning:** Adding `.sr-only` labels to icon-only or placeholder-only inputs significantly improves accessibility without changing the visual design. Global `outline: none` is a common but major accessibility anti-pattern that should always be replaced with purposeful `:focus-visible` styles.
**Action:** Always check for `outline: none` in CSS and ensure every input has a corresponding `<label>`, using `.sr-only` if visual labels are not desired.
