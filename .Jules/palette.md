## 2024-07-27 - Restoring Keyboard Focus Visibility
**Learning:** Legacy CSS often contains universal selector rules like `outline: none` which completely disable keyboard focus states, making the site inaccessible to screen reader and keyboard-only users.
**Action:** Always audit for global `outline: none` or similar rules and replace them with high-contrast, brand-consistent `:focus-visible` styles with a clear `outline-offset` to ensure interactive elements are fully accessible during keyboard navigation.
