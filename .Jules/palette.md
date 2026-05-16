## 2026-05-16 - [Accessibility & Keyboard Navigation]
**Learning:** Global `outline: none` rules in CSS are a major accessibility barrier for keyboard users. Replacing them with `:focus-visible` using a high-contrast color (like `--orange` with an offset) preserves design aesthetics while ensuring the interface is navigable by keyboard.
**Action:** Always check for `outline: none` in the base CSS and replace it with accessible focus indicators. Use `.sr-only` labels to provide context for screen readers when visual labels are omitted for design reasons.
