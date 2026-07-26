# Palette's Journal - Critical UX/Accessibility Learnings

## 2024-07-26 - Restoring Focus Outlines and Keyboard Accessibility
**Learning:** Legacy CSS often uses `outline: none` on the universal selector `*`, which completely breaks focus visibility for keyboard-only and screen reader users. Simply deleting this rule or replacing it with modern `:focus-visible` outlines using design tokens (like `--blue` and `--orange`) is one of the most impactful, high-value accessibility fixes.
**Action:** Always audit stylesheets for `outline: none` or `outline: 0`, and replace them with high-contrast `:focus-visible` focus rings that match the app's brand colors.
