# Palette's Journal - Critical UX/Accessibility Learnings

## 2026-03-03 - Restoring Global Focus States
**Learning:** Legacy CSS stylesheets often use global `outline: none;` on `*` selectors to remove the default browser outline, completely breaking keyboard accessibility. Restoring it must be done with custom, branded `:focus-visible` rules using existing variables to maintain the visual design while complying with WCAG.
**Action:** Replace `outline: none;` in universal selectors with specific `:focus-visible` outline styles with proper offsets for interactive elements (e.g., `--blue` for text inputs, `--orange` for links/buttons).
