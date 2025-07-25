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
            <li class="text-gray-500">Borders</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Borders</h1>
        <p class=" mb-4">
            The <code>border</code> property in CSS is used to add lines around elements. You can control the width, style, and color of each side independently or use shorthand for convenience.
        </p>

        <!-- Basic Border Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Border Syntax</h2>
            <p class=" mb-2">The simplest way to define a border:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    border: 2px solid black;
}
            </code></pre>
        </section>

        <!-- Border Sides -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Individual Sides</h2>
            <p class=" mb-2">You can set borders on specific sides:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.top {
    border-top: 2px solid red;
}

.right {
    border-right: 2px dashed blue;
}

.bottom {
    border-bottom: 2px dotted green;
}

.left {
    border-left: 2px double orange;
}
            </code></pre>
        </section>

        <!-- Border Width, Style, Color -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Width, Style & Color</h2>
            <p class=" mb-2">Each component of a border can be set individually:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.custom-border {
    border-width: 3px;
    border-style: dashed;
    border-color: teal;
}
            </code></pre>
        </section>

        <!-- Border Radius -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Border Radius</h2>
            <p class=" mb-2">Use <code>border-radius</code> to create rounded corners:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.rounded {
    border: 2px solid #333;
    border-radius: 10px;
}
            </code></pre>
        </section>

        <!-- Shorthand Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Shorthand Syntax</h2>
            <p class=" mb-2">Combine all border properties into one line:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    border: 4px dotted purple;
}
            </code></pre>
        </section>

        <!-- Border vs Outline -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Border vs Outline</h2>
            <p class=" mb-2">
                Borders are part of the box model and affect layout. Outlines do not affect layout and sit outside the border.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.outlined {
    outline: 2px solid red;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS borders give structure and emphasis to elements. With full control over style, width, color, and radius, you can style elements with precision and creativity.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
           <a href="<?= base_url('css/backgrounds') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Backgrounds</a> 
           <a href="<?= base_url('css/shadows') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Shadows →</a> 
        </div>

    </article>
</main>