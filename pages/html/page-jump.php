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
            <li class="text-gray-500">Page Jumps</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Page Jumps in HTML</h1>
        <p class=" mb-4">
            Page jumps, also known as anchor links, allow users to jump to a specific section of the same page. This is useful for long pages with multiple sections, helping users navigate quickly to relevant content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Syntax</h2>
            <p class=" mb-2">
                Use the <code>href</code> attribute with a hash (<code>#</code>) followed by the target element’s ID. Then, assign the same ID to the target element.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="#section2"&gt;Go to Section 2&lt;/a&gt;

...

&lt;h2 id="section2"&gt;Section 2&lt;/h2&gt;
            </code></pre>
            <p class=" mt-2">
                Clicking the link will scroll the page directly to the element with the matching ID.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Jumping to Top</h2>
            <p class=" mb-2">
                You can also create a link to jump back to the top of the page using a similar approach.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="#top"&gt;Back to Top&lt;/a&gt;

...

&lt;div id="top"&gt;&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Ensure IDs are unique on the page.</li>
                <li>Use descriptive anchor text for better accessibility.</li>
                <li>Add smooth scrolling with CSS for better user experience.</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
html {
  scroll-behavior: smooth;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Page jumps help users move easily between sections on the same page. By using IDs and anchor links, you can create a more organized and navigable experience, especially for long documents or tutorials.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="html-image-tag.php" class="text-blue-600 hover:underline">Image Tag in HTML →</a></p>
        </div>
    </article>
</main>
