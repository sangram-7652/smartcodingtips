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
            <li class="text-gray-500">Bold, Italic, etc.</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Bold, Italic, Underline, and More in HTML</h1>
        <p class="text-lg mb-4">
            HTML provides tags to style text in simple ways such as bolding, italicizing, and underlining. These tags help emphasize or distinguish parts of your content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Bold Text</h2>
            <p class="text-lg mb-2">
                Use the <code>&lt;b&gt;</code> or <code>&lt;strong&gt;</code> tag to make text bold. <code>&lt;strong&gt;</code> also adds semantic importance.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;This is &lt;b&gt;bold&lt;/b&gt; text.&lt;/p&gt;
&lt;p&gt;This is &lt;strong&gt;important&lt;/strong&gt; text.&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Italic Text</h2>
            <p class="text-lg mb-2">
                Italic text is used for emphasis or citation. Use <code>&lt;i&gt;</code> or <code>&lt;em&gt;</code> tags.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;This is &lt;i&gt;italic&lt;/i&gt; text.&lt;/p&gt;
&lt;p&gt;This is &lt;em&gt;emphasized&lt;/em&gt; text.&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Underlined Text</h2>
            <p class="text-lg mb-2">
                The <code>&lt;u&gt;</code> tag is used for underlining, though it's not commonly used for emphasis in modern HTML.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;This is &lt;u&gt;underlined&lt;/u&gt; text.&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Combining Styles</h2>
            <p class="text-lg mb-2">
                You can combine these tags to apply multiple styles to the same piece of text.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;&lt;strong&gt;&lt;em&gt;Bold and Italic&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Bold, italic, and underline are basic text styles you can apply with HTML tags. Use them appropriately to enhance readability and meaning.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="line-breaks.php" class="text-blue-600 hover:underline">Line Breaks in HTML →</a></p>
        </div>
    </article>
</main>
