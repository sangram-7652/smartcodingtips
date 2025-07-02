<!-- JavaScript Ternary Operator -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/ternary-operator" class="text-blue-600 hover:underline">Ternary Operator</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Ternary Operator in JavaScript</h1>

    <p class="mb-4">
        The <strong>ternary operator</strong> is a shorthand for writing <code>if...else</code> statements. It's often used to assign values based on a condition in a single line.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Syntax</h2>
    
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>condition ? expressionIfTrue : expressionIfFalse</code></pre>

    <p class="mb-4">
        If the condition is true, it evaluates and returns <code>expressionIfTrue</code>; otherwise, it returns <code>expressionIfFalse</code>.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Example 1: Assigning a Value</h2>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>let age = 20;
let result = (age &gt;= 18) ? "Adult" : "Minor";
console.log(result); // "Adult"</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Example 2: Inside HTML or JSX</h2>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>let isLoggedIn = true;
let message = isLoggedIn ? "Welcome!" : "Please log in.";</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Why Use the Ternary Operator?</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Shorter and cleaner than <code>if...else</code></li>
        <li>Useful for simple decisions and assignments</li>
        <li>Great inside templates and UI rendering</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ <strong>Tip:</strong> Avoid nesting ternary operators. It can make code harder to read.
    </div>

</main>
