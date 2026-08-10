# Palette UX/Accessibility Journal

## 2024-08-10 - Keyboard Focus Visibility and Off-screen Screen Reader Elements
**Learning:** The universal reset `* { outline: none; }` completely broke keyboard navigation in this PHP-based application. Overriding this by styling high-contrast, custom-branded outlines using `:focus-visible` with a 2px offset ensures consistent keyboard focus indicator visibility. Additionally, pairing compact, placeholder-based input forms with a semantic layout (incorporating heading landmarks and hidden `<label>` elements via a custom `.sr-only` CSS utility class) provides a robust and accessible UX for both visual users and screen-reader devices.
**Action:** Always audit for global `outline: none` rules in legacy CSS stylesheets and replace them with purposeful `:focus-visible` outline styles that match existing design system tokens. Ensure compact forms maintain accessible pairings using visually hidden labels.
