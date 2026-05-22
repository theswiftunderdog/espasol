## 2026-05-22 - [Accessible Form Labels and Focus Indicators]
**Learning:** In legacy PHP applications where visual design is strict, using the `.sr-only` class allows for semantic `<label>` elements without disrupting the layout. Additionally, removing global `outline: none` and replacing it with `:focus-visible` ensures keyboard accessibility while keeping the UI clean for mouse users.
**Action:** Always include a `.sr-only` utility and apply theme-consistent `:focus-visible` styles with `outline-offset` to avoid layout shifts.
