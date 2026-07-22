## 2026-07-22 - Keyboard Focus-Visible Verification in Headless Playwright
**Learning:** Simulating active focus outlines via standard click() or focus() in Playwright Chromium does not reliably trigger `:focus-visible` styles. To inspect and screenshot focus rings, we must programmatically emit `page.keyboard.press('Tab')` to mimic actual user keyboard navigation.
**Action:** Always use keyboard Tab presses instead of locator focus or click events during automated visual regression testing for keyboard accessibility.
