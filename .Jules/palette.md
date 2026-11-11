# Palette's Journal - Critical UX & Accessibility Learnings

## 2025-05-18 - Input Focus Visibility in Chromium
**Learning:** In Chromium web engines, `.box:focus` is needed alongside `:focus-visible` because text inputs do not always trigger `:focus-visible` outline styles consistently across tab navigations if user agent defaults or resets interfere.
**Action:** Pair `.box:focus` with `:focus-visible` to guarantee accessible, branded focus indicators on form inputs without relying purely on `:focus-visible`.
