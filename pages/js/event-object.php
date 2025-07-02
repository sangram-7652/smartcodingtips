<!-- JavaScript DOM - Event Object -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-event-object" class="text-blue-600 hover:underline">Event Object</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Understanding the Event Object</h1>

    <p class="mb-4">
        Every event handler function receives an <code>event</code> object as a parameter, which holds detailed information about the triggered event—like mouse position, key pressed, or target element.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Example: Accessing the Event Object</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.addEventListener("click", function(event) {
    console.log(event); // Logs the entire event object
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Common Event Object Properties</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>event.type</code> – the type of event (e.g., "click", "keydown")</li>
        <li><code>event.target</code> – the element that triggered the event</li>
        <li><code>event.currentTarget</code> – the element the event listener is attached to</li>
        <li><code>event.clientX / clientY</code> – mouse position on the screen</li>
        <li><code>event.key</code> – the key pressed (for keyboard events)</li>
        <li><code>event.preventDefault()</code> – prevents default behavior</li>
        <li><code>event.stopPropagation()</code> – stops event from bubbling up</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Example: Using `event.target`</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.querySelector("ul").addEventListener("click", function(e) {
    console.log("You clicked on:", e.target.tagName);
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 Preventing Default Action</h2>
    <p class="mb-4">
        Used to stop things like form submission, link redirection, etc.
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault(); // Stops form from submitting
    alert("Form intercepted!");
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚧 Stopping Propagation</h2>
    <p class="mb-4">
        Use this when you don’t want an event to bubble up to parent elements.
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>button.addEventListener("click", function(e) {
    e.stopPropagation();
    console.log("Button clicked without bubbling up");
});</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Always use the <code>event</code> object to get dynamic and context-aware responses from your JavaScript code.
    </div>

</main>
