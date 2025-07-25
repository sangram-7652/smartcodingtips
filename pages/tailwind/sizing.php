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
            <li class="text-gray-500">Widths, Heights, Max/Min Sizing</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Widths, Heights, Max/Min Sizing in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS makes sizing elements flexible and efficient using utility classes for width, height, and their min/max counterparts. These utilities help build fully responsive and adaptive designs.
        </p>

        <!-- Width Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Width Utilities</h2>
            <p class=" mb-2">Control the width of elements using <code>w-*</code> classes:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="w-1/2"&gt;50% width&lt;/div&gt;
&lt;div class="w-full"&gt;100% width&lt;/div&gt;
&lt;div class="w-64"&gt;Fixed width (16rem)&lt;/div&gt;
&lt;div class="w-screen"&gt;Full viewport width&lt;/div&gt;
            </pre>
        </section>

        <!-- Height Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Height Utilities</h2>
            <p class=" mb-2">Use <code>h-*</code> classes to set height:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="h-16"&gt;Fixed height (4rem)&lt;/div&gt;
&lt;div class="h-screen"&gt;Full screen height&lt;/div&gt;
&lt;div class="h-auto"&gt;Height adjusts to content&lt;/div&gt;
            </pre>
        </section>

        <!-- Min/Max Width -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Min/Max Width</h2>
            <p class=" mb-2">Tailwind provides <code>min-w-*</code> and <code>max-w-*</code> for responsive constraints:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="min-w-[200px]"&gt;Minimum 200px width&lt;/div&gt;
&lt;div class="max-w-md"&gt;Maximum medium width (28rem)&lt;/div&gt;
            </pre>
        </section>

        <!-- Min/Max Height -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Min/Max Height</h2>
            <p class=" mb-2">Use <code>min-h-*</code> and <code>max-h-*</code> to control vertical sizing:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="min-h-screen"&gt;Full height on small screens&lt;/div&gt;
&lt;div class="max-h-60 overflow-y-auto"&gt;Scroll when content exceeds 15rem&lt;/div&gt;
            </pre>
        </section>

        <!-- Responsive Sizing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Responsive Sizing</h2>
            <p class=" mb-2">Combine breakpoints to adjust widths and heights on different screen sizes:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
&lt;div class="w-full md:w-1/2 lg:w-1/3"&gt;
    Responsive width on different devices
&lt;/div&gt;
            </pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Sizing utilities in Tailwind CSS empower you to control dimensions responsively without custom CSS. They’re powerful for both fixed and fluid layouts.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/spacing') ?>" class="hover:underline">← Previous: Container, Spacing (Padding, Margin)</a>
  <a href="<?= base_url('tailwind/display') ?>" class="hover:underline ms-auto">Next: Display: Block, Inline, Flex, Grid →</a>
</div>
    </article>
</main>
