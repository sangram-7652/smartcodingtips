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
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Display: Block, Inline, Flex, Grid</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Display: Block, Inline, Flex, Grid</h1>
        <p class=" mb-4">
            Tailwind CSS gives you full control over how elements are displayed using display utility classes. You can toggle between block-level and inline-level displays, or use layout modes like flexbox and grid effortlessly.
        </p>

        <!-- Block and Inline -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Block and Inline Display</h2>
            <p class=" mb-2">Control whether elements behave like block or inline elements:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="block"&gt;Block-level element&lt;/div&gt;
&lt;span class="inline"&gt;Inline element&lt;/span&gt;
&lt;div class="inline-block"&gt;Inline Block Element&lt;/div&gt;
            </pre>
        </section>

        <!-- Flex -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Flex Display</h2>
            <p class=" mb-2">Enable flexbox layout using <code>flex</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="flex space-x-4"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;
            </pre>
            <p class=" mt-2">Use additional flex utilities to control direction, alignment, and spacing.</p>
        </section>

        <!-- Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Grid Display</h2>
            <p class=" mb-2">Activate CSS Grid layout with <code>grid</code> class:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;div&gt;Grid 1&lt;/div&gt;
    &lt;div&gt;Grid 2&lt;/div&gt;
    &lt;div&gt;Grid 3&lt;/div&gt;
&lt;/div&gt;
            </pre>
            <p class=" mt-2">You can define columns, rows, and gaps using additional grid utilities.</p>
        </section>

        <!-- Other Display Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Other Display Utilities</h2>
            <ul class="list-disc list-inside ">
                <li><code>hidden</code> – Completely hides an element.</li>
                <li><code>table</code>, <code>table-row</code>, <code>table-cell</code> – Table-based layouts.</li>
                <li><code>contents</code> – Makes children act as if the parent doesn't exist (great with pseudo-elements).</li>
                <li><code>list-item</code> – Forces element to behave like a list item.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind’s display utilities make it simple to switch between layout modes. Whether you're working with basic inline/block layouts or advanced flex and grid systems, it's all one class away.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/sizing') ?>" class="hover:underline">← Previous: Widths, Heights, Max/Min Sizing</a>
  <a href="<?= base_url('tailwind/box-sizing') ?>" class="hover:underline ms-auto">Next: Float, Clear, Overflow, Object Fit →</a>
</div>

    </article>
</main>
