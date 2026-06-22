## 2026-06-22 - Restoring Keyboard Focus Visibility
**Learning:** Legacy CSS often contains global `outline: none` rules which severely break keyboard accessibility. Replacing these with themed `:focus-visible` outlines restores accessibility while maintaining a polished visual aesthetic for mouse users.
**Action:** Always audit the global stylesheet for `outline: none` and implement high-contrast `:focus-visible` styles using the existing design system tokens.
