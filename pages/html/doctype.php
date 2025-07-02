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
            <li class="text-gray-500">Doctype Declaration</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Doctype Declaration</h1>
        <p class="text-lg mb-4">
            The <code>&lt;!DOCTYPE&gt;</code> declaration tells the browser which version of HTML the page is using. It's the very first line of any HTML document and ensures the browser renders the page correctly.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What Is the Doctype?</h2>
            <p class="text-lg mb-2">
                The doctype is an instruction to the web browser about what version of HTML the page is written in. In HTML5, it is simplified and looks like this:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!DOCTYPE html&gt;
            </code></pre>
            <p class="text-lg mt-2">
                This declaration ensures that the browser renders the page in standards-compliant mode.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why It’s Important</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Activates standards mode in browsers.</li>
                <li>Ensures consistent behavior across different browsers.</li>
                <li>Avoids quirks mode which can cause layout issues.</li>
                <li>Is required for valid HTML documents.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Older Doctype Examples</h2>
            <p class="text-lg mb-2">Earlier versions of HTML used more complex doctype declarations:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd"&gt;
            </code></pre>
            <p class="text-lg mt-2">
                HTML5 simplified this by removing the need for URLs or long declarations.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                The doctype declaration is small but critical. It tells browsers to use the latest rendering standards, helping your web page look and behave as expected. Always include it as the first line of your HTML documents.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-tags.php" class="text-blue-600 hover:underline">HTML Tags →</a></p>
        </div>
    </article>
</main>
