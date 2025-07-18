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
            <li class="text-gray-500">Nested Grids</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Nested Grids in Tailwind CSS</h1>
        <p class=" mb-4">
            Nested grids are layouts where a grid item itself becomes a grid container. This is useful for building complex designs that require multiple grid layers.
        </p>

        <!-- Basic Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Nested Grid</h2>
            <p class=" mb-2">
                Below, we define a parent grid with two columns and nest a child grid inside one of its items:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="grid grid-cols-2 gap-4 p-4 bg-gray-100"&gt;
    &lt;div class="bg-blue-200 p-4"&gt;Parent Item 1&lt;/div&gt;

    &lt;div class="bg-blue-300 p-4"&gt;
        &lt;p class="font-semibold mb-2"&gt;Parent Item 2 (Nested Grid)&lt;/p&gt;
        &lt;div class="grid grid-cols-2 gap-2"&gt;
            &lt;div class="bg-white p-2"&gt;Nested 1&lt;/div&gt;
            &lt;div class="bg-white p-2"&gt;Nested 2&lt;/div&gt;
            &lt;div class="bg-white p-2"&gt;Nested 3&lt;/div&gt;
            &lt;div class="bg-white p-2"&gt;Nested 4&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Styling Nested Grids -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Styling Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use consistent padding and gap between parent and nested grids.</li>
                <li>Apply background and border styles to help visually distinguish nested structures.</li>
                <li>You can also nest grids inside <code>flex</code> containers if needed.</li>
            </ul>
        </section>

        <!-- Responsive Nested Grids -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Responsive Nested Grids</h2>
            <p class=" mb-2">
                You can apply responsive classes within nested grids to adapt the layout on different devices:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="grid grid-cols-1 md:grid-cols-2 gap-4"&gt;
    &lt;div class="p-4 bg-yellow-100"&gt;Sidebar&lt;/div&gt;
    &lt;div class="p-4 bg-yellow-200"&gt;
        &lt;div class="grid grid-cols-2 sm:grid-cols-3 gap-2"&gt;
            &lt;div class="bg-white p-2"&gt;1&lt;/div&gt;
            &lt;div class="bg-white p-2"&gt;2&lt;/div&gt;
            &lt;div class="bg-white p-2"&gt;3&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Nested grids in Tailwind CSS offer great flexibility for complex layouts. They work seamlessly with Tailwind's utility classes, allowing precise and responsive design control.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/grid-placement') ?>" class="hover:underline">← Previous: Grid Areas and Placement</a>
  <a href="<?= base_url('tailwind/grid-responsive') ?>" class="hover:underline">Next: Responsive Grid Layouts →</a>
</div>
    </article>
</main>
