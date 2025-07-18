<!-- Gap and Order Utilities -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php?page=tailwind/flexbox-gap-order" class="text-blue-600 dark:text-blue-400 hover:underline">Gap and Order Utilities</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Gap and Order Utilities</h1>

    <p class="mb-4">Tailwind provides easy-to-use utilities to control spacing between flex/grid items and change their visual order — without changing the HTML source order.</p>

    <h2 class="text-2xl font-semibold mb-2">1️⃣ Spacing Between Items with <code>gap</code></h2>
    <p class="mb-3">Instead of adding margins manually to each child, use <code class="bg-gray-200 dark:bg-gray-900 px-1 rounded text-sm">gap</code> utilities on the flex container.</p>

    <ul class="list-disc list-inside mb-3">
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">gap-2</code>: Applies a 0.5rem gap between all children</li>
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">gap-x-4</code>: Horizontal spacing only</li>
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">gap-y-4</code>: Vertical spacing only</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex gap-4"&gt;
  &lt;div class="bg-indigo-500 text-white p-4"&gt;Item 1&lt;/div&gt;
  &lt;div class="bg-pink-500 text-white p-4"&gt;Item 2&lt;/div&gt;
  &lt;div class="bg-yellow-500 text-white p-4"&gt;Item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex gap-4 mb-6">
        <div class="bg-indigo-500 text-white p-4 rounded">Item 1</div>
        <div class="bg-pink-500 text-white p-4 rounded">Item 2</div>
        <div class="bg-yellow-500 text-white p-4 rounded">Item 3</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">2️⃣ Reordering Items with <code>order</code></h2>
    <p class="mb-3">You can visually rearrange flex items using <code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">order-{n}</code> utility classes.</p>

    <ul class="list-disc list-inside mb-3">
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">order-1</code>, <code>order-2</code>, etc. to set order index</li>
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">order-first</code> and <code>order-last</code> for convenience</li>
        <li><code class="bg-gray-200 dark:bg-gray-900  px-1 rounded text-sm">order-none</code>: default</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex gap-4"&gt;
  &lt;div class="bg-red-500 text-white p-4 order-3"&gt;Item 1 (order-3)&lt;/div&gt;
  &lt;div class="bg-blue-500 text-white p-4 order-1"&gt;Item 2 (order-1)&lt;/div&gt;
  &lt;div class="bg-green-500 text-white p-4 order-2"&gt;Item 3 (order-2)&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex gap-4 mb-6">
        <div class="bg-red-500 text-white p-4 rounded order-3">Item 1 (order-3)</div>
        <div class="bg-blue-500 text-white p-4 rounded order-1">Item 2 (order-1)</div>
        <div class="bg-green-500 text-white p-4 rounded order-2">Item 3 (order-2)</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">🧠 Use Cases</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Use <code>gap</code> for cleaner spacing without extra margin classes</li>
        <li>Use <code>order</code> to rearrange UI on different breakpoints (e.g., <code>md:order-1</code>)</li>
    </ul>

    <p class="text-green-700 font-semibold">✅ Tip: Combine <code>order</code> with responsive prefixes for mobile-first reordering!</p>

    <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/flexbox-align') ?>" class="hover:underline">← Previous: Justify Content & Align Items</a>
  <a href="<?= base_url('tailwind/flexbox-patterns') ?>" class="hover:underline">Next: Creating Real Layouts with Flexbox →</a>
</div>
</main>
