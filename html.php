<?php
// html.php

$page = $_GET['page'] ?? 'html/what-is-html';
$pagePath = "pages/" . $page . ".php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/html/what-is-html.php";
}

ob_start();
include $pagePath;
$pageContent = ob_get_clean();

include 'includes/header.php';
$currentPage = $_GET['page'] ?? 'html/what-is-html';

function tocLink($label, $link, $currentPage) {
    $activeClass = ($link === $currentPage) ? 'bg-yellow-300 dark:bg-yellow-600 text-black font-semibold rounded px-2' : '';
    echo "<li><a href='html.php?page=$link' class='block px-2 py-1 rounded  $activeClass'>$label</a></li>";
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
        'What is HTML?' => 'html/what-is-html',
        'Features of HTML' => 'html/features',
        'Importance in Web Dev' => 'html/importance',
        'How HTML Works' => 'html/how-it-works',
        'Your First HTML Page' => 'html/first-page'
    ],
    '2. Document Structure' => [
        'Basic Structure' => 'html/basic-structure',
        'Doctype Declaration' => 'html/doctype',
        'Head & Body' => 'html/head-body',
        'Comments in HTML' => 'html/comments',
        'Page Layout Tips' => 'html/page-layout'
    ],
    '3. Building Blocks' => [
        'Elements & Tags' => 'html/elements-tags',
        'Attributes' => 'html/attributes',
        'Empty vs Container' => 'html/empty-vs-container',
        'Tag Nesting' => 'html/nesting',
        'Reserved Characters' => 'html/reserved-chars'
    ],
    '4. Text & Semantics' => [
        'Paragraphs & Headings' => 'html/text-tags',
        'Bold, Italic, etc.' => 'html/text-formatting',
        'Superscript & Subscript' => 'html/super-sub',
        'Semantic Tags' => 'html/semantic-tags',
        'Quote & Citation' => 'html/quote-cite'
    ],
    '5. Links & Navigation' => [
        'Anchor Tag' => 'html/anchor-tag',
        'Open in New Tab' => 'html/new-tab',
        'Page Jumps' => 'html/page-jump',
        'Relative vs Absolute' => 'html/relative-absolute',
        'Nav Menus with Lists' => 'html/nav-menu'
    ],
    '6. Media' => [
        'Images' => 'html/images',
        'Supported Formats' => 'html/image-formats',
        'Image Attributes' => 'html/image-attrs',
        'Video Tag' => 'html/video',
        'Audio Tag' => 'html/audio',
        'iFrames' => 'html/iframe'
    ],
    '7. Lists & Tables' => [
        'Types of Lists' => 'html/ol-ul-dl',
        'Creating Tables' => 'html/create-table',
        'Table Styling' => 'html/table-style',
        'Rowspan & Colspan' => 'html/rowspan-colspan'
    ],
    '8. Forms' => [
        'Form Tag' => 'html/forms',
        'Input Types' => 'html/form-input-types',
        'Labels & Placeholders' => 'html/labels-placeholders',
        'Checkbox & Radio' => 'html/checkbox-radio',
        'Select & Textarea' => 'html/select-textarea',
        'Validation' => 'html/form-validation',
        'Form Submission' => 'html/form-submit'
    ],
    '9. HTML5 Features' => [
        'Intro to HTML5' => 'html/html5-intro',
        'New Tags' => 'html/html5-tags',
        'New Input Types' => 'html/html5-input',
        'Audio & Video' => 'html/html5-media',
        'Canvas' => 'html/html5-canvas',
        'Geolocation' => 'html/html5-geo',
        'Web Storage' => 'html/html5-storage'
    ],
    '10. Layout Techniques' => [
        'Div vs Section' => 'html/div-vs-section',
        'Columns with Div' => 'html/columns-with-div',
        'Flexbox Layout' => 'html/flexbox-layout',
        'Grid Layout' => 'html/grid-layout',
        'Sticky Header/Footer' => 'html/sticky-footer'
    ],
    '11. Accessibility & SEO' => [
        'Alt, Title, ARIA' => 'html/aria-alt-title',
        'Screen Readers' => 'html/screen-readers',
        'Heading Structure' => 'html/heading-structure',
        'Meta Tags' => 'html/meta-tags',
        'Favicon' => 'html/favicon'
    ],
    '12. Other Topics' => [
        'Deprecated Tags' => 'html/deprecated-tags',
        'HTML Entities' => 'html/entities',
        'Inline vs Block' => 'html/inline-block',
        'HTML DOM' => 'html/dom-basics',
        'Best Practices' => 'html/best-practices'
    ],
    '13. Practice Projects' => [
        'Resume Page' => 'html/resume-project',
        'Product Landing Page' => 'html/landing-project',
        'Photo Gallery' => 'html/gallery-project',
        'Contact Us Form' => 'html/contact-project',
        'Simple Blog Layout' => 'html/blog-layout'
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
    <main class="flex-1 p-2 mt-4 md:mt-0">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>

