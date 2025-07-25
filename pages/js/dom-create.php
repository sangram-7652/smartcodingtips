<!-- JavaScript DOM - Creating and Removing Elements -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-create-remove" class="text-blue-600 dark:text-blue-400 hover:underline">Creating & Removing Elements</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Creating and Removing Elements in JavaScript</h1>

    <p class="mb-4">
        JavaScript gives you full control over the document structure. You can dynamically create, insert, remove, or replace HTML elements using DOM methods.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Creating Elements</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>// Create a new element
const newDiv = document.createElement("div");
newDiv.textContent = "Hello, I'm new!";
newDiv.classList.add("bg-yellow-100", "p-2", "rounded");

// Append to an existing element
document.body.appendChild(newDiv);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📍 Insert Before Specific Element</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const parent = document.getElementById("container");
const reference = document.getElementById("child-2");

parent.insertBefore(newDiv, reference);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧽 Removing Elements</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const element = document.getElementById("toRemove");
element.remove(); // Removes the element from the DOM</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Replacing Elements</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const newElement = document.createElement("p");
newElement.textContent = "Replacement content";
const oldElement = document.getElementById("old");

oldElement.parentNode.replaceChild(newElement, oldElement);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Practical Example</h2>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>&lt;div id="list"&gt;&lt;/div&gt;
&lt;button onclick="addItem()"&gt;Add Item&lt;/button&gt;

&lt;script&gt;
function addItem() {
    const li = document.createElement("li");
    li.textContent = "New item";
    document.getElementById("list").appendChild(li);
}
&lt;/script&gt;</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        ✅ <strong>Tip:</strong> Always use <code>createElement</code> for dynamic UIs like modals, lists, or messages. Don’t use <code>innerHTML</code> to add elements — it can break performance and security.
    </div>
   
    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/dom-events') ?>" class="hover:underline">← Previous: Event Listeners</a>
    <a href="<?= base_url('js/mouse-key-events') ?>" class="hover:underline ms-auto">Next: Mouse & Keyboard Events →</a>
</div>
</main>
