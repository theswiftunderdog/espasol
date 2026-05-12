## 2026-05-12 - [Focus-Visible for Keyboard Accessibility]
**Learning:** Using `* { outline: none }` is a common but dangerous pattern that breaks keyboard navigation. Replacing it with `*:focus-visible` ensures accessibility for keyboard users while keeping the UI clean for mouse users.
**Action:** Always check for `outline: none` in global styles and replace with meaningful `:focus-visible` indicators.
