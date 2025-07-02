<!-- Your First JavaScript Script -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/first-script" class="text-blue-600 hover:underline">Your First Script</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Your First JavaScript Script</h1>

    <p class="mb-4">
        Let’s write and run your very first JavaScript program! 🎉 This simple exercise will help you understand how JavaScript works inside a web page.
    </p>

    <h2 class="text-2xl font-semibold mt-4 mb-2">🛠️ Step 1: Basic HTML Setup</h2>
    <p class="mb-2">
        Create a file named <code>index.html</code> and write the following code:
    </p>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;My First Script&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h1&gt;Hello, JavaScript!&lt;/h1&gt;

    &lt;script&gt;
        alert("Hello from JavaScript!");
        console.log("This message is logged in the console.");
    &lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

    <h2 class="text-2xl font-semibold mt-4 mb-2">🧪 Step 2: Run It</h2>
    <p class="mb-4">
        Open the file in your browser. You should see:
    </p>
    <ul class="list-disc list-inside mb-4">
        <li>An alert box saying <code>"Hello from JavaScript!"</code></li>
        <li>If you open the browser’s developer tools console, you’ll see: <code>"This message is logged in the console."</code></li>
    </ul>

    <h2 class="text-2xl font-semibold mt-4 mb-2">📌 What’s Happening?</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>&lt;script&gt;</code> tells the browser you're writing JavaScript.</li>
        <li><code>alert()</code> shows a pop-up message.</li>
        <li><code>console.log()</code> writes to the browser's developer console.</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mb-4">
        <strong>Pro Tip:</strong> Use <kbd>Ctrl + Shift + J</kbd> (or <kbd>Cmd + Option + J</kbd> on Mac) to open the browser console and see the output.
    </div>

    <h2 class="text-2xl font-semibold mt-4 mb-2">🔁 Try This</h2>
    <p class="mb-2">
        Modify your script to experiment:
    </p>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>&lt;script&gt;
    let name = prompt("What is your name?");
    alert("Welcome, " + name + "!");
&lt;/script&gt;
</code></pre>

    <p class="mt-4">
        You’ve just taken your first step into the world of JavaScript. Next, we’ll explore how to work with variables and data types.
    </p>

</main>
