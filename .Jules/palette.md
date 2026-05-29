## 2026-05-29 - [Restoring Focus States for Accessibility]
**Learning:** Global `outline: none` is a common anti-pattern that severely impacts keyboard accessibility. Restoring it while providing themed `:focus-visible` styles ensures the app remains accessible to keyboard users without compromising the visual design for mouse users.
**Action:** Always check for global `outline: none` in CSS and replace it with high-contrast `:focus-visible` indicators that match the application's theme.
