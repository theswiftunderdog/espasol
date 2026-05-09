## 2026-05-09 - [Accessible Form Labels and Focus States]
**Learning:** Global `outline: none` rules are detrimental to keyboard accessibility as they remove visual cues for focus. Semantic labels are essential for screen readers even if they are visually hidden to maintain a specific design aesthetic.
**Action:** Always use `.sr-only` for labels if the design doesn't call for visible ones, and use `:focus-visible` to provide clear focus indicators for keyboard users.
