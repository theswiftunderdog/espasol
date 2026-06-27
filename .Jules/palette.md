## 2026-06-27 - Restoring Keyboard Accessibility
**Learning:** Global `outline: none` rules are common in legacy CSS and destroy keyboard accessibility. Restoring them while adding specific `:focus-visible` styles with design tokens provides a high-quality, accessible experience without sacrificing the visual brand.
**Action:** Always audit for `outline: none` and replace with theme-appropriate `:focus-visible` outlines.
