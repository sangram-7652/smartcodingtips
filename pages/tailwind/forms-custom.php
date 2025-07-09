<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Custom Checkbox & Radio</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Custom Checkbox and Radio Buttons in Tailwind</h1>
        <p class=" mb-4">
            Tailwind CSS makes it easy to customize checkboxes and radio buttons while maintaining accessibility and design consistency.
        </p>

        <!-- Default Styled Inputs -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Native Checkbox and Radio Styling</h2>
            <p class=" mb-2">Apply padding, spacing, and custom styles directly to labels for styling:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;label class="inline-flex items-center space-x-2"&gt;
  &lt;input type="checkbox" class="form-checkbox text-blue-600"&gt;
  &lt;span&gt;Subscribe&lt;/span&gt;
&lt;/label&gt;

&lt;label class="inline-flex items-center space-x-2"&gt;
  &lt;input type="radio" name="plan" class="form-radio text-green-600"&gt;
  &lt;span&gt;Basic Plan&lt;/span&gt;
&lt;/label&gt;
            </code></pre>
        </section>

        <!-- Custom Style with Hidden Input -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Fully Custom Checkbox Example</h2>
            <p class=" mb-2">You can visually hide the native input and style a custom span:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;label class="inline-flex items-center cursor-pointer space-x-2"&gt;
  &lt;input type="checkbox" class="sr-only peer"&gt;
  &lt;div class="w-5 h-5 rounded border-2 border-gray-400 peer-checked:bg-blue-600 peer-checked:border-blue-600"&gt;&lt;/div&gt;
  &lt;span&gt;Accept Terms&lt;/span&gt;
&lt;/label&gt;
            </code></pre>
        </section>

        <!-- Custom Radio Button -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Fully Custom Radio Button</h2>
            <p class=" mb-2">Use the same strategy for radio buttons using Tailwind’s <code>peer</code> and custom divs:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;label class="inline-flex items-center cursor-pointer space-x-2"&gt;
  &lt;input type="radio" name="choice" class="sr-only peer"&gt;
  &lt;div class="w-5 h-5 rounded-full border-2 border-gray-400 peer-checked:border-blue-600 peer-checked:bg-blue-600"&gt;&lt;/div&gt;
  &lt;span&gt;Option A&lt;/span&gt;
&lt;/label&gt;
            </code></pre>
        </section>

        <!-- Tailwind Forms Plugin Tip -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tip: Use the Tailwind Forms Plugin</h2>
            <p class=" mb-2">
                Tailwind’s official <code>@tailwindcss/forms</code> plugin provides minimal, cross-browser form styling to make checkboxes and radios look more consistent.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
// Install the plugin
npm install -D @tailwindcss/forms

// tailwind.config.js
plugins: [
  require('@tailwindcss/forms'),
],
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Whether you use native styles, the Tailwind Forms plugin, or fully custom styles with <code>peer</code>, Tailwind CSS gives you full control over form elements like checkboxes and radios.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="tailwind.php?page=tailwind/forms-labels" class="text-blue-600 hover:underline">Floating Labels →</a></p>
        </div>
    </article>
</main>
