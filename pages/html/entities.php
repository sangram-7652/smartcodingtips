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
            <li class="text-gray-500">HTML Entities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Entities</h1>
        <p class=" mb-4">
            HTML entities are special codes used to display reserved or invisible characters in HTML. These are useful when you need to display symbols that would otherwise be interpreted as HTML code or cannot be typed directly.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why Use HTML Entities?</h2>
            <ul class="list-disc list-inside ">
                <li>To display reserved characters like <code>&lt;</code>, <code>&gt;</code>, and <code>&amp;</code>.</li>
                <li>To display invisible or special characters like non-breaking spaces or copyright signs.</li>
                <li>To ensure consistent rendering across all browsers and platforms.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common HTML Entities</h2>
            <table class="table-auto border-collapse w-full text-left text-base">
                <thead>
                    <tr class="bg-gray-200  dark:text-black">
                        <th class="border dark:border-black px-4 py-2">Character</th>
                        <th class="border dark:border-black px-4 py-2">Entity Name</th>
                        <th class="border dark:border-black px-4 py-2">Entity Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">&lt;</td>
                        <td class="border px-4 py-2">&amp;lt;</td>
                        <td class="border px-4 py-2">&#60;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">&gt;</td>
                        <td class="border px-4 py-2">&amp;gt;</td>
                        <td class="border px-4 py-2">&#62;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">&amp;</td>
                        <td class="border px-4 py-2">&amp;amp;</td>
                        <td class="border px-4 py-2">&#38;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">&quot;</td>
                        <td class="border px-4 py-2">&amp;quot;</td>
                        <td class="border px-4 py-2">&#34;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">&nbsp;</td>
                        <td class="border px-4 py-2">&amp;nbsp;</td>
                        <td class="border px-4 py-2">&#160;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">©</td>
                        <td class="border px-4 py-2">&amp;copy;</td>
                        <td class="border px-4 py-2">&#169;</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">®</td>
                        <td class="border px-4 py-2">&amp;reg;</td>
                        <td class="border px-4 py-2">&#174;</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example Usage</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;5 &amp;lt; 10 is a valid expression.&lt;/p&gt;
&lt;p&gt;Use &amp;copy; for copyright symbol.&lt;/p&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/deprecated-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Deprecated Tags</a></div>
    <div><a href="<?= base_url('html/inline-block') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Inline vs Block →</a></div>
</div>
    </article>
</main>
