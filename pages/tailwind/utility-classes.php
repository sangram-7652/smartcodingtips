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
            <li class="text-gray-500">What Are Utility Classes?</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">What Are Utility Classes?</h1>
        <p class=" mb-4">
            Utility classes in Tailwind CSS are single-purpose classes that apply one specific style. Rather than writing custom CSS, you use these predefined classes directly in your HTML to style elements quickly and consistently.
        </p>

        <!-- Why Utility Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Why Use Utility Classes?</h2>
            <ul class="list-disc list-inside  space-y-1">
                <li>Write less custom CSS</li>
                <li>Keep styles consistent across components</li>
                <li>Faster development with reusable patterns</li>
                <li>Smaller final CSS with JIT compilation</li>
            </ul>
        </section>

        <!-- Examples -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Common Examples</h2>
            <p class=" mb-2">Here are a few utility classes you’ll use often:</p>
            <div class="grid grid-cols-2 gap-4 text-sm bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white">
                <div><code>p-4</code> → padding: 1rem</div>
                <div><code>text-center</code> → text-align: center</div>
                <div><code>bg-blue-500</code> → background-color: blue</div>
                <div><code>rounded-lg</code> → border-radius: large</div>
                <div><code>hover:text-white</code> → white text on hover</div>
                <div><code>md:flex</code> → display: flex on medium screens</div>
            </div>
        </section>

        <!-- Without vs With Utility -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Without vs With Utility Classes</h2>
            <p class=" mb-2 font-medium">Traditional CSS:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
.card {
    background-color: white;
    padding: 1rem;
    border-radius: 0.5rem;
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}
            </pre>
            <p class=" mt-2 font-medium">Tailwind Utility Classes:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="bg-white p-4 rounded shadow"&gt;...&lt;/div&gt;
            </pre>
        </section>

        <!-- When Not to Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. When Not to Use Utilities</h2>
            <p class="">
                Utility classes work best for smaller components and layouts. For large, repeated styles, consider extracting them with <code>@apply</code> or custom classes.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Utility classes make your code faster, cleaner, and easier to maintain. They’re the heart of Tailwind CSS and a major shift from traditional CSS writing.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/config-file') ?>" class="hover:underline">← Previous: Tailwind CLI and Configuration File</a>
  <a href="<?= base_url('tailwind/semantic-html') ?>" class="hover:underline">Next: Writing Semantic HTML with Utilities →</a>
</div>
    </article>
</main>
