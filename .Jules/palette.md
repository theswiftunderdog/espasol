# Palette's Journal - Critical UX/A11y Learnings

## 2023-11-23 - Restoring Global Keyboard Focus Visibility
**Learning:** Removing global `outline: none` and replacing it with specific high-contrast `:focus-visible` styles ensures keyboard accessibility while preserving visual aesthetics.
**Action:** Remove `outline: none` from general resets and explicitly define `:focus-visible` outline styles with `--blue` or `--orange` for interactive elements.
