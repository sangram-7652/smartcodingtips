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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">BEM Naming</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">BEM Naming Convention</h1>
        <p class=" mb-4">
            BEM (Block, Element, Modifier) is a naming methodology that helps you write clean, maintainable, and scalable CSS by clearly describing the structure and purpose of each class.
        </p>

        <!-- What is BEM -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. What is BEM?</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Block</strong>: A standalone entity (e.g., <code>card</code>)</li>
                <li><strong>Element</strong>: A part of a block (e.g., <code>card__title</code>)</li>
                <li><strong>Modifier</strong>: A variation or state (e.g., <code>card--featured</code>)</li>
            </ul>
        </section>

        <!-- Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Syntax</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.block { }
.block__element { }
.block--modifier { }
            </code></pre>
            <p class=" mt-2">
                This naming pattern avoids deep nesting and makes styles reusable.
            </p>
        </section>

        <!-- Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Example</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white mb-4"><code class="text-sm">
<!-- HTML -->
<div class="card card--featured">
    <h2 class="card__title">Featured Article</h2>
    <p class="card__description">Short summary of the content.</p>
</div>
            </code></pre>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* CSS */
.card {
    border: 1px solid #ccc;
    padding: 1rem;
}

.card--featured {
    background-color: #f0f9ff;
}

.card__title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card__description {
    color: #4b5563;
}
            </code></pre>
        </section>

        <!-- Benefits of BEM -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Benefits of BEM</h2>
            <ul class="list-disc list-inside ">
                <li>Improves CSS readability</li>
                <li>Prevents class name collisions</li>
                <li>Encourages reusable components</li>
                <li>Works well with large-scale projects and teams</li>
            </ul>
        </section>

        <!-- Tools & Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Tools & Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use consistent naming across all blocks</li>
                <li>Follow kebab-case or lowercase with hyphens</li>
                <li>Preprocessors like SCSS can help group styles logically</li>
                <li>Use BEM along with utility-first CSS (e.g., Tailwind) if needed</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                BEM is a reliable way to structure CSS in complex projects. By separating block, element, and modifier responsibilities, you reduce confusion and improve collaboration in development teams.
            </p>
        </section>

      <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/devtools') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: DevTools for CSS</a></div>
    <div><a href="<?= base_url('css/performance') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Performance Tips →</a></div>
</div>

    </article>
</main>
