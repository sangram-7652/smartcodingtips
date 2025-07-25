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
            <li class="text-gray-500">Navbar, Cards, Modals</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Responsive Navbar, Cards, and Modals</h1>
        <p class=" mb-4">
            Tailwind makes it easy to build responsive UI components using utility classes. Let’s explore how to create a responsive navbar, reusable card components, and interactive modals.
        </p>

        <!-- Navbar -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Responsive Navbar</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;nav class="bg-gray-800 text-white p-4"&gt;
    &lt;div class="max-w-6xl mx-auto flex justify-between items-center"&gt;
        &lt;div class="text-xl font-bold"&gt;MySite&lt;/div&gt;
        &lt;div class="hidden md:flex space-x-6"&gt;
            &lt;a href="#" class="hover:underline"&gt;Home&lt;/a&gt;
            &lt;a href="#" class="hover:underline"&gt;About&lt;/a&gt;
            &lt;a href="#" class="hover:underline"&gt;Contact&lt;/a&gt;
        &lt;/div&gt;
        &lt;button class="md:hidden"&gt;☰&lt;/button&gt;
    &lt;/div&gt;
&lt;/nav&gt;
            </code></pre>
            <p class=" mt-2">Use <code>md:hidden</code> and <code>hidden md:flex</code> to toggle views based on screen size.</p>
        </section>

        <!-- Card -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. Reusable Card Component</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;div class="max-w-sm bg-white shadow-md rounded-lg overflow-hidden"&gt;
    &lt;img src="https://via.placeholder.com/400x200" alt="Card Image" class="w-full"&gt;
    &lt;div class="p-4"&gt;
        &lt;h3 class="text-xl font-semibold mb-2"&gt;Card Title&lt;/h3&gt;
        &lt;p class="text-gray-600"&gt;This is a simple card with image, title, and text.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
            <p class=" mt-2">Cards are flexible layout containers—ideal for products, articles, or user profiles.</p>
        </section>

        <!-- Modal -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Modal Component</h2>
            <p class=" mb-2">Use Tailwind classes and Alpine.js or JavaScript to control modal visibility.</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;!-- Modal Background --&gt;
&lt;div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden" id="modal"&gt;
    &lt;div class="bg-white p-6 rounded shadow-lg w-1/2"&gt;
        &lt;h2 class="text-xl font-bold mb-4"&gt;Modal Title&lt;/h2&gt;
        &lt;p class="mb-4"&gt;This is a modal window with some text.&lt;/p&gt;
        &lt;button onclick="document.getElementById('modal').classList.add('hidden')" class="bg-blue-600 text-white px-4 py-2 rounded"&gt;Close&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Trigger Button --&gt;
&lt;button onclick="document.getElementById('modal').classList.remove('hidden')" class="bg-indigo-600 text-white px-4 py-2 rounded"&gt;
    Open Modal
&lt;/button&gt;
            </code></pre>
            <p class=" mt-2">You can replace this with Alpine.js or Vue for better state handling.</p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind enables fast prototyping of complex UI patterns with minimal custom CSS. Combine layout utilities, interactivity, and responsive design to create polished components.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/reuse') ?>" class="hover:underline">← Previous: Extracting Reusable Components</a>
  <a href="<?= base_url('tailwind/js-frameworks') ?>" class="hover:underline ms-auto">Next: Tailwind with React/Vue Templates →</a>
</div>

    </article>
</main>
