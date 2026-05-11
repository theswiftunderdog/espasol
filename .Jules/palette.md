## 2026-05-11 - Accessible Form Labels and Focus States
**Learning:** Even when a design avoids visible labels for a "minimalist" look, semantic labels are essential for screen readers. Global `outline: none` is a major accessibility barrier for keyboard users.
**Action:** Always provide `<label>` elements (using `.sr-only` if necessary) and ensure `:focus-visible` states are clearly defined and distinct from hover states.
