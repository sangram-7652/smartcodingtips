<!-- Justify Content & Align Items -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php?page=tailwind/flexbox-align" class="text-blue-600 hover:underline">Justify Content & Align Items</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Justify Content & Align Items</h1>

    <p class="mb-4">Tailwind CSS gives you utility classes to control alignment of flex items along both the <strong>main axis</strong> and the <strong>cross axis</strong>.</p>

    <h2 class="text-2xl font-semibold mb-2">1️⃣ Justify Content</h2>
    <p class="mb-3">Controls alignment along the <strong>main axis</strong> (row or column direction). Use these classes on the flex container:</p>

    <ul class="list-disc list-inside mb-4">
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-start</code>: align items at the start</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-center</code>: center items</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-end</code>: align at the end</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-between</code>: even spacing between items</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-around</code>: equal space around items</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">justify-evenly</code>: equal space between and around</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex justify-center space-x-2"&gt;
  &lt;div class="bg-blue-500 text-white p-4"&gt;1&lt;/div&gt;
  &lt;div class="bg-green-500 text-white p-4"&gt;2&lt;/div&gt;
  &lt;div class="bg-red-500 text-white p-4"&gt;3&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex justify-center space-x-2 mb-6">
        <div class="bg-blue-500 text-white p-4 rounded">1</div>
        <div class="bg-green-500 text-white p-4 rounded">2</div>
        <div class="bg-red-500 text-white p-4 rounded">3</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">2️⃣ Align Items</h2>
    <p class="mb-3">Controls alignment on the <strong>cross axis</strong> (perpendicular to main axis). These classes are also applied on the flex container:</p>

    <ul class="list-disc list-inside mb-4">
        <li><code class="bg-gray-200 px-1 rounded text-sm">items-start</code>: align items to top/left</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">items-center</code>: center items</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">items-end</code>: align to bottom/right</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">items-stretch</code>: stretch to fill (default)</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">items-baseline</code>: align text baselines</li>
    </ul>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex items-end space-x-2 h-32 bg-gray-100"&gt;
  &lt;div class="bg-blue-500 text-white p-2 h-12"&gt;Short&lt;/div&gt;
  &lt;div class="bg-green-500 text-white p-2 h-20"&gt;Tall&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex items-end space-x-2 h-32 bg-gray-100 mb-6 p-2 rounded">
        <div class="bg-blue-500 text-white p-2 h-12 rounded">Short</div>
        <div class="bg-green-500 text-white p-2 h-20 rounded">Tall</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">3️⃣ Align Self (on item)</h2>
    <p>Use <code class="bg-gray-200 px-1 rounded text-sm">self-start</code>, <code class="bg-gray-200 px-1 rounded text-sm">self-end</code>, <code class="bg-gray-200 px-1 rounded text-sm">self-center</code> etc. on individual flex items to override the container’s alignment.</p>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex items-center h-32 bg-gray-100 space-x-2"&gt;
  &lt;div class="self-start bg-red-500 text-white p-2"&gt;Top&lt;/div&gt;
  &lt;div class="bg-blue-500 text-white p-2"&gt;Center&lt;/div&gt;
  &lt;div class="self-end bg-green-500 text-white p-2"&gt;Bottom&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex items-center h-32 bg-gray-100 space-x-2 p-2 mb-6 rounded">
        <div class="self-start bg-red-500 text-white p-2 rounded">Top</div>
        <div class="bg-blue-500 text-white p-2 rounded">Center</div>
        <div class="self-end bg-green-500 text-white p-2 rounded">Bottom</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">🧠 Summary</h2>
    <p>Use <strong>justify-*</strong> for horizontal alignment and <strong>items-*</strong> (or <strong>self-*</strong>) for vertical alignment. Flexbox makes it simple to center, distribute, or stretch elements!</p>

</main>
