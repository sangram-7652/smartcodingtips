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
            <li class="text-gray-500">Web Storage</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Web Storage in HTML5</h1>
        <p class=" mb-4">
            Web Storage is a feature of HTML5 that allows websites to store data in a user's browser securely and efficiently. Unlike cookies, web storage is not sent with every server request, making it faster and more secure for client-side storage.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Types of Web Storage</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><strong>Local Storage:</strong> Stores data with no expiration date. It remains even after the browser is closed.</li>
                <li><strong>Session Storage:</strong> Stores data only for the duration of a page session. Data is lost when the tab or browser is closed.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Local Storage Example</h2>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
// Save data
localStorage.setItem("username", "SmartCoder");

// Get data
let user = localStorage.getItem("username");

// Remove item
localStorage.removeItem("username");

// Clear all items
localStorage.clear();
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Session Storage Example</h2>
            <pre class="bg-gray-100  rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white    "><code class="text-sm">
// Save data
sessionStorage.setItem("sessionName", "SmartSession");

// Get data
let session = sessionStorage.getItem("sessionName");

// Remove item
sessionStorage.removeItem("sessionName");

// Clear all items
sessionStorage.clear();
            </code></pre>
        </section>

     <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/html5-geo') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Geolocation</a></div>
    <div><a href="<?= base_url('html/div-vs-section') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Div vs Section →</a></div>
</div>

    </article>
</main>
