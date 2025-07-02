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
            <li class="text-gray-500">Tag Nesting</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tag Nesting in HTML</h1>
        <p class="text-lg mb-4">
            Tag nesting in HTML refers to placing one HTML element inside another. Proper nesting is important to ensure the document is well-formed and behaves consistently across browsers.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is Tag Nesting?</h2>
            <p class="text-lg mb-2">
                Tag nesting is when HTML elements are placed within other elements. This is common when structuring content.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;div&gt;
    &lt;p&gt;This is a &lt;strong&gt;strong&lt;/strong&gt; word.&lt;/p&gt;
&lt;/div&gt;
            </code></pre>
            <p class="text-lg mt-2">
                In the example above, the <code>&lt;strong&gt;</code> tag is nested inside the <code>&lt;p&gt;</code> tag, which is inside a <code>&lt;div&gt;</code>.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Rules for Proper Nesting</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Tags must be closed in the reverse order of how they were opened.</li>
                <li>Improper nesting can break layout and styling.</li>
                <li>Do not overlap tags (e.g., <code>&lt;i&gt;&lt;b&gt;text&lt;/i&gt;&lt;/b&gt;</code> is incorrect).</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!-- Correct --&gt;
&lt;em&gt;&lt;strong&gt;Important&lt;/strong&gt;&lt;/em&gt;

&lt;!-- Incorrect --&gt;
&lt;em&gt;&lt;strong&gt;Important&lt;/em&gt;&lt;/strong&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Nesting Patterns</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>&lt;ul&gt;</code> with nested <code>&lt;li&gt;</code> elements</li>
                <li><code>&lt;form&gt;</code> containing <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code></li>
                <li><code>&lt;table&gt;</code> containing <code>&lt;tr&gt;</code> and <code>&lt;td&gt;</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tag nesting is an essential part of writing structured HTML. Always ensure that tags are properly opened, closed, and correctly nested for a clean and functional webpage.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="headings.php" class="text-blue-600 hover:underline">HTML Headings →</a></p>
        </div>
    </article>
</main>
