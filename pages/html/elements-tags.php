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
            <li class="text-gray-500">Elements & Tags</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Elements & Tags in HTML</h1>
        <p class=" mb-4">
            HTML uses tags to create elements that define the structure and content of a web page. Understanding the difference between elements and tags is key to writing clean and effective HTML.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is a Tag?</h2>
            <p class=" mb-2">
                A tag is the code enclosed in angle brackets. Most elements are made of an opening tag and a closing tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;This is a paragraph.&lt;/p&gt;
            </code></pre>
            <p class=" mt-2">In this example, <code>&lt;p&gt;</code> is the opening tag and <code>&lt;/p&gt;</code> is the closing tag.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is an Element?</h2>
            <p class=" mb-2">
                An HTML element includes the opening tag, the content, and the closing tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;h1&gt;Welcome&lt;/h1&gt;
            </code></pre>
            <p class=" mt-2">Here, the entire structure is an <strong>element</strong>.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Self-Closing Tags</h2>
            <p class=" mb-2">
                Some HTML tags do not require a closing tag and are self-closing.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;br&gt; &lt;img src="image.jpg" alt="Sample image"&gt;
            </code></pre>
            <p class=" mt-2">These are called empty elements.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Nesting Elements</h2>
            <p class=" mb-2">
                HTML allows elements to be nested inside other elements. Be sure to close them in the correct order.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p&gt;This is a &lt;strong&gt;bold&lt;/strong&gt; word.&lt;/p&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding the structure of tags and elements is foundational to writing HTML. Proper usage ensures clarity and consistent rendering across browsers.
            </p>
        </section>

         <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/page-layout') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Page Layout Tips</a></div>
    <div><a href="<?= base_url('html/attributes') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Attributes →</a></div>
</div>
    </article>
</main>
