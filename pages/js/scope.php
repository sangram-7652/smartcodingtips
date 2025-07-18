<!-- JavaScript Scope and Closures -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/scope-closure" class="text-blue-600 hover:underline">Scope & Closure</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Scope and Closures in JavaScript</h1>

    <p class="mb-4">
        Scope determines the visibility of variables. Closures allow functions to “remember” variables from their outer scope.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 JavaScript Scope</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>Global Scope</strong> – Variables declared outside any function</li>
        <li><strong>Function Scope</strong> – Variables declared inside a function using <code>var</code></li>
        <li><strong>Block Scope</strong> – Introduced by <code>let</code> and <code>const</code> inside <code>{ }</code></li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let globalVar = "Global";

function testScope() {
    let functionVar = "Function";
    if (true) {
        let blockVar = "Block";
        console.log(blockVar); // ✅ Accessible here
    }
    // console.log(blockVar); ❌ Not accessible here
}

testScope();
// console.log(functionVar); ❌ Not accessible here</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔐 Closures Explained</h2>
    <p class="mb-4">
        A <strong>closure</strong> is when an inner function accesses variables from an outer function even after the outer function has finished executing.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function outer() {
    let count = 0;

    return function inner() {
        count++;
        return count;
    };
}

const counter = outer();
console.log(counter()); // 1
console.log(counter()); // 2
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Why Are Closures Useful?</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Encapsulation – Keep variables private</li>
        <li>Data persistence – Remember state across calls</li>
        <li>Functional programming – Create factory functions</li>
    </ul>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded">
        🧠 <strong>Tip:</strong> Closures power many JS patterns including callbacks, modules, and event handlers.
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/this" class="text-blue-600 hover:underline">The `this` Keyword →</a></p>
</div>

</main>
