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
                <a href="html-tutorials.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Form Submission</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Form Submission</h1>
        <p class="text-lg mb-4">
            Form submission is the process where data entered by the user in a form is sent to a server for processing. The <code>&lt;form&gt;</code> element uses attributes like <code>action</code> and <code>method</code> to control this process.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Form Action and Method</h2>
            <p class="mb-2">
                The <code>action</code> attribute defines the URL where the form data is sent. The <code>method</code> attribute specifies the HTTP method: <code>GET</code> or <code>POST</code>.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form action="submit.php" method="post"&gt;
  &lt;label for="name"&gt;Name:&lt;/label&gt;
  &lt;input type="text" id="name" name="name" required&gt;
  &lt;br&gt;&lt;br&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email" required&gt;
  &lt;br&gt;&lt;br&gt;

  &lt;button type="submit"&gt;Send&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
            <p class="mt-2 text-lg">
                Use <code>POST</code> for secure data submission and <code>GET</code> for simple queries like search forms.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">GET vs POST</h2>
            <ul class="list-disc list-inside text-lg">
                <li><strong>GET:</strong> Appends data to the URL, visible in the browser. Suitable for non-sensitive data.</li>
                <li><strong>POST:</strong> Sends data in the request body. Preferred for sensitive or large data submissions.</li>
                <li>Use <code>method="post"</code> for forms like login, registration, or feedback.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Button Types</h2>
            <p class="mb-2">
                The <code>&lt;button&gt;</code> element can have different types like <code>submit</code>, <code>reset</code>, and <code>button</code>.
            </p>
            <ul class="list-disc list-inside text-lg">
                <li><code>submit</code>: Submits the form data.</li>
                <li><code>reset</code>: Resets all fields to their initial values.</li>
                <li><code>button</code>: A generic button (often used with JavaScript).</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-validation.php" class="text-blue-600 hover:underline">HTML Validation →</a></p>
        </div>
    </article>
</main>
