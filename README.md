# Raka Sari-Sari Store — Responsive Landing Page

## Introduction
A product landing page is a single, focused web page designed to introduce a business, product, or service and guide visitors toward a specific action — in this case, visiting or ordering from the store. Landing pages matter for small businesses because they give an otherwise informal, word-of-mouth business a professional, always-available online presence that builds trust with new customers.

This project transforms Raka Sari-Sari Store, a small neighborhood store in [Your Barangay, City], into a modern, responsive landing page using Laravel, Blade Components, and Tailwind CSS. The purpose is to practice component-based frontend development while creating something genuinely useful for a real local business.

## Objectives
- Built responsive interfaces using Tailwind CSS across desktop, tablet, and mobile.
- Understood and applied component-based frontend architecture.
- Created reusable Laravel Blade Components (navbar, hero, feature card, pricing card, testimonial card, button, footer).
- Applied responsive layouts using Flexbox and CSS Grid.
- Documented the frontend architecture and design decisions below.

## Responsive Web Design
This project follows a **mobile-first** approach: base styles target small screens, then `sm:`, `md:`, and `lg:` breakpoints progressively enhance the layout for larger screens (e.g., the features grid goes from 1 column on mobile to 2 on tablet to 3 on desktop).

- **Responsive Breakpoints:** Tailwind's default breakpoints (`sm`, `md`, `lg`) control when the navbar switches from a hamburger menu to full links, and when grids reflow.
- **Flexbox:** Used in the navbar and CTA buttons for horizontal alignment that adapts to available space.
- **CSS Grid:** Used in the features, pricing, and testimonials sections (`grid md:grid-cols-3`) so cards reflow automatically.
- **UX:** Sticky navigation, consistent spacing, and a limited color palette keep the page easy to scan and navigate on any device.

Responsive design matters because most visitors to a small business site today are on mobile — a layout that breaks on phones effectively turns customers away before they even see what's offered.

## Tailwind CSS
- **Utility-First CSS:** Instead of writing custom CSS classes, styles are applied directly in markup (e.g., `bg-raka-red`, `rounded-2xl`, `shadow-sm`), speeding up development and keeping styling co-located with structure.
- **Advantages:** No context-switching between HTML and CSS files, smaller final CSS bundle (Tailwind only generates classes actually used), and consistent spacing/color scales.
- **Responsive Utility Classes:** e.g. `grid sm:grid-cols-2 lg:grid-cols-3` in the features section adapts column count per breakpoint.
- **Component Styling Example:**
```html
  <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-200">
```
  This single line handles background, corner rounding, padding, shadow, and a hover animation.

## Blade Components
- **What they are:** Reusable Blade templates (`resources/views/components/`) that can be invoked like HTML tags (e.g., `<x-navbar />`, `<x-feature-card>`), optionally accepting props and slots.
- **Why they improve maintainability:** Updating the navbar once updates it everywhere it's used, instead of hunting through repeated HTML across multiple pages.
- **Benefits of modular UI:** Faster development, consistent design, easier testing of individual pieces, and a cleaner codebase overall.

Example component (`feature-card.blade.php`):
```blade
@props(['icon', 'title'])
<div class="bg-white rounded-2xl p-6 shadow-sm">
    <div class="text-2xl mb-4">{{ $icon }}</div>
    <h3 class="font-semibold text-lg mb-2">{{ $title }}</h3>
    <p class="text-sm text-raka-dark/60">{{ $slot }}</p>
</div>
```
Used as:
```blade
<x-feature-card icon="🛒" title="Tingi-Tingi Pricing">
    Buy exactly what you need — sachets, single sticks, or by the piece.
</x-feature-card>
```

## User Interface Design
- **Color Palette:** A warm, limited palette — deep red (`#B3122E`), cream background (`#FDF6EC`), gold accent (`#E8A33D`), and dark brown text (`#2B1B12`) — evoking a warm, welcoming neighborhood store feel while keeping strong contrast for readability.
- **Typography:** Bold, large headlines for the hero paired with smaller, softer body text for descriptions, creating clear visual hierarchy.
- **Iconography:** Simple emoji icons used for feature cards to keep the design lightweight and friendly rather than corporate.
- **Button Styles:** Rounded, high-contrast primary buttons (solid red) paired with subtle secondary/outline buttons, so the main call-to-action always stands out.
- **Card Design:** Consistent rounded corners, soft shadows, and generous padding across feature, pricing, and testimonial cards for a cohesive look.
- **Layout Consistency:** A shared `max-w-6xl mx-auto px-6` container width is reused across all sections so content aligns vertically down the page.

These choices work together to create a page that feels trustworthy and easy to navigate — key for converting a casual visitor into an actual customer.

## Folder Structure