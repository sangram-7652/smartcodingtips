<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/storage" class="text-blue-600 dark:text-blue-400 hover:underline">LocalStorage / SessionStorage</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">💾 LocalStorage and SessionStorage in JavaScript</h1>

    <p class="mb-4">
        Both <strong>LocalStorage</strong> and <strong>SessionStorage</strong> allow you to store key/value pairs in the browser. The difference lies in <strong>how long</strong> the data persists.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 LocalStorage</h2>
    <p>Data in <code>localStorage</code> persists even after the browser is closed. It has no expiration time.</p>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>// Store data
localStorage.setItem("username", "John");

// Retrieve data
const user = localStorage.getItem("username");
console.log(user); // John

// Remove a key
localStorage.removeItem("username");

// Clear all
localStorage.clear();</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🕒 SessionStorage</h2>
    <p>Data in <code>sessionStorage</code> is cleared when the page session ends (usually when the tab or window is closed).</p>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>// Store session data
sessionStorage.setItem("theme", "dark");

// Retrieve data
console.log(sessionStorage.getItem("theme")); // dark

// Remove data
sessionStorage.removeItem("theme");

// Clear session
sessionStorage.clear();</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠 Use Cases</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>LocalStorage:</strong> Save user preferences, theme settings, app state.</li>
        <li><strong>SessionStorage:</strong> Temporary form data, session-based login flags.</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📝 Storing Objects</h2>
    <p>You must stringify objects before storing them.</p>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>const user = { name: "Alice", age: 25 };
localStorage.setItem("user", JSON.stringify(user));

// Later...
const data = JSON.parse(localStorage.getItem("user"));
console.log(data.name); // Alice</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        ⚠️ <strong>Note:</strong> Both storages are domain-specific and cannot be accessed by other domains.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code>localStorage</code> = persistent storage (stays until removed).</li>
        <li><code>sessionStorage</code> = temporary storage (clears on tab close).</li>
        <li>Use <code>JSON.stringify</code> and <code>JSON.parse</code> for storing/retrieving objects.</li>
    </ul>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/window-navigator') ?>" class="hover:underline">← Previous: Window & Navigator</a>
    <a href="<?= base_url('js/device-detect') ?>" class="hover:underline ms-auto">Next: Device & Feature Detect →</a>
</div>
</main>
