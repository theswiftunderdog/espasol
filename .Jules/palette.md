## 2026-05-23 - [Form Accessibility & Focus Visibility]
**Learning:** Global `outline: none` rules are a major accessibility barrier that prevent keyboard users from knowing which element is focused. Restoring focus indicators with `:focus-visible` and `outline-offset` provides a clear, high-contrast visual cue that respects the design theme.
**Action:** Always check for `outline: none` in CSS and replace it with semantic `:focus-visible` styles that use brand colors and sufficient offset for visibility.

**Learning:** Screen reader users need descriptive labels even if the visual design relies on placeholders. The `.sr-only` pattern is essential for providing this context without altering the intended visual layout.
**Action:** Implement a standard `.sr-only` utility class and wrap input labels in it whenever they shouldn't be visible but are needed for accessibility.
