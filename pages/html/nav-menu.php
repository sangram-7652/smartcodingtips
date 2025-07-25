<?php
$title = "Nav Menus with Lists | SmartCodingTips";
$description = "Learn about nav menus with lists in HTML. Understand key concepts, examples, and usage.";
$keywords = "nav, menus, with, lists, html tutorial, html basics";
?>
<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="html.php" class="text-blue-600 dark:text-blue-400 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Navigation Menus with Lists</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Creating Navigation Menus with Lists in HTML</h1>
        <p class=" mb-4">
            Navigation menus are commonly built using unordered lists (&lt;ul&gt;) with list items (&lt;li&gt;). This structure is semantic, accessible, and easy to style.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Nav Menu Example</h2>
            <nav>
                <ul class="list-none flex space-x-6  font-medium">
                    <li><a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a></li>
                    <li><a href="about.php" class="text-blue-600 dark:text-blue-400 hover:underline">About</a></li>
                    <li><a href="services.php" class="text-blue-600 dark:text-blue-400 hover:underline">Services</a></li>
                    <li><a href="contact.php" class="text-blue-600 dark:text-blue-400 hover:underline">Contact</a></li>
                </ul>
            </nav>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Nested Menus for Dropdowns</h2>
            <p class="mb-2">You can create submenus by nesting &lt;ul&gt; inside &lt;li&gt; elements:</p>
            <nav>
                <ul class="list-none space-y-2  font-medium">
                    <li>
                        <a href="products.php" class="text-blue-600 dark:text-blue-400 hover:underline">Products</a>
                        <ul class="list-disc list-inside ml-5 mt-1">
                            <li><a href="products/widgets.php" class="text-blue-600 dark:text-blue-400 hover:underline">Widgets</a></li>
                            <li><a href="products/gadgets.php" class="text-blue-600 dark:text-blue-400 hover:underline">Gadgets</a></li>
                            <li><a href="products/accessories.php" class="text-blue-600 dark:text-blue-400 hover:underline">Accessories</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.php" class="text-blue-600 dark:text-blue-400 hover:underline">Pricing</a></li>
                    <li><a href="support.php" class="text-blue-600 dark:text-blue-400 hover:underline">Support</a></li>
                </ul>
            </nav>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use semantic &lt;nav&gt; element to identify navigation landmarks.</li>
                <li>Make links focusable and provide clear visual focus styles.</li>
                <li>Use ARIA attributes if you implement complex dropdown menus.</li>
            </ul>
        </section>

        <section class="">
            <h2 class="text-2xl font-semibold mb-2">Styling Navigation Menus</h2>
            <p class="mb-2">You can style lists and links with CSS for horizontal or vertical layouts. Using utility classes like Tailwind CSS helps speed up styling.</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
/* Example CSS for horizontal nav */
nav ul {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

nav ul li a {
  text-decoration: none;
  color: #2563eb; /* blue-600 */
}

nav ul li a:hover,
nav ul li a:focus {
  text-decoration: underline;
}
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/relative-absolute') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Relative vs Absolute</a>
    <a href="<?= base_url('html/images') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Images →</a>
</div>
    </article>
</main>

