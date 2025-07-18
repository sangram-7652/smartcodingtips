<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/window-navigator" class="text-blue-600 hover:underline">Window & Navigator</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🪟 The <code>window</code> & <code>navigator</code> Objects in JavaScript</h1>

    <p class="mb-4">
        The <strong>window</strong> and <strong>navigator</strong> objects are part of the <strong>Browser Object Model (BOM)</strong>, providing access to the browser window and system-level information respectively.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🌐 The <code>window</code> Object</h2>
    <p>
        The <code>window</code> object is the global object in the browser environment. All global variables and functions are properties of this object.
    </p>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Accessing window properties
console.log(window.innerWidth);  // Width of the browser window
console.log(window.innerHeight); // Height of the browser window

// Using methods from window
alert("Hello from window!");
setTimeout(() => console.log("Executed after 2 seconds"), 2000);</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li><code>window.alert()</code> – Show alert popup</li>
        <li><code>window.setTimeout()</code> – Run after delay</li>
        <li><code>window.location</code> – Access or redirect URL</li>
        <li><code>window.document</code> – DOM document object</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 The <code>navigator</code> Object</h2>
    <p>
        The <code>navigator</code> object contains information about the user's browser and operating system.
    </p>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Basic browser info
console.log(navigator.userAgent);    // Full user agent string
console.log(navigator.language);     // Language (e.g., "en-US")
console.log(navigator.onLine);       // Check if user is online

// Check platform and cookies
console.log(navigator.platform);     // e.g., "Win32"
console.log(navigator.cookieEnabled); // true/false</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li><code>navigator.userAgent</code> – Browser info</li>
        <li><code>navigator.language</code> – Preferred language</li>
        <li><code>navigator.platform</code> – OS/platform</li>
        <li><code>navigator.onLine</code> – Connection status</li>
        <li><code>navigator.geolocation</code> – Get location (with permission)</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mb-6">
        💡 <strong>Tip:</strong> You can use <code>navigator.geolocation.getCurrentPosition()</code> to get the user's location (requires permission).
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><strong>window</strong> is the global browser object — everything (alert, setTimeout, location) lives here.</li>
        <li><strong>navigator</strong> gives you details about the browser and device (user agent, platform, etc.).</li>
    </ul>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/storage" class="text-blue-600 hover:underline">LocalStorage / SessionStorage →</a></p>
</div>
</main>
