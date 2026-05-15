## 2024-05-15 - Accessible Forms and Keyboard Navigation in Legacy PHP
**Learning:** Legacy PHP apps often use `outline: none` globally, which breaks keyboard navigation. Replacing it with `:focus-visible` and a high-contrast brand color (`--orange`) ensures accessibility without regressing visual design for mouse users. Additionally, `sr-only` labels provide screen reader support while maintaining a clean UI.
**Action:** Always check for `outline: none` in `style.css` and implement `:focus-visible` with a distinct brand color and `outline-offset`.

## 2024-05-15 - Managing Line Counts with CRLF and Large Files
**Learning:** Modifying files with CRLF line endings can lead to large, noisy diffs if the entire file is normalized or reformatted. This can violate line-count constraints (e.g., < 50 lines).
**Action:** Use surgical `git-merge-diff` edits and avoid global normalization unless necessary. If normalization is needed, communicate the impact on the PR size.
