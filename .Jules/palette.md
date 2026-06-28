## 2026-06-28 - [Accessible Form Markers]
**Learning:** Legacy PHP forms often omit semantic headings and labels, relying solely on placeholders, which fails accessibility standards. Restoring default focus indicators while providing themed `:focus-visible` states ensures keyboard navigability without sacrificing design.
**Action:** Always include semantic headings (<h3>) for form identification and link <label> elements to inputs, using a visually hidden utility (.sr-only) if the design doesn't call for visible labels.
