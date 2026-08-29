## 2026-08-29 - Form accessibility and focus visibility restoration
**Learning:** Removing global `outline: none` and declaring explicit `:focus-visible` styles with design system variables (`--blue`, `--orange`) combined with `.sr-only` labels dramatically improves accessibility for keyboard and screen reader users without altering visual design.
**Action:** Always pair form `<input>` elements with visually hidden `<label>` elements via `.sr-only` and ensure interactive controls have clear focus indicators.
