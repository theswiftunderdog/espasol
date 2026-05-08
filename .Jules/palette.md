## 2026-05-08 - Restoring Focus Visibility in Legacy PHP Apps
**Learning:** Legacy PHP apps often use global `outline: none` resets which completely break keyboard accessibility. Replacing these with `:focus-visible` restores accessibility for keyboard users while maintaining the desired "clean" look for mouse users.
**Action:** Always check for `outline: none` in global resets and replace with `:focus-visible` styles that use the app's primary color.
