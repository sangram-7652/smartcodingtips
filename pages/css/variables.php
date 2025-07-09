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
            <li class="text-gray-500">CSS Variables</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Variables</h1>
        <p class=" mb-4">
            CSS Variables (also called custom properties) allow you to store reusable values — such as colors, font sizes, or spacing — in a single place. This improves consistency and maintainability in your stylesheets.
        </p>

        <!-- Declaring Variables -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Declaring CSS Variables</h2>
            <p class=" mb-2">
                CSS variables are defined inside a selector using the <code>--</code> prefix. They are often placed inside the <code>:root</code> pseudo-class to make them globally accessible.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
:root {
    --primary-color: #4f46e5;
    --secondary-color: #3b82f6;
    --font-size-lg: 18px;
}
            </code></pre>
        </section>

        <!-- Using Variables -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using CSS Variables</h2>
            <p class=" mb-2">
                Use the <code>var()</code> function to apply the value of a variable.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
body {
    background-color: var(--primary-color);
    font-size: var(--font-size-lg);
}

button {
    background-color: var(--secondary-color);
}
            </code></pre>
        </section>

        <!-- Local Scope -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Local vs Global Scope</h2>
            <p class=" mb-2">
                Variables defined in <code>:root</code> are global, but you can define them in any selector for local usage:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.card {
    --card-padding: 20px;
    padding: var(--card-padding);
}
            </code></pre>
        </section>

        <!-- Fallback Values -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Fallback Values</h2>
            <p class=" mb-2">
                You can provide a fallback in case the variable is not defined:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
h1 {
    color: var(--title-color, black);
}
            </code></pre>
        </section>

        <!-- Dynamic Themes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Dynamic Themes</h2>
            <p class=" mb-2">
                CSS variables are powerful for implementing themes. Change the variables at runtime using JavaScript or apply them conditionally via classes.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.theme-dark {
    --background: #1f2937;
    --text: #f9fafb;
}

body {
    background-color: var(--background);
    color: var(--text);
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS Variables make your styles more organized, maintainable, and scalable. They're a must-know for modern CSS development and are supported in all major browsers.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="positioning.php" class="text-blue-600 hover:underline">CSS Positioning →</a></p>
        </div>
    </article>
</main>
