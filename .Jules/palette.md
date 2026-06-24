## 2026-06-24 - Restoring Keyboard Accessibility and Semantic Structure

**Learning:** Global `outline: none` styles severely impact keyboard accessibility. Restoring default focus behavior and enhancing it with `:focus-visible` ensures that the app remains navigable for all users without compromising visual design. Additionally, using `.sr-only` labels provides critical context for screen readers in forms that otherwise rely solely on placeholders.

**Action:** Always audit for `outline: none` in base stylesheets. Use `:focus-visible` with appropriate `outline-offset` and brand colors. Implement `.sr-only` utility for accessible form labeling while maintaining a minimalist UI.
