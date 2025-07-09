<!-- JavaScript Operators -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/operators" class="text-blue-600 hover:underline">JavaScript Operators</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Operators</h1>

    <p class="mb-4">
        Operators in JavaScript allow you to perform calculations, compare values, assign data, and more. They're categorized into several types based on what they do.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">➕ 1. Arithmetic Operators</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let x = 10;
let y = 3;

x + y  // 13 (Addition)
x - y  // 7  (Subtraction)
x * y  // 30 (Multiplication)
x / y  // 3.33... (Division)
x % y  // 1  (Modulus)
x ** y // 1000 (Exponentiation)</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🟰 2. Assignment Operators</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let a = 5;

a += 2;  // a = a + 2 => 7
a -= 1;  // a = a - 1 => 6
a *= 3;  // a = a * 3 => 18
a /= 2;  // a = a / 2 => 9
a %= 4;  // a = a % 4 => 1</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 3. Comparison Operators</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>5 == '5'   // true (loose equality)
5 === '5'  // false (strict equality)
5 != '5'   // false
5 !== '5'  // true
5 &gt; 3      // true
5 &lt; 10     // true
5 &gt;= 5     // true
3 &lt;= 2     // false</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-4">
        ⚠️ <strong>Tip:</strong> Use <code>===</code> and <code>!==</code> for strict comparisons to avoid type coercion.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🤔 4. Logical Operators</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>true && true   // true
true && false  // false
true || false  // true
!true          // false</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔄 5. Increment & Decrement</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let count = 1;

count++; // Post-increment
++count; // Pre-increment
count--; // Post-decrement
--count; // Pre-decrement</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 6. Ternary (Conditional) Operator</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let age = 18;
let status = (age &gt;= 18) ? "Adult" : "Minor";</code></pre>
    <p class="mb-4">Use this for inline if-else logic.</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📚 7. Type Operators</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>typeof</code> – Returns the type of a variable</li>
        <li><code>instanceof</code> – Checks if an object is an instance of a class</li>
    </ul>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>typeof "Hello"       // "string"
person instanceof Object  // true</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ <strong>Practice:</strong> Try combining arithmetic, logical, and ternary operators in short functions to see how they behave.
    </div>

</main>
