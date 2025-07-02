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
            <li class="text-gray-500">Custom Utility Classes</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Creating Custom Utility Classes</h1>

        <p class="text-lg mb-4">
            Tailwind CSS is highly extendable. You can define your own custom utility classes to reuse consistent styles across your project using the `tailwind.config.js` file.
        </p>

        <!-- Step 1 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Why Create Custom Utilities?</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Reduce repetition of long utility chains</li>
                <li>Define brand-specific styles (e.g., colors, spacing)</li>
                <li>Improve readability and maintainability</li>
            </ul>
        </section>

        <!-- Step 2 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Define Utilities with `addUtilities`</h2>
            <p class="text-lg mb-2">Add custom utilities in your Tailwind plugin section:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
/** tailwind.config.js **/
const plugin = require('tailwindcss/plugin');

module.exports = {
  content: ["./*.html"],
  theme: {
    extend: {},
  },
  plugins: [
    plugin(function({ addUtilities }) {
      const newUtilities = {
        '.text-shadow': {
          textShadow: '2px 2px 5px rgba(0,0,0,0.3)',
        },
        '.no-scrollbar': {
          '-ms-overflow-style': 'none',
          'scrollbar-width': 'none',
        },
        '.no-scrollbar::-webkit-scrollbar': {
          display: 'none',
        },
      };
      addUtilities(newUtilities);
    }),
  ],
};
            </code></pre>
        </section>

        <!-- Step 3 -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Use Your Custom Utility</h2>
            <p class="text-lg mb-2">Once configured, use your new classes like any other Tailwind class:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="text-shadow text-xl text-gray-800"&gt;
  Custom Shadow Text
&lt;/div&gt;

&lt;div class="overflow-y-scroll no-scrollbar h-40"&gt;
  Hidden scrollbar scrollable content
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use a naming convention (`.custom-*`, `.u-*`) to avoid conflicts</li>
                <li>Keep custom utilities minimal and purposeful</li>
                <li>Group utilities logically in your plugin definition</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Creating custom utility classes helps you tailor Tailwind to your design system. With plugins and `addUtilities`, you get the best of utility-first development and consistent design tokens.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/dark-mode" class="text-blue-600 hover:underline">Dark Mode Strategies →</a></p>
        </div>
    </article>
</main>
