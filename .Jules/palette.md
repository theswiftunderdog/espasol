## 2026-05-24 - [Accessibility & Testing Strategy]
**Learning:** Playwright's `get_by_label` can fail with "strict mode violation" if one label's text is a substring of another (e.g., "password" and "confirm password"). Additionally, global `outline: none` is a common accessibility anti-pattern that must be replaced with robust `:focus-visible` styles to maintain keyboard navigability.
**Action:** Always use `exact=True` in Playwright locators for ambiguous labels and ensure every interactive element has a high-contrast focus indicator using `--outline-offset` to avoid layout shifts.
