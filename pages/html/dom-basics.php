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
            <li class="text-gray-500">HTML DOM</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article class="">
        <h1 class="text-3xl font-bold mb-4">HTML DOM (Document Object Model)</h1>
        <p class=" mb-4">
            The HTML DOM (Document Object Model) is a programming interface for web documents. It represents the page so that programs can change the document structure, style, and content dynamically.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is the DOM?</h2>
            <p class=" mb-2">
                The DOM is a tree-like structure where each element, attribute, and piece of text in the HTML document is represented as an object. JavaScript can use this model to access and modify web pages on the fly.
            </p>
        </section>

        <section class="mb-6 ">
            <h2 class="text-2xl font-semibold mb-2">DOM Hierarchy</h2>
            <p class=" mb-2">
                Here's a simplified example of how HTML is represented in the DOM:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm break-all">
&lt;html&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello World&lt;/h1&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </code></pre>
            <p class=" mt-2">
                In the DOM, <code>&lt;html&gt;</code> is the root node, <code>&lt;body&gt;</code> is a child of <code>&lt;html&gt;</code>, and so on.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessing DOM Elements with JavaScript</h2>
            <p class=" mb-2">You can use JavaScript to access and modify elements like this:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm break-all">
// Get an element by ID
const heading = document.getElementById("mainHeading");
heading.textContent = "Updated Heading";
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common DOM Methods</h2>
            <ul class="list-disc list-inside ">
                <li><code>getElementById()</code></li>
                <li><code>getElementsByClassName()</code></li>
                <li><code>getElementsByTagName()</code></li>
                <li><code>querySelector()</code> and <code>querySelectorAll()</code></li>
                <li><code>createElement()</code>, <code>appendChild()</code></li>
                <li><code>innerHTML</code>, <code>textContent</code>, <code>setAttribute()</code></li>
            </ul>
        </section>

         <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/inline-block') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Inline vs Block</a></div>
    <div><a href="<?= base_url('html/best-practices') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Best Practices →</a></div>
</div>

    </article>
</main>
