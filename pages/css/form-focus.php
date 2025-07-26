<?php
$title = "CSS Form Layout Techniques | SmartCodingTips";
$description = "Arrange form elements using flexbox and grid for modern UI layouts.";
$keywords = "css form layout, grid form, flexbox form css, responsive form design";
?>

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
            <li class="text-gray-500">Focus & States</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Focus & Interactive States in CSS</h1>
        <p class=" mb-4">
            CSS provides pseudo-classes to style elements based on their interaction states, such as hover, focus, active, and visited. These help improve user experience and accessibility.
        </p>

        <!-- Hover State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. :hover</h2>
            <p class=" mb-2">
                Applies when the user hovers over an element (like a link or button).
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
button:hover {
    background-color: #1e40af;
    color: white;
}
            </code></pre>
        </section>

        <!-- Focus State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. :focus</h2>
            <p class=" mb-2">
                Applies when an element (e.g., input, button) is selected via mouse, tap, or keyboard.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
input:focus {
    outline: 2px solid #2563eb;
    background-color: #f0f9ff;
}
            </code></pre>
            <p class=" mt-2">
                Focus styles are crucial for accessibility, especially for keyboard navigation.
            </p>
        </section>

        <!-- Active State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. :active</h2>
            <p class=" mb-2">
                Applies while an element is being clicked (mouse down).
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
a:active {
    color: red;
}
            </code></pre>
        </section>

        <!-- Visited Links -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. :visited</h2>
            <p class=" mb-2">
                Applies to links that the user has already visited.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
a:visited {
    color: purple;
}
            </code></pre>
        </section>

        <!-- Disabled State -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. :disabled</h2>
            <p class=" mb-2">
                Applies to form elements that are disabled:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
button:disabled,
input:disabled {
    background-color: #f3f4f6;
    color: #9ca3af;
    cursor: not-allowed;
}
            </code></pre>
        </section>

        <!-- Order of Pseudo-Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Order Matters</h2>
            <p class=" mb-2">
                Follow this order to prevent styles from being overridden:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
/* LVHA */
a:link {
    color: blue;
}
a:visited {
    color: purple;
}
a:hover {
    color: green;
}
a:active {
    color: red;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS state pseudo-classes like <code>:hover</code>, <code>:focus</code>, and <code>:active</code> let you provide visual feedback and improve accessibility. Always include focus styles for a more inclusive UI.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/form-layouts') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Form Layout</a> 
   <a href="<?= base_url('css/custom-checkbox') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Custom Checkbox/Radio →</a> 
</div>
    </article>
</main>
