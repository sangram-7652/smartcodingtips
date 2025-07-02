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
            <li class="text-gray-500">Tailwind UI Principles</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind UI Principles</h1>

        <p class="text-lg mb-4">
            Tailwind UI promotes a set of principles that help developers build scalable, maintainable, and beautifully consistent interfaces using utility-first CSS. These principles are crucial when building reusable components or design systems.
        </p>

        <!-- Atomic Design & Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Atomic & Utility-First Design</h2>
            <p class="text-lg mb-2">
                Instead of writing custom CSS classes for every component, Tailwind encourages combining small utility classes to create complex UIs. This promotes design consistency and avoids CSS bloat.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"&gt;
  Click Me
&lt;/button&gt;
            </code></pre>
        </section>

        <!-- DRY Components with @apply -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Reusability with <code>@apply</code></h2>
            <p class="text-lg mb-2">
                Use <code>@apply</code> in your CSS or component files to abstract common utility combinations and avoid repetition.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
/* styles.css */
.btn-primary {
  @apply bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700;
}
            </code></pre>
        </section>

        <!-- Design Tokens -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Use of Design Tokens</h2>
            <p class="text-lg mb-2">
                Tailwind's config lets you define and reuse spacing, color, typography, and more using a shared design token system via the `tailwind.config.js`.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
theme: {
  colors: {
    primary: '#1D4ED8',
    secondary: '#6B7280',
  },
  spacing: {
    '128': '32rem',
    '144': '36rem',
  }
}
            </code></pre>
        </section>

        <!-- Consistency and Scale -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Scalable, Consistent Design</h2>
            <p class="text-lg mb-2">
                Tailwind encourages consistent spacing, font sizing, and layout patterns using its predefined scale system, avoiding one-off customizations that harm scalability.
            </p>
        </section>

        <!-- Accessibility & Semantics -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Accessibility and Semantics</h2>
            <p class="text-lg mb-2">
                Tailwind pairs well with semantic HTML. Use meaningful elements (`<button>`, `<nav>`, `<section>`) along with accessibility classes (`sr-only`, `focus:outline-none`, etc.) for inclusive designs.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                By following these UI principles, developers can build robust design systems using Tailwind CSS that are scalable, accessible, and consistent across large codebases or teams.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/reuse" class="text-blue-600 hover:underline">Reusing with @apply →</a></p>
        </div>
    </article>
</main>
