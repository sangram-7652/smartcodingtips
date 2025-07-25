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
            <li class="text-gray-500">Breakpoints</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind CSS Breakpoints</h1>
        <p class=" mb-4">
            Breakpoints in Tailwind CSS allow you to apply different utility classes at specific screen widths, enabling fully responsive designs with minimal effort.
        </p>

        <!-- Default Breakpoints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Default Breakpoints</h2>
            <p class=" mb-2">Tailwind uses the following default screen sizes for responsive utilities:</p>
            <table class="w-full mb-4 text-left border border-gray-300 text-sm">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="p-2 border-b border-gray-300">Prefix</th>
                        <th class="p-2 border-b border-gray-300">Min Width</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="p-2 border-b">sm</td><td class="p-2 border-b">640px</td></tr>
                    <tr><td class="p-2 border-b">md</td><td class="p-2 border-b">768px</td></tr>
                    <tr><td class="p-2 border-b">lg</td><td class="p-2 border-b">1024px</td></tr>
                    <tr><td class="p-2 border-b">xl</td><td class="p-2 border-b">1280px</td></tr>
                    <tr><td class="p-2 border-b">2xl</td><td class="p-2 border-b">1536px</td></tr>
                </tbody>
            </table>
        </section>

        <!-- Applying Responsive Prefixes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Applying Responsive Prefixes</h2>
            <p class=" mb-2">
                You can add responsive variants by prefixing any utility with a breakpoint name:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;div class="text-sm md:text-base lg:text-xl"&gt;
    Responsive Text
&lt;/div&gt;
            </code></pre>
            <p class=" mt-2">
                This will apply:
                <ul class="list-disc list-inside ">
                    <li><code>text-sm</code> on small screens</li>
                    <li><code>text-base</code> from 768px and up</li>
                    <li><code>text-xl</code> from 1024px and up</li>
                </ul>
            </p>
        </section>

        <!-- Customizing Breakpoints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Customizing Breakpoints</h2>
            <p class=" mb-2">
                You can override or add breakpoints in your <code>tailwind.config.js</code>:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
module.exports = {
  theme: {
    extend: {},
    screens: {
      'xs': '480px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
  },
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Start with mobile defaults and scale up.</li>
                <li>Use as few breakpoints as necessary to keep your CSS clean.</li>
                <li>Test designs at all screen sizes regularly.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind's breakpoint system makes responsive design intuitive and scalable. With just a few prefixes, you can craft fully adaptive UIs without ever writing a single media query.
            </p>
        </section>

       <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/mobile-first') ?>" class="hover:underline">← Previous: Mobile-First Philosophy</a>
  <a href="<?= base_url('tailwind/show-hide') ?>" class="hover:underline ms-auto">Next: Hiding/Showing Elements Responsively →</a>
</div>
    </article>
</main>
