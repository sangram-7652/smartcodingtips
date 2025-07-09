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
            <li class="text-gray-500">Reusing with @apply</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Extracting Reusable Components with Tailwind</h1>

        <p class=" mb-4">
            While Tailwind CSS encourages utility-first development, it's common to reuse combinations of utility classes across components. Instead of repeating long class lists, you can extract them into reusable components using <code>@apply</code>, partials, or components in your JS/Blade/Vue/React templates.
        </p>

        <!-- Using @apply -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Using <code>@apply</code> in Custom CSS</h2>
            <p class=" mb-2">
                Define a class in your custom CSS file and apply commonly used utility combinations with <code>@apply</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
/* styles.css */
.btn {
  @apply px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700;
}
.card {
  @apply shadow-md rounded-lg p-6 bg-white;
}
            </code></pre>
        </section>

        <!-- Extracting into Blade or HTML Components -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. HTML/Blade/React Component Extraction</h2>
            <p class=" mb-2">
                In templating engines like Blade, or frameworks like React, Vue, or Alpine, it's common to extract components:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
<!-- Blade Example: resources/views/components/button.blade.php -->
&lt;button {{ $attributes->merge(['class' => 'btn']) }}&gt;
    {{ $slot }}
&lt;/button&gt;

<!-- Use it like -->
&lt;x-button&gt;Click Me&lt;/x-button&gt;
            </code></pre>
        </section>

        <!-- Extracted React Component -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. React/JSX Component</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
function Button({ children }) {
  return (
    &lt;button className="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"&gt;
      {children}
    &lt;/button&gt;
  );
}
            </code></pre>
        </section>

        <!-- Why It's Useful -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Why Reuse Matters</h2>
            <ul class="list-disc list-inside ">
                <li>Reduces duplication of utility classes.</li>
                <li>Makes your components easier to read and maintain.</li>
                <li>Encourages design consistency across your UI.</li>
                <li>Improves productivity when working in teams or large projects.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                You don’t have to choose between utility-first and component-based design — Tailwind enables both. Extract reusable components with <code>@apply</code> or templates, and speed up your UI workflow without sacrificing structure or consistency.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/components" class="text-blue-600 hover:underline">Navbar, Cards, Modals →</a></p>
        </div>
    </article>
</main>
