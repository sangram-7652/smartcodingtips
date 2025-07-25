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
            <li class="text-gray-500">Ring, Divide, Shadows</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Divide and Ring Utilities in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind provides <strong>divide utilities</strong> for borders between child elements and <strong>ring utilities</strong> for focus outlines or decorative borders that sit outside the element's border.
        </p>

        <!-- Divide Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Divide Utilities</h2>
            <p class=" mb-2">Use <code>divide-x</code>, <code>divide-y</code> to create borders between child elements:</p>
            <div class="flex divide-x divide-gray-400 border p-4 mb-2">
                <div class="px-4">Item 1</div>
                <div class="px-4">Item 2</div>
                <div class="px-4">Item 3</div>
            </div>
            <p class="text-sm text-gray-600">Example: <code>divide-x divide-gray-400</code></p>
        </section>

        <!-- Ring Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Ring Utilities</h2>
            <p class=" mb-2">Rings are outer outlines used especially for focus states or decorative purposes:</p>
            <div class="flex gap-4">
                <button class="ring-2 ring-blue-500 px-4 py-2 rounded">Ring-2</button>
                <button class="ring-4 ring-green-500 px-4 py-2 rounded">Ring-4</button>
                <button class="ring ring-red-400 ring-offset-2 ring-offset-white px-4 py-2 rounded">With Offset</button>
            </div>
            <p class="text-sm text-gray-600 mt-2">You can use <code>ring-{width}</code>, <code>ring-{color}</code>, and <code>ring-offset</code> combinations.</p>
        </section>

        <!-- Divide Reverse -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Divide Reverse</h2>
            <p class=" mb-2">Change the direction of dividing lines with <code>divide-x-reverse</code> or <code>divide-y-reverse</code>:</p>
            <div class="flex divide-x divide-x-reverse divide-gray-500 border p-4">
                <div class="px-4">Left</div>
                <div class="px-4">Right</div>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use divide utilities for flexbox/grid child separation without custom borders.</li>
                <li>Ring utilities work great for focus effects, especially with <code>:focus</code> pseudo-classes.</li>
                <li>Use <code>ring-offset</code> to maintain padding between ring and element.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                With Tailwind’s <code>divide</code> and <code>ring</code> utilities, you can add visual separators and focus indicators quickly and consistently across your UI.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/borders') ?>" class="hover:underline">← Previous: Border Width, Color, and Radius</a>
  <a href="<?= base_url('tailwind/opacity') ?>" class="hover:underline ms-auto">Next: Box Shadows and Opacity Control →</a>
</div>
    </article>
</main>
