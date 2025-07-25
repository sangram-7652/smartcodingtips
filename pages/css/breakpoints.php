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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Breakpoints</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Breakpoints</h1>
        <p class=" mb-4">
            Breakpoints are specific screen widths where your design adjusts to better fit the device. They are used in media queries to make layouts responsive.
        </p>

        <!-- What Are Breakpoints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. What Are Breakpoints?</h2>
            <p class=" mb-2">
                A breakpoint is a width threshold where you apply new CSS rules. Common device categories:
            </p>
            <ul class="list-disc list-inside ">
                <li><strong>Mobile:</strong> 0 – 639px</li>
                <li><strong>Tablet:</strong> 640px – 1023px</li>
                <li><strong>Laptop:</strong> 1024px – 1279px</li>
                <li><strong>Desktop:</strong> 1280px and up</li>
            </ul>
        </section>

        <!-- Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Media Query Syntax</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Target devices 768px and wider */
@media (min-width: 768px) {
    .container {
        display: flex;
    }
}

/* Max-width example for phones */
@media (max-width: 640px) {
    .nav {
        flex-direction: column;
    }
}
            </code></pre>
        </section>

        <!-- Common Breakpoint Values -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Common Breakpoint Values</h2>
            <ul class="list-disc list-inside ">
                <li><code>320px</code> – Small phones</li>
                <li><code>480px</code> – Larger phones</li>
                <li><code>768px</code> – Tablets</li>
                <li><code>1024px</code> – Small laptops</li>
                <li><code>1280px</code> – Desktops</li>
                <li><code>1536px+</code> – Large screens</li>
            </ul>
        </section>

        <!-- Mobile-First vs Desktop-First -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Mobile-First vs Desktop-First</h2>
            <p class=" mb-2">
                A <strong>mobile-first</strong> approach starts with styles for the smallest screens and adds styles as the screen gets wider using <code>min-width</code>. This is recommended.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Mobile styles first */
.card {
    font-size: 14px;
}

/* Desktop override */
@media (min-width: 1024px) {
    .card {
        font-size: 18px;
    }
}
            </code></pre>
        </section>

        <!-- Debugging Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Tips for Managing Breakpoints</h2>
            <ul class="list-disc list-inside ">
                <li>Keep breakpoints consistent across your project</li>
                <li>Use DevTools' responsive mode to test live</li>
                <li>Don’t overuse breakpoints — use fluid layouts when possible</li>
                <li>Consider CSS frameworks (like Tailwind or Bootstrap) for predefined breakpoints</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS breakpoints are essential for responsive design. Start with a mobile-first mindset, apply media queries logically, and test across screen sizes to ensure your site looks great everywhere.
            </p>
        </section>

      <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/mobile-first') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Mobile-First Design</a> 
   <a href="<?= base_url('css/flexbox-intro') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Flexbox Basics →</a> 
</div>

    </article>
</main>
