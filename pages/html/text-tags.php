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
            <li class="text-gray-500">Paragraphs &amp; Headings</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Paragraphs &amp; Headings in HTML</h1>
        <p class=" mb-4">
            Paragraphs and headings form the backbone of web content. They help organize information, improve readability, and provide structure for both users and search engines.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Paragraphs</h2>
            <p class=" mb-2">
                Paragraphs are defined using the <code>&lt;p&gt;</code> tag. They are used to group sentences together into meaningful blocks of text.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;This is a paragraph of text in HTML.&lt;/p&gt;
            </code></pre>
            <p class=" mt-2">
                Browsers automatically add space above and below paragraphs to separate them from other content.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Headings</h2>
            <p class=" mb-2">
                Headings are used to define titles and subtitles. HTML offers six levels of headings, from <code>&lt;h1&gt;</code> (most important) to <code>&lt;h6&gt;</code> (least important).
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;h1&gt;Main Title&lt;/h1&gt;
&lt;h2&gt;Subheading&lt;/h2&gt;
&lt;h3&gt;Section Title&lt;/h3&gt;
            </code></pre>
            <p class=" mt-2">
                Use headings in order to structure your content hierarchically and semantically.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>&lt;p&gt;</code> for all text blocks, not just line breaks.</li>
                <li>Start each page with one <code>&lt;h1&gt;</code> as the main title.</li>
                <li>Don’t skip heading levels (e.g., <code>&lt;h1&gt;</code> directly to <code>&lt;h4&gt;</code>).</li>
                <li>Use headings consistently for better accessibility and SEO.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Paragraphs and headings are fundamental HTML elements that help convey structure and meaning. By using them correctly, you create content that is easy to read, accessible, and search engine-friendly.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/reserved-chars') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Reserved Characters</a></div>
    <div><a href="<?= base_url('html/text-formatting') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Bold, Italic, etc. →</a></div>
</div>

    </article>
</main>
