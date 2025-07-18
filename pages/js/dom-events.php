<!-- JavaScript DOM - Event Listeners -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-event-listeners" class="text-blue-600 hover:underline">Event Listeners</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Event Listeners in JavaScript</h1>

    <p class="mb-4">
        JavaScript uses <strong>event listeners</strong> to react to user actions like clicking, typing, scrolling, and more. You can attach functions to elements that run when events happen.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Basic Syntax</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>element.addEventListener("event", callbackFunction);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🖱 Example: Click Event</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>document.getElementById("myBtn").addEventListener("click", function() {
    alert("Button was clicked!");
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Using Named Functions</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function greetUser() {
    console.log("Hello!");
}

document.querySelector("button").addEventListener("click", greetUser);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⌨️ Other Common Events</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>click</code> – mouse click</li>
        <li><code>mouseover</code> / <code>mouseout</code> – hover effects</li>
        <li><code>keydown</code> / <code>keyup</code> – keyboard input</li>
        <li><code>submit</code> – form submission</li>
        <li><code>change</code> – form field value change</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Removing Event Listeners</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function sayHi() {
    alert("Hi!");
}

const btn = document.getElementById("btn");
btn.addEventListener("click", sayHi);

// Later, remove the event
btn.removeEventListener("click", sayHi);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Example With HTML</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;button id="myBtn"&gt;Click Me&lt;/button&gt;

&lt;script&gt;
document.getElementById("myBtn").addEventListener("click", () =&gt; {
    alert("Event triggered!");
});
&lt;/script&gt;</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Always use <code>addEventListener</code> instead of inline <code>onclick</code> for cleaner, scalable code.
    </div>
    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/dom-create" class="text-blue-600 hover:underline">Creating/Removing Elements →</a></p>
</div>

</main>
