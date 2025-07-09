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
            <li class="text-gray-500">Responsive Grid Layouts</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Responsive Grid Layouts in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind's responsive utilities make it easy to build grid layouts that adapt to different screen sizes. You can control the number of columns at each breakpoint using <code>grid-cols-*</code> classes.
        </p>

        <!-- Example with Breakpoints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Breakpoint-Based Grids</h2>
            <p class=" mb-2">Create layouts that change based on screen size:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"&gt;
    &lt;div class="bg-blue-100 p-4"&gt;Item 1&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;Item 2&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;Item 3&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;Item 4&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Auto-Fit/Fill Responsive Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Auto-Fit with <code>minmax</code></h2>
            <p class=" mb-2">Use <code>grid-cols-[repeat(auto-fit,...)]</code> to create dynamic columns:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="grid [grid-template-columns:repeat(auto-fit,minmax(150px,1fr))] gap-4"&gt;
    &lt;div class="bg-green-100 p-4"&gt;Card 1&lt;/div&gt;
    &lt;div class="bg-green-100 p-4"&gt;Card 2&lt;/div&gt;
    &lt;div class="bg-green-100 p-4"&gt;Card 3&lt;/div&gt;
    &lt;div class="bg-green-100 p-4"&gt;Card 4&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Utility Overview -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Helpful Tailwind Classes</h2>
            <ul class="list-disc list-inside ">
                <li><code>grid-cols-{n}</code> — Sets fixed number of columns.</li>
                <li><code>sm:</code>, <code>md:</code>, <code>lg:</code>, <code>xl:</code> — Add breakpoints for responsiveness.</li>
                <li><code>gap-{n}</code> — Defines spacing between grid items.</li>
                <li><code>minmax()</code> — For responsive sizing using custom templates.</li>
            </ul>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use mobile-first breakpoints (start with single column).</li>
                <li>Apply consistent <code>gap</code> values for a clean layout.</li>
                <li>Combine with <code>max-w-</code> and <code>mx-auto</code> for centered, responsive grids.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Responsive grid layouts are easy to build using Tailwind’s intuitive utilities. By combining breakpoints and flexible grid templates, you can create adaptable designs for any screen size.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/text-fonts" class="text-blue-600 hover:underline">Styling Text and Fonts →</a></p>
        </div>
    </article>
</main>
