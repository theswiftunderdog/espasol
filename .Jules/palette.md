## 2026-07-01 - Maintaining Code Quality while Optimizing Diffs
**Learning:** Over-optimizing code (e.g., merging multiple lines into one) to stay under line-count constraints significantly degrades maintainability and can be flagged during code review.
**Action:** Prioritize readable, standard-compliant code formatting even when working under strict diff limits; use surgical edits instead of global reformatting.

## 2026-07-01 - PHP Message Persistence
**Learning:** In simple PHP applications using local variables for feedback (like `$message[]`), redirecting with `header('location: ...')` causes the loss of these messages as they are not persisted across requests (unlike sessions).
**Action:** Ensure feedback messages are displayed on the same request they are generated, or implement a session-based flash message system if redirection is necessary.
