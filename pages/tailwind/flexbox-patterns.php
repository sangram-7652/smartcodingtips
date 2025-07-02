<!-- Creating Real Layouts with Flexbox -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php?page=tailwind/flexbox-patterns" class="text-blue-600 hover:underline">Creating Real Layouts with Flexbox</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Creating Real Layouts with Flexbox</h1>

    <p class="mb-4">Now that you know the basics of Flexbox in Tailwind, let’s apply them to build practical layout patterns like navigation bars, cards, and sidebar-page layouts.</p>

    <h2 class="text-2xl font-semibold mb-2">1️⃣ Navbar with Logo and Links</h2>
    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;nav class="flex items-center justify-between p-4 bg-gray-800 text-white"&gt;
  &lt;div class="text-lg font-bold"&gt;MySite&lt;/div&gt;
  &lt;div class="space-x-4"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
    &lt;a href="#"&gt;About&lt;/a&gt;
    &lt;a href="#"&gt;Contact&lt;/a&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>

    <div class="flex items-center justify-between p-4 bg-gray-800 text-white rounded mb-6">
        <div class="text-lg font-bold">MySite</div>
        <div class="space-x-4">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Contact</a>
        </div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">2️⃣ Two-Column Layout (Sidebar + Content)</h2>
    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex"&gt;
  &lt;aside class="w-1/4 bg-gray-100 p-4"&gt;Sidebar&lt;/aside&gt;
  &lt;main class="flex-1 bg-white p-4"&gt;Main Content&lt;/main&gt;
&lt;/div&gt;</code></pre>

    <div class="flex rounded overflow-hidden mb-6">
        <aside class="w-1/4 bg-gray-100 p-4">Sidebar</aside>
        <main class="flex-1 bg-white p-4 border-l">Main Content</main>
    </div>

    <h2 class="text-2xl font-semibold mb-2">3️⃣ Card Layout with Flex Column</h2>
    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex flex-col md:flex-row gap-4"&gt;
  &lt;div class="bg-white p-4 shadow rounded flex-1"&gt;Card 1&lt;/div&gt;
  &lt;div class="bg-white p-4 shadow rounded flex-1"&gt;Card 2&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <div class="bg-white p-4 shadow rounded flex-1">Card 1</div>
        <div class="bg-white p-4 shadow rounded flex-1">Card 2</div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">4️⃣ Pricing Table with Equal Height</h2>
    <pre class="bg-gray-900 text-white text-sm p-4 rounded mb-4 overflow-auto"><code>&lt;div class="flex flex-col md:flex-row gap-4"&gt;
  &lt;div class="flex flex-col flex-1 bg-gray-100 p-6 rounded"&gt;
    &lt;h3 class="text-xl font-bold mb-2"&gt;Basic&lt;/h3&gt;
    &lt;p class="flex-grow"&gt;Some features&lt;/p&gt;
    &lt;button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"&gt;Select&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="flex flex-col flex-1 bg-gray-100 p-6 rounded"&gt;
    &lt;h3 class="text-xl font-bold mb-2"&gt;Pro&lt;/h3&gt;
    &lt;p class="flex-grow"&gt;All features&lt;/p&gt;
    &lt;button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"&gt;Select&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>

    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <div class="flex flex-col flex-1 bg-gray-100 p-6 rounded">
            <h3 class="text-xl font-bold mb-2">Basic</h3>
            <p class="flex-grow">Some features</p>
            <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Select</button>
        </div>
        <div class="flex flex-col flex-1 bg-gray-100 p-6 rounded">
            <h3 class="text-xl font-bold mb-2">Pro</h3>
            <p class="flex-grow">All features</p>
            <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Select</button>
        </div>
    </div>

    <h2 class="text-2xl font-semibold mb-2">🧠 Summary</h2>
    <p>Flexbox lets you build responsive, consistent layouts like navbars, sidebars, cards, and pricing sections with minimal effort using Tailwind's utility classes.</p>
    <p class="mt-2 text-green-700 font-semibold">✅ Tip: Combine <code>flex</code>, <code>gap</code>, <code>justify-*</code>, and <code>items-*</code> for perfect control!</p>

</main>
