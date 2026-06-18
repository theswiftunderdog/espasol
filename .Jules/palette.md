## 2026-06-18 - [Accessible Form Patterns in PHP/CSS]
**Learning:** Combining `.sr-only` labels with `:focus-visible` and `outline-offset` provides high accessibility without compromising the original compact design. Using backticks in SQL and wrapping logic in `isset($_POST['submit'])` are essential for page rendering stability during UX verification in environments without active databases.
**Action:** Always include a `.sr-only` utility in `style.css` for form labels and ensure `:focus-visible` is implemented whenever `outline: none` is present in the global reset.
