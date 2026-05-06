## 2026-05-06 - [Accessible Forms & Focus Indicators]
**Learning:** Even simple forms often lack basic accessibility like linked labels and visible focus states. Removing `outline: none` globally is a critical first step, but must be replaced with intentional focus styles.
**Action:** Always ensure every input has a `<label>` with a matching `for` attribute and that all interactive elements have a clear `focus-visible` state.
