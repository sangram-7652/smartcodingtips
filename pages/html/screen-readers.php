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
            <li class="text-gray-500">Screen Readers</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using HTML for Screen Reader Accessibility</h1>
        <p class="text-lg mb-4">
            Screen readers are assistive technologies that convert on-screen content into speech or braille output. Writing semantic and accessible HTML ensures that all users, including visually impaired individuals, can access your content effectively.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What Screen Readers Read</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li>Headings (<code>&lt;h1&gt;...&lt;h6&gt;</code>) – Used to navigate the page hierarchy.</li>
                <li>Alt text on images (<code>alt</code> attribute).</li>
                <li>Form labels (<code>&lt;label&gt;</code> and <code>aria-label</code>).</li>
                <li>Landmark elements (<code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;footer&gt;</code>).</li>
                <li>ARIA roles and properties.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices for Screen Reader Support</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li>Use semantic HTML elements for structure and clarity.</li>
                <li>Always associate form inputs with a label.</li>
                <li>Use <code>aria-label</code> or <code>aria-labelledby</code> for custom UI components.</li>
                <li>Use landmarks like <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, and <code>&lt;main&gt;</code> for easy navigation.</li>
                <li>Avoid using <code>display: none</code> for content that should be read by screen readers—use <code>aria-hidden="true"</code> when appropriate.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form&gt;
  &lt;label for="email"&gt;Email address:&lt;/label&gt;
  &lt;input type="email" id="email" name="email"&gt;

  &lt;button aria-label="Submit form"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-accessibility-best-practices.php" class="text-blue-600 hover:underline">Accessibility Best Practices →</a></p>
        </div>
    </article>
</main>
