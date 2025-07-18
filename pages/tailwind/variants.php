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
            <li class="text-gray-500">Responsive, Hover, and Focus Variants</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Responsive, Hover, and Focus Variants</h1>
        <p class=" mb-4">
            Tailwind CSS allows you to conditionally apply utility classes based on screen size (responsive design), interaction state (like hover or focus), and more — using *variants*.
        </p>

        <!-- Responsive Variants -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Responsive Variants</h2>
            <p class=" mb-2">
                Prefix classes with breakpoints like <code>sm:</code>, <code>md:</code>, <code>lg:</code> to apply styles at specific screen widths.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="text-sm sm:text-base md: lg:text-xl"&gt;
  Responsive Text Size
&lt;/div&gt;
            </pre>
            <p class=" mt-2">This element will have increasing font size on larger screens.</p>
        </section>

        <!-- Hover and Focus States -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Hover and Focus States</h2>
            <p class=" mb-2">
                Tailwind includes variants for interaction states like <code>hover:</code>, <code>focus:</code>, <code>active:</code>, and more.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;button class="bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 text-white py-2 px-4 rounded"&gt;
  Hover & Focus Me
&lt;/button&gt;
            </pre>
        </section>

        <!-- Group Hover Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Group Hover Example</h2>
            <p class=" mb-2">Use <code>group</code> on the parent and <code>group-hover:</code> on child elements:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;div class="group p-4 bg-gray-100 hover:bg-gray-200"&gt;
  &lt;h3 class="text-xl font-semibold group-hover:text-blue-600 dark:text-blue-400"&gt;
    Hover to change heading color
  &lt;/h3&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Combining Multiple Variants -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Combining Variants</h2>
            <p class=" mb-2">You can combine responsive and state variants:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
&lt;button class="text-sm sm:text-base hover:bg-green-500 focus:outline-none focus:ring-2"&gt;
  Responsive Button
&lt;/button&gt;
            </pre>
        </section>

        <!-- Customizing Variants -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Customizing Available Variants</h2>
            <p class=" mb-2">
                You can control which variants are generated in your <code>tailwind.config.js</code> file:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm">
// tailwind.config.js
module.exports = {
  variants: {
    extend: {
      backgroundColor: ['active'],
      textColor: ['visited'],
    },
  },
};
            </pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Responsive and interactive variants are a core strength of Tailwind. They enable powerful designs directly within your HTML, keeping your components both flexible and easy to maintain.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/semantic-html') ?>" class="hover:underline">← Previous: Writing Semantic HTML with Utilities</a>
  <a href="<?= base_url('tailwind/jit-purge') ?>" class="hover:underline">Next: How Tailwind Applies Styles →</a>
</div>

    </article>
</main>
