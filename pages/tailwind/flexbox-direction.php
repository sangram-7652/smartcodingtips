<!-- Direction, Wrapping, and Growth -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php?page=tailwind/flexbox-direction" class="text-blue-600 dark:text-blue-400 hover:underline">Direction, Wrapping, and Growth</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Direction, Wrapping, and Growth</h1>

    <p class="mb-4">Tailwind CSS gives you precise control over how flex items are arranged, wrapped, and scaled inside a flex container.</p>

    <h2 class="text-2xl font-semibold mb-2">1️⃣ Flex Direction</h2>
    <p class="mb-3">Use <code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-row</code>, <code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-col</code>, and their reverse versions to set direction.</p>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex flex-col"&gt;
  &lt;div class="bg-blue-500 text-white p-2"&gt;Item A&lt;/div&gt;
  &lt;div class="bg-green-500 text-white p-2"&gt;Item B&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex flex-col space-y-2 mb-6">
        <div class="bg-blue-500 text-white p-2 rounded">Item A</div>
        <div class="bg-green-500 text-white p-2 rounded">Item B</div>
    </div>

    <ul class="list-disc list-inside mb-6">
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-row</code> (default): horizontal (left to right)</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-row-reverse</code>: horizontal (right to left)</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-col</code>: vertical (top to bottom)</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-col-reverse</code>: vertical (bottom to top)</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2">2️⃣ Flex Wrapping</h2>
    <p class="mb-3">Use wrapping utilities to control whether flex items stay on one line or wrap to multiple lines.</p>

    <ul class="list-disc list-inside mb-3">
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-nowrap</code>: items stay in a single line</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-wrap</code>: wrap to the next line if needed</li> dark:bg-gray-900
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-wrap-reverse</code>: wrap in reverse direction</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex flex-wrap gap-2"&gt;
  &lt;div class="w-40 h-20 bg-pink-500 text-white p-2"&gt;Box 1&lt;/div&gt;
  &lt;div class="w-40 h-20 bg-purple-500 text-white p-2"&gt;Box 2&lt;/div&gt;
  &lt;div class="w-40 h-20 bg-indigo-500 text-white p-2"&gt;Box 3&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex flex-wrap gap-2 mb-6">
        <div class="w-40 h-20 bg-pink-500 text-white p-2 rounded">Box 1</div>
        <div class="w-40 h-20 bg-purple-500 text-white p-2 rounded">Box 2</div>
        <div class="w-40 h-20 bg-indigo-500 text-white p-2 rounded">Box 3</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">3️⃣ Flex Grow, Shrink, and Basis</h2>
    <p class="mb-3">Use these utilities to control how items expand or contract relative to other items.</p>

    <ul class="list-disc list-inside mb-3">
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-grow</code>: allow an item to grow</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">flex-shrink</code>: allow an item to shrink</li>
        <li><code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">basis-{size}</code>: initial size before growing/shrinking</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex space-x-2"&gt;
  &lt;div class="flex-grow bg-yellow-500 text-white p-4"&gt;Grow 1&lt;/div&gt;
  &lt;div class="flex-grow bg-orange-500 text-white p-4"&gt;Grow 2&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex space-x-2 mb-6">
        <div class="flex-grow bg-yellow-500 text-white p-4 rounded">Grow 1</div>
        <div class="flex-grow bg-orange-500 text-white p-4 rounded">Grow 2</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">🧠 Quick Tip</h2>
    <p>Use <code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">basis-1/2</code> or <code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">basis-full</code> to control item size with great flexibility!</p>

    <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
        <a href="<?= base_url('tailwind/flexbox-intro') ?>" class="hover:underline">← Previous: Flex Containers and Items</a>
        <a href="<?= base_url('tailwind/flexbox-align') ?>" class="hover:underline ms-auto">Next: Justify Content & Align Items →</a>
    </div>

</main>