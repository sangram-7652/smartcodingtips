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
            <li class="text-gray-500">Text Truncation and Clamping</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Text Truncation and Clamping in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind provides utility classes to truncate long text with ellipses or clamp it to a specific number of lines — perfect for card titles, previews, or blog summaries.
        </p>

        <!-- Text Truncation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Single-Line Text Truncation</h2>
            <p class="text-lg mb-2">Use the <code>truncate</code> class to display an ellipsis for overflowing single-line text:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;p class="truncate w-64"&gt;
    This is a very long paragraph that will be truncated at one line with an ellipsis.
&lt;/p&gt;
            </pre>
            <div class="mt-2">
                <p class="truncate w-64 bg-gray-50 p-2 rounded border">This is a very long paragraph that will be truncated at one line with an ellipsis.</p>
            </div>
        </section>

        <!-- Line Clamping -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Multi-Line Clamping</h2>
            <p class="text-lg mb-2">Tailwind uses the <code>line-clamp</code> plugin for truncating multi-line content. Example for 3 lines:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;p class="line-clamp-3"&gt;
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget turpis nec ipsum vulputate posuere. Suspendisse potenti. Curabitur tempus vehicula erat, a blandit lorem porta sit amet.
&lt;/p&gt;
            </pre>
            <div class="mt-2 max-w-lg">
                <p class="line-clamp-3 bg-gray-50 p-3 rounded border">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget turpis nec ipsum vulputate posuere. Suspendisse potenti. Curabitur tempus vehicula erat, a blandit lorem porta sit amet.
                </p>
            </div>
        </section>

        <!-- Requirements -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Setup Requirements for Clamping</h2>
            <p class="text-lg mb-2">Make sure to install and configure the plugin:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
// Install plugin
npm install -D @tailwindcss/line-clamp

// tailwind.config.js
plugins: [
    require('@tailwindcss/line-clamp'),
]
            </pre>
        </section>

        <!-- Use Cases -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Common Use Cases</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Truncate long headings or titles in cards</li>
                <li>Clamp blog excerpts to 2–4 lines</li>
                <li>Ensure UI stays aligned even with dynamic content</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s <code>truncate</code> and <code>line-clamp</code> utilities offer clean and elegant control over long content, improving your layouts without additional custom CSS.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/text-color" class="text-blue-600 hover:underline">Color Utilities →</a></p>
        </div>
    </article>
</main>
