<!-- JavaScript Object Methods -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/object-methods" class="text-blue-600 hover:underline">Object Methods</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Object Methods in JavaScript</h1>

    <p class="mb-4">
        Object methods are functions stored as properties on objects. They can access and modify the object using the <code>this</code> keyword.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠 Defining Methods</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const user = {
    name: "Alice",
    greet: function() {
        return "Hello, " + this.name;
    }
};

console.log(user.greet()); // "Hello, Alice"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚡ ES6 Method Shorthand</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const user = {
    name: "Bob",
    greet() {
        return `Hi, I'm ${this.name}`;
    }
};

console.log(user.greet()); // "Hi, I'm Bob"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Adding Methods Dynamically</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>user.sayBye = function() {
    return `${this.name} says goodbye.`;
};

console.log(user.sayBye()); // "Bob says goodbye."</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Using <code>this</code> in Methods</h2>
    <p class="mb-4">
        The <code>this</code> keyword refers to the object the method belongs to.
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const car = {
    brand: "Tesla",
    model: "Model 3",
    info() {
        return `${this.brand} - ${this.model}`;
    }
};

console.log(car.info()); // "Tesla - Model 3"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📚 Built-in Object Methods</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>Object.keys(obj)</code> – Returns an array of property names</li>
        <li><code>Object.values(obj)</code> – Returns an array of property values</li>
        <li><code>Object.entries(obj)</code> – Returns an array of [key, value] pairs</li>
        <li><code>Object.assign(target, source)</code> – Copies properties</li>
        <li><code>Object.freeze(obj)</code> – Makes object immutable</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const obj = { a: 1, b: 2 };

console.log(Object.keys(obj));   // ["a", "b"]
console.log(Object.values(obj)); // [1, 2]</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Use methods to organize behavior within objects and avoid repeating logic in your code.
    </div>

</main>
