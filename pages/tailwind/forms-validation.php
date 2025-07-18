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
            <li class="text-gray-500">Validation Styling</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Interactive Forms with Validation Styling</h1>
        <p class=" mb-4">
            Tailwind CSS makes it easy to create responsive and accessible forms with real-time validation feedback. You can style valid/invalid states using utility classes and pseudo-classes.
        </p>

        <!-- Using HTML5 Validation States -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Styling Valid & Invalid Inputs</h2>
            <p class=" mb-2">
                Use <code>:invalid</code>, <code>:valid</code>, and <code>:required</code> pseudo-classes to style form controls based on their validation state.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;input type="email" required
  class="peer w-full border rounded px-3 py-2 
         border-gray-300 focus:outline-none 
         focus:ring-2 focus:ring-blue-500
         invalid:border-red-500 invalid:text-red-600
         valid:border-green-500 valid:text-green-600"
/&gt;
            </code></pre>
        </section>

        <!-- Displaying Validation Messages -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Showing Error Messages</h2>
            <p class=" mb-2">You can use the <code>.peer</code> class to conditionally show error messages:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div&gt;
  &lt;input type="text" required class="peer w-full border px-3 py-2 border-gray-300 
       invalid:border-red-500 invalid:ring-red-500"&gt;
  &lt;p class="mt-1 text-sm text-red-600 invisible peer-invalid:visible"&gt;
    This field is required.
  &lt;/p&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Example Form -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Interactive Example</h2>
            <p class=" mb-2">Here's a full form example with validation feedback:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;form class="space-y-4"&gt;
  &lt;div&gt;
    &lt;label class="block text-sm font-medium text-gray-700"&gt;Email&lt;/label&gt;
    &lt;input type="email" required class="peer w-full mt-1 px-3 py-2 border border-gray-300 
         rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 
         invalid:border-red-500"&gt;
    &lt;p class="text-red-500 text-sm mt-1 invisible peer-invalid:visible"&gt;
      Please enter a valid email address.
    &lt;/p&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;label class="block text-sm font-medium text-gray-700"&gt;Password&lt;/label&gt;
    &lt;input type="password" minlength="6" required 
      class="peer w-full mt-1 px-3 py-2 border border-gray-300 
             rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 
             invalid:border-red-500"&gt;
    &lt;p class="text-red-500 text-sm mt-1 invisible peer-invalid:visible"&gt;
      Password must be at least 6 characters.
    &lt;/p&gt;
  &lt;/div&gt;

  &lt;button type="submit" 
    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"&gt;
    Submit
  &lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <!-- Accessibility Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Always associate labels with inputs using <code>&lt;label&gt;</code>.</li>
                <li>Use <code>aria-invalid</code> for screen reader feedback if needed.</li>
                <li>Use <code>required</code>, <code>minlength</code>, etc., for built-in HTML validation.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                With Tailwind and modern HTML features, you can create fully interactive, validated, and accessible forms using just utility classes — without writing custom CSS.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/forms-plugin') ?>" class="hover:underline">← Previous: Tailwind Forms Plugin</a>
  <a href="<?= base_url('tailwind/custom-config') ?>" class="hover:underline">Next: Configuring Tailwind →</a>
</div>
    </article>
</main>
