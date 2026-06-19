## 2026-06-19 - Standardizing Form Accessibility and Focus Visibility
**Learning:** This application used a global `outline: none` which is an accessibility anti-pattern. Restoring default focus and layering theme-consistent `:focus-visible` styles provides a better experience for keyboard users without affecting mouse users.
**Action:** Always check for `outline: none` in the universal selector and replace it with `:focus-visible` states using existing theme colors. Use `.sr-only` for accessible labels when the visual design favors placeholders.
