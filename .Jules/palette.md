## 2026-06-25 - Targeted Transitions over Universal Selector
**Learning:** Applying `transition` to the universal selector `*` causes performance issues and unexpected UI behavior. It is better to target specific interactive elements like buttons, links, and form inputs.
**Action:** Always target specific classes or elements for transitions instead of using `*`.

## 2026-06-25 - Accessibility in PHP legacy forms
**Learning:** Legacy PHP forms often lack semantic labels and have aggressive focus resets. Adding `.sr-only` labels and `:focus-visible` outlines significantly improves accessibility without altering the visual design.
**Action:** Audit legacy forms for missing labels and restore focus indicators using `:focus-visible`.
