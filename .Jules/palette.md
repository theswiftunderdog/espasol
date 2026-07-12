## 2025-05-15 - Global Focus Visibility Restoration
**Learning:** Legacy projects often use global `outline: none` in CSS to hide default browser focus rings, which completely breaks keyboard navigation. Restoring focus visibility using `:focus-visible` with project-specific design tokens (like `--blue` and `--orange` with an offset) maintains the aesthetic while providing critical accessibility landmarks.
**Action:** Always audit for `outline: none` and replace with high-contrast `:focus-visible` outlines that match the design system.
