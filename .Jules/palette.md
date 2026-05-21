# Palette's Journal - Critical UX Learnings

## 2026-05-21 - Accessible Form Inputs
**Learning:** Using `placeholder` as the only label for form inputs makes them inaccessible to screen readers and difficult to use when the input is filled.
**Action:** Always include `<label>` elements, using a `.sr-only` utility class if the design requires them to be visually hidden, and ensure they are linked to input IDs.
