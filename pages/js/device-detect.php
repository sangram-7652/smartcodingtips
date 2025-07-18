<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/device-detect" class="text-blue-600 hover:underline">Device & Feature Detection</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">📱 Device & Feature Detection in JavaScript</h1>

    <p class="mb-4">
        JavaScript can detect basic information about the device and browser using the <code>navigator</code> and other APIs. This helps tailor user experiences for different platforms or capabilities.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Detecting Device Type (Mobile, Tablet, Desktop)</h2>

    <p>
        You can use the <code>navigator.userAgent</code> or screen size to detect the type of device:
    </p>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// User agent detection
const isMobile = /Mobi|Android/i.test(navigator.userAgent);
console.log("Is Mobile:", isMobile);

// Screen width detection
if (window.innerWidth < 768) {
    console.log("Likely a mobile device");
} else {
    console.log("Likely a desktop or tablet");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Feature Detection</h2>
    <p>
        Feature detection helps check whether a browser supports a specific API or feature before using it.
    </p>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Check for localStorage support
if (typeof Storage !== "undefined") {
    console.log("localStorage is supported");
} else {
    console.log("localStorage NOT supported");
}

// Check for geolocation support
if ("geolocation" in navigator) {
    console.log("Geolocation is available");
} else {
    console.log("Geolocation is not supported");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎤 Other Feature Examples</h2>

    <ul class="list-disc list-inside mb-6">
        <li><code>'serviceWorker' in navigator</code> – Check for Service Worker support</li>
        <li><code>'mediaDevices' in navigator</code> – Access to camera and microphone</li>
        <li><code>'Notification' in window</code> – Desktop Notification API support</li>
        <li><code>'Bluetooth' in navigator</code> – Web Bluetooth support</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ User Agent Limitations</h2>
    <p>
        User agent detection can be unreliable and spoofed. It's better to use feature detection when possible.
    </p>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Best Practice:</strong> Always prefer <strong>feature detection</strong> over device detection when handling cross-device compatibility.
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/popups" class="text-blue-600 hover:underline">Popups & Controls →</a></p>
</div>

</main>
