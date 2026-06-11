## 2025-05-14 - [Aria-label over Custom CSS for Accessibility]
**Learning:** When constrained by "no custom CSS" rules, `aria-label` provides a robust alternative to semantic `<label>` elements that would require a `.sr-only` utility class for visual consistency. This maintains screen reader support without introducing new design tokens or styles.
**Action:** Default to `aria-label` for accessible naming of inputs when visual labels are intentionally omitted by design and custom utility classes are discouraged.

## 2025-05-14 - [CRLF Line Endings and Git Diffs]
**Learning:** Working in environments with CRLF line endings requires extra care with `replace_with_git_merge_diff`. Global normalization can bloat diffs and exceed persona limits, while surgical edits might fail if the search block doesn't account for invisible `^M` characters.
**Action:** Use `tr -d '\r'` to temporarily convert to LF for patching, then `unix2dos` to restore original line endings before submission. Always check line endings with `cat -A` if patches fail.
