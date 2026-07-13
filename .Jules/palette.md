## 2026-07-13 - [Accessibility] Restoring Focus Visibility
**Learning:** Legacy CSS often uses global `outline: none` for "cleaner" aesthetics, which breaks keyboard navigation. Restoring it via `:focus-visible` provides accessibility without compromising mouse-user aesthetics.
**Action:** Audit and remove global `outline: none` in future tasks, replacing them with high-contrast, branded `:focus-visible` indicators.
