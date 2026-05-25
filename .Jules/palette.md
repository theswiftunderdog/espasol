## 2026-05-25 - [Accessibility: Global Outline Suppression and Hidden Labels]
**Learning:** Found a common pattern where `outline: none` is applied globally, breaking keyboard navigation. Also, forms often lack semantic labels, relying solely on placeholders which disappear on input.
**Action:** Always remove global `outline: none` and implement `:focus-visible` with high-contrast outlines and offsets. Use `.sr-only` labels to provide context to screen readers without altering the visual design when placeholders are used as the primary visual cue.
