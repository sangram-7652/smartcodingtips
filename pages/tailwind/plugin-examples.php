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
            <li class="text-gray-500">Community Plugins and Examples</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Community Plugins and Examples</h1>
        <p class=" mb-4">
            In addition to official plugins, the Tailwind CSS community has created a rich ecosystem of plugins that extend functionality and speed up development. These plugins cover everything from animation and forms to custom components and layouts.
        </p>

        <!-- Why Use Community Plugins -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Why Use Community Plugins?</h2>
            <ul class="list-disc list-inside ">
                <li>Quickly add utility classes for complex tasks.</li>
                <li>Benefit from the experience and patterns of the Tailwind community.</li>
                <li>Save time on repetitive configurations or patterns.</li>
            </ul>
        </section>

        <!-- Popular Community Plugins -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. Popular Community Plugins</h2>
            <ul class="list-disc list-inside ">
                <li><strong>tailwindcss-animate:</strong> Adds popular animation utility classes (uses Animate.css-like patterns).</li>
                <li><strong>tailwindcss-fluid-type:</strong> Adds fluid typography utilities using `clamp()`.</li>
                <li><strong>tailwindcss-debug-screens:</strong> Shows current responsive breakpoint onscreen while developing.</li>
                <li><strong>tailwindcss-gradients:</strong> Adds gradient utilities beyond the default Tailwind set.</li>
                <li><strong>tailwind-easing:</strong> Adds common easing functions to use with transitions.</li>
            </ul>
        </section>

        <!-- Installation Example -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Installation Example</h2>
            <p class=" mb-2">Install the plugin via npm and require it in your <code>tailwind.config.js</code> file:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
// Install
npm install tailwindcss-debug-screens

// Add to config
plugins: [
  require('tailwindcss-debug-screens'),
]
            </code></pre>
            <p class=" mt-2">Then use the utility:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;div class="debug-screens"&gt;...&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Where to Find Plugins -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">4. Where to Discover Plugins</h2>
            <ul class="list-disc list-inside ">
                <li><a href="https://github.com/aniftyco/awesome-tailwindcss" target="_blank" class="text-blue-600  dark:text-blue-400 hover:underline">Awesome Tailwind CSS</a> – curated plugin list</li>
                <li><a href="https://tailwindcomponents.com/plugins" target="_blank" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind Components Plugins</a></li>
                <li><a href="https://npmjs.com/search?q=tailwindcss-plugin" target="_blank" class="text-blue-600  dark:text-blue-400 hover:underline">npm plugin search</a></li>
            </ul>
        </section>

        <!-- Tips and Warnings -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">5. Tips for Using Plugins</h2>
            <ul class="list-disc list-inside ">
                <li>Always check compatibility with your Tailwind version.</li>
                <li>Read the README and test in a dev environment before using in production.</li>
                <li>Don’t overload your config—install only what you need.</li>
                <li>Customize plugin options if provided for better integration.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Community plugins make Tailwind even more powerful. With careful selection, you can speed up your development process while maintaining clean, consistent, and maintainable code.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/plugins-install') ?>" class="hover:underline">← Previous: Installing and Using Official Plugins</a>
  <a href="<?= base_url('tailwind/plugin-typography') ?>" class="hover:underline ms-auto">Next: Typography, Aspect-Ratio, Line-Clamp →</a>
</div>

    </article>
</main>
