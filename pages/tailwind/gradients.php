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
            <li class="text-gray-500">Gradients and Utilities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Gradients in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS provides a set of utility classes to apply linear gradients easily, using directional classes like <code>bg-gradient-to-r</code> and color stops like <code>from-</code>, <code>via-</code>, and <code>to-</code>.
        </p>

        <!-- Basic Gradient Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Gradient Syntax</h2>
            <p class=" mb-2">Apply gradient direction with <code>bg-gradient-to-*</code> and color stops:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="bg-gradient-to-r from-purple-400 to-pink-500 p-6 rounded text-white"&gt;
    Gradient Background
&lt;/div&gt;
            </pre>
            <div class="bg-gradient-to-r from-purple-400 to-pink-500 p-6 rounded text-white mt-3">
                Gradient Background
            </div>
        </section>

        <!-- Directions -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Direction Options</h2>
            <p class=" mb-2">Use these classes to control direction:</p>
            <ul class="list-disc list-inside  mb-3">
                <li><code>bg-gradient-to-t</code> – top</li>
                <li><code>bg-gradient-to-tr</code> – top right</li>
                <li><code>bg-gradient-to-r</code> – right</li>
                <li><code>bg-gradient-to-br</code> – bottom right</li>
                <li><code>bg-gradient-to-b</code> – bottom</li>
                <li><code>bg-gradient-to-bl</code> – bottom left</li>
                <li><code>bg-gradient-to-l</code> – left</li>
                <li><code>bg-gradient-to-tl</code> – top left</li>
            </ul>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gradient-to-t from-blue-400 to-green-400 p-4 rounded text-white">To Top</div>
                <div class="bg-gradient-to-br from-yellow-300 via-red-500 to-pink-600 p-4 rounded text-white">Diagonal</div>
            </div>
        </section>

        <!-- Using via-* for Midpoint -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Using <code>via-*</code> for Midpoints</h2>
            <p class=" mb-2">You can create three-color gradients by adding a <code>via-</code> stop:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-4 text-white rounded"&gt;
    Multicolor Gradient
&lt;/div&gt;
            </pre>
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-4 text-white rounded mt-2">
                Multicolor Gradient
            </div>
        </section>

        <!-- Text Gradients -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Text Gradients (with <code>bg-clip-text</code>)</h2>
            <p class=" mb-2">To apply gradients to text:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;h2 class="text-3xl font-bold bg-gradient-to-r from-teal-400 to-blue-500 text-transparent bg-clip-text"&gt;
    Gradient Text
&lt;/h2&gt;
            </pre>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-teal-400 to-blue-500 text-transparent bg-clip-text mt-2">
                Gradient Text
            </h2>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use gradients for emphasis, backgrounds, or sections</li>
                <li>Combine with <code>text-white</code> or <code>text-transparent + bg-clip-text</code></li>
                <li>Stick to 2–3 colors for readability and simplicity</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind's gradient utilities give you powerful visual styles without custom CSS. They are perfect for modern UI designs like banners, cards, or hero sections.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/colors-bg') ?>" class="hover:underline">← Previous: Text and Background Colors</a>
  <a href="<?= base_url('tailwind/borders') ?>" class="hover:underline">Next: Border Width, Color, and Radius →</a>
</div>
    </article>
</main>
