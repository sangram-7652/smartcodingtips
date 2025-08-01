<?php
$title = "Your First HTML Page | SmartCodingTips";
$description = "Learn about your first html page in HTML. Understand key concepts, examples, and usage.";
$keywords = "your, first, html, page, html tutorial, html basics";
?>
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
            <li class="text-gray-500">Your First HTML Page</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Your First HTML Page</h1>
        <p class=" mb-4">
            Creating your first HTML page is the first step toward building websites. With just a few lines of code, you can create a simple web page that displays text, headings, and other content in the browser.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Setting Up a Basic HTML Page</h2>
            <p class=" mb-2">Here’s what the most basic HTML page looks like:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My First Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
    &lt;p&gt;This is my first HTML page.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </code></pre>
            <p class=" mt-2">This example includes all the essential parts: the doctype declaration, HTML structure, a title, and some visible content in the body.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Explaining the Code</h2>
            <ul class="list-disc list-inside ">
                <li><code>&lt;!DOCTYPE html&gt;</code> declares the document type and HTML version.</li>
                <li><code>&lt;html&gt;</code> wraps the entire document content.</li>
                <li><code>&lt;head&gt;</code> contains metadata like the page title.</li>
                <li><code>&lt;body&gt;</code> includes the visible content, such as headings and paragraphs.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips for Beginners</h2>
            <ul class="list-disc list-inside ">
                <li>Use proper indentation for better readability.</li>
                <li>Always close your tags.</li>
                <li>Start with simple pages and build up complexity as you learn.</li>
                <li>Use a code editor like VS Code for syntax highlighting and formatting.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Your first HTML page marks the beginning of your journey as a web developer. With this foundation, you can begin to explore more advanced HTML elements, styling with CSS, and interactivity through JavaScript.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/how-it-works') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: How HTML Works</a>
    <a href="<?= base_url('html/basic-structure') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Basic Structure →</a>
</div>
    </article>
</main>