<!-- JavaScript DOM - Mouse & Keyboard Events -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-mouse-keyboard" class="text-blue-600 dark:text-blue-400 hover:underline">Mouse & Keyboard Events</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Mouse & Keyboard Events in JavaScript</h1>

    <p class="mb-4">
        JavaScript makes it easy to react to user interaction with the mouse and keyboard. These events allow dynamic behavior like dragging, shortcuts, or interactivity in games and UI.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🖱️ Mouse Events</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>click</code> – User clicks on an element</li>
        <li><code>dblclick</code> – Double click</li>
        <li><code>mouseover</code> / <code>mouseout</code> – Hover in/out</li>
        <li><code>mousedown</code> / <code>mouseup</code> – Press/release mouse button</li>
        <li><code>mousemove</code> – Mouse movement</li>
    </ul>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.getElementById("box").addEventListener("click", () =&gt; {
    alert("Box clicked!");
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⌨️ Keyboard Events</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>keydown</code> – Key is pressed down</li>
        <li><code>keyup</code> – Key is released</li>
        <li><code>keypress</code> – (deprecated) Use <code>keydown</code> instead</li>
    </ul>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.addEventListener("keydown", function(event) {
    console.log("Key pressed:", event.key);
    if (event.key === "Enter") {
        alert("You pressed Enter!");
    }
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Accessing Event Data</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>document.addEventListener("click", function(e) {
    console.log("Mouse X:", e.clientX, "Mouse Y:", e.clientY);
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Example With HTML</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>&lt;input type="text" id="inputField" placeholder="Type something..."&gt;

&lt;script&gt;
document.getElementById("inputField").addEventListener("keyup", function(e) {
    console.log("You typed:", e.key);
});
&lt;/script&gt;</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Use <code>event.preventDefault()</code> if you want to stop default behavior like form submission.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/dom-create') ?>" class="hover:underline">← Previous: Creating/Removing Elements</a>
    <a href="<?= base_url('js/event-object') ?>" class="hover:underline ms-auto">Next: Event Object →</a>
</div>
</main>
