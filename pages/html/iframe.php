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
            <li class="text-gray-500">iFrames</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using the HTML &lt;iframe&gt; Tag</h1>
        <p class="text-lg mb-4">
            The &lt;iframe&gt; tag allows you to embed another HTML page within the current page. It is commonly used for embedding videos, maps, or other external content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic iFrame Example</h2>
            <p class="mb-2">Embedding an external webpage or content inside an iframe:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;iframe src="https://www.example.com" width="600" height="400" title="Example Site"&gt;
  Your browser does not support iframes.
&lt;/iframe&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Attributes of &lt;iframe&gt;</h2>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>src</code>: URL of the page to embed.</li>
                <li><code>width</code> and <code>height</code>: Dimensions of the iframe in pixels.</li>
                <li><code>title</code>: Descriptive text for accessibility.</li>
                <li><code>frameborder</code>: Specifies the border thickness (deprecated, use CSS instead).</li>
                <li><code>allowfullscreen</code>: Enables fullscreen mode for embedded videos.</li>
                <li><code>loading</code>: Controls lazy loading with values like <code>lazy</code> or <code>eager</code>.</li>
                <li><code>sandbox</code>: Applies extra restrictions to the content inside the iframe for security.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Using Sandbox Attribute</h2>
            <p class="mb-2">
                The <code>sandbox</code> attribute restricts actions inside the iframe, improving security. You can allow specific features by listing tokens:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;iframe src="page.html" sandbox="allow-scripts allow-same-origin"&gt;&lt;/iframe&gt;
            </code></pre>
            <p>
                Without <code>allow-scripts</code> or <code>allow-same-origin</code>, scripts and cookies are blocked inside the iframe.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive iFrames</h2>
            <p class="mb-2">
                To make iframes responsive, use CSS techniques like aspect-ratio boxes or utility classes:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.responsive-iframe {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
  height: 0;
  overflow: hidden;
}

.responsive-iframe iframe {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always include a meaningful <code>title</code> attribute to describe the iframe content.</li>
                <li>Provide fallback text between the opening and closing tags for browsers that do not support iframes.</li>
                <li>Use the <code>sandbox</code> attribute to limit potential security risks.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-forms.php" class="text-blue-600 hover:underline">Forms in HTML →</a></p>
        </div>
    </article>
</main>
