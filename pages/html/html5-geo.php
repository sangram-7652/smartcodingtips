<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="html.php" class="text-blue-600 dark:text-blue-400 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Geolocation</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML5 Geolocation API</h1>
        <p class=" mb-4">
            The Geolocation API in HTML5 allows web applications to access the user's geographical location, with their permission. This is useful for location-based services such as maps, weather updates, and check-ins.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Usage</h2>
            <p class="mb-2 break-all">
                To get the user's location, you use the <code>navigator.geolocation.getCurrentPosition()</code> method.
            </p>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-xs break-all">
&lt;button onclick="getLocation()"&gt;Get My Location&lt;/button&gt;

&lt;p id="location"&gt;&lt;/p&gt;

&lt;script&gt;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
    document.getElementById("location").innerText = "Geolocation is not supported.";
  }
}

function showPosition(position) {
  document.getElementById("location").innerText =
    "Latitude: " + position.coords.latitude +
    ", Longitude: " + position.coords.longitude;
}

function showError(error) {
  document.getElementById("location").innerText = "Error: " + error.message;
}
&lt;/script&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Methods in Geolocation API</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>getCurrentPosition()</code> – Gets the current position once.</li>
                <li><code>watchPosition()</code> – Tracks position continuously.</li>
                <li><code>clearWatch()</code> – Stops watching position.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Location Object Properties</h2>
            <ul class="list-disc list-inside ">
                <li><code>coords.latitude</code> – The latitude as a decimal.</li>
                <li><code>coords.longitude</code> – The longitude as a decimal.</li>
                <li><code>coords.accuracy</code> – Accuracy of the location in meters.</li>
                <li><code>coords.altitude</code> – The altitude in meters (if available).</li>
                <li><code>timestamp</code> – The time the position was retrieved.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/html5-canvas') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Canvas</a></div>
    <div><a href="<?= base_url('html/html5-storage') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Web Storage →</a></div>
</div>
    </article>
</main>
