## 2025-05-15 - Targeted Transitions over Universal Selector
**Learning:** Using a universal selector `* { transition: .2s linear; }` for micro-interactions can lead to performance degradation and unexpected visual artifacts as it attempts to transition every animatable property on every element.
**Action:** Always apply transitions to specific interactive elements like buttons, inputs, and links to ensure a smooth, performant, and predictable user experience.

## 2025-05-15 - Focus Visibility and Branding
**Learning:** Removing global `outline: none` without providing a high-contrast alternative breaks keyboard accessibility.
**Action:** Use `:focus-visible` to provide clear, brand-consistent focus indicators (e.g., using `--blue` or `--orange` tokens) to ensure the interface is navigable for all users without cluttering the visual experience for mouse users.
