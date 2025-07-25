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
            <li class="text-gray-500">Floating Labels</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Floating Labels and Focus Styles</h1>
        <p class=" mb-4">
            Floating labels provide a clean and modern input experience. Combined with Tailwind’s focus utilities, you can style interactive and accessible form elements effectively.
        </p>

        <!-- Basic Floating Label Technique -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. Floating Label with Tailwind</h2>
            <p class=" mb-2">Use <code>absolute</code>, <code>peer</code>, and <code>transform</code> utilities:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;div class="relative"&gt;
  &lt;input
    type="text"
    id="name"
    placeholder=" "
    class="peer w-full border-b-2 border-gray-300 focus:outline-none focus:border-blue-500 py-2 placeholder-transparent"
  /&gt;
  &lt;label
    for="name"
    class="absolute left-0 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-0 peer-focus:text-sm peer-focus:text-blue-500"
  &gt;
    Your Name
  &lt;/label&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Explanation -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. How It Works</h2>
            <ul class="list-disc list-inside ">
                <li><code>placeholder=" "</code> is used to trigger the floating effect without displaying a placeholder.</li>
                <li><code>peer</code> allows the label to react to the input's focus and placeholder state.</li>
                <li><code>transition-all</code> + <code>top</code> + <code>text-sm</code> animates the label.</li>
            </ul>
        </section>

        <!-- Focus Styling Tips -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Enhancing Focus Styles</h2>
            <p class=" mb-2">
                Add ring effects or color transitions to improve focus visibility:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm"><code>
&lt;input
  type="email"
  class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
/&gt;
            </code></pre>
            <p class=" mt-2">You can use <code>focus:ring</code>, <code>focus:border</code>, or even <code>focus-visible</code> utilities for keyboard-accessibility styling.</p>
        </section>

        <!-- Accessibility Note -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Accessibility Tip</h2>
            <p class="">
                Always pair your input with a <code>&lt;label&gt;</code> and use <code>for</code>/<code>id</code> to ensure screen readers and assistive tools work properly.
            </p>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Floating labels improve the form UX and Tailwind’s utility classes make it easy to implement and customize them with smooth focus interactions and clean visuals.
            </p>
        </section>

        <div class="mt-4 flex justify-between flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/forms-custom') ?>" class="hover:underline">← Previous: Custom Checkbox and Radio Buttons</a>
  <a href="<?= base_url('tailwind/forms-plugin') ?>" class="hover:underline ms-auto">Next: Tailwind Forms Plugin →</a>
</div>
    </article>
</main>
