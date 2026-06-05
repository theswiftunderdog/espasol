# Palette's Journal

## 2026-06-05 - Form Accessibility & Focus Feedback
**Learning:** Legacy PHP projects often use global `outline: none` and lack semantic labels. Combining a `.sr-only` utility with high-contrast `:focus-visible` states restores accessibility without impacting the existing visual theme.
**Action:** Always check for `outline: none` resets and implement `sr-only` labels for placeholder-only inputs to support screen readers.
