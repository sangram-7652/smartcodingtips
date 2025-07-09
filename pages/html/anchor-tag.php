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
            <li class="text-gray-500">Anchor Tag</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Anchor Tag in HTML</h1>
        <p class=" mb-4">
            The anchor tag <code>&lt;a&gt;</code> is used to create hyperlinks in HTML documents. It allows users to navigate between pages, link to external websites, or jump to specific sections within the same page.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Syntax</h2>
            <p class=" mb-2">
                The most common use of the anchor tag is to link to another webpage using the <code>href</code> attribute.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt;
            </code></pre>
            <p class=" mt-2">
                The text between the opening and closing <code>&lt;a&gt;</code> tags becomes clickable.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Opening Links in New Tab</h2>
            <p class=" mb-2">
                Use the <code>target="_blank"</code> attribute to open the link in a new browser tab or window.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="https://www.example.com" target="_blank"&gt;Visit Example in New Tab&lt;/a&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Linking to an Email Address</h2>
            <p class=" mb-2">
                You can use the <code>mailto:</code> scheme to let users send an email by clicking the link.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="mailto:info@example.com"&gt;Email Us&lt;/a&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Internal Page Anchors</h2>
            <p class=" mb-2">
                You can link to an element on the same page using the <code>id</code> attribute.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="#section2"&gt;Go to Section 2&lt;/a&gt;

...

&lt;h2 id="section2"&gt;Section 2&lt;/h2&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always use descriptive link text.</li>
                <li>Use <code>target="_blank"</code> with <code>rel="noopener noreferrer"</code> for security.</li>
                <li>Avoid using "Click here" as link text; describe the link's purpose.</li>
                <li>Ensure links are accessible with screen readers.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Anchor tags are essential for navigation in HTML documents. Use them effectively to link to internal and external resources, provide emails, and enhance user experience.
            </p>
        </section>

        <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/new-tab" class="text-blue-600 hover:underline">Open in New Tab →</a></p>
        </div>
    </article>
</main>
