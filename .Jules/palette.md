## 2024-06-09 - Playwright Verification of :focus-visible
**Learning:** In Playwright verification scripts, programmatic `focus()` may not trigger CSS `:focus-visible` styles in Chromium. This can lead to false-negative verification results when checking for focus indicators.
**Action:** Always simulate keyboard navigation using `page.keyboard.press('Tab')` instead of calling `.focus()` on an element when verifying `:focus-visible` implementations.
