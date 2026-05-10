## 2026-05-10 - [Accessible Form Inputs and Keyboard Navigation]
**Learning:** Removing global `outline: none` is critical for accessibility, but it must be paired with clear `:focus-visible` styles to ensure keyboard users can navigate the interface. Using `.sr-only` labels provides necessary context for screen readers without affecting the visual design.
**Action:** Always ensure interactive elements have visible focus indicators and semantic labels, even if they are visually hidden.
