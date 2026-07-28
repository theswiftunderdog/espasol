# Palette's UX and Accessibility Journal

## 2024-07-28 - Restoring Default Focus Visibility and Interactive Feedback Transitions
**Learning:** Removing global focus outline suppressions (`outline: none`) is the single most critical baseline fix for keyboard accessibility in any legacy design system. Pairing that restoration with highly noticeable, branded `:focus-visible` ring outlines (with customized colored offsets) prevents confusing visual interference while retaining brand identity (e.g., using `--blue` for input fields and `--orange` for links/buttons). Furthermore, adding interactive feedback pointers and subtle transition properties on elements like alerts/messages improves micro-UX and user expectations of dismissibility.
**Action:** Always audit stylesheets for `outline: none` reset rules and immediately establish high-contrast focus rings tailored to the brand design tokens on interactive components.
