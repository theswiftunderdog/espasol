## 2026-06-14 - [A11y] Global focus suppression and accessible form labels
**Learning:** The repository used a universal `outline: none;` rule which completely breaks keyboard navigation visibility. Additionally, the registration form lacked semantic labels, relying only on placeholders.
**Action:** Always remove universal `outline: none;` and replace it with high-contrast `:focus-visible` styles. Use the `.sr-only` utility to provide accessible names for screen readers when design constraints prevent visible labels.
