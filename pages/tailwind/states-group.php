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
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Group Hover & Focus Within</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Group Hover & Focus Within in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind CSS provides <code>group</code> and <code>group-hover</code> utilities that allow you to style child elements based on the hover or focus state of a parent container. Similarly, <code>focus-within</code> allows styling when any child element has focus.
        </p>

        <!-- Group Hover -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using Group Hover</h2>
            <p class="text-lg mb-2">Add <code>group</code> to a parent and use <code>group-hover:</code> on children:</p>
            <div class="group p-4 border rounded hover:bg-gray-100 transition">
                <p class="text-gray-700 group-hover:text-blue-600">Hover over this box to change my text color.</p>
            </div>
            <pre class="bg-gray-100 p-4 rounded mt-2 overflow-x-auto text-sm"><code>
&lt;div class="group p-4 border rounded hover:bg-gray-100"&gt;
    &lt;p class="group-hover:text-blue-600"&gt;
        Hover over this box to change my text color.
    &lt;/p&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Focus Within -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using Focus Within</h2>
            <p class="text-lg mb-2">Style a parent when any of its children receive focus:</p>
            <div class="border-2 p-4 rounded focus-within:border-blue-500">
                <label class="block text-sm mb-1">Your Email:</label>
                <input type="email" class="w-full px-3 py-2 border rounded focus:outline-none">
            </div>
            <pre class="bg-gray-100 p-4 rounded mt-2 overflow-x-auto text-sm"><code>
&lt;div class="border-2 p-4 rounded focus-within:border-blue-500"&gt;
    &lt;label class="block text-sm mb-1"&gt;Your Email:&lt;/label&gt;
    &lt;input type="email" class="w-full px-3 py-2 border rounded"&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Common Use Cases -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Common Use Cases</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Dropdown menus triggered on hover</li>
                <li>Card components highlighting details on hover</li>
                <li>Input validation highlighting containers on focus</li>
            </ul>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Ensure <code>group</code> is on the parent container</li>
                <li>Use transitions for smoother UI</li>
                <li><code>focus-within</code> improves accessibility for keyboard navigation</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Group hover and focus-within are powerful tools to build complex interactions without JavaScript. They help you create accessible, intuitive UIs with minimal effort using just utility classes.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/states-position" class="text-blue-600 hover:underline">First/Last/Odd/Even →</a></p>
        </div>
    </article>
</main>
