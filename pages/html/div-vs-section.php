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
            <li class="text-gray-500">Div vs Section</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Difference Between &lt;div&gt; and &lt;section&gt;</h1>
        <p class=" mb-4">
            In HTML, both <code>&lt;div&gt;</code> and <code>&lt;section&gt;</code> are used to group content, but they serve different purposes semantically.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is &lt;div&gt;?</h2>
            <p class="mb-2 ">
                The <code>&lt;div&gt;</code> element is a generic container with no semantic meaning. It is mainly used for layout and styling with CSS or JavaScript.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;div class="header"&gt;
  &lt;h1&gt;Welcome&lt;/h1&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is &lt;section&gt;?</h2>
            <p class="mb-2 ">
                The <code>&lt;section&gt;</code> element is a semantic container used to group related content under a thematic grouping, typically with a heading.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm break-all">
&lt;section&gt;
  &lt;h2&gt;About Us&lt;/h2&gt;
  &lt;p&gt;We are a software company...&lt;/p&gt;
&lt;/section&gt;
            </code></pre>
        </section>

        <section class="mb-6 w-full p-2">
            <h2 class="text-2xl font-semibold mb-2">Key Differences</h2>
            <table class="table-auto border border-gray-300 w-full text-sm text-left">
                <thead class="bg-gray-100  dark:text-black">
                    <tr>
                        <th class="border dark:border-black md:px-4 md:py-2">Aspect</th>
                        <th class="border dark:border-black md:px-4 md:py-2">&lt;div&gt;</th>
                        <th class="border dark:border-black md:px-4 md:py-2">&lt;section&gt;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border md:px-4 md:py-2">Semantic Meaning</td>
                        <td class="border md:px-4 md:py-2">None</td>
                        <td class="border md:px-4 md:py-2">Yes</td>
                    </tr>
                    <tr>
                        <td class="border md:px-4 md:py-2">Usage</td>
                        <td class="border md:px-4 md:py-2">Generic container</td>
                        <td class="border md:px-4 md:py-2">Thematic content block</td>
                    </tr>
                    <tr>
                        <td class="border md:px-4 md:py-2">SEO/Accessibility</td>
                        <td class="border md:px-4 md:py-2">Less helpful</td>
                        <td class="border md:px-4 md:py-2">More helpful</td>
                    </tr>
                    <tr>
                        <td class="border md:px-4 md:py-2">Heading Required?</td>
                        <td class="border md:px-4 md:py-2">No</td>
                        <td class="border md:px-4 md:py-2">Recommended</td>
                    </tr>
                </tbody>
            </table>

        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">When to Use What?</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>&lt;section&gt;</code> for grouped content that forms a logical block, often with a heading.</li>
                <li>Use <code>&lt;div&gt;</code> when you simply need a container for styling or scripting purposes without implying structure.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/html5-storage') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Web Storage</a></div>
    <div><a href="<?= base_url('html/columns-with-div') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Columns with Div →</a></div>
</div>
    </article>
</main>