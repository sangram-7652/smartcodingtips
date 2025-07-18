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
            <li class="text-gray-500">Responsive Portfolio Page</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Responsive Portfolio Page</h1>
        <p class=" mb-4">
            In this guide, you'll build a clean, responsive portfolio layout using Tailwind CSS. It will include an introduction, project grid, and contact section.
        </p>

        <!-- Design Preview -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">Live Preview Mockup</h2>
            <img src="https://tailwindcomponents.com/storage/4450/conversions/temp82352-ogimage.jpg" alt="Portfolio preview" class="rounded shadow-md w-full max-w-3xl mb-4">
            <p class="text-gray-600 text-sm">Source: Tailwind Components – Portfolio Card Grid</p>
        </section>

        <!-- Step-by-Step Layout -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Structure</h2>
            <p class="">Start with a responsive container and sections:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;body class="bg-gray-100 text-gray-800"&gt;
  &lt;header class="text-center py-10"&gt;
    &lt;h1 class="text-4xl font-bold"&gt;John Doe&lt;/h1&gt;
    &lt;p class=" text-gray-600"&gt;Web Developer | UI Designer&lt;/p&gt;
  &lt;/header&gt;

  &lt;main class="max-w-6xl mx-auto px-4"&gt;
    &lt;!-- Project Grid Here --&gt;
  &lt;/main&gt;

  &lt;footer class="text-center py-8 text-sm text-gray-500"&gt;
    &copy; 2025 John Doe
  &lt;/footer&gt;
&lt;/body&gt;
            </code></pre>
        </section>

        <!-- Project Grid -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Project Grid</h2>
            <p class="">Use a responsive grid for portfolio cards:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;section class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mb-12"&gt;
  &lt;div class="bg-white rounded-lg shadow p-4"&gt;
    &lt;img src="project1.jpg" alt="Project 1" class="rounded mb-4"&gt;
    &lt;h3 class="text-xl font-semibold mb-2"&gt;E-Commerce Site&lt;/h3&gt;
    &lt;p class="text-gray-600"&gt;Built with React, Tailwind, Stripe integration.&lt;/p&gt;
  &lt;/div&gt;

  &lt;div class="bg-white rounded-lg shadow p-4"&gt;
    &lt;img src="project2.jpg" alt="Project 2" class="rounded mb-4"&gt;
    &lt;h3 class="text-xl font-semibold mb-2"&gt;Portfolio Website&lt;/h3&gt;
    &lt;p class="text-gray-600"&gt;Responsive design with dark mode support.&lt;/p&gt;
  &lt;/div&gt;
&lt;/section&gt;
            </code></pre>
        </section>

        <!-- Contact Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Contact Section</h2>
            <p class="">Add a simple contact form or email link:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;section class="text-center"&gt;
  &lt;h2 class="text-2xl font-bold mb-4"&gt;Let’s Work Together&lt;/h2&gt;
  &lt;p class="mb-6"&gt;Email me at &lt;a href="mailto:you@example.com" class="text-blue-600  dark:text-blue-400 hover:underline"&gt;you@example.com&lt;/a&gt;&lt;/p&gt;
&lt;/section&gt;
            </code></pre>
        </section>

        <!-- Tailwind Tips -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-2">Tips for Customization</h2>
            <ul class="list-disc list-inside ">
                <li>Use hover effects like <code>hover:shadow-xl</code> on cards.</li>
                <li>Add transitions using <code>transition-all duration-300</code>.</li>
                <li>Use <code>prose</code> class if using Tailwind Typography plugin for blogs.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-4">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                This responsive portfolio template is a great starting point to showcase your work with Tailwind. You can enhance it with animations, filters, or dark mode for a personalized touch.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/integration') ?>" class="hover:underline">← Previous: Integration with PostCSS and Vite</a>
  <a href="<?= base_url('tailwind/project-product-grid') ?>" class="hover:underline">Next: E-Commerce Product Grid →</a>
</div>

    </article>
</main>
