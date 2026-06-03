## 2026-06-03 - [Accessible Forms and Focus States]
**Learning:** In PHP applications with minimal UI, adding semantic HTML (headings, labels) and explicit focus indicators (:focus-visible) significantly improves accessibility for screen readers and keyboard users without compromising the original design intent. Using .sr-only for labels maintains visual parity while providing necessary context.
**Action:** Always check for missing labels and ensure interactive elements have visible focus indicators by removing global 'outline: none' and applying themed focus styles.
