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
            <li class="text-gray-500">Canvas</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Canvas in HTML5</h1>
        <p class=" mb-4">
            The <code>&lt;canvas&gt;</code> element in HTML5 is used to draw graphics on a web page via JavaScript. It can be used for rendering graphs, game visuals, art, image manipulation, and more.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Canvas Syntax</h2>
            <p class="mb-2">
                The <code>&lt;canvas&gt;</code> element creates a drawable region in your HTML, which is accessed and manipulated using JavaScript.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;canvas id="myCanvas" width="300" height="150" style="border:1px solid #000000;"&gt;
  Your browser does not support the HTML5 canvas tag.
&lt;/canvas&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Drawing with JavaScript</h2>
            <p class="mb-2">To draw on the canvas, you need to access its context in JavaScript:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;script&gt;
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  ctx.fillStyle = "#FF0000";
  ctx.fillRect(50, 20, 150, 75);
&lt;/script&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Canvas Methods</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>fillRect(x, y, width, height)</code> – Draws a filled rectangle</li>
                <li><code>strokeRect(x, y, width, height)</code> – Draws a rectangular outline</li>
                <li><code>clearRect(x, y, width, height)</code> – Clears the specified area</li>
                <li><code>beginPath()</code>, <code>moveTo()</code>, <code>lineTo()</code>, <code>stroke()</code> – For drawing paths</li>
                <li><code>arc()</code> – For drawing circles and arcs</li>
                <li><code>fillText()</code>, <code>strokeText()</code> – To draw text</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="font-semibold">Next: <a href="html.php?page=html/html5-geo" class="text-blue-600 hover:underline">Geolocation →</a></p>
        </div>
    </article>
</main>
