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
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">@apply, @layer and @variants</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">@apply, @layer and @variants in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind provides powerful directives like <code>@apply</code>, <code>@layer</code>, and <code>@variants</code> to help you manage custom styles while staying in the utility-first mindset.
        </p>

        <!-- @apply -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using <code>@apply</code></h2>
            <p class=" mb-2">
                The <code>@apply</code> directive lets you extract commonly-used utility classes into custom CSS classes.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
/* styles.css */
.btn {
    @apply px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700;
}
            </pre>
            <p class=" mt-2">Now you can use <code>class="btn"</code> in your HTML to apply all these utilities.</p>
        </section>

        <!-- @layer -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using <code>@layer</code></h2>
            <p class=" mb-2">
                Tailwind has three layers: <code>base</code>, <code>components</code>, and <code>utilities</code>. Use <code>@layer</code> to add styles to the correct part of the cascade.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
@tailwind base;
@tailwind components;
@tailwind utilities;

@layer components {
    .card {
        @apply p-6 bg-white rounded shadow;
    }
}
            </pre>
        </section>

        <!-- @variants -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Using <code>@variants</code> (optional)</h2>
            <p class=" mb-2">
                While <code>@variants</code> is no longer required with JIT, it used to define variants like <code>:hover</code> or <code>:focus</code>. With JIT, just use them inline or inside @layer.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
@layer components {
    .btn-danger {
        @apply bg-red-500 text-white hover:bg-red-600;
    }
}
            </pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>@apply</code> for repeating utility patterns.</li>
                <li>Organize custom styles in <code>@layer components</code>.</li>
                <li>Let Tailwind handle most variants automatically in JIT mode.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                These directives enhance Tailwind’s flexibility, allowing you to maintain clean, reusable styles while still leveraging utility-first benefits.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/jit-purge') ?>" class="hover:underline">← Previous: How Tailwind Applies Styles</a>
  <a href="<?= base_url('tailwind/spacing') ?>" class="hover:underline ms-auto">Next: Container, Spacing (Padding, Margin) →</a>
</div>

    </article>
</main>
