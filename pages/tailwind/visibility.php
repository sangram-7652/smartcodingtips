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
            <li class="text-gray-500">Box Sizing & Visibility</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Box Sizing and Visibility in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind provides utilities for controlling how box dimensions are calculated (`box-sizing`) and whether elements are visible or not (`visibility`). These help fine-tune layout behavior and accessibility.
        </p>

        <!-- Box Sizing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Box Sizing Utilities</h2>
            <p class=" mb-2">Tailwind includes two box sizing utilities:</p>
            <ul class="list-disc list-inside  mb-4">
                <li><code>box-border</code> – includes border and padding in element's total width and height</li>
                <li><code>box-content</code> – excludes border and padding (default behavior)</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="w-64 p-4 border box-border"&gt;Box Border&lt;/div&gt;
&lt;div class="w-64 p-4 border box-content"&gt;Box Content&lt;/div&gt;
            </pre>
            <p class=" mt-2">
                Use <code>box-border</code> for predictable layout sizing, especially in card and form components.
            </p>
        </section>

        <!-- Visibility -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Visibility Utilities</h2>
            <p class=" mb-2">These utilities control whether an element is rendered or hidden:</p>
            <ul class="list-disc list-inside  mb-4">
                <li><code>visible</code> – the element is shown (default)</li>
                <li><code>invisible</code> – hides the element but retains its space in the layout</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="visible"&gt;I’m visible!&lt;/div&gt;
&lt;div class="invisible"&gt;You won’t see me, but I take up space&lt;/div&gt;
            </pre>
            <p class=" mt-2">
                Use <code>invisible</code> for accessibility or conditional UI logic without breaking layouts.
            </p>
        </section>

        <!-- Difference: visibility vs display -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Visibility vs Display</h2>
            <p class="">
                Unlike <code>hidden</code> (from the <code>display</code> utilities), <code>invisible</code> hides the element visually but preserves its layout space. This is useful for tooltips, dropdowns, or dynamic content toggling.
            </p>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding box sizing helps prevent layout bugs, while visibility utilities provide precise control for hiding UI elements without disrupting the flow of your content.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/box-sizing') ?>" class="hover:underline">← Previous: Float, Clear, Overflow, Object Fit</a>
  <a href="<?= base_url('tailwind/flexbox-intro') ?>" class="hover:underline">Next: Flex Containers and Items →</a>
</div>
    </article>
</main>
