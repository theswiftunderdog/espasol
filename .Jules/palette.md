## 2024-06-30 - Accessibility Restoration Pattern
**Learning:** Legacy projects often use `* { outline: none; }` which completely breaks keyboard navigation. Restoring accessibility requires not just removing this rule but also implementing high-contrast `:focus-visible` styles that match the existing design tokens to ensure a seamless and accessible experience.
**Action:** Always audit for `outline: none` in global stylesheets and replace with `:focus-visible` tailored to the site's color palette.
