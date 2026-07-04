## 2026-07-04 - Keyboard Focus Visibility
**Learning:** Removing global `outline: none` and replacing it with themed `:focus-visible` styles restores critical keyboard accessibility while maintaining design control. Programmatic `.focus()` in Playwright might not trigger `:focus-visible`; use `page.keyboard.press('Tab')` for accurate verification.
**Action:** Always audit for `outline: none` and replace with purposeful focus indicators. Use keyboard simulation in tests.
