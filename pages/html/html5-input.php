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
                <a href="html.php" class="text-blue-600 dark:text-blue-400 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">New Input Types</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">New Input Types in HTML5</h1>
        <p class="text-lg mb-4">
            HTML5 introduced several new input types that improve form functionality and enhance user experience by enabling appropriate keyboards and validations on different devices.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">List of New Input Types</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>email</code> – Validates that the input is a properly formatted email address.</li>
                <li><code>url</code> – Ensures the value is a valid URL.</li>
                <li><code>tel</code> – Accepts a telephone number (no automatic validation).</li>
                <li><code>number</code> – Accepts only numeric input with min, max, and step attributes.</li>
                <li><code>range</code> – Provides a slider for selecting a value within a range.</li>
                <li><code>date</code> – Allows users to select a date using a date picker.</li>
                <li><code>month</code> – Lets users choose a month and year.</li>
                <li><code>week</code> – Lets users select a week and year.</li>
                <li><code>time</code> – Allows input of a time value (hours and minutes).</li>
                <li><code>datetime-local</code> – Accepts both date and time without timezone.</li>
                <li><code>color</code> – Opens a color picker tool for selecting a color.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;form&gt;
  Email: &lt;input type="email" name="userEmail"&gt;&lt;br&gt;
  URL: &lt;input type="url" name="homepage"&gt;&lt;br&gt;
  Number: &lt;input type="number" name="quantity" min="1" max="10"&gt;&lt;br&gt;
  Range: &lt;input type="range" min="0" max="100"&gt;&lt;br&gt;
  Color: &lt;input type="color" name="favColor"&gt;&lt;br&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/html5-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: New Tags</a></div>
    <div><a href="<?= base_url('html/html5-media') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Audio & Video →</a></div>
</div>
    </article>
</main>
