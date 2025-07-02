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
            <li class="text-gray-500">Dark Mode</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Dark Mode: Class vs Media Strategy</h1>

        <p class="text-lg mb-4">
            Tailwind CSS offers two strategies to implement dark mode: the <strong>class-based strategy</strong> and the <strong>media query strategy</strong>. Each provides different ways to handle user preference or toggle dark mode in your app.
        </p>

        <!-- Configuration -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Configuration in tailwind.config.js</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
/** tailwind.config.js **/

// Class-based strategy
module.exports = {
  darkMode: 'class', // or 'media'
  content: ["./*.html"],
  theme: {
    extend: {},
  },
  plugins: [],
};
            </code></pre>
        </section>

        <!-- Class-Based Strategy -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Class Strategy (`dark` class)</h2>
            <p class="text-lg mb-2">
                This strategy gives you full control to manually toggle dark mode using a parent class (`dark`), often on the `<html>` or `<body>` element.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;html class="dark"&gt;
  &lt;div class="bg-white dark:bg-gray-900 text-black dark:text-white"&gt;
    Dark mode enabled
  &lt;/div&gt;
&lt;/html&gt;
            </code></pre>
            <p class="text-lg mt-2">
                Toggle the `dark` class with JavaScript to switch themes.
            </p>
        </section>

        <!-- Media Strategy -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Media Strategy (`prefers-color-scheme`)</h2>
            <p class="text-lg mb-2">
                Tailwind automatically applies dark styles if the user's OS preference is dark mode.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  darkMode: 'media',
}
            </code></pre>
            <p class="text-lg mt-2">
                No need to toggle manually. Example:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="bg-white dark:bg-gray-800 text-black dark:text-white"&gt;
  Respects system dark mode preference
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Comparison -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Class vs Media: When to Use?</h2>
            <table class="w-full text-left border text-sm">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Feature</th>
                        <th class="p-2">Class</th>
                        <th class="p-2">Media</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-2">Manual toggle</td>
                        <td class="p-2">✅</td>
                        <td class="p-2">❌</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">Follows OS theme</td>
                        <td class="p-2">❌ (unless you detect it)</td>
                        <td class="p-2">✅</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">JavaScript control</td>
                        <td class="p-2">✅</td>
                        <td class="p-2">❌</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">Better for SPAs</td>
                        <td class="p-2">✅</td>
                        <td class="p-2">❌</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use the <code>class</code> strategy if you want user-toggleable themes.</li>
                <li>Use the <code>media</code> strategy for simplicity and OS integration.</li>
                <li>Always test dark mode for readability and contrast accessibility.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s dark mode support is flexible and powerful. Choose the strategy that fits your project’s needs, whether you want it to be automatic or user-controlled.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/ui-principles" class="text-blue-600 hover:underline">Tailwind UI Principles →</a></p>
        </div>
    </article>
</main>
