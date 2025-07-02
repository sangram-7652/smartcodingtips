<!-- Flex Containers and Items -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php?page=tailwind/flexbox-intro" class="text-blue-600 hover:underline">Flex Containers and Items</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Flex Containers and Items</h1>

    <p class="mb-4">Tailwind CSS makes it super easy to work with Flexbox layouts using utility classes. You can turn any container into a flex container using the <code class="bg-gray-200 px-1 rounded text-sm">flex</code> class.</p>

    <h2 class="text-2xl font-semibold mb-2">1️⃣ Creating a Flex Container</h2>
    <p class="mb-3">Use <code class="bg-gray-200 px-1 rounded text-sm">flex</code> to make a container flexible. By default, it lays children in a horizontal row.</p>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex"&gt;
  &lt;div class="bg-blue-500 text-white p-4"&gt;Item 1&lt;/div&gt;
  &lt;div class="bg-green-500 text-white p-4"&gt;Item 2&lt;/div&gt;
  &lt;div class="bg-red-500 text-white p-4"&gt;Item 3&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex mb-6 space-x-2">
        <div class="bg-blue-500 text-white p-4 rounded">Item 1</div>
        <div class="bg-green-500 text-white p-4 rounded">Item 2</div>
        <div class="bg-red-500 text-white p-4 rounded">Item 3</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">2️⃣ Making Items Inline with Flex</h2>
    <p class="mb-3">Use <code class="bg-gray-200 px-1 rounded text-sm">inline-flex</code> instead of <code class="bg-gray-200 px-1 rounded text-sm">flex</code> if you want the container to behave like an inline element.</p>

    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="inline-flex"&gt;
  &lt;div class="bg-purple-500 text-white p-4"&gt;A&lt;/div&gt;
  &lt;div class="bg-pink-500 text-white p-4"&gt;B&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="inline-flex mb-6 space-x-2">
        <div class="bg-purple-500 text-white p-4 rounded">A</div>
        <div class="bg-pink-500 text-white p-4 rounded">B</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">3️⃣ Key Flex Classes in Tailwind</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code class="bg-gray-200 px-1 rounded text-sm">flex</code> – Turn container into a flexbox</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">inline-flex</code> – Same but inline</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">flex-row</code> – Items in a row (default)</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">flex-col</code> – Items stacked vertically</li>
        <li><code class="bg-gray-200 px-1 rounded text-sm">flex-wrap</code> – Allow items to wrap onto multiple lines</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2">🧠 Pro Tip</h2>
    <p>Use <code class="bg-gray-200 px-1 rounded text-sm">gap-x-4</code> or <code class="bg-gray-200 px-1 rounded text-sm">gap-y-2</code> to control spacing between flex items instead of using margins.</p>

</main>
