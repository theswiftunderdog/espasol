# Palette's Journal - Critical Learnings Only

## 2023-11-20 - Global outline:none and keyboard focus visibility
**Learning:** Removing global `outline: none` and replacing it with high-contrast, purposefully branded `:focus-visible` styles is crucial for keyboard accessibility. Form inputs and interactive elements need custom focus indicators that match the design tokens (e.g., `--blue` and `--orange`) to maintain branding while preserving usability.
**Action:** Always replace global `outline: none` with custom `:focus-visible` styles using themed colors like `--blue` and `--orange` with appropriate offsets.
