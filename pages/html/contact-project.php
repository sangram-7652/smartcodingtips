<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Contact Us</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Contact Us Form in HTML</h1>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Overview</h2>
            <p class=" mb-2">
                A Contact Us form allows users to reach out to the website owner or support team. It typically includes fields like name, email, subject, and message.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Code Example</h2>
            <p class=" mb-2">Here is a simple and responsive contact form built using HTML and Tailwind CSS:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap text-sm dark:bg-gray-900 dark:text-white"><code>
&lt;form action="submit-form.php" method="post" class="space-y-4"&gt;
  &lt;div&gt;
    &lt;label for="name" class="block  font-medium"&gt;Name:&lt;/label&gt;
    &lt;input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2"&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;label for="email" class="block  font-medium"&gt;Email:&lt;/label&gt;
    &lt;input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2"&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;label for="subject" class="block  font-medium"&gt;Subject:&lt;/label&gt;
    &lt;input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded px-3 py-2"&gt;
  &lt;/div&gt;

  &lt;div&gt;
    &lt;label for="message" class="block  font-medium"&gt;Message:&lt;/label&gt;
    &lt;textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded px-3 py-2"&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700"&gt;Send Message&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Always validate form inputs on the client and server sides.</li>
                <li>Use CAPTCHA to prevent spam submissions.</li>
                <li>Provide a success or error message after submission.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/gallery-project') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Photo Gallery</a></div>
    <div><a href="<?= base_url('html/blog-layout') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Simple Blog Layout →</a></div>
</div>
    </article>
</main>
