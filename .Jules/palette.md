## 2026-06-26 - Restoring Keyboard Visibility
**Learning:** Global `outline: none` rules in CSS significantly degrade keyboard accessibility, making the app unusable for many users. Replacing it with high-contrast `:focus-visible` outlines using existing design tokens restores navigation clarity without impacting mouse-driven aesthetics.
**Action:** Always audit for `outline: none` and replace with `:focus-visible` and appropriate `outline-offset`.
