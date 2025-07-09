<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/popups" class="text-blue-600 hover:underline">Popups & Controls</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">📤 Popups & Window Controls in JavaScript</h1>

    <p class="mb-4">
        JavaScript provides several built-in methods to open dialog boxes and control browser windows. These can be useful for alerts, prompts, confirmations, or opening new windows.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔔 1. Alert, Prompt, and Confirm</h2>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Simple alert box
alert("This is an alert!");

// Prompt for user input
const name = prompt("What's your name?");
console.log("User entered:", name);

// Confirmation box
const confirmed = confirm("Are you sure you want to continue?");
console.log("User clicked:", confirmed);</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li><code>alert()</code>: Shows a message box with OK</li>
        <li><code>prompt()</code>: Asks user for input</li>
        <li><code>confirm()</code>: Asks for Yes/No confirmation</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🪟 2. Opening New Windows</h2>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Open a new tab or window
const newWin = window.open(
    "https://example.com",
    "_blank",
    "width=600,height=400,resizable=yes"
);</code></pre>

    <ul class="list-disc list-inside mb-6">
        <li><code>window.open()</code>: Opens a new browser window or tab</li>
        <li>Arguments: <code>URL</code>, <code>target</code>, <code>features</code></li>
        <li>Common features: <code>width</code>, <code>height</code>, <code>resizable</code>, <code>scrollbars</code></li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧹 3. Closing Windows</h2>
    <p>If your script opened a window using <code>window.open()</code>, it can also close it:</p>

    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Close the window (only if script opened it)
newWin.close();</code></pre>

    <p class="text-sm text-gray-500 mt-2">Note: Most modern browsers block popups unless triggered by direct user actions (like clicking a button).</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 4. Popup Blocking</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Browsers often block popups opened automatically without user interaction.</li>
        <li>Always tie popups to click events or user triggers.</li>
        <li>Use responsibly to avoid bad user experience.</li>
    </ul>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded">
        ⚠️ <strong>Tip:</strong> Avoid using popups excessively. Use modal dialogs (via HTML/CSS/JS) for better UX.
    </div>

</main>
