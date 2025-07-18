<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Avoiding Class Bloat</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Avoiding Class Bloat in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind encourages using utility classes directly in your markup, but without best practices, it can lead to bloated and unreadable HTML. Here's how to keep your code clean and efficient.
        </p>

        <!-- Use @apply -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Use <code>@apply</code> to Extract Reusable Styles</h2>
            <p class=" mb-2">Instead of repeating long utility chains, use <code>@apply</code> in your CSS files to extract styles:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
.btn-primary {
    @apply bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700;
}
            </code></pre>
        </section>

        <!-- Use Components -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Create Component Partials</h2>
            <p class=" mb-2">Break your UI into reusable components (cards, buttons, navbars), especially in frameworks like React or Vue.</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
// Example: Button.vue (Vue)
&lt;button class="btn-primary"&gt;Submit&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Dynamic Class Management -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Avoid Generating Unused Classes</h2>
            <ul class="list-disc list-inside ">
                <li>Avoid programmatically generating classes in loops</li>
                <li>Use Tailwind's <code>safelist</code> in config if using dynamic class names</li>
                <li>Keep conditional class logic simple</li>
            </ul>
        </section>

        <!-- Use PurgeCSS -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Use Purge Effectively</h2>
            <p class=" mb-2">Tailwind uses PurgeCSS (or JIT mode) to remove unused classes from the final CSS build. Make sure your paths are correctly set in <code>tailwind.config.js</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
content: [
  "./src/**/*.{html,js}",
  "./components/**/*.{js,vue}",
]
            </code></pre>
        </section>

        <!-- Avoid Over-Nesting -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Avoid Over-Nesting Utilities</h2>
            <p class="">
                Don't try to mimic traditional CSS by deeply nesting Tailwind utilities. Stick to flat, semantic HTML with meaningful classes.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                You can enjoy the power and speed of Tailwind without creating messy code. Use <code>@apply</code>, structure your components wisely, and lean on Tailwind’s purge features to keep your CSS small and maintainable.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/optimize-minify') ?>" class="hover:underline">← Previous: Minifying with PostCSS</a>
  <a href="<?= base_url('tailwind/a11y') ?>" class="hover:underline">Next: Accessibility with Tailwind →</a>
</div>
    </article>
</main>
