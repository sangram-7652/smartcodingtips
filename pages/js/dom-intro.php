<!-- JavaScript DOM Introduction -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-intro" class="text-blue-600 hover:underline">What is the DOM?</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">What is the DOM in JavaScript?</h1>

    <p class="mb-4">
        The <strong>DOM (Document Object Model)</strong> is a programming interface for web documents. It represents the structure of an HTML or XML document as a tree of objects.
    </p>

    <p class="mb-4">
        When a web page is loaded, the browser creates a live representation of the page’s structure in memory — the DOM. JavaScript can be used to manipulate this structure, enabling dynamic and interactive web content.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 DOM Structure Example</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>&lt;html&gt;
  &lt;head&gt;&lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello&lt;/h1&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

    <p class="mb-4">
        This HTML gets represented as a tree of nodes. Each tag becomes a <code>Node</code>, and text inside elements becomes a <code>TextNode</code>.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔎 DOM Terminology</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>Node</strong> – Every element, attribute, and piece of text is a node.</li>
        <li><strong>Element</strong> – A node representing an HTML element (e.g., <code>&lt;div&gt;</code>).</li>
        <li><strong>Parent/Child/Sibling</strong> – Nodes are connected in a tree structure.</li>
        <li><strong>Document</strong> – The root of the DOM tree (<code>document</code> object in JS).</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ DOM Access via JavaScript</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const heading = document.querySelector("h1");
console.log(heading.textContent); // "Hello"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Why Learn the DOM?</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Update content dynamically</li>
        <li>React to user input/events</li>
        <li>Manipulate styles and classes</li>
        <li>Create interactive UIs</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>In Summary:</strong> The DOM lets JavaScript talk to the HTML structure of a page. Mastering the DOM is essential for building interactive websites.
    </div>

</main>
