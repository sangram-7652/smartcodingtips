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
            <li class="text-gray-500">New Tags in HTML5</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">New Tags in HTML5</h1>
        <p class=" mb-4">
            HTML5 introduced several new tags that enhance the structure, semantics, and multimedia capabilities of web pages. These tags help make the content more meaningful and accessible to both users and search engines.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Semantic Elements</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;header&gt;</code> – Defines a page or section header.</li>
                <li><code>&lt;nav&gt;</code> – Defines navigation links.</li>
                <li><code>&lt;article&gt;</code> – Represents a self-contained piece of content.</li>
                <li><code>&lt;section&gt;</code> – Represents a thematic grouping of content.</li>
                <li><code>&lt;aside&gt;</code> – Contains content tangentially related to the main content.</li>
                <li><code>&lt;footer&gt;</code> – Defines a footer for a section or page.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Media Elements</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;audio&gt;</code> – Embeds sound content in documents.</li>
                <li><code>&lt;video&gt;</code> – Embeds video content with playback controls.</li>
                <li><code>&lt;source&gt;</code> – Specifies multiple media resources for media elements.</li>
                <li><code>&lt;track&gt;</code> – Provides subtitles and captions for <code>&lt;video&gt;</code> or <code>&lt;audio&gt;</code>.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Graphics and Interactive Content</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;canvas&gt;</code> – Used for drawing graphics via scripting (JavaScript).</li>
                <li><code>&lt;svg&gt;</code> – Embeds scalable vector graphics (SVG) content.</li>
                <li><code>&lt;details&gt;</code> – Specifies additional details the user can view or hide.</li>
                <li><code>&lt;summary&gt;</code> – Summary, or label, for the <code>&lt;details&gt;</code> element.</li>
                <li><code>&lt;mark&gt;</code> – Highlights text that is relevant or important.</li>
                <li><code>&lt;progress&gt;</code> – Displays the progress of a task.</li>
                <li><code>&lt;meter&gt;</code> – Represents a scalar measurement within a known range.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;article&gt;
  &lt;header&gt;
    &lt;h1&gt;HTML5 Tags&lt;/h1&gt;
  &lt;/header&gt;
  &lt;p&gt;Learn about new semantic and multimedia tags.&lt;/p&gt;
  &lt;footer&gt;Written by SmartCodingTips&lt;/footer&gt;
&lt;/article&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/html5-intro') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Intro to HTML5</a></div>
    <div><a href="<?= base_url('html/html5-input') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: New Input Types →</a></div>
</div>
    </article>
</main>
