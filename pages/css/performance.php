<?php
$title = "CSS Performance Tips & Best Practices | SmartCodingTips";
$description = "Improve website performance with efficient CSS. Learn best practices to write clean and fast CSS.";
$keywords = "css performance tips, css best practices, optimize css, fast loading styles";
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
            <li class="text-gray-500">Performance Tips</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Performance Tips</h1>
        <p class=" mb-4">
            Writing performant CSS helps reduce rendering time, improves page load speed, and ensures better user experience — especially on low-powered devices and mobile networks.
        </p>

        <!-- 1. Avoid Deep Selectors -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Avoid Deep and Complex Selectors</h2>
            <p class=" mb-2">
                Keep selectors short and specific. Deep nested selectors like <code>body div ul li a span</code> slow down CSS matching.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
/* ❌ Avoid */
.container .nav .list li a span { color: red; }

/* ✅ Prefer */
.nav-link { color: red; }
            </code></pre>
        </section>

        <!-- 2. Minimize Repaints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Minimize Repaints and Reflows</h2>
            <p class=" mb-2">
                Avoid layout-triggering properties like <code>width</code>, <code>height</code>, or <code>top</code> during animations. Use <code>transform</code> and <code>opacity</code> instead.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
/* ✅ Optimized animation */
.element {
    transition: transform 0.3s ease;
}
.element:hover {
    transform: scale(1.05);
}
            </code></pre>
        </section>

        <!-- 3. Use Efficient Units -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Use Efficient CSS Units</h2>
            <p class=" mb-2">
                Avoid unnecessary unit calculations or mixing incompatible units. Use <code>em</code>, <code>rem</code>, or <code>%</code> for scalable layouts.
            </p>
        </section>

        <!-- 4. Reduce Unused CSS -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Remove Unused CSS</h2>
            <ul class="list-disc list-inside  mb-2">
                <li>Use tools like <strong>PurgeCSS</strong>, <strong>UnCSS</strong>, or <strong>Tailwind’s built-in purge</strong></li>
                <li>Keep only what's necessary in production builds</li>
            </ul>
        </section>

        <!-- 5. Minify & Combine -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Minify & Combine Files</h2>
            <p class=" mb-2">
                Minifying your CSS removes whitespace and comments, reducing file size. You can also combine multiple files into one to reduce HTTP requests.
            </p>
        </section>

        <!-- 6. Load CSS Efficiently -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Load CSS Efficiently</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>&lt;link rel="stylesheet"&gt;</code> in the head</li>
                <li>Avoid inline styles where possible</li>
                <li>Use <code>media</code> queries to load CSS conditionally</li>
                <li>Use <code>preload</code> for critical CSS in large apps</li>
            </ul>
        </section>

        <!-- 7. Use CSS Shorthand -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. Use Shorthand Properties</h2>
            <p class=" mb-2">
                Shorthand saves bytes and improves clarity:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
/* ❌ Long version */
margin-top: 10px;
margin-right: 20px;
margin-bottom: 10px;
margin-left: 20px;

/* ✅ Shorthand */
margin: 10px 20px;
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS performance is not just about speed — it’s also about maintainability and scalability. Keep styles lean, avoid overuse of heavy effects, and always optimize your final output.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/bem-naming') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: BEM Naming</a> 
    <div></div>
</div>
    </article>
</main>