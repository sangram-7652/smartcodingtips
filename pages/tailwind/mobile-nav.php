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
            <li class="text-gray-500">Mobile Navbar</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Building a Mobile-First Navbar with Tailwind</h1>
        <p class=" mb-4">
            Tailwind makes it easy to create responsive navigation bars that adapt to screen sizes using utility classes and mobile-first design principles.
        </p>

        <!-- Basic Mobile Navbar -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Structure</h2>
            <p class=" mb-2">Here’s a simple navbar layout that is optimized for mobile first, then enhanced for desktop:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;nav class="bg-white shadow-md"&gt;
    &lt;div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"&gt;
        &lt;div class="text-xl font-bold"&gt;Brand&lt;/div&gt;
        &lt;div class="md:hidden"&gt;
            &lt;button id="menu-toggle" class="text-gray-600"&gt;☰&lt;/button&gt;
        &lt;/div&gt;
        &lt;ul id="menu" class="hidden md:flex space-x-6"&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;Contact&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;
            </code></pre>
        </section>

        <!-- Show Menu on Toggle -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Toggle Menu on Mobile</h2>
            <p class=" mb-2">Use JavaScript or Alpine.js to toggle the visibility of the mobile menu:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
// JS example
document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
});
            </code></pre>
        </section>

        <!-- Alpine.js Option -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Alpine.js Version (Optional)</h2>
            <p class=" mb-2">For a more reactive setup without external JS:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;nav x-data="{ open: false }" class="bg-white shadow-md"&gt;
    &lt;div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center"&gt;
        &lt;div class="text-xl font-bold"&gt;Brand&lt;/div&gt;
        &lt;button @click="open = !open" class="md:hidden text-gray-600"&gt;☰&lt;/button&gt;
        &lt;ul :class="{ 'hidden': !open }" class="md:flex space-x-6 hidden md:block"&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#" class="hover:text-blue-600"&gt;Contact&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always hide the menu on mobile by default and use JavaScript to show it.</li>
                <li>Use mobile-first classes (<code>md:flex</code>, <code>md:hidden</code>) to enhance progressively.</li>
                <li>Ensure your toggle button is keyboard accessible for better accessibility.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                A responsive, mobile-first navbar in Tailwind is quick to build with utility classes and a small amount of JavaScript. It’s also highly customizable and easy to extend for dropdowns, search bars, or user menus.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/show-hide') ?>" class="hover:underline">← Previous: Hiding/Showing Elements Responsively</a>
  <a href="<?= base_url('tailwind/forms-basic') ?>" class="hover:underline ms-auto">Next: Styling Inputs, Selects, Buttons →</a>
</div>
    </article>
</main>
