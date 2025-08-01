<?php
$title = "CSS calc(), clamp() Functions | SmartCodingTips";
$description = "Use CSS functions like calc(), clamp(), min(), max() to build flexible designs.";
$keywords = "css calc, css clamp, css min max, responsive font size, css functions";
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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">calc(), clamp()</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS <code>calc()</code> and <code>clamp()</code> Functions</h1>
        <p class=" mb-4">
            The <code>calc()</code> and <code>clamp()</code> functions allow dynamic sizing and flexible responsiveness in CSS. They help create layouts and typography that adapt beautifully to different screen sizes.
        </p>

        <!-- calc() Function -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using <code>calc()</code></h2>
            <p class=" mb-2">
                <code>calc()</code> lets you perform calculations within CSS property values.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.element {
    width: calc(100% - 40px);
    margin-top: calc(2rem + 10px);
    font-size: calc(1rem + 0.5vw);
}
            </code></pre>
            <p class=" mt-2">
                You can mix units like %, px, rem, and vw together. It's great for spacing, layouts, and typography.
            </p>
        </section>

        <!-- clamp() Function -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using <code>clamp()</code></h2>
            <p class=" mb-2">
                <code>clamp()</code> defines a value that adapts between a minimum, preferred, and maximum:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
h1 {
    font-size: clamp(1.5rem, 4vw, 3rem);
}
            </code></pre>
            <p class=" mt-2">
                In this example, the font size:
                <ul class="list-disc list-inside ">
                    <li>Never goes below <code>1.5rem</code></li>
                    <li>Scales based on <code>4vw</code> (viewport width)</li>
                    <li>Never exceeds <code>3rem</code></li>
                </ul>
            </p>
        </section>

        <!-- When to Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. When to Use</h2>
            <ul class="list-disc list-inside ">
                <li><code>calc()</code> – for combining fixed and flexible values (e.g., width: <code>calc(100% - 300px)</code>)</li>
                <li><code>clamp()</code> – for responsive font sizes and elements that need fluid scaling</li>
            </ul>
        </section>

        <!-- Browser Support -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Browser Support</h2>
            <p class="">
                Both <code>calc()</code> and <code>clamp()</code> are well-supported in all modern browsers. Avoid <code>clamp()</code> for legacy Internet Explorer.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Use <code>calc()</code> for precision and flexibility, and <code>clamp()</code> for elegant responsiveness. These functions unlock powerful layout and typography capabilities in modern CSS.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/font-face') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Custom Fonts</a> 
   <a href="<?= base_url('css/sticky-scroll') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Sticky Scroll →</a> 
</div>
    </article>
</main>
