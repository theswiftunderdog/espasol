## 2026-07-15 - [Accessible Focus Indicators]
**Learning:** Global `outline: none` rules are a common accessibility blocker in legacy CSS. Replacing them with purposeful `:focus-visible` styles using brand colors (`--blue` for inputs, `--orange` for buttons/links) restores keyboard navigation without compromising the visual design for mouse users.
**Action:** Always audit for `outline: none` and implement a high-contrast `:focus-visible` alternative.

## 2026-07-15 - [Mocking MySQLi for UX Verification]
**Learning:** For frontend-only verification in environments without a database, `mysqli_init()` can be used in `config.php` to provide a valid `$conn` object. This prevents fatal errors in functions like `mysqli_real_escape_string` while allowing the UI to render for visual inspection.
**Action:** Use `mysqli_init()` as a temporary mock, but ensure the file is restored before final submission.
