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
            <li class="text-gray-500">Input Types</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Input Types</h1>
        <p class=" mb-4">
            The <code>&lt;input&gt;</code> element in HTML supports a wide range of types to capture different kinds of user data. Choosing the right input type improves user experience and data validation.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Input Types</h2>
            <ul class="list-disc list-inside ">
                <li><code>text</code> – Single-line input for plain text.</li>
                <li><code>password</code> – Hides the input characters.</li>
                <li><code>email</code> – Validates an email address.</li>
                <li><code>number</code> – Allows numeric input with optional step, min, and max.</li>
                <li><code>checkbox</code> – Enables multi-selection with on/off values.</li>
                <li><code>radio</code> – Allows single selection from multiple options.</li>
                <li><code>date</code> – Opens a calendar for date selection.</li>
                <li><code>file</code> – Lets users upload files.</li>
                <li><code>submit</code> – Submits the form data.</li>
                <li><code>reset</code> – Resets all form fields to default.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example Form with Various Input Types</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;form action="submit.php" method="post"&gt;
  &lt;label for="username"&gt;Username:&lt;/label&gt;
  &lt;input type="text" id="username" name="username"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label for="password"&gt;Password:&lt;/label&gt;
  &lt;input type="password" id="password" name="password"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label for="dob"&gt;Date of Birth:&lt;/label&gt;
  &lt;input type="date" id="dob" name="dob"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label for="resume"&gt;Upload Resume:&lt;/label&gt;
  &lt;input type="file" id="resume" name="resume"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label&gt;Subscribe:&lt;/label&gt;
  &lt;input type="checkbox" name="subscribe"&gt; Yes, sign me up&lt;br&gt;&lt;br&gt;

  &lt;input type="submit" value="Submit"&gt;
  &lt;input type="reset" value="Reset"&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips for Using Input Types</h2>
            <ul class="list-disc list-inside ">
                <li>Always include the <code>name</code> attribute for each input to ensure it is submitted.</li>
                <li>Use <code>label</code> tags to improve accessibility.</li>
                <li>Combine with attributes like <code>required</code>, <code>placeholder</code>, and <code>pattern</code> for better form validation.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/forms') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Form Tag</a></div>
    <div><a href="<?= base_url('html/labels-placeholders') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Labels & Placeholders →</a></div>
</div>

    </article>
</main>
