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
            <li class="text-gray-500">E-Commerce Product Grid</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">E-Commerce Product Grid</h1>
        <p class=" mb-4">
            Let's create a responsive product grid layout for an online store using Tailwind CSS. This layout is mobile-friendly, clean, and optimized for product cards.
        </p>

        <!-- Preview Mockup -->
        <section class="mb-8">
            <img src="https://tailwindcomponents.com/storage/4796/conversions/temp87922-ogimage.jpg" alt="Product Grid Example" class="rounded shadow-md w-full max-w-3xl mb-2">
            <p class="text-gray-600 text-sm">Source: Tailwind Components – Product Cards</p>
        </section>

        <!-- Step 1: Product Card Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Product Card Structure</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;div class="bg-white shadow-md rounded p-4"&gt;
    &lt;img src="product.jpg" alt="Product" class="w-full h-48 object-cover mb-4 rounded"&gt;
    &lt;h3 class=" font-semibold"&gt;Product Name&lt;/h3&gt;
    &lt;p class="text-gray-500 text-sm"&gt;Short description here&lt;/p&gt;
    &lt;div class="flex justify-between items-center mt-3"&gt;
        &lt;span class="text-blue-600  dark:text-blue-400 font-bold"&gt;$29.99&lt;/span&gt;
        &lt;button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"&gt;Buy&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Step 2: Responsive Grid Layout -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Responsive Grid Layout</h2>
            <p class="">Use responsive Tailwind grid classes:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;section class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"&gt;
    &lt;!-- Repeat Product Card Here --&gt;
&lt;/section&gt;
            </code></pre>
        </section>

        <!-- Step 3: Enhancements -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Enhancements</h2>
            <ul class="list-disc list-inside ">
                <li>Add hover effects: <code>hover:shadow-lg</code>, <code>hover:scale-105</code></li>
                <li>Use <code>transition</code> for smooth interactions</li>
                <li>Display badges like "Sale" or "New" with absolute positioning</li>
                <li>Lazy load images using <code>loading="lazy"</code></li>
            </ul>
        </section>

        <!-- Full Example -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-2">4. Complete Example</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;section class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3"&gt;
  &lt;div class="bg-white rounded-lg shadow p-4 hover:shadow-xl transition"&gt;
    &lt;img src="shoe.jpg" alt="Sneakers" class="w-full h-48 object-cover mb-4 rounded"&gt;
    &lt;h3 class=" font-semibold"&gt;Stylish Sneakers&lt;/h3&gt;
    &lt;p class="text-gray-500 text-sm"&gt;Comfortable and trendy shoes for all-day wear.&lt;/p&gt;
    &lt;div class="flex justify-between items-center mt-3"&gt;
        &lt;span class="text-green-600 font-bold"&gt;$49.99&lt;/span&gt;
        &lt;button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600"&gt;Add to Cart&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Repeat other products... --&gt;
&lt;/section&gt;
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-4">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind CSS makes it easy to build responsive, attractive product grids with minimal effort. Combine utility classes for layout, style, and interactivity to deliver a sleek shopping experience.
            </p>
        </section>

       <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/project-portfolio') ?>" class="hover:underline">← Previous: Responsive Portfolio Page</a>
  <a href="<?= base_url('tailwind/project-pricing') ?>" class="hover:underline ms-auto">Next: Pricing Table with Toggle →</a>
</div>

    </article>
</main>
