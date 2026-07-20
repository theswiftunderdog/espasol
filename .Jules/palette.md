# Palette's Journal - Critical UX & Accessibility Learnings

This journal is maintained by Palette to record critical UX and accessibility learnings, patterns, and design system insights discovered during frontend enhancements.

## 2026-07-20 - Restoring Keyboard Focus Visibility and Form Accessibility
**Learning:** Legacy design patterns often include a global universal reset `outline: none` to remove focus rings, which completely breaks keyboard-only navigation accessibility. Restoring default keyboard focus visibility using high-contrast `:focus-visible` styles with a 2px outline-offset maintains design aesthetics for mouse users while providing clear focus indication for keyboard users. Additionally, when using placeholder text on inputs, form fields should always have associated `<label>` elements hidden visually via a `.sr-only` utility class to ensure screen-readers can read the input context.
**Action:** Always check the global stylesheet for universal resets that suppress outline visibility, and replace them with high-contrast `:focus-visible` outlines using brand variables (`--blue` for form fields, `--orange` for buttons/links) and a 2px offset.
