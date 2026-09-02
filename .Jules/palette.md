## 2026-09-02 - Form Inputs and Focus State Accessibility
**Learning:** In Chromium/Playwright keyboard tab navigation tests, input fields with custom borders require explicitly defined `:focus` outline styles, while buttons and links require `:focus-visible` styles to provide high contrast visual cues without degrading click interaction styling.
**Action:** Always combine `.sr-only` visually hidden labels with explicitly scoped `:focus` and `:focus-visible` outline indicators matching the design system tokens.
