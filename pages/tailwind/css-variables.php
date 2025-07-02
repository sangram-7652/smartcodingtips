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
            <li class="text-gray-500">:root CSS Variables</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using <code>:root</code> CSS Variables in Tailwind</h1>

        <p class="text-lg mb-4">
            You can integrate native CSS variables using the <code>:root</code> selector and combine them with Tailwind classes for **dynamic theming** and **maintainability**.
        </p>

        <!-- Step 1 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Define Variables in <code>:root</code></h2>
            <p class="text-lg mb-2">Add custom variables in your global CSS:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
:root {
  --primary-color: #0084ff;
  --accent-color: #3AB0FF;
  --font-heading: 'Poppins', sans-serif;
}
            </code></pre>
        </section>

        <!-- Step 2 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Use in Tailwind with Arbitrary Values</h2>
            <p class="text-lg mb-2">Use Tailwind's support for arbitrary values like:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;button class="bg-[var(--primary-color)] text-white px-4 py-2 rounded"&gt;
  Click Me
&lt;/button&gt;

&lt;h1 class="text-3xl font-[var(--font-heading)]"&gt;
  Dynamic Heading
&lt;/h1&gt;
            </code></pre>
            <p class="text-lg mt-2">This allows full design control while keeping your HTML clean and reusable.</p>
        </section>

        <!-- Step 3 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Change Theme with JavaScript</h2>
            <p class="text-lg mb-2">Use JS to change themes dynamically:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
document.documentElement.style.setProperty('--primary-color', '#16a34a'); // green-600
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Tips and Use Cases</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Great for **theming**, especially dark/light modes</li>
                <li>Useful for **brand-based colors** across large projects</li>
                <li>Use Tailwind + `:root` for design tokens</li>
                <li>Combine with <code>data-theme</code> attributes for theme switching</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Combining Tailwind with native CSS variables gives you scalable, dynamic styling power — blending utility-first classes with themable flexibility.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/dark-mode" class="text-blue-600 hover:underline">Dark Mode Strategies →</a></p>
        </div>
    </article>
</main>
