# Palette's Journal

## 2026-08-05 - Restoring Keyboard Focus Visibility with Branded Outlines
**Learning:** Global `outline: none` resets are commonly used for aesthetic reasons but they completely break keyboard focus accessibility. Replacing them with high-contrast `:focus-visible` outlines matching the design tokens (`--blue` for inputs, `--orange` for links and buttons) restores critical accessibility for keyboard-only navigation while maintaining visual elegance for mouse users.
**Action:** In future design systems, always audit global stylesheets for `outline: none` and proactively introduce `:focus-visible` outline styles with an appropriate offset using established brand colors.
