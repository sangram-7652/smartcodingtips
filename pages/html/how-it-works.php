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
            <li class="text-gray-500">How HTML Works</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">How HTML Works</h1>
        <p class="mb-4">
            HTML (HyperText Markup Language) defines the structure of web content. Web browsers interpret HTML code and render it into visual or interactive pages users can view and navigate.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">The Rendering Process</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Parsing:</strong> The browser reads the HTML document and constructs a DOM (Document Object Model).</li>
                <li><strong>Styling:</strong> CSS is applied to format elements like fonts, colors, and layouts.</li>
                <li><strong>Scripting:</strong> JavaScript adds interactivity, responding to user actions and browser events.</li>
                <li><strong>Rendering:</strong> The browser draws the visual elements to the screen based on the DOM and styles.</li>
            </ul>
        </section>

        <section class="mb-6 ">
            <h2 class="text-2xl font-semibold mb-2">HTML in Action</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap whitespace-pre-wrap  dark:bg-gray-900 dark:text-white"><code class="text-sm ">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Sample Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is an example of how HTML structures content.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </code></pre>
            <p class="mt-2">This code creates a simple HTML page with a heading and a paragraph. The browser uses HTML tags to determine what and how to display elements.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why Understanding HTML Matters</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Builds the Web's Structure:</strong> Every website begins with HTML.</li>
                <li><strong>Crucial for Front-End Development:</strong> Mastery of HTML enables cleaner, more accessible, and SEO-friendly pages.</li>
                <li><strong>Enhances Collaboration:</strong> Understanding how HTML works aids in teamwork between designers, developers, and SEO specialists.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">HTML is more than markup—it's the language that gives structure to every online experience. Knowing how it works unlocks the power to create, style, and script the web effectively.</p>
        </section>

        <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/first-page" class="text-blue-600 hover:underline">Your First Html Page →</a></p>
        </div>
    </article>
</main>