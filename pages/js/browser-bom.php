<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/browser-object-model" class="text-blue-600 hover:underline">Browser Object Model</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🌐 Understanding the Browser Object Model (BOM)</h1>

    <p class="mb-4">
        The <strong>Browser Object Model (BOM)</strong> provides interaction with the browser outside of the web page content. It allows JavaScript to communicate with the browser window and perform actions like opening new tabs, getting screen size, and navigating history.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🪟 The <code>window</code> Object</h2>
    <p>The global object in the browser is <code>window</code>. All BOM features are accessed through it.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>console.log(window.innerWidth);  // Width of the viewport
alert("Hello!");                  // Same as window.alert()</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🌍 The <code>navigator</code> Object</h2>
    <p>Provides information about the user's browser and device.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>console.log(navigator.userAgent);   // Browser info
console.log(navigator.language);    // Language settings</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📍 The <code>location</code> Object</h2>
    <p>Gives info about the current URL and allows redirection.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>console.log(location.href);        // Full URL
location.href = "https://example.com";  // Redirect to another page</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⏮️ The <code>history</code> Object</h2>
    <p>Enables navigation through the browser history.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>history.back();   // Go to the previous page
history.forward(); // Go to the next page</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🪟 Opening New Windows</h2>
    <p>You can open popups or new tabs using <code>window.open()</code>.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>window.open("https://google.com", "_blank");</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📏 Screen Object</h2>
    <p>Access screen resolution and color depth.</p>
    <pre class="bg-gray-100 p-4 rounded mb-4"><code>console.log(screen.width, screen.height);
console.log(screen.colorDepth);</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        ⚠️ <strong>Security Tip:</strong> Some BOM actions like <code>window.open()</code> or clipboard access can be restricted by browser settings or blocked by popup blockers.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><strong>window:</strong> The root object of BOM</li>
        <li><strong>navigator:</strong> Info about the browser and device</li>
        <li><strong>location:</strong> URL info and redirection</li>
        <li><strong>history:</strong> Navigate through history</li>
        <li><strong>screen:</strong> Info about user's screen</li>
    </ul>

</main>
