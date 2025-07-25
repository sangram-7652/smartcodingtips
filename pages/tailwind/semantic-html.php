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
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Semantic HTML with Utilities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Writing Semantic HTML with Utilities</h1>
        <p class=" mb-4">
            Tailwind encourages clean, semantic HTML while still allowing full design flexibility. Instead of wrapping content in anonymous <code>&lt;div&gt;</code>s with custom classes, you write meaningful HTML tags and apply Tailwind utility classes directly.
        </p>

        <!-- Why Semantic HTML Matters -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Why Semantic HTML Matters</h2>
            <ul class="list-disc list-inside  space-y-1">
                <li>Improves accessibility for screen readers</li>
                <li>Enhances SEO by making structure clearer to search engines</li>
                <li>Makes code easier to understand and maintain</li>
            </ul>
        </section>

        <!-- Semantic Elements -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Common Semantic Tags</h2>
            <div class="grid grid-cols-2 gap-4 bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white">
                <div><code>&lt;header&gt;</code> – Top of page or section</div>
                <div><code>&lt;nav&gt;</code> – Navigation menu</div>
                <div><code>&lt;main&gt;</code> – Main content of page</div>
                <div><code>&lt;section&gt;</code> – Logical grouping of content</div>
                <div><code>&lt;article&gt;</code> – Standalone content like a blog post</div>
                <div><code>&lt;footer&gt;</code> – Bottom section or copyright</div>
            </div>
        </section>

        <!-- Example: Article with Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Example: Article with Tailwind</h2>
            <p class=" mb-2">Here’s a semantic structure styled entirely with Tailwind:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;article class="prose max-w-none"&gt;
  &lt;header class="mb-4"&gt;
    &lt;h1 class="text-3xl font-bold"&gt;Tailwind Makes HTML Look Great&lt;/h1&gt;
    &lt;p class="text-sm text-gray-500"&gt;Published June 2025&lt;/p&gt;
  &lt;/header&gt;

  &lt;p class=" mb-4"&gt;
    Utility-first means you use small utility classes like &lt;code&gt;text-center&lt;/code&gt; or
    &lt;code&gt;bg-gray-100&lt;/code&gt; to style your content inline without writing custom CSS.
  &lt;/p&gt;

  &lt;footer class="border-t pt-4 text-sm text-gray-600"&gt;
    Posted in &lt;a href="#" class="text-blue-500 hover:underline"&gt;Tutorials&lt;/a&gt;
  &lt;/footer&gt;
&lt;/article&gt;
            </pre>
        </section>

        <!-- Tips for Semantic + Utility Workflow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tips for Semantic + Utility Workflow</h2>
            <ul class="list-disc list-inside ">
                <li>Use semantic tags first, add utility classes second</li>
                <li>Tailwind doesn’t force <code>&lt;div&gt;</code>-only structures</li>
                <li>Use <code>prose</code> class from the Typography plugin for article text</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Semantic HTML combined with utility classes results in clean, accessible, and maintainable UI code. Tailwind gives you the power to write beautifully structured pages without compromising on design or performance.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/utility-classes') ?>" class="hover:underline">← Previous: What Are Utility Classes?</a>
  <a href="<?= base_url('tailwind/variants') ?>" class="hover:underline ms-auto">Next: Responsive, Hover, and Focus Variants →</a>
</div>

    </article>
</main>
