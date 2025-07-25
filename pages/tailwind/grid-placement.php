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
            <li class="text-gray-500">Grid Areas and Placement</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Grid Areas and Placement</h1>
        <p class=" mb-4">
            Tailwind CSS allows you to control grid item placement using utilities like <code>col-start</code>, <code>col-span</code>, <code>row-start</code>, <code>row-span</code>, and custom CSS grid-area definitions.
        </p>

        <!-- Grid Column Start / End -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Column and Row Placement</h2>
            <p class=" mb-2">You can control where elements appear in the grid using start and span utilities:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="grid grid-cols-4 gap-4"&gt;
    &lt;div class="bg-indigo-200 col-start-2 col-span-2 p-4"&gt;
        Spans from column 2 to 4
    &lt;/div&gt;
    &lt;div class="bg-indigo-400 row-start-2 row-span-2 p-4"&gt;
        Starts on row 2 and spans 2 rows
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Named Grid Areas (Manual) -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Named Grid Areas (with custom CSS)</h2>
            <p class=" mb-2">
                Tailwind does not support named grid areas directly, but you can extend it via <code>@layer</code> and apply custom CSS:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
/* tailwind.config.js */
module.exports = {
  theme: {
    extend: {
      gridTemplateAreas: {
        layout: [
          "header header",
          "sidebar content",
          "footer footer",
        ],
      },
    },
  },
  plugins: [require('@savvywombat/tailwindcss-grid-areas')],
}
            </pre>

            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mt-4">
&lt;div class="grid [grid-template-areas:'header_header''sidebar_content''footer_footer'] grid-cols-2 gap-4"&gt;
    &lt;header class="[grid-area:header] bg-blue-300 p-4"&gt;Header&lt;/header&gt;
    &lt;aside class="[grid-area:sidebar] bg-blue-200 p-4"&gt;Sidebar&lt;/aside&gt;
    &lt;main class="[grid-area:content] bg-white p-4"&gt;Main Content&lt;/main&gt;
    &lt;footer class="[grid-area:footer] bg-blue-400 p-4"&gt;Footer&lt;/footer&gt;
&lt;/div&gt;
            </pre>
            <p class=" mt-2">
                Use plugins like <code>@savvywombat/tailwindcss-grid-areas</code> for cleaner area naming.
            </p>
        </section>

        <!-- Auto Placement Tip -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Let the Grid Auto-Place</h2>
            <p class=" mb-2">
                If you don’t specify start or span, Tailwind will auto-place items based on document order:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;div class="bg-gray-200 p-4"&gt;1&lt;/div&gt;
    &lt;div class="bg-gray-300 p-4"&gt;2&lt;/div&gt;
    &lt;div class="bg-gray-400 p-4"&gt;3&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Grid placement utilities give you fine control over layout structure, while custom extensions can add full CSS grid-area support to Tailwind CSS.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/grid-gap') ?>" class="hover:underline">← Previous: Gap, Auto-Fill, Auto-Fit</a>
  <a href="<?= base_url('tailwind/grid-nested') ?>" class="hover:underline ms-auto">Next: Nested Grids →</a>
</div>
    </article>
</main>
