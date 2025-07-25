<?php
// tailwind.php

// ✅ Base URL helper: handles both local and live domain
function base_url($path = '') {
    $host = $_SERVER['HTTP_HOST'];
    $isLocal = $host === 'localhost' || str_contains($host, '127.0.0.1');
    $base = $isLocal ? '/smartcodingtips' : ''; // Change if local folder name is different
    return $base . '/' . ltrim($path, '/');
}

// ✅ Get current page
$page = $_GET['page'] ?? 'tailwind/what-is-tailwind';
$pagePath = "pages/" . $page . ".php";

// ✅ Fallback if file not found
if (!file_exists($pagePath)) {
    $pagePath = "pages/tailwind/what-is-tailwind.php";
}

// ✅ Get page content
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// ✅ SEO Metadata (optional per page)
$title = $title ?? "SmartCodingTips - Tailwind CSS";
$description = $description ?? "Learn Tailwind CSS step-by-step with clean examples.";
$keywords = $keywords ?? "tailwind css, utility first css, responsive design";
$slug = basename($page);
$canonical = "https://smartcodingtips.com/tailwind/$slug";

// ✅ Current page for TOC highlighting
$currentPage = $_GET['page'] ?? 'tailwind/what-is-tailwind';

// ✅ Include header
include 'includes/header.php';

// ✅ TOC Link Generator
function tocLink($label, $link, $currentPage) {
    $slug = basename($link); // tailwind/what-is-tailwind → what-is-tailwind
    $activeClass = ($link === $currentPage) ? 'bg-yellow-300 dark:bg-yellow-600 text-black font-semibold rounded px-2' : '';
    echo "<li><a href='" . base_url("tailwind/$slug") . "' class='block px-2 py-1 rounded $activeClass'>$label</a></li>";
}
?>

<!-- Mobile TOC Button -->
<button id="openToc" class="md:hidden bg-gray-800 text-white px-4 py-2 m-4 rounded fixed top-16 left-4 z-40">
    ☰ TOC
</button>

<div class="flex">
    <!-- TOC Sidebar -->
    <aside
        id="mobileToc"
        class="fixed top-0 left-0 h-screen w-[18rem] bg-white dark:bg-gray-900 text-black dark:text-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:z-10 md:relative md:translate-x-0 md:flex md:flex-col md:px-6 md:space-y-6 md:text-sm md:font-medium overflow-y-scroll md:h-[1200px]">

        <!-- Mobile-only close button -->
        <button id="closeToc" class="absolute top-4 right-4 text-2xl md:hidden">✖</button>

        <!-- TOC Content -->
        <div class="px-4 py-12 md:py-4 space-y-4 ">
