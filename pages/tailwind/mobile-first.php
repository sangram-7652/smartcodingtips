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
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400  hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Mobile-First Philosophy</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Mobile-First Design with Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS is designed with a <strong>mobile-first philosophy</strong>, meaning that styles are applied to small screens by default, and enhanced for larger screens using responsive prefixes like <code>md:</code>, <code>lg:</code>, etc.
        </p>

        <!-- Why Mobile First? -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Why Mobile First?</h2>
            <ul class="list-disc list-inside ">
                <li>Most users visit websites on mobile devices first.</li>
                <li>Easier to scale up a layout than scale it down.</li>
                <li>Better performance and less unused code on mobile.</li>
            </ul>
        </section>

        <!-- Default Styles -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Default Styles Apply to Mobile</h2>
            <p class=" mb-2">
                Any utility class without a prefix is applied to **all screen sizes**, starting from the smallest. For example:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="text-sm md:text-base lg:text-xl"&gt;Responsive Text&lt;/div&gt;
            </code></pre>
            <p class=" mt-2">
                In this case:
                <ul class="list-disc list-inside ">
                    <li><code>text-sm</code> is the default (mobile)</li>
                    <li><code>md:text-base</code> applies on screens ≥ 768px</li>
                    <li><code>lg:text-xl</code> applies on screens ≥ 1024px</li>
                </ul>
            </p>
        </section>

        <!-- Responsive Prefixes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Tailwind’s Breakpoints</h2>
            <p class=" mb-2">Tailwind provides mobile-first breakpoints:</p>
            <ul class="list-disc list-inside ">
                <li><code>sm</code> – 640px</li>
                <li><code>md</code> – 768px</li>
                <li><code>lg</code> – 1024px</li>
                <li><code>xl</code> – 1280px</li>
                <li><code>2xl</code> – 1536px</li>
            </ul>
            <p class=" mt-2">
                These breakpoints allow you to scale layouts and styles progressively:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="p-2 md:p-4 lg:p-6"&gt;Adaptive Padding&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Real-World Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Real-World Example</h2>
            <p class=" mb-2">
                A responsive card layout might look like:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"&gt;
    &lt;!-- Cards here --&gt;
&lt;/div&gt;
            </code></pre>
            <p class=" mt-2">
                This layout will show 1 card per row on mobile, 2 on medium screens, and 3 on large screens.
            </p>
        </section>

        <!-- Summary -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Summary</h2>
            <ul class="list-disc list-inside ">
                <li>Default utility classes are mobile styles.</li>
                <li>Use responsive prefixes to scale designs up.</li>
                <li>This approach leads to simpler and more maintainable code.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Embracing mobile-first design ensures your Tailwind-powered sites are performant, user-friendly, and scalable — from the smallest phone to the largest desktop.
            </p>
        </section>

      <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/translate') ?>" class="hover:underline">← Previous: Translate, Skew, Rotate, Origin</a>
  <a href="<?= base_url('tailwind/breakpoints') ?>" class="hover:underline">Next: Breakpoints →</a>
</div>

    </article>
</main>
