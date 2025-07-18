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
            <li class="text-gray-500">Quote & Citation</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Quote & Citation in HTML</h1>
        <p class=" mb-4">
            HTML provides tags to display quotations and references in a way that is both semantically correct and visually appropriate. These tags help identify quoted material and cited sources clearly.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Blockquote Tag</h2>
            <p class=" mb-2">
                Use the <code>&lt;blockquote&gt;</code> tag for long quotations. It usually indents the quoted text.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;blockquote&gt;
    The greatest glory in living lies not in never falling, but in rising every time we fall.
&lt;/blockquote&gt;
            </code></pre>
            <p class=" mt-2">
                Blockquotes can also include a <code>cite</code> attribute to reference the source URL.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Quote Tag</h2>
            <p class=" mb-2">
                Use the <code>&lt;q&gt;</code> tag for short inline quotes. Browsers typically surround the text with quotation marks.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;Steve Jobs once said, &lt;q&gt;Innovation distinguishes between a leader and a follower.&lt;/q&gt;&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Cite Tag</h2>
            <p class=" mb-2">
                The <code>&lt;cite&gt;</code> tag is used to reference the title of a work or source, such as a book, website, or article.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;Read more in &lt;cite&gt;The Art of War&lt;/cite&gt; by Sun Tzu.&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>&lt;blockquote&gt;</code> for long quotations.</li>
                <li>Use <code>&lt;q&gt;</code> for short, inline quotes.</li>
                <li>Use <code>&lt;cite&gt;</code> to credit sources properly.</li>
                <li>Always provide context or attribution when quoting someone.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Using quote and citation tags improves clarity, structure, and accessibility. These semantic elements help convey meaning and source attribution effectively in your HTML content.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/semantic-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Semantic Tags</a></div>
    <div><a href="<?= base_url('html/anchor-tag') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Anchor Tag →</a></div>
</div>
    </article>
</main>
