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
            <li class="text-gray-500">Basic Structure of an HTML Page</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Basic Structure of an HTML Page</h1>
        <p class="text-lg mb-4">
            Understanding the basic structure of an HTML document is essential for creating well-formed and functional web pages. Every HTML page follows a common template that browsers rely on to render content correctly.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">HTML Page Template</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Page Title&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!-- Content goes here --&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </code></pre>
            <p class="text-lg mt-2">
                This code sets up a basic HTML document. It ensures the page is interpreted correctly by modern browsers and devices.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Breakdown of Key Elements</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>&lt;!DOCTYPE html&gt;</code> – Declares the HTML5 document type.</li>
                <li><code>&lt;html lang="en"&gt;</code> – Root element with a language attribute.</li>
                <li><code>&lt;head&gt;</code> – Contains metadata like character set, title, and responsive settings.</li>
                <li><code>&lt;body&gt;</code> – Holds all visible content of the page (headings, paragraphs, images, etc.).</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why It Matters</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Helps browsers interpret the page correctly.</li>
                <li>Ensures consistent structure across different pages.</li>
                <li>Improves accessibility, SEO, and maintainability.</li>
                <li>Serves as the foundation for CSS and JavaScript integration.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                A solid understanding of HTML’s basic structure is essential for building any web page. Master this layout and you’re ready to add style and functionality in the next steps of your development journey.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-elements.php" class="text-blue-600 hover:underline">HTML Elements →</a></p>
        </div>
    </article>
</main>
