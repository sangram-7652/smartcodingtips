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
            <li class="text-gray-500">Sticky Header & Footer</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Sticky Header & Footer</h1>
        <p class="text-lg mb-4">
            A sticky header or footer remains visible as the user scrolls through the page. This is useful for navigation menus, page titles, or footers with important links.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Sticky Header Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;style&gt;
  header {
    position: sticky;
    top: 0;
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
    z-index: 1000;
  }
&lt;/style&gt;

&lt;header&gt;
  This is a sticky header!
&lt;/header&gt;

&lt;main&gt;
  &lt;p&gt;Scroll down to see the header stay in place...&lt;/p&gt;
  &lt;div style="height: 1000px;"&gt;&lt;/div&gt;
&lt;/main&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Sticky Footer Example</h2>
            <p class="mb-2">To keep the footer always visible at the bottom of the viewport:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;style&gt;
  body, html {
    margin: 0;
    height: 100%;
  }

  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  footer {
    background: #222;
    color: white;
    text-align: center;
    padding: 10px;
    position: sticky;
    bottom: 0;
  }

  main {
    flex: 1;
    padding: 20px;
  }
&lt;/style&gt;

&lt;div class="wrapper"&gt;
  &lt;main&gt;
    &lt;p&gt;Content goes here...&lt;/p&gt;
  &lt;/main&gt;
  &lt;footer&gt;
    Sticky Footer Content
  &lt;/footer&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">When to Use Sticky Elements</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Navigation bars for quick access</li>
                <li>Important page actions (e.g. "Save" or "Next")</li>
                <li>Persistent toolbars or messages</li>
                <li>Footer disclaimers or contact buttons</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-media-queries.php" class="text-blue-600 hover:underline">HTML Media Queries →</a></p>
        </div>
    </article>
</main>
