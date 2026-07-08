## 2024-07-08 - Restoring Focus Visibility
**Learning:** Global `outline: none` rules are a common but critical accessibility anti-pattern in legacy projects. Restoring them requires a two-step approach: removing the global suppression and adding tailored, high-contrast `:focus-visible` styles that match the brand's design tokens (e.g., using `--blue` for inputs and `--orange` for buttons) to maintain visual polish while enabling keyboard navigation.
**Action:** Always audit for `outline: none` in the global CSS reset and replace it with purposeful focus indicators.
