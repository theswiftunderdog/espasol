# Palette's Journal - Critical Learnings Only

## 2026-11-06 - Accessible Form Controls and Visible Keyboard Navigation
**Learning:** Suppressing focus outlines globally with `outline: none` removes critical navigation indicators for keyboard users. Adding semantic, visually hidden labels via `.sr-only` pairs accessible naming with placeholder-based compact form layouts without disrupting the existing visual design.
**Action:** Pair every input with a `<label>` linked by `id`/`for`, restore and brand `:focus-visible` indicators with theme colors, and scope server POST handlers to avoid breaking page rendering.
