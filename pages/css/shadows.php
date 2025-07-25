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
            <li class="text-gray-500">Shadows</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Shadows</h1>
        <p class=" mb-4">
            CSS provides two main shadow properties — <code>box-shadow</code> and <code>text-shadow</code>. These help add depth and visual interest to elements and text.
        </p>

        <!-- Box Shadow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Box Shadow</h2>
            <p class=" mb-2">The <code>box-shadow</code> property applies shadow effects to containers:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.shadow-box {
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.25);
}
            </code></pre>
            <p class=" mt-2">
                Syntax: <code>horizontal-offset vertical-offset blur-radius color</code>
            </p>
        </section>

        <!-- Multiple Box Shadows -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Multiple Box Shadows</h2>
            <p class=" mb-2">You can apply more than one shadow separated by commas:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.multi-shadow {
    box-shadow: 2px 2px 5px gray, -2px -2px 5px lightgray;
}
            </code></pre>
        </section>

        <!-- Inset Box Shadow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Inset Shadow</h2>
            <p class=" mb-2">Use the <code>inset</code> keyword for an inner shadow:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.inset-shadow {
    box-shadow: inset 0 0 8px rgba(0,0,0,0.5);
}
            </code></pre>
        </section>

        <!-- Text Shadow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Text Shadow</h2>
            <p class=" mb-2">The <code>text-shadow</code> property adds shadow to text content:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.shadow-text {
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
}
            </code></pre>
        </section>

        <!-- Common Use Cases -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Common Use Cases</h2>
            <ul class="list-disc list-inside ">
                <li>Create depth for cards, buttons, and modals</li>
                <li>Highlight or elevate text and elements</li>
                <li>Give subtle 3D effects to UI components</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS shadows enhance the visual hierarchy of your design. Use them thoughtfully for subtle emphasis, or more boldly for layered, modern effects.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/borders') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Borders</a> 
   <a href="<?= base_url('css/transitions') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: CSS Transitions →</a> 
</div>

    </article>
</main>
