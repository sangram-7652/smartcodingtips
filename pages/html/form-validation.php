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
            <li class="text-gray-500">Validation</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Form Validation</h1>
        <p class=" mb-4">
            HTML provides built-in form validation to ensure users enter data in the correct format. You can enforce rules like required fields, input length, format constraints, and more.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Required Field</h2>
            <p class="mb-2">Use the <code>required</code> attribute to make a field mandatory before form submission.</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;form&gt;
  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email" required&gt;
  &lt;br&gt;&lt;br&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Input Constraints</h2>
            <p class="mb-2">Use attributes like <code>minlength</code>, <code>maxlength</code>, <code>min</code>, <code>max</code>, and <code>pattern</code> to control what data is accepted.</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;form&gt;
  &lt;label for="username"&gt;Username (5-10 characters):&lt;/label&gt;
  &lt;input type="text" id="username" name="username" minlength="5" maxlength="10" required&gt;
  &lt;br&gt;&lt;br&gt;
  
  &lt;label for="age"&gt;Age (18-99):&lt;/label&gt;
  &lt;input type="number" id="age" name="age" min="18" max="99"&gt;
  &lt;br&gt;&lt;br&gt;

  &lt;label for="zipcode"&gt;Zip Code (5 digits):&lt;/label&gt;
  &lt;input type="text" id="zipcode" name="zipcode" pattern="\d{5}"&gt;
  &lt;br&gt;&lt;br&gt;

  &lt;button type="submit"&gt;Register&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Client-Side vs Server-Side Validation</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Client-Side:</strong> Done by the browser using HTML5 attributes and JavaScript before sending data to the server.</li>
                <li><strong>Server-Side:</strong> Performed after the form is submitted, used as a secure backup to prevent invalid data from being processed.</li>
                <li>Always implement both for security and user experience.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/select-textarea') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Select & Textarea</a></div>
    <div><a href="<?= base_url('html/form-submit') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Form Submission →</a></div>
</div>
    </article>
</main>
