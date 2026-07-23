# Palette's Journal

## 2026-03-03 - Re-enabling Focus Outlines for Keyboard Accessibility
**Learning:** Legacy CSS often includes universal reset rules like `outline: none` which completely destroy keyboard navigation and accessibility for disabled or power users. Branded, high-contrast `:focus-visible` outlines using existing theme tokens provide an elegant, accessible alternative that matches the design system.
**Action:** Always audit the global stylesheet for `outline: none` and replace with branded `:focus-visible` styles using theme colors (like `--blue` for inputs and `--orange` for interactive elements) with an appropriate offset.
