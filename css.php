<!-- Replace your existing sidebar with or add this as css.php?page=... -->
<?php
// html.php

// Determine which page to load
$page = $_GET['page'] ?? 'html/what-is-css';  // default page

// Sanitize and build full path
$pagePath = "pages/" . $page . ".php";

// Optional: Protect from invalid file access
if (!file_exists($pagePath)) {
    $pagePath = "pages/css/what-is-css.php"; // fallback
}

// This file should set SEO variables like $title, $canonical
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// Then include layout
include 'includes/header.php';
?>


<div class="flex ">
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium bg-white text-black dark:bg-gray-900 dark:text-white">

        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/what-is-css">What is CSS?</a></li>
                <li><a href="css.php?page=css/why-css">Why Use CSS?</a></li>
                <li><a href="css.php?page=css/css-types">Types of CSS</a></li>
                <li><a href="css.php?page=css/how-it-works">How CSS Works</a></li>
                <li><a href="css.php?page=css/setup">Setup Your First File</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. Syntax & Selectors</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/syntax">Syntax Overview</a></li>
                <li><a href="css.php?page=css/selectors-basic">Basic Selectors</a></li>
                <li><a href="css.php?page=css/selectors-advanced">Advanced Selectors</a></li>
                <li><a href="css.php?page=css/combinators">Combinators</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Text & Fonts</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/font-style">Font Styles</a></li>
                <li><a href="css.php?page=css/colors">Text & Background Colors</a></li>
                <li><a href="css.php?page=css/text-spacing">Line & Letter Spacing</a></li>
                <li><a href="css.php?page=css/text-decoration">Alignment & Decoration</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Colors & Units</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/color-systems">Hex, RGB, HSL</a></li>
                <li><a href="css.php?page=css/units">Units: px, %, em, rem</a></li>
                <li><a href="css.php?page=css/opacity-gradient">Opacity & Gradients</a></li>
                <li><a href="css.php?page=css/variables">CSS Variables</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. Box Model</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/box-model">Box Model Basics</a></li>
                <li><a href="css.php?page=css/margin-padding">Margin & Padding</a></li>
                <li><a href="css.php?page=css/overflow-sizing">Overflow & Box Sizing</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. Display & Positioning</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/display">Display Types</a></li>
                <li><a href="css.php?page=css/position">Positioning</a></li>
                <li><a href="css.php?page=css/z-index">Z-index & Layering</a></li>
                <li><a href="css.php?page=css/centering">Centering Elements</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Backgrounds & Borders</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/backgrounds">Backgrounds</a></li>
                <li><a href="css.php?page=css/borders">Borders</a></li>
                <li><a href="css.php?page=css/shadows">Shadows</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. Transitions & Animations</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/transitions">CSS Transitions</a></li>
                <li><a href="css.php?page=css/animations">Keyframe Animations</a></li>
                <li><a href="css.php?page=css/transforms">2D & 3D Transforms</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. Responsive Design</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/media-queries">Media Queries</a></li>
                <li><a href="css.php?page=css/mobile-first">Mobile-First Design</a></li>
                <li><a href="css.php?page=css/breakpoints">Breakpoints</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. Flexbox</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/flexbox-intro">Flexbox Basics</a></li>
                <li><a href="css.php?page=css/flexbox-align">Aligning Items</a></li>
                <li><a href="css.php?page=css/flexbox-wrap">Wrapping & Direction</a></li>
                <li><a href="css.php?page=css/flexbox-layouts">Layout Patterns</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. CSS Grid</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/grid-intro">Grid Basics</a></li>
                <li><a href="css.php?page=css/grid-template">Grid Template Areas</a></li>
                <li><a href="css.php?page=css/grid-responsive">Responsive Grids</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Advanced Techniques</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/font-face">Custom Fonts</a></li>
                <li><a href="css.php?page=css/calc-clamp">calc(), clamp()</a></li>
                <li><a href="css.php?page=css/sticky-scroll">Sticky Scroll</a></li>
                <li><a href="css.php?page=css/dark-mode">Dark Mode</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">13. Forms & UI</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/form-styling">Input & Button Styling</a></li>
                <li><a href="css.php?page=css/form-layouts">Form Layout</a></li>
                <li><a href="css.php?page=css/form-focus">Focus & States</a></li>
                <li><a href="css.php?page=css/custom-checkbox">Custom Checkbox/Radio</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">14. Practice Projects</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/portfolio-project">Portfolio Project</a></li>
                <li><a href="css.php?page=css/pricing-table">Pricing Table</a></li>
                <li><a href="css.php?page=css/navbar-project">Animated Navbar</a></li>
                <li><a href="css.php?page=css/image-slider">Image Slider</a></li>
                <li><a href="css.php?page=css/product-card">Product Card</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">15. Debugging & Best Practices</h2>
            <ul class="space-y-2">
                <li><a href="css.php?page=css/devtools">DevTools for CSS</a></li>
                <li><a href="css.php?page=css/bem-naming">BEM Naming</a></li>
                <li><a href="css.php?page=css/performance">Performance Tips</a></li>
            </ul>
        </div>
    </div>
    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>