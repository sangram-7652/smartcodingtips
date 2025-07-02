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
            <li class="text-gray-500">Gap, Auto-Fill, Auto-Fit</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Gap, Auto-Fill, Auto-Fit in Tailwind Grid</h1>
        <p class="text-lg mb-4">
            Tailwind CSS provides powerful utilities for spacing out grid items using <code>gap</code> and creating responsive, auto-fitting layouts using <code>auto-fill</code> and <code>auto-fit</code>.
        </p>

        <!-- Gap Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Gap Utilities</h2>
            <p class="text-lg mb-2">Use <code>gap</code>, <code>gap-x</code>, or <code>gap-y</code> to define spacing between grid rows or columns:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;div class="bg-gray-200 p-4"&gt;1&lt;/div&gt;
    &lt;div class="bg-gray-200 p-4"&gt;2&lt;/div&gt;
    &lt;div class="bg-gray-200 p-4"&gt;3&lt;/div&gt;
&lt;/div&gt;
            </pre>
            <p class="text-lg mt-2">
                Use <code>gap-x-4</code> for horizontal gaps only and <code>gap-y-4</code> for vertical gaps.
            </p>
        </section>

        <!-- Auto-Fill -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using Auto-Fill</h2>
            <p class="text-lg mb-2">
                Auto-fill fills the row with as many columns as will fit, and leaves empty slots if necessary. Define this using Tailwind’s <code>grid-cols-[repeat(auto-fill,...)]</code> syntax.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid [grid-template-columns:repeat(auto-fill,minmax(150px,1fr))] gap-4"&gt;
    &lt;div class="bg-blue-200 p-4"&gt;A&lt;/div&gt;
    &lt;div class="bg-blue-200 p-4"&gt;B&lt;/div&gt;
    &lt;div class="bg-blue-200 p-4"&gt;C&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Auto-Fit -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Using Auto-Fit</h2>
            <p class="text-lg mb-2">
                Auto-fit behaves like auto-fill, but collapses empty columns — resulting in tighter, more responsive layouts:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid [grid-template-columns:repeat(auto-fit,minmax(150px,1fr))] gap-4"&gt;
    &lt;div class="bg-green-200 p-4"&gt;Item 1&lt;/div&gt;
    &lt;div class="bg-green-200 p-4"&gt;Item 2&lt;/div&gt;
&lt;/div&gt;
            </pre>
            <p class="text-lg mt-2">
                These advanced layouts are especially helpful when building cards, galleries, or responsive grids.
            </p>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s gap and grid-template utilities like <code>auto-fill</code> and <code>auto-fit</code> give you powerful tools for clean and responsive layouts — with minimal effort and maximum flexibility.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/grid-placement" class="text-blue-600 hover:underline">Grid Areas and Placement →</a></p>
        </div>
    </article>
</main>
