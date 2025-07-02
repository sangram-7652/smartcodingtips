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
            <li class="text-gray-500">Relative vs Absolute</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Relative vs Absolute URLs in HTML</h1>
        <p class="text-lg mb-4">
            When creating links or referencing resources in HTML, you can use either relative or absolute URLs. Understanding the difference is essential for building well-structured and portable websites.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Relative URLs</h2>
            <p class="text-lg mb-2">
                A relative URL points to a file or location relative to the current page. These are ideal for internal site navigation.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;a href="about.html"&gt;About Us&lt;/a&gt;
&lt;img src="images/logo.png" alt="Logo"&gt;
            </code></pre>
            <p class="text-lg mt-2">
                These URLs are shorter and make it easier to move your website to a different domain or directory.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Absolute URLs</h2>
            <p class="text-lg mb-2">
                An absolute URL includes the full web address, including the protocol and domain name. These are used for linking to external websites or fixed locations.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;a href="https://www.example.com/about.html"&gt;Visit About Page&lt;/a&gt;
&lt;img src="https://cdn.example.com/images/logo.png" alt="Logo"&gt;
            </code></pre>
            <p class="text-lg mt-2">
                Use absolute URLs when linking to external sites or referencing global assets like a CDN.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Comparison Table</h2>
            <table class="table-auto border border-gray-300 text-left text-lg w-full mb-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Feature</th>
                        <th class="p-2 border">Relative URL</th>
                        <th class="p-2 border">Absolute URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2 border">Includes domain?</td>
                        <td class="p-2 border">No</td>
                        <td class="p-2 border">Yes</td>
                    </tr>
                    <tr>
                        <td class="p-2 border">Used for internal links?</td>
                        <td class="p-2 border">Yes</td>
                        <td class="p-2 border">Sometimes</td>
                    </tr>
                    <tr>
                        <td class="p-2 border">Moves with site?</td>
                        <td class="p-2 border">Yes</td>
                        <td class="p-2 border">No</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use relative URLs for internal navigation to keep the site portable.</li>
                <li>Use absolute URLs when linking to external resources.</li>
                <li>Avoid mixing both types excessively to maintain consistency.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Understanding when to use relative and absolute URLs helps in building scalable and maintainable websites. Choose the type based on your content structure and target destination.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-image-tag.php" class="text-blue-600 hover:underline">Image Tag in HTML →</a></p>
        </div>
    </article>
</main>
