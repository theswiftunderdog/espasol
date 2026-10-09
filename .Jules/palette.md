# Palette's Journal - Critical UX & Accessibility Learnings

## 2026-03-29 - Form Focus Indicators and Screen Reader Accessibility in Simple PHP Apps
**Learning:** Removing global `outline: none` and adding explicit focus ring styles alongside `.sr-only` labels drastically improves accessibility for form inputs without disturbing the visual layout for mouse users.
**Action:** Always ensure form inputs have visible `:focus`/`:focus-visible` states and associated semantic `<label>` elements.
