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
            <li class="text-gray-500">Reserved Characters</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Reserved Characters in HTML</h1>
        <p class="text-lg mb-4">
            In HTML, certain characters are reserved for use in the markup itself. These characters must be written using special codes called HTML entities when you want to display them on a web page.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What Are Reserved Characters?</h2>
            <p class="text-lg mb-2">
                Reserved characters have special meanings in HTML and cannot be used directly as part of the content. For example:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li><code>&lt;</code> for the less-than symbol (used to start tags)</li>
                <li><code>&gt;</code> for the greater-than symbol (used to end tags)</li>
                <li><code>&amp;</code> for the ampersand (used to define entities)</li>
                <li><code>&quot;</code> for double quotes (used in attribute values)</li>
                <li><code>&apos;</code> for single quotes (used in attribute values)</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">How to Display Reserved Characters</h2>
            <p class="text-lg mb-2">
                To show reserved characters in HTML content, use character entities. These begin with <code>&amp;</code> and end with <code>;</code>. Here are common examples:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt; -- &amp;lt;
&gt; -- &amp;gt;
&amp; -- &amp;amp;
&quot; -- &amp;quot;
&apos; -- &amp;apos;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why It Matters</h2>
            <p class="text-lg">
                Using entities prevents errors and ensures that browsers interpret your content correctly. For example, trying to type a less-than symbol directly may be interpreted as a tag, breaking your page.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Whenever you need to include special characters in your HTML content, always use the appropriate HTML entity. This ensures your content displays properly without interfering with your markup.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="headings.php" class="text-blue-600 hover:underline">HTML Headings →</a></p>
        </div>
    </article>
</main>
