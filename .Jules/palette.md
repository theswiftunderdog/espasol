## 2026-06-15 - [Improving keyboard navigation with :focus-visible]
**Learning:** In a project that uses global `outline: none;` to suppress focus rings, adding a generic `:focus-visible` rule is essential for accessibility. Using `outline-offset: 2px` ensures the focus indicator is clearly separated from the element's border, improving visual clarity for keyboard users.
**Action:** Always check for `outline: none;` in the CSS and replace or supplement it with `:focus-visible` to ensure keyboard accessibility.
