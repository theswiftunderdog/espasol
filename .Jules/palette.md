## 2026-06-02 - Improving Keyboard Accessibility in Legacy PHP Forms
**Learning:** Legacy forms often suppress default focus indicators with `outline: none`, making them unusable for keyboard users. Restoring `:focus-visible` with high-contrast theme colors (like `--blue` for inputs and `--orange` for actions) significantly improves accessibility without compromising the aesthetic.
**Action:** Always check for `outline: none` in global styles and replace with meaningful `:focus-visible` states using `outline` and `outline-offset`.
