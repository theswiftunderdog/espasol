## 2026-07-31 - Brand-Aligned :focus-visible Implementation
**Learning:** Removing global `outline: none` and implementing customized `:focus-visible` rules (using existing design tokens like `--blue` and `--orange` with appropriate offsets) ensures high-contrast keyboard accessibility while preserving clean visual aesthetics.
**Action:** Always identify brand design tokens and apply targeted `:focus-visible` styles with a 2px offset for interactive components instead of relying on default browser styles or global overrides.
