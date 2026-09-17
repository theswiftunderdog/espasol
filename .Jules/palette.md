## 2026-09-17 - Keyboard Focus Indicators for Custom Input Fields
**Learning:** Global `outline: none` rules stripped focus feedback for keyboard users. Form text inputs (`.box`) in Chromium require explicit `.box:focus` outline styles rather than `:focus-visible` to reliably display high-contrast focus rings during tab navigation.
**Action:** Remove global `outline: none` resets and explicitly define `.box:focus` and `:focus-visible` outlines using brand design tokens.
