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
            <li class="text-gray-500">Dark Mode</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Dark Mode in CSS</h1>
        <p class=" mb-4">
            Dark mode is a user interface option that uses a dark color palette to reduce eye strain and save battery life. You can implement it in CSS using media queries, custom classes, or the <code>prefers-color-scheme</code> feature.
        </p>

        <!-- prefers-color-scheme -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Auto-Detecting User Preference</h2>
            <p class=" mb-2">
                CSS can automatically apply dark mode styles based on the user's system settings using the <code>prefers-color-scheme</code> media query:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Default (Light Mode) */
body {
    background: white;
    color: black;
}

/* Dark Mode */
@media (prefers-color-scheme: dark) {
    body {
        background: #121212;
        color: #e0e0e0;
    }
}
            </code></pre>
        </section>

        <!-- Toggle with Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Toggle Dark Mode with a Class</h2>
            <p class=" mb-2">
                You can create a toggle switch using JavaScript by applying a <code>.dark</code> class to the <code>&lt;body&gt;</code> or <code>&lt;html&gt;</code> tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Light Theme */
body {
    background: #fff;
    color: #111;
}

/* Dark Theme */
body.dark {
    background: #111;
    color: #eee;
}
            </code></pre>
            <p class=" mt-2">Then toggle the class with JavaScript:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
document.querySelector('#toggle-theme').addEventListener('click', () => {
    document.body.classList.toggle('dark');
});
            </code></pre>
        </section>

        <!-- Using CSS Variables -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Using CSS Variables for Themes</h2>
            <p class=" mb-2">
                Centralize your color values using variables for easy theme switching:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
:root {
    --bg: #ffffff;
    --text: #111111;
}
.dark {
    --bg: #121212;
    --text: #eeeeee;
}
body {
    background: var(--bg);
    color: var(--text);
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use enough contrast for readability.</li>
                <li>Provide a toggle if possible, regardless of system preference.</li>
                <li>Save the user's theme choice in <code>localStorage</code>.</li>
                <li>Use variables for scalable theming.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Dark mode is a user-friendly and accessible feature. Whether you auto-detect or provide manual toggles, CSS gives you flexible options to implement dark themes with ease.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="theming-with-css-variables.php" class="text-blue-600 hover:underline">Theming with CSS Variables →</a></p>
        </div>
    </article>
</main>
