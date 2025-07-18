<!-- JavaScript 'this' Keyword -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/this-keyword" class="text-blue-600 hover:underline">The <code>this</code> Keyword</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Understanding <code>this</code> in JavaScript</h1>

    <p class="mb-4">
        The <code>this</code> keyword refers to the object it belongs to. It behaves differently depending on how a function is called.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Global Context</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>console.log(this); 
// In browsers, this refers to the global window object</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Inside an Object Method</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const user = {
    name: "Alice",
    greet: function() {
        console.log("Hi, I'm " + this.name);
    }
};

user.greet(); // "Hi, I'm Alice"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ In a Regular Function</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function show() {
    console.log(this);
}

show(); 
// In strict mode: undefined
// Otherwise: window (in browser)</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚡ With Arrow Functions</h2>
    <p class="mb-4">Arrow functions do not bind their own <code>this</code>. They inherit it from the outer lexical scope.</p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const person = {
    name: "Bob",
    greet: () => {
        console.log("Hi, I'm " + this.name);
    }
};

person.greet(); // "Hi, I'm undefined"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Using <code>bind()</code>, <code>call()</code>, and <code>apply()</code></h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function sayHello() {
    console.log("Hello, " + this.name);
}

const person = { name: "Charlie" };

sayHello.call(person);  // Hello, Charlie
sayHello.apply(person); // Hello, Charlie

const boundFunc = sayHello.bind(person);
boundFunc();            // Hello, Charlie</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Always be mindful of how a function is called — that's what determines what <code>this</code> refers to.
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/arrays" class="text-blue-600 hover:underline">Arrays and Methods →</a></p>
</div>

</main>
