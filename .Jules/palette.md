# Palette's Journal

## 2024-07-30 - Focus Outline Restoration
**Learning:** Legacy design patterns often implement global `outline: none` rules which strip critical accessibility focus indications for keyboard users. Restoring default keyboard focus visibility by removing global `outline: none` rules and replacing them with purposefully branded `:focus-visible` styles is a primary UX/accessibility enhancement for this design system.
**Action:** Always audit for global `outline: none` and replace it with `:focus-visible` targeting interactive elements with project-specific color tokens (like `--blue` for form fields and `--orange` for action links/buttons) and a clean outline-offset for polished styling.
