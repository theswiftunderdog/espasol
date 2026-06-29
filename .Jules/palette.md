# Palette's Journal

## 2024-06-29 - Accessibility and Focus States in PHP Auth
**Learning:** Legacy PHP apps often use global `outline: none` which breaks keyboard navigation. Restoring focus indicators with `:focus-visible` and adding semantic labels (even if visually hidden via `.sr-only`) significantly improves accessibility without impacting the visual design.
**Action:** Always check for `outline: none` in global stylesheets and replace with high-contrast `:focus-visible` indicators using the app's existing color palette.
