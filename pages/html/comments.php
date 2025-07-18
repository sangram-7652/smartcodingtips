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
            <li class="text-gray-500">Comments in HTML</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Comments in HTML</h1>
        <p class=" mb-4">
            HTML comments are useful for adding notes or explanations within your code. They are ignored by browsers and help developers understand or organize code.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Syntax of HTML Comments</h2>
            <p class=" mb-2">
                HTML comments begin with <code>&lt;!--</code> and end with <code>--&gt;</code>. Anything inside is not rendered on the page.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;!-- This is a comment --&gt;
&lt;p&gt;Visible content&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">When to Use Comments</h2>
            <ul class="list-disc list-inside ">
                <li>To explain complex sections of code.</li>
                <li>To temporarily hide parts of code during testing.</li>
                <li>To label sections for easier navigation.</li>
                <li>To collaborate more effectively with other developers.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Keep comments concise and relevant.</li>
                <li>Don't use comments to hide sensitive data.</li>
                <li>Avoid overusing comments in obvious code.</li>
                <li>Use comments to mark TODOs or FIXMEs.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                HTML comments are a powerful tool for documentation, organization, and debugging. Though invisible to users, they help keep code understandable and maintainable.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/head-body') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Head & Body</a></div>
    <div><a href="<?= base_url('html/page-layout') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Page Layout Tips →</a></div>
</div>
    </article>
</main>