<?php
$sections = [
    '1. Introduction to Tailwind CSS' => [
        'What is Tailwind CSS?' => 'tailwind/what-is-tailwind',
        'Why Choose Utility-First Frameworks?' => 'tailwind/why-utility-first',
        'Tailwind vs Bootstrap vs Custom CSS' => 'tailwind/comparison',
        'Installing Tailwind via CDN and NPM' => 'tailwind/installation',
        'Tailwind CLI and Configuration File' => 'tailwind/config-file'
    ],
    '2. Utility-First Fundamentals' => [
        'What Are Utility Classes?' => 'tailwind/utility-classes',
        'Writing Semantic HTML with Utilities' => 'tailwind/semantic-html',
        'Responsive, Hover, and Focus Variants' => 'tailwind/variants',
        'How Tailwind Applies Styles' => 'tailwind/jit-purge',
        '@apply, @layer and @variants Usage' => 'tailwind/apply-layer'
    ],
    '3. Layout and Structure' => [
        'Container, Spacing (Padding, Margin)' => 'tailwind/spacing',
        'Widths, Heights, Max/Min Sizing' => 'tailwind/sizing',
        'Display: Block, Inline, Flex, Grid' => 'tailwind/display',
        'Float, Clear, Overflow, Object Fit' => 'tailwind/box-sizing',
        'Box Sizing and Visibility' => 'tailwind/visibility'
    ],
    '4. Flexbox with Tailwind' => [
        'Flex Containers and Items' => 'tailwind/flexbox-intro',
        'Direction, Wrapping, and Growth' => 'tailwind/flexbox-direction',
        'Justify Content & Align Items' => 'tailwind/flexbox-align',
        'Gap and Order Utilities' => 'tailwind/flexbox-gap-order',
        'Creating Real Layouts with Flexbox' => 'tailwind/flexbox-patterns'
    ],
    '5. Grid System with Tailwind' => [
        'Grid Container and Template Columns/Rows' => 'tailwind/grid-columns',
        'Gap, Auto-Fill, Auto-Fit' => 'tailwind/grid-gap',
        'Grid Areas and Placement' => 'tailwind/grid-placement',
        'Nested Grids' => 'tailwind/grid-nested',
        'Responsive Grid Layouts' => 'tailwind/grid-responsive'
    ],
    '6. Styling Text and Fonts' => [
        'Font Size, Family, and Weight' => 'tailwind/text-fonts',
        'Line Height, Letter Spacing' => 'tailwind/text-spacing',
        'Text Alignment and Decoration' => 'tailwind/text-decor',
        'Text Truncation, Clamping' => 'tailwind/text-truncate',
        'Color Utilities and Custom Colors' => 'tailwind/text-color'
    ],
    '7. Colors, Backgrounds & Borders' => [
        'Text and Background Colors' => 'tailwind/colors-bg',
        'Gradients' => 'tailwind/gradients',
        'Border Width, Color, and Radius' => 'tailwind/borders',
        'Divide and Ring Utilities' => 'tailwind/ring-shadow',
        'Box Shadows and Opacity Control' => 'tailwind/opacity'
    ],
    '8. Pseudo-States and Interactions' => [
        'Hover, Focus, Active, Visited' => 'tailwind/states-basic',
        'Group Hover, Focus Within' => 'tailwind/states-group',
        'Disabled, First/Last, Odd/Even' => 'tailwind/states-position',
        'Transitions and Timing Functions' => 'tailwind/transitions',
        'Animating with Keyframes' => 'tailwind/animations'
    ],
    '9. Positioning and Z-Index' => [
        'Position Types' => 'tailwind/position',
        'Top, Right, Bottom, Left Utilities' => 'tailwind/inset',
        'z-Index Layers' => 'tailwind/z-index',
        'Transform and Scale' => 'tailwind/transform',
        'Translate, Skew, Rotate, Origin' => 'tailwind/translate'
    ],
    '10. Responsive Design Made Easy' => [
        'Mobile-First Philosophy' => 'tailwind/mobile-first',
        'Breakpoints' => 'tailwind/breakpoints',
        'Hiding/Showing Elements Responsively' => 'tailwind/show-hide',
        'Building a Mobile-First Navbar' => 'tailwind/mobile-nav'
    ],
    '11. Forms and Components' => [
        'Styling Inputs, Selects, Buttons' => 'tailwind/forms-basic',
        'Custom Checkbox and Radio Buttons' => 'tailwind/forms-custom',
        'Floating Labels and Focus Styles' => 'tailwind/forms-labels',
        'Tailwind Forms Plugin' => 'tailwind/forms-plugin',
        'Interactive Forms with Validation Styling' => 'tailwind/forms-validation'
    ],
    '12. Customization and Theming' => [
        'Configuring Tailwind' => 'tailwind/custom-config',
        'Extending Colors, Fonts, Breakpoints' => 'tailwind/extending',
        'Using :root CSS Variables' => 'tailwind/css-variables',
        'Creating Custom Utility Classes' => 'tailwind/custom-utilities',
        'Dark Mode: Class vs Media Strategy' => 'tailwind/dark-mode'
    ],
    '13. Component Composition' => [
        'Tailwind UI Principles' => 'tailwind/ui-principles',
        'Extracting Reusable Components' => 'tailwind/reuse',
        'Responsive Navbar, Cards, Modals' => 'tailwind/components',
        'Tailwind with React/Vue Templates' => 'tailwind/js-frameworks'
    ],
    '14. Plugins and Ecosystem' => [
        'Installing and Using Official Plugins' => 'tailwind/plugins-install',
        'Community Plugins and Examples' => 'tailwind/plugin-examples',
        'Typography, Aspect-Ratio, Line-Clamp' => 'tailwind/plugin-typography',
        'Tailwind UI (Paid) and Headless UI (Free)' => 'tailwind/plugin-ui',
        'Integration with PostCSS and Vite' => 'tailwind/integration'
    ],
    '15. Projects and Practice' => [
        'Responsive Portfolio Page' => 'tailwind/project-portfolio',
        'E-Commerce Product Grid' => 'tailwind/project-product-grid',
        'Pricing Table with Toggle' => 'tailwind/project-pricing',
        'Dark Mode Dashboard UI' => 'tailwind/project-dashboard'
    ],
    '16. Optimization and Best Practices' => [
        'Purging Unused CSS for Production' => 'tailwind/optimize-purge',
        'Minifying with PostCSS' => 'tailwind/optimize-minify',
        'Avoiding Class Bloat' => 'tailwind/optimize-bloat',
        'Accessibility with Tailwind' => 'tailwind/a11y',
        'Performance and SEO Tips' => 'tailwind/performance'
    ]
];

foreach ($sections as $title => $links) {
    echo "<div><h2 class='text-xl font-semibold mb-2'>$title</h2><ul class='space-y-2'>";
    foreach ($links as $label => $href) {
        tocLink($label, $href, $currentPage);
    }
    echo "</ul></div>";
}
?>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-2 mt-4 md:mt-0 w-full max-w-full overflow-hidden">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
