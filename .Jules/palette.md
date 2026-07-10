## 2026-07-10 - Fatal Error Prevention for UI Verification
**Learning:** In this PHP application, accessing database result variables (like `$select`) outside the conditional block where they are initialized causes a Fatal Error on GET requests, preventing the page from rendering even for simple UI verification.
**Action:** Always wrap database-dependent logic (e.g., `mysqli_num_rows`) within the same `if(isset($_POST['submit']))` block as the query to ensure the page remains accessible for UI testing.
