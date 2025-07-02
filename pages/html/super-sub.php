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
            <li class="text-gray-500">Superscript & Subscript</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Superscript &amp; Subscript in HTML</h1>
        <p class="text-lg mb-4">
            Superscript and subscript are useful when writing mathematical expressions, chemical formulas, footnotes, and other content where text needs to be slightly above or below the normal line.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Superscript Text</h2>
            <p class="text-lg mb-2">
                Use the <code>&lt;sup&gt;</code> tag to raise text above the baseline.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;E = mc&lt;sup&gt;2&lt;/sup&gt;&lt;/p&gt;
            </code></pre>
            <p class="text-lg mt-2">
                Superscript is often used for exponents or footnotes like <code>Note&lt;sup&gt;1&lt;/sup&gt;</code>.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Subscript Text</h2>
            <p class="text-lg mb-2">
                Use the <code>&lt;sub&gt;</code> tag to lower text below the baseline.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;p&gt;H&lt;sub&gt;2&lt;/sub&gt;O is the chemical formula for water.&lt;/p&gt;
            </code></pre>
            <p class="text-lg mt-2">
                Subscript is commonly used in chemical formulas or mathematical notations.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">When to Use</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Mathematical powers and indices (<code>x&lt;sup&gt;2&lt;/sup&gt;</code>)</li>
                <li>Chemical formulas like <code>CO&lt;sub&gt;2&lt;/sub&gt;</code></li>
                <li>Footnotes and citations</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Superscript and subscript tags provide semantic meaning and visual clarity when representing technical content. Use them where appropriate to improve comprehension.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="line-breaks.php" class="text-blue-600 hover:underline">Line Breaks in HTML →</a></p>
        </div>
    </article>
</main>
