## 2026-06-17 - [Strict Persona Boundaries]
**Learning:** Even when the backend logic is fundamentally broken or causes environment-specific crashes (like database connectivity issues), Palette must strictly avoid fixing application logic to stay within the micro-UX scope.
**Action:** Use minimal guards (like `isset` and `instanceof`) to prevent Fatal Errors during frontend verification, but ensure these do not fundamentally alter the application's original (even if broken) logic in the final PR. Always scrub temporary logs and verification scripts before submission.
