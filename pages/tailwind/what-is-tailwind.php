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
            <li class="text-gray-500">What is Tailwind CSS?</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">What is Tailwind CSS?</h1>
        <p class=" mb-4">
            Tailwind CSS is a modern utility-first CSS framework that allows you to rapidly build custom user interfaces. Instead of writing custom CSS for every component, you apply pre-defined utility classes directly in your HTML to style elements.
        </p>

        <!-- Why It's Different -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. How is it Different?</h2>
            <p class=" mb-2">
                Traditional CSS relies on writing custom classes and stylesheets. Tailwind uses utility classes like <code>p-4</code>, <code>text-center</code>, and <code>bg-blue-500</code> to apply styling instantly without leaving your HTML.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"&gt;
    Click Me
&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Benefits -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Benefits of Tailwind</h2>
            <ul class="list-disc list-inside ">
                <li>Rapid UI development with utility classes</li>
                <li>No need to switch between HTML and CSS files</li>
                <li>Highly customizable via <code>tailwind.config.js</code></li>
                <li>Encourages consistent design and spacing</li>
                <li>Great integration with frameworks like React, Vue, Laravel, etc.</li>
            </ul>
        </section>

        <!-- Key Concepts -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Key Concepts</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Utility-First:</strong> Use classes like <code>mt-4</code> or <code></code> for styling.</li>
                <li><strong>Responsive Design:</strong> Prefix classes like <code>md:flex</code> or <code>lg:text-xl</code>.</li>
                <li><strong>Variants:</strong> Handle states like <code>hover:</code>, <code>focus:</code>, etc.</li>
                <li><strong>Custom Configuration:</strong> Define themes, breakpoints, colors, and more in <code>tailwind.config.js</code>.</li>
            </ul>
        </section>

        <!-- When to Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. When Should You Use It?</h2>
            <p class=" mb-2">
                Tailwind is ideal when:
            </p>
            <ul class="list-disc list-inside ">
                <li>You want full control without writing new CSS</li>
                <li>You prefer fast prototyping</li>
                <li>Your team follows consistent design tokens</li>
                <li>You need flexibility without heavy pre-designed components</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind CSS offers a refreshing approach to styling by eliminating the need for custom CSS. It speeds up development, enforces consistency, and works beautifully with modern frameworks and tools.
            </p>
        </section>

        <!-- Next Link -->
       <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <span></span>
  <a href="<?= base_url('tailwind/why-utility-first') ?>" class="hover:underline">Next: Why Choose Utility-First Frameworks? →</a>
</div>
    </article>
</main>
