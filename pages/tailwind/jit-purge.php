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
            <li class="text-gray-500">How Tailwind Applies Styles</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">How Tailwind Applies Styles (JIT & PurgeCSS)</h1>
        <p class=" mb-4">
            Tailwind CSS uses a Just-In-Time (JIT) compiler to generate only the utility classes your project needs. This results in smaller, faster stylesheets and better performance in development and production.
        </p>

        <!-- JIT Compilation -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Just-In-Time (JIT) Mode</h2>
            <p class=" mb-2">
                JIT mode compiles your CSS on-demand, as you use classes in your HTML. It's fast, supports arbitrary values, and eliminates the need for manual purging.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
// tailwind.config.js
module.exports = {
  content: ['./*.html', './src/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: {},
  },
  plugins: [],
};
            </pre>
            <p class=" mt-2">As soon as a class appears in your content, JIT adds it to the output.</p>
        </section>

        <!-- Arbitrary Values -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Arbitrary Value Support</h2>
            <p class=" mb-2">
                With JIT, you can use arbitrary values without predefining them:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="w-[475px] bg-[#123456] text-[22px]"&gt;Custom Width, Color, and Font Size&lt;/div&gt;
            </pre>
        </section>

        <!-- PurgeCSS (Now called content scanning) -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. PurgeCSS (Content Scanning)</h2>
            <p class=" mb-2">
                Tailwind used to rely on PurgeCSS to remove unused classes. In JIT mode, this is replaced with intelligent <strong>content scanning</strong> based on your config paths.
            </p>
            <ul class="list-disc list-inside ">
                <li>Scans your HTML, JS, PHP, etc. for used classes</li>
                <li>Only includes those classes in the final CSS</li>
                <li>Significantly reduces bundle size</li>
            </ul>
        </section>

        <!-- Performance Benefits -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Performance and Build Size</h2>
            <p class=" mb-2">
                JIT improves both dev experience and final output:
            </p>
            <ul class="list-disc list-inside ">
                <li>Faster build and rebuild times</li>
                <li>Smaller CSS files by default</li>
                <li>Instant support for new or custom values</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind’s JIT engine and content scanning make it incredibly efficient and scalable. You write utility classes, and Tailwind handles the rest — building only what's needed in your production CSS.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/variants') ?>" class="hover:underline">← Previous: Responsive, Hover, and Focus Variants</a>
  <a href="<?= base_url('tailwind/apply-layer') ?>" class="hover:underline">Next: @apply, @layer and @variants Usage →</a>
</div>
    </article>
</main>
