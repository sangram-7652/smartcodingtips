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
            <li class="text-gray-500">Tailwind Forms Plugin</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind Forms Plugin</h1>
        <p class=" mb-4">
            The Tailwind Forms Plugin is a first-party plugin that resets and standardizes form controls across browsers while keeping them easily styleable with Tailwind classes.
        </p>

        <!-- Installation -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Installation</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
npm install @tailwindcss/forms
            </code></pre>
            <p class=" mt-2">Then add the plugin to your <code>tailwind.config.js</code> file:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
module.exports = {
  content: ['./**/*.html'],
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
            </code></pre>
        </section>

        <!-- Basic Usage -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Default Styles Example</h2>
            <p class=" mb-2">Here’s how a form looks after applying the plugin:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;form class="space-y-4"&gt;
  &lt;label class="block"&gt;
    &lt;span class="text-gray-700"&gt;Email&lt;/span&gt;
    &lt;input type="email" class="mt-1 block w-full" placeholder="you@example.com"&gt;
  &lt;/label&gt;

  &lt;label class="block"&gt;
    &lt;span class="text-gray-700"&gt;Message&lt;/span&gt;
    &lt;textarea class="mt-1 block w-full" rows="3"&gt;&lt;/textarea&gt;
  &lt;/label&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <!-- Customization -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Customization Options</h2>
            <p class="">
                You can still apply custom utilities like <code>border</code>, <code>rounded</code>, <code>focus:ring</code>, etc., on top of the plugin styles:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;input type="text"
  class="w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
/&gt;
            </code></pre>
        </section>

        <!-- When to Use It -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. When to Use the Plugin</h2>
            <ul class="list-disc list-inside ">
                <li>To normalize form element styles across browsers</li>
                <li>When you want clean, unopinionated base styles</li>
                <li>To avoid writing boilerplate CSS for inputs, selects, etc.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                The Tailwind Forms Plugin simplifies form styling without adding visual clutter. It gives you clean, consistent defaults while still allowing full customization with utility classes.
            </p>
        </section>

       <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/forms-labels') ?>" class="hover:underline">← Previous: Floating Labels and Focus Styles</a>
  <a href="<?= base_url('tailwind/forms-validation') ?>" class="hover:underline ms-auto">Next: Interactive Forms with Validation Styling →</a>
</div>
    </article>
</main>
