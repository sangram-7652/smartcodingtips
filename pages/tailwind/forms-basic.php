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
            <li class="text-gray-500">Form Styling</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Styling Inputs, Selects, and Buttons in Tailwind</h1>
        <p class=" mb-4">
            Tailwind CSS allows you to fully customize form elements like text inputs, dropdowns, and buttons using utility classes, giving you both flexibility and consistency.
        </p>

        <!-- Input Fields -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Input Fields</h2>
            <p class=" mb-2">Here’s a styled text input with Tailwind utilities:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;input type="text" placeholder="Your Name"
  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"&gt;
            </code></pre>
        </section>

        <!-- Select Boxes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Select Boxes</h2>
            <p class=" mb-2">Customize the look of native dropdowns:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;select
  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"&gt;
  &lt;option&gt;Option 1&lt;/option&gt;
  &lt;option&gt;Option 2&lt;/option&gt;
&lt;/select&gt;
            </code></pre>
        </section>

        <!-- Buttons -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Buttons</h2>
            <p class=" mb-2">Buttons can be styled for different states:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;button
  class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400"&gt;
  Submit
&lt;/button&gt;
            </code></pre>
        </section>

        <!-- Grouped Form Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Full Form Example</h2>
            <p class=" mb-2">A compact form layout using grid and spacing:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;form class="grid gap-4 max-w-md"&gt;
  &lt;input type="email" placeholder="Email"
    class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"&gt;

  &lt;select class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"&gt;
    &lt;option&gt;Choose role&lt;/option&gt;
    &lt;option&gt;Student&lt;/option&gt;
    &lt;option&gt;Instructor&lt;/option&gt;
  &lt;/select&gt;

  &lt;button type="submit"
    class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition"&gt;
    Sign Up
  &lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Styling Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>focus:</code> classes to enhance accessibility.</li>
                <li>Apply consistent spacing using <code>px-</code>, <code>py-</code>, <code>gap-</code>.</li>
                <li>Use transition utilities like <code>hover:</code> and <code>focus:</code> to improve UX.</li>
                <li>Use Tailwind Forms Plugin for better cross-browser styles (optional).</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind provides all the tools you need to style form elements responsively and accessibly using pure utility classes.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/mobile-nav') ?>" class="hover:underline">← Previous: Building a Mobile-First Navbar</a>
  <a href="<?= base_url('tailwind/forms-custom') ?>" class="hover:underline">Next: Custom Checkbox and Radio Buttons →</a>
</div>
    </article>
</main>
