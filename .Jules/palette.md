## 2026-08-23 - Focus indicators and accessible form structure
**Learning:** Global `outline: none` rules strip keyboard focus indicators across forms and interactive elements. Pairing visually hidden `.sr-only` labels with explicit `.box:focus` and `:focus-visible` design token outlines restores accessibility for both screen readers and keyboard users without altering existing visual layout.
**Action:** Always define `.sr-only` utility classes and supply explicit focus ring styles when working with legacy global reset stylesheets.
