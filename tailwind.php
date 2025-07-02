<?php
// tailwind.php

// Determine which page to load
$page = $_GET['page'] ?? 'tailwind/what-is-tailwind';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/tailwind/what-is-tailwind.php";
}

ob_start();
include $pagePath;
$pageContent = ob_get_clean();

include 'includes/header.php';
?>

<div class="flex">
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium bg-white text-black dark:bg-gray-900 dark:text-white">
        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction to Tailwind CSS</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/what-is-tailwind">What is Tailwind CSS?</a></li>
                <li><a href="tailwind.php?page=tailwind/why-utility-first">Why Choose Utility-First Frameworks?</a></li>
                <li><a href="tailwind.php?page=tailwind/comparison">Tailwind vs Bootstrap vs Custom CSS</a></li>
                <li><a href="tailwind.php?page=tailwind/installation">Installing Tailwind via CDN and NPM</a></li>
                <li><a href="tailwind.php?page=tailwind/config-file">Tailwind CLI and Configuration File</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. Utility-First Fundamentals</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/utility-classes">What Are Utility Classes?</a></li>
                <li><a href="tailwind.php?page=tailwind/semantic-html">Writing Semantic HTML with Utilities</a></li>
                <li><a href="tailwind.php?page=tailwind/variants">Responsive, Hover, and Focus Variants</a></li>
                <li><a href="tailwind.php?page=tailwind/jit-purge">How Tailwind Applies Styles</a></li>
                <li><a href="tailwind.php?page=tailwind/apply-layer">@apply, @layer and @variants Usage</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Layout and Structure</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/spacing">Container, Spacing (Padding, Margin)</a></li>
                <li><a href="tailwind.php?page=tailwind/sizing">Widths, Heights, Max/Min Sizing</a></li>
                <li><a href="tailwind.php?page=tailwind/display">Display: Block, Inline, Flex, Grid</a></li>
                <li><a href="tailwind.php?page=tailwind/box-sizing">Float, Clear, Overflow, Object Fit</a></li>
                <li><a href="tailwind.php?page=tailwind/visibility">Box Sizing and Visibility</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Flexbox with Tailwind</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/flexbox-intro">Flex Containers and Items</a></li>
                <li><a href="tailwind.php?page=tailwind/flexbox-direction">Direction, Wrapping, and Growth</a></li>
                <li><a href="tailwind.php?page=tailwind/flexbox-align">Justify Content & Align Items</a></li>
                <li><a href="tailwind.php?page=tailwind/flexbox-gap-order">Gap and Order Utilities</a></li>
                <li><a href="tailwind.php?page=tailwind/flexbox-patterns">Creating Real Layouts with Flexbox</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. Grid System with Tailwind</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/grid-columns">Grid Container and Template Columns/Rows</a></li>
                <li><a href="tailwind.php?page=tailwind/grid-gap">Gap, Auto-Fill, Auto-Fit</a></li>
                <li><a href="tailwind.php?page=tailwind/grid-placement">Grid Areas and Placement</a></li>
                <li><a href="tailwind.php?page=tailwind/grid-nested">Nested Grids</a></li>
                <li><a href="tailwind.php?page=tailwind/grid-responsive">Responsive Grid Layouts</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. Styling Text and Fonts</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/text-fonts">Font Size, Family, and Weight</a></li>
                <li><a href="tailwind.php?page=tailwind/text-spacing">Line Height, Letter Spacing</a></li>
                <li><a href="tailwind.php?page=tailwind/text-decor">Text Alignment and Decoration</a></li>
                <li><a href="tailwind.php?page=tailwind/text-truncate">Text Truncation, Clamping</a></li>
                <li><a href="tailwind.php?page=tailwind/text-color">Color Utilities and Custom Colors</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Colors, Backgrounds & Borders</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/colors-bg">Text and Background Colors</a></li>
                <li><a href="tailwind.php?page=tailwind/gradients">Gradients</a></li>
                <li><a href="tailwind.php?page=tailwind/borders">Border Width, Color, and Radius</a></li>
                <li><a href="tailwind.php?page=tailwind/ring-shadow">Divide and Ring Utilities</a></li>
                <li><a href="tailwind.php?page=tailwind/opacity">Box Shadows and Opacity Control</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. Pseudo-States and Interactions</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/states-basic">Hover, Focus, Active, Visited</a></li>
                <li><a href="tailwind.php?page=tailwind/states-group">Group Hover, Focus Within</a></li>
                <li><a href="tailwind.php?page=tailwind/states-position">Disabled, First/Last, Odd/Even</a></li>
                <li><a href="tailwind.php?page=tailwind/transitions">Transitions and Timing Functions</a></li>
                <li><a href="tailwind.php?page=tailwind/animations">Animating with Keyframes</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. Positioning and Z-Index</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/position">Position Types</a></li>
                <li><a href="tailwind.php?page=tailwind/inset">Top, Right, Bottom, Left Utilities</a></li>
                <li><a href="tailwind.php?page=tailwind/z-index">z-Index Layers</a></li>
                <li><a href="tailwind.php?page=tailwind/transform">Transform and Scale</a></li>
                <li><a href="tailwind.php?page=tailwind/translate">Translate, Skew, Rotate, Origin</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. Responsive Design Made Easy</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/mobile-first">Mobile-First Philosophy</a></li>
                <li><a href="tailwind.php?page=tailwind/breakpoints">Breakpoints</a></li>
                <li><a href="tailwind.php?page=tailwind/show-hide">Hiding/Showing Elements Responsively</a></li>
                <li><a href="tailwind.php?page=tailwind/mobile-nav">Building a Mobile-First Navbar</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. Forms and Components</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/forms-basic">Styling Inputs, Selects, Buttons</a></li>
                <li><a href="tailwind.php?page=tailwind/forms-custom">Custom Checkbox and Radio Buttons</a></li>
                <li><a href="tailwind.php?page=tailwind/forms-labels">Floating Labels and Focus Styles</a></li>
                <li><a href="tailwind.php?page=tailwind/forms-plugin">Tailwind Forms Plugin</a></li>
                <li><a href="tailwind.php?page=tailwind/forms-validation">Interactive Forms with Validation Styling</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Customization and Theming</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/custom-config">Configuring Tailwind</a></li>
                <li><a href="tailwind.php?page=tailwind/extending">Extending Colors, Fonts, Breakpoints</a></li>
                <li><a href="tailwind.php?page=tailwind/css-variables">Using :root CSS Variables</a></li>
                <li><a href="tailwind.php?page=tailwind/custom-utilities">Creating Custom Utility Classes</a></li>
                <li><a href="tailwind.php?page=tailwind/dark-mode">Dark Mode: Class vs Media Strategy</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">13. Component Composition</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/ui-principles">Tailwind UI Principles</a></li>
                <li><a href="tailwind.php?page=tailwind/reuse">Extracting Reusable Components</a></li>
                <li><a href="tailwind.php?page=tailwind/components">Responsive Navbar, Cards, Modals</a></li>
                <li><a href="tailwind.php?page=tailwind/js-frameworks">Tailwind with React/Vue Templates</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">14. Plugins and Ecosystem</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/plugins-install">Installing and Using Official Plugins</a></li>
                <li><a href="tailwind.php?page=tailwind/plugin-examples">Community Plugins and Examples</a></li>
                <li><a href="tailwind.php?page=tailwind/plugin-typography">Typography, Aspect-Ratio, Line-Clamp</a></li>
                <li><a href="tailwind.php?page=tailwind/plugin-ui">Tailwind UI (Paid) and Headless UI (Free)</a></li>
                <li><a href="tailwind.php?page=tailwind/integration">Integration with PostCSS and Vite</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">15. Projects and Practice</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/project-portfolio">Responsive Portfolio Page</a></li>
                <li><a href="tailwind.php?page=tailwind/project-product-grid">E-Commerce Product Grid</a></li>
                <li><a href="tailwind.php?page=tailwind/project-pricing">Pricing Table with Toggle</a></li>
                <li><a href="tailwind.php?page=tailwind/project-dashboard">Dark Mode Dashboard UI</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">16. Optimization and Best Practices</h2>
            <ul class="space-y-2">
                <li><a href="tailwind.php?page=tailwind/optimize-purge">Purging Unused CSS for Production</a></li>
                <li><a href="tailwind.php?page=tailwind/optimize-minify">Minifying with PostCSS</a></li>
                <li><a href="tailwind.php?page=tailwind/optimize-bloat">Avoiding Class Bloat</a></li>
                <li><a href="tailwind.php?page=tailwind/a11y">Accessibility with Tailwind</a></li>
                <li><a href="tailwind.php?page=tailwind/performance">Performance and SEO Tips</a></li>
            </ul>
        </div>
    </div>
    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
