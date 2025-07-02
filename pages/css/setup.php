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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Setup Your First CSS File</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Setup Your First CSS File</h1>
        <p class="text-lg mb-4">
            Setting up your first CSS file is a key step in learning web development. You'll create an HTML file and a separate CSS file, then connect them so that styles are applied correctly to your webpage.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Create the HTML File</h2>
            <p class="text-lg mb-2">
                Start with a basic HTML structure and save it as <code>index.html</code>.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My First CSS Page&lt;/title&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is a simple web page styled with CSS.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Create the CSS File</h2>
            <p class="text-lg mb-2">
                Now, create a new file called <code>style.css</code> in the same folder. This file will contain your styling rules.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
body {
    background-color: #f0f4f8;
    font-family: Arial, sans-serif;
    color: #333;
    padding: 20px;
}

h1 {
    color: #1e40af;
}

p {
    font-size: 18px;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Open in Browser</h2>
            <p class="text-lg mb-2">
                Save both files and open <code>index.html</code> in a browser. You should see the page styled according to your CSS rules.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Folder Structure (Example)</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
/my-first-css-project
│
├── index.html
└── style.css
            </code></pre>
            <p class="text-lg mt-2">
                Keep your CSS and HTML files organized for better maintainability, especially as your project grows.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                You’ve now created and linked your first CSS file to an HTML page. This setup is the foundation for all web styling work. From here, you can start learning about selectors, properties, and more advanced CSS concepts.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="css-selectors.php" class="text-blue-600 hover:underline">CSS Selectors →</a></p>
        </div>
    </article>
</main>
