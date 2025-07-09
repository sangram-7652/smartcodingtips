<!-- JavaScript DOM - Event Delegation -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-event-delegation" class="text-blue-600 hover:underline">Event Delegation</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Event Delegation in JavaScript</h1>

    <p class="mb-4">
        <strong>Event Delegation</strong> is a technique where a single event listener is added to a parent element to manage events triggered by its child elements. This approach improves performance and simplifies dynamic UI management.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Why Use Delegation?</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Reduces memory usage by attaching fewer listeners</li>
        <li>Works even if child elements are added dynamically</li>
        <li>Cleaner and scalable code for large UIs</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 How It Works</h2>
    <p class="mb-4">
        Events "bubble" up from the target element to its ancestors. You can use <code>event.target</code> to detect which child was clicked.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>document.getElementById("list").addEventListener("click", function(e) {
    if (e.target.tagName === "LI") {
        alert("You clicked: " + e.target.textContent);
    }
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Example With HTML</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;ul id="list"&gt;
    &lt;li&gt;Apple&lt;/li&gt;
    &lt;li&gt;Banana&lt;/li&gt;
    &lt;li&gt;Cherry&lt;/li&gt;
&lt;/ul&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚨 Filtering by Class or Attribute</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>container.addEventListener("click", function(e) {
    if (e.target.classList.contains("delete-btn")) {
        e.target.parentElement.remove(); // Remove the item
    }
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Be Careful With:</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Accidental matches (use specific selectors)</li>
        <li>Nested events (use <code>e.stopPropagation()</code> if needed)</li>
        <li>DOM structure changes (ensure elements exist)</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>Pro Tip:</strong> Use delegation with lists, tables, and components where elements may be added or removed dynamically.
    </div>

</main>
