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
                <a href="html.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Empty vs Container</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Empty vs Container Elements in HTML</h1>
        <p class=" mb-4">
            HTML elements can be categorized into two types: empty elements and container elements. Understanding the difference is key to building clean and structured HTML documents.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Empty Elements</h2>
            <p class=" mb-2">
                Empty elements are self-contained and do not have any content between opening and closing tags. They don’t require a closing tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;br&gt; &lt;hr&gt; &lt;img src="logo.png" alt="Logo"&gt; &lt;input type="text"&gt;
            </code></pre>
            <p class=" mt-2">
                These elements perform specific tasks like line breaks, horizontal rules, or displaying images and form inputs.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Container Elements</h2>
            <p class=" mb-2">
                Container elements wrap other content or elements. They consist of an opening tag, content inside, and a closing tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;div&gt;
  &lt;h1&gt;Heading&lt;/h1&gt;
&lt;/div&gt;
            </code></pre>
            <p class=" mt-2">
                Container elements are useful for grouping and organizing your HTML content.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Key Differences</h2>
            <ul class="list-disc list-inside ">
                <li>Empty elements do not wrap content; container elements do.</li>
                <li>Empty elements are usually used for structural or media-related purposes.</li>
                <li>Container elements are essential for grouping and layout design.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Both empty and container elements play important roles in HTML. By using them appropriately, you ensure your webpage is well-structured, semantic, and easy to maintain.
            </p>
        </section>

         <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/nesting" class="text-blue-600 hover:underline">Tag Nesting →</a></p>
        </div>
    </article>
</main>
