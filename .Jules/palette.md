## 2026-07-02 - Restoring Keyboard Focus Visibility
**Learning:** Global `outline: none` rules significantly degrade accessibility for keyboard users. Restoring default behavior and adding specific, branded `:focus-visible` indicators provides a clear navigation path without cluttering the UI for mouse users.
**Action:** Audit CSS for `outline: none` and replace with high-contrast `:focus-visible` styles using existing design tokens.
