# Palette's Journal

## 2025-08-13 - Mitigating Universal Focus Outline Removal
**Learning:** Universal stylesheet reset patterns in legacy codebases (such as `* { outline: none; }`) completely strip interactive elements of keyboard focus visibility. Standardizing focused visual feedback via `:focus-visible` with existing brand colors maintains accessibility for keyboard users without compromising the visual aesthetic.
**Action:** Always audit global CSS for `outline: none` and replace with selective `:focus-visible` ring indicators mapped to the design system's interactive tokens.
