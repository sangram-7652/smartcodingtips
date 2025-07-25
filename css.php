<?php
// css.php

// ✅ Dynamic base URL for local & production
function base_url($path = '') {
    $host = $_SERVER['HTTP_HOST'];
    $isLocal = $host === 'localhost' || str_contains($host, '127.0.0.1');
    $base = $isLocal ? '/smartcodingtips' : ''; // Update this if local folder name changes
    return $base . '/' . ltrim($path, '/');
}

// ✅ Get page or fallback
$page = $_GET['page'] ?? 'css/what-is-css';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/css/what-is-css.php";
}

// ✅ Load page content
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// ✅ SEO Meta (optional — add title, description per page if needed)
$title = $title ?? "SmartCodingTips - CSS";
$description = $description ?? "Learn CSS with structured tutorials and examples.";
$keywords = $keywords ?? "css, styling, web development, smartcodingtips";
$slug = basename($page);
$canonical = "https://smartcodingtips.com/css/$slug";

// ✅ Current page for TOC
$currentPage = $_GET['page'] ?? 'css/what-is-css';

// ✅ Include header
include 'includes/header.php';

// ✅ TOC link function
function tocLink($label, $link, $currentPage) {
    $slug = basename($link); // css/what-is-css → what-is-css
    $activeClass = ($link === $currentPage) ? 'bg-yellow-300 dark:bg-yellow-600 text-black font-semibold rounded px-2' : '';
    echo "<li><a href='" . base_url("css/$slug") . "' class='block px-2 py-1 rounded $activeClass'>$label</a></li>";
}
?>


<!-- Mobile TOC Button -->
<button id="openToc" class="md:hidden bg-gray-800 text-white px-4 py-2 m-4 rounded fixed top-16 left-2 z-40">
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
        <div class="px-4 py-10 md:py-4 space-y-4 ">
<?php
$sections = [
    '1. Introduction' => [
        'What is CSS?' => 'css/what-is-css',
        'Why Use CSS?' => 'css/why-css',
        'Types of CSS' => 'css/css-types',
        'How CSS Works' => 'css/how-it-works',
        'Setup Your First File' => 'css/setup'
    ],
    '2. Syntax & Selectors' => [
        'Syntax Overview' => 'css/syntax',
        'Basic Selectors' => 'css/selectors-basic',
        'Advanced Selectors' => 'css/selectors-advanced',
        'Combinators' => 'css/combinators'
    ],
    '3. Text & Fonts' => [
        'Font Styles' => 'css/font-style',
        'Text & Background Colors' => 'css/colors',
        'Line & Letter Spacing' => 'css/text-spacing',
        'Alignment & Decoration' => 'css/text-decoration'
    ],
    '4. Colors & Units' => [
        'Hex, RGB, HSL' => 'css/color-systems',
        'Units: px, %, em, rem' => 'css/units',
        'Opacity & Gradients' => 'css/opacity-gradient',
        'CSS Variables' => 'css/variables'
    ],
    '5. Box Model' => [
        'Box Model Basics' => 'css/box-model',
        'Margin & Padding' => 'css/margin-padding',
        'Overflow & Box Sizing' => 'css/overflow-sizing'
    ],
    '6. Display & Positioning' => [
        'Display Types' => 'css/display',
        'Positioning' => 'css/position',
        'Z-index & Layering' => 'css/z-index',
        'Centering Elements' => 'css/centering'
    ],
    '7. Backgrounds & Borders' => [
        'Backgrounds' => 'css/backgrounds',
        'Borders' => 'css/borders',
        'Shadows' => 'css/shadows'
    ],
    '8. Transitions & Animations' => [
        'CSS Transitions' => 'css/transitions',
        'Keyframe Animations' => 'css/animations',
        '2D & 3D Transforms' => 'css/transforms'
    ],
    '9. Responsive Design' => [
        'Media Queries' => 'css/media-queries',
        'Mobile-First Design' => 'css/mobile-first',
        'Breakpoints' => 'css/breakpoints'
    ],
    '10. Flexbox' => [
        'Flexbox Basics' => 'css/flexbox-intro',
        'Aligning Items' => 'css/flexbox-align',
        'Wrapping & Direction' => 'css/flexbox-wrap',
        'Layout Patterns' => 'css/flexbox-layouts'
    ],
    '11. CSS Grid' => [
        'Grid Basics' => 'css/grid-intro',
        'Grid Template Areas' => 'css/grid-template',
        'Responsive Grids' => 'css/grid-responsive'
    ],
    '12. Advanced Techniques' => [
        'Custom Fonts' => 'css/font-face',
        'calc(), clamp()' => 'css/calc-clamp',
        'Sticky Scroll' => 'css/sticky-scroll',
        'Dark Mode' => 'css/dark-mode'
    ],
    '13. Forms & UI' => [
        'Input & Button Styling' => 'css/form-styling',
        'Form Layout' => 'css/form-layouts',
        'Focus & States' => 'css/form-focus',
        'Custom Checkbox/Radio' => 'css/custom-checkbox'
    ],
    '14. Practice Projects' => [
        'Portfolio Project' => 'css/portfolio-project',
        'Pricing Table' => 'css/pricing-table',
        'Animated Navbar' => 'css/navbar-project',
        'Image Slider' => 'css/image-slider',
        'Product Card' => 'css/product-card'
    ],
    '15. Debugging & Best Practices' => [
        'DevTools for CSS' => 'css/devtools',
        'BEM Naming' => 'css/bem-naming',
        'Performance Tips' => 'css/performance'
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
