## 2024-06-16 - Accessible Form Labels and Focus Indicators
**Learning:** Adding `.sr-only` labels and restoring focus indicators significantly improves accessibility for keyboard and screen reader users without altering the visual design.
**Action:** Always include `.sr-only` labels for icon-only or placeholder-only inputs and ensure `:focus-visible` styles are implemented when global `outline: none` is present.
