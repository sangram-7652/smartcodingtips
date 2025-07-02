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
            <li class="text-gray-500">Box Shadows & Opacity</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Box Shadows and Opacity Control in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind provides utilities for adding elegant shadows and controlling the opacity of elements. These can help improve visual hierarchy and draw attention to important components.
        </p>

        <!-- Box Shadow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Box Shadow Utilities</h2>
            <p class="text-lg mb-2">Tailwind includes multiple levels of shadows:</p>
            <div class="grid grid-cols-2 gap-4 mb-2">
                <div class="shadow p-4 bg-white rounded">.shadow</div>
                <div class="shadow-md p-4 bg-white rounded">.shadow-md</div>
                <div class="shadow-lg p-4 bg-white rounded">.shadow-lg</div>
                <div class="shadow-xl p-4 bg-white rounded">.shadow-xl</div>
                <div class="shadow-2xl p-4 bg-white rounded">.shadow-2xl</div>
                <div class="shadow-inner p-4 bg-white rounded">.shadow-inner</div>
            </div>
            <p class="text-sm text-gray-600">Each level adds a different depth of elevation.</p>
        </section>

        <!-- Custom Shadow Colors -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Customizing Shadow Color (Using Drop Shadow)</h2>
            <p class="text-lg mb-2">To control shadow color, combine with background or use <code>drop-shadow</code> utilities (useful with SVG or transparent content):</p>
            <div class="drop-shadow-md p-4 bg-pink-200 rounded">Drop Shadow Effect</div>
        </section>

        <!-- Opacity Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Opacity Utilities</h2>
            <p class="text-lg mb-2">Use <code>opacity-{0–100}</code> to control the transparency of an element:</p>
            <div class="flex gap-4 items-center">
                <div class="bg-blue-500 text-white px-4 py-2 rounded opacity-100">100%</div>
                <div class="bg-blue-500 text-white px-4 py-2 rounded opacity-75">75%</div>
                <div class="bg-blue-500 text-white px-4 py-2 rounded opacity-50">50%</div>
                <div class="bg-blue-500 text-white px-4 py-2 rounded opacity-25">25%</div>
            </div>
            <p class="text-sm text-gray-600 mt-2">Great for layering and effects like hover fades.</p>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use shadows sparingly to enhance focus.</li>
                <li>Pair <code>hover:shadow-lg</code> with buttons and cards for interactivity.</li>
                <li>Use <code>opacity-0</code> + <code>transition-opacity</code> for fade effects.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Box shadows and opacity control in Tailwind help you create subtle depth and layering effects with ease. Use them strategically to guide user focus and enhance UI clarity.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/states-basic" class="text-blue-600 hover:underline">Hover, Focus, Active, Disabled →</a></p>
        </div>
    </article>
</main>
