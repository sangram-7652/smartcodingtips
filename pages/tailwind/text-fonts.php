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
            <li class="text-gray-500">Font Size, Family, and Weight</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Font Size, Family, and Weight</h1>
        <p class=" mb-4">
            Tailwind provides utility classes to easily control text size, font family, and weight. This gives you powerful control over typography without writing custom CSS.
        </p>

        <!-- Font Sizes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Font Sizes</h2>
            <p class=" mb-2">Use <code>text-{size}</code> to set font size. Example sizes:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
text-xs     /* Extra small */
text-sm     /* Small */
text-base   /* Default body text */
     /* Large */
text-xl     /* Extra Large */
text-2xl to text-9xl  /* Larger heading sizes */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="text-xs bg-gray-800 text-white p-2 rounded">This is text-xs</p>
                <p class="text-base bg-gray-800 text-white p-2 rounded">This is text-base</p>
                <p class="text-4xl bg-gray-800 text-white p-2 rounded">This is text-4xl</p>
            </div>
        </section>

        <!-- Font Family -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Font Family</h2>
            <p class=" mb-2">Use <code>font-sans</code>, <code>font-serif</code>, or <code>font-mono</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
font-sans   /* Default: Inter, system-ui, etc. */
font-serif  /* Georgia, Times New Roman */
font-mono   /* Menlo, Courier New */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="font-sans bg-gray-800 text-white p-2 rounded">This is sans-serif font</p>
                <p class="font-serif bg-gray-800 text-white p-2 rounded">This is serif font</p>
                <p class="font-mono bg-gray-800 text-white p-2 rounded">This is mono font</p>
            </div>
        </section>

        <!-- Font Weight -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Font Weight</h2>
            <p class=" mb-2">Control font weight with <code>font-{weight}</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm">
font-thin        /* 100 */
font-extralight  /* 200 */
font-light       /* 300 */
font-normal      /* 400 */
font-medium      /* 500 */
font-semibold    /* 600 */
font-bold        /* 700 */
font-extrabold   /* 800 */
font-black       /* 900 */
            </pre>
            <div class="space-y-2 mt-4">
                <p class="font-light bg-gray-800 text-white  p-2 rounded">This is light text</p>
                <p class="font-semibold  bg-gray-800 text-white p-2 rounded">This is semi-bold text</p>
                <p class="font-black bg-gray-800 text-white  p-2 rounded">This is black text</p>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind’s typography utilities let you apply font sizes, families, and weights quickly. Combine these classes to create headings, body text, and labels that match your brand.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/grid-responsive') ?>" class="hover:underline">← Previous: Responsive Grid Layouts</a>
  <a href="<?= base_url('tailwind/text-spacing') ?>" class="hover:underline ms-auto">Next: Line Height, Letter Spacing →</a>
</div>
    </article>
</main>
