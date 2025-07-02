<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="html-tutorials.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Heading Structure</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Heading Structure</h1>
        <p class="text-lg mb-4">
            Headings in HTML define the structure of your content. Proper use of heading tags helps screen readers and search engines understand the hierarchy and context of your content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Available Heading Tags</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>&lt;h1&gt;</code> – Main heading (used once per page).</li>
                <li><code>&lt;h2&gt;</code> – Subsection of <code>&lt;h1&gt;</code>.</li>
                <li><code>&lt;h3&gt;</code> – Subsection of <code>&lt;h2&gt;</code>, and so on up to <code>&lt;h6&gt;</code>.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li>Use only one <code>&lt;h1&gt;</code> per page to represent the main topic.</li>
                <li>Follow a logical order: don’t skip heading levels (e.g., <code>h1 → h3</code> without <code>h2</code>).</li>
                <li>Use headings to break content into readable sections.</li>
                <li>Don’t use headings just to make text bold or large — use CSS for styling.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example Structure</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;h1&gt;HTML Tutorial&lt;/h1&gt;
&lt;h2&gt;Introduction&lt;/h2&gt;
&lt;h2&gt;Basic Tags&lt;/h2&gt;
  &lt;h3&gt;Headings&lt;/h3&gt;
  &lt;h3&gt;Paragraphs&lt;/h3&gt;
&lt;h2&gt;Forms&lt;/h2&gt;
  &lt;h3&gt;Input Elements&lt;/h3&gt;
  &lt;h3&gt;Labels&lt;/h3&gt;
            </code></pre>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-paragraphs.php" class="text-blue-600 hover:underline">HTML Paragraphs →</a></p>
        </div>
    </article>
</main>
