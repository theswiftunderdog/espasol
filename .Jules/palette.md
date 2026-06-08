## 2025-01-24 - Accessible Focus States and Hidden Labels
**Learning:** Removing global `outline: none` and replacing it with `:focus-visible` ensures accessibility for keyboard users without affecting the visual design for mouse users. Using `.sr-only` labels provides context to screen readers while maintaining a placeholder-only visual design.
**Action:** Always prefer `:focus-visible` over global `outline: none`. Use `.sr-only` for mandatory accessibility labels in placeholder-driven forms.
