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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Grid Template Areas</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Grid Template Areas in CSS</h1>
        <p class=" mb-4">
            The <code>grid-template-areas</code> property allows you to define named layout sections visually, making your grid structure more readable and easier to maintain.
        </p>

        <!-- Basic Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Syntax</h2>
            <p class=" mb-2">Define grid layout areas using quoted strings for each row:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    display: grid;
    grid-template-areas:
        "header header"
        "sidebar main"
        "footer footer";
    grid-template-columns: 200px 1fr;
    grid-template-rows: auto 1fr auto;
}
            </code></pre>
            <p class=" mt-2">Then, assign areas to items:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.header  { grid-area: header; }
.sidebar { grid-area: sidebar; }
.main    { grid-area: main; }
.footer  { grid-area: footer; }
            </code></pre>
        </section>

        <!-- Visual Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Visual Representation</h2>
            <p class=" mb-2">The layout above corresponds to:</p>
            <pre class="bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white">
+----------------------+--------------------+
|       header         |      header        |
+----------------------+--------------------+
|      sidebar         |       main         |
+----------------------+--------------------+
|       footer         |      footer        |
+----------------------+--------------------+
            </pre>
        </section>

        <!-- Empty Areas -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Empty Grid Cells</h2>
            <p class=" mb-2">Use a period (<code>.</code>) to represent an empty cell:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
grid-template-areas:
    "header header"
    ".      main"
    "footer footer";
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tips & Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Area names must be valid identifiers (no spaces or special characters).</li>
                <li>Keep the grid layout visually structured like ASCII art.</li>
                <li>Always ensure each string row has the same number of columns.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                <code>grid-template-areas</code> makes grid layouts more intuitive and maintainable. It's especially useful for larger layouts and semantic structuring.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="grid-auto-placement.php" class="text-blue-600 hover:underline">Grid Auto Placement →</a></p>
        </div>
    </article>
</main>
