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
            <li class="text-gray-500">Float, Overflow, Object Fit</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Float, Clear, Overflow, and Object Fit in Tailwind</h1>
        <p class=" mb-4">
            Tailwind CSS provides utility classes to manage element float behavior, clearing, overflow handling, and image/content fitting. These utilities are essential for layout tweaks and preventing unwanted overflow.
        </p>

        <!-- Float Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Float Utilities</h2>
            <p class=" mb-2">Use <code>float-left</code>, <code>float-right</code>, or <code>float-none</code> to control element float direction:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="float-left w-1/2"&gt;Floated Left&lt;/div&gt;
&lt;div class="float-right w-1/2"&gt;Floated Right&lt;/div&gt;
            </pre>
        </section>

        <!-- Clear Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Clear Utilities</h2>
            <p class=" mb-2">Control how elements avoid floated siblings using <code>clear-left</code>, <code>clear-right</code>, <code>clear-both</code>, or <code>clear-none</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="clear-both"&gt;This clears both sides&lt;/div&gt;
            </pre>
        </section>

        <!-- Overflow Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Overflow Handling</h2>
            <p class=" mb-2">Use <code>overflow-auto</code>, <code>overflow-hidden</code>, <code>overflow-scroll</code>, or <code>overflow-visible</code> to manage content that exceeds boundaries:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="overflow-scroll h-32"&gt;
    &lt;p&gt;Lots of overflowing content here...&lt;/p&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Object Fit -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Object Fit</h2>
            <p class=" mb-2">Use <code>object-cover</code>, <code>object-contain</code>, <code>object-fill</code>, and others to control how images and media scale within their container:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;img src="image.jpg" class="w-48 h-48 object-cover"&gt;
&lt;img src="image.jpg" class="w-48 h-48 object-contain"&gt;
            </pre>
            <p class=" mt-2">These utilities work well with fixed-width containers for responsive images.</p>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>overflow-hidden</code> to hide scrollbars in clean UIs.</li>
                <li><code>object-cover</code> is perfect for hero banners or gallery items.</li>
                <li>Always pair floats with clearfix strategies or clear utilities if needed.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                These utility classes offer essential tools for controlling how content flows, fits, or overflows its container. They are lightweight, composable, and easy to manage for responsive designs.
            </p>
        </section>
<div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/display') ?>" class="hover:underline">← Previous: Display: Block, Inline, Flex, Grid</a>
  <a href="<?= base_url('tailwind/visibility') ?>" class="hover:underline">Next: Box Sizing and Visibility →</a>
</div>
    </article>
</main>
