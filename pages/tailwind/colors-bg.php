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
            <li class="text-gray-500">Text and Background Colors</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Text and Background Colors in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind provides utility classes to easily set the color of text and backgrounds using a consistent design system. You can quickly apply predefined colors or customize them in your config.
        </p>

        <!-- Text Color Examples -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Applying Text Color</h2>
            <p class="text-lg mb-2">Use <code>text-{color}</code> to set text color:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;p class="text-red-600"&gt;This is red text&lt;/p&gt;
&lt;p class="text-green-500"&gt;Success message&lt;/p&gt;
&lt;p class="text-gray-700"&gt;Subtle gray text&lt;/p&gt;
            </pre>
            <div class="mt-3 space-y-2">
                <p class="text-red-600">This is red text</p>
                <p class="text-green-500">Success message</p>
                <p class="text-gray-700">Subtle gray text</p>
            </div>
        </section>

        <!-- Background Color Examples -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Applying Background Color</h2>
            <p class="text-lg mb-2">Use <code>bg-{color}</code> to set background color:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="bg-blue-100 text-blue-800 p-4 rounded"&gt;Informational box&lt;/div&gt;
&lt;div class="bg-yellow-200 text-yellow-800 p-4 rounded"&gt;Warning message&lt;/div&gt;
&lt;div class="bg-gray-100 text-gray-700 p-4 rounded"&gt;Note&lt;/div&gt;
            </pre>
            <div class="mt-3 space-y-2">
                <div class="bg-blue-100 text-blue-800 p-4 rounded">Informational box</div>
                <div class="bg-yellow-200 text-yellow-800 p-4 rounded">Warning message</div>
                <div class="bg-gray-100 text-gray-700 p-4 rounded">Note</div>
            </div>
        </section>

        <!-- Hover and State Colors -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Interactive States</h2>
            <p class="text-lg mb-2">Combine with state prefixes like <code>hover:</code>, <code>focus:</code>:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"&gt;Hover Me&lt;/button&gt;
            </pre>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mt-2">Hover Me</button>
        </section>

        <!-- Opacity Levels -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Color Opacity</h2>
            <p class="text-lg mb-2">Use <code>/opacity</code> to make colors more transparent:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="bg-red-500/20 p-4"&gt;Subtle red background&lt;/div&gt;
&lt;p class="text-black/60"&gt;Muted black text&lt;/p&gt;
            </pre>
            <div class="mt-2 space-y-2">
                <div class="bg-red-500/20 p-4 rounded">Subtle red background</div>
                <p class="text-black/60">Muted black text</p>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use consistent color scales (e.g., <code>gray-500</code> to <code>gray-900</code>) for hierarchy</li>
                <li>Ensure sufficient contrast for readability (use tools like WebAIM)</li>
                <li>Manage light/dark modes with <code>dark:</code> prefix and custom configs</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s utility classes for colors let you style elements fast without writing custom CSS — while remaining flexible and accessible.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/gradients" class="text-blue-600 hover:underline">Gradients and Utilities →</a></p>
        </div>
    </article>
</main>
