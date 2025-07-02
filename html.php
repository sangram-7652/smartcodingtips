<?php
// html.php

// Determine which page to load
$page = $_GET['page'] ?? 'html/what-is-html';  // default page

// Sanitize and build full path
$pagePath = "pages/" . $page . ".php";

// Optional: Protect from invalid file access
if (!file_exists($pagePath)) {
    $pagePath = "pages/html/what-is-html.php"; // fallback
}

// This file should set SEO variables like $title, $canonical
ob_start();
include $pagePath;
$pageContent = ob_get_clean();

// Then include layout
include 'includes/header.php';
?>

<div class="flex  ">
    <div class="w-[18rem] h-[1200px] overflow-y-scroll bg-gray-100 shadow-lg hidden md:flex flex-col items-start px-6 py-8 space-y-6 text-sm font-medium ">

        <div>
            <h2 class="text-xl font-semibold mb-2">1. Introduction</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/what-is-html">What is HTML?</a></li>
                <li><a href="html.php?page=html/features">Features of HTML</a></li>
                <li><a href="html.php?page=html/importance">Importance in Web Dev</a></li>
                <li><a href="html.php?page=html/how-it-works">How HTML Works</a></li>
                <li><a href="html.php?page=html/first-page">Your First HTML Page</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">2. Document Structure</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/basic-structure">Basic Structure</a></li>
                <li><a href="html.php?page=html/doctype">Doctype Declaration</a></li>
                <li><a href="html.php?page=html/head-body">Head & Body</a></li>
                <li><a href="html.php?page=html/comments">Comments in HTML</a></li>
                <li><a href="html.php?page=html/page-layout">Page Layout Tips</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">3. Building Blocks</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/elements-tags">Elements & Tags</a></li>
                <li><a href="html.php?page=html/attributes">Attributes</a></li>
                <li><a href="html.php?page=html/empty-vs-container">Empty vs Container</a></li>
                <li><a href="html.php?page=html/nesting">Tag Nesting</a></li>
                <li><a href="html.php?page=html/reserved-chars">Reserved Characters</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">4. Text & Semantics</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/text-tags">Paragraphs & Headings</a></li>
                <li><a href="html.php?page=html/text-formatting">Bold, Italic, etc.</a></li>
                <li><a href="html.php?page=html/super-sub">Superscript & Subscript</a></li>
                <li><a href="html.php?page=html/semantic-tags">Semantic Tags</a></li>
                <li><a href="html.php?page=html/quote-cite">Quote & Citation</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">5. Links & Navigation</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/anchor-tag">Anchor Tag</a></li>
                <li><a href="html.php?page=html/new-tab">Open in New Tab</a></li>
                <li><a href="html.php?page=html/page-jump">Page Jumps</a></li>
                <li><a href="html.php?page=html/relative-absolute">Relative vs Absolute</a></li>
                <li><a href="html.php?page=html/nav-menu">Nav Menus with Lists</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">6. Media</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/images">Images</a></li>
                <li><a href="html.php?page=html/image-formats">Supported Formats</a></li>
                <li><a href="html.php?page=html/image-attrs">Image Attributes</a></li>
                <li><a href="html.php?page=html/video">Video Tag</a></li>
                <li><a href="html.php?page=html/audio">Audio Tag</a></li>
                <li><a href="html.php?page=html/iframe">iFrames</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">7. Lists & Tables</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/ol-ul-dl">Types of Lists</a></li>
                <li><a href="html.php?page=html/create-table">Creating Tables</a></li>
                <li><a href="html.php?page=html/table-style">Table Styling</a></li>
                <li><a href="html.php?page=html/rowspan-colspan">Rowspan & Colspan</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">8. Forms</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/forms">Form Tag</a></li>
                <li><a href="html.php?page=html/form-input-types">Input Types</a></li>
                <li><a href="html.php?page=html/labels-placeholders">Labels & Placeholders</a></li>
                <li><a href="html.php?page=html/checkbox-radio">Checkbox & Radio</a></li>
                <li><a href="html.php?page=html/select-textarea">Select & Textarea</a></li>
                <li><a href="html.php?page=html/form-validation">Validation</a></li>
                <li><a href="html.php?page=html/form-submit">Form Submission</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">9. HTML5 Features</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/html5-intro">Intro to HTML5</a></li>
                <li><a href="html.php?page=html/html5-tags">New Tags</a></li>
                <li><a href="html.php?page=html/html5-input">New Input Types</a></li>
                <li><a href="html.php?page=html/html5-media">Audio & Video</a></li>
                <li><a href="html.php?page=html/html5-canvas">Canvas</a></li>
                <li><a href="html.php?page=html/html5-geo">Geolocation</a></li>
                <li><a href="html.php?page=html/html5-storage">Web Storage</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">10. Layout Techniques</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/div-vs-section">Div vs Section</a></li>
                <li><a href="html.php?page=html/columns-with-div">Columns with Div</a></li>
                <li><a href="html.php?page=html/flexbox-layout">Flexbox Layout</a></li>
                <li><a href="html.php?page=html/grid-layout">Grid Layout</a></li>
                <li><a href="html.php?page=html/sticky-footer">Sticky Header/Footer</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">11. Accessibility & SEO</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/aria-alt-title">Alt, Title, ARIA</a></li>
                <li><a href="html.php?page=html/screen-readers">Screen Readers</a></li>
                <li><a href="html.php?page=html/heading-structure">Heading Structure</a></li>
                <li><a href="html.php?page=html/meta-tags">Meta Tags</a></li>
                <li><a href="html.php?page=html/favicon">Favicon</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">12. Other Topics</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/deprecated-tags">Deprecated Tags</a></li>
                <li><a href="html.php?page=html/entities">HTML Entities</a></li>
                <li><a href="html.php?page=html/inline-block">Inline vs Block</a></li>
                <li><a href="html.php?page=html/dom-basics">HTML DOM</a></li>
                <li><a href="html.php?page=html/best-practices">Best Practices</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2">13. Practice Projects</h2>
            <ul class="space-y-2">
                <li><a href="html.php?page=html/resume-project">Resume Page</a></li>
                <li><a href="html.php?page=html/landing-project">Product Landing Page</a></li>
                <li><a href="html.php?page=html/gallery-project">Photo Gallery</a></li>
                <li><a href="html.php?page=html/contact-project">Contact Us Form</a></li>
                <li><a href="html.php?page=html/blog-layout">Simple Blog Layout</a></li>
            </ul>
        </div>

    </div>

    <main class="flex-1">
        <?php echo $pageContent; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>