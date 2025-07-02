<!-- JavaScript Objects and Properties -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/objects-properties" class="text-blue-600 hover:underline">Objects & Properties</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Objects and Properties</h1>

    <p class="mb-4">
        Objects in JavaScript are collections of key-value pairs. They are used to store structured data and complex entities.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Creating Objects</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>// Object literal
const user = {
    name: "Alice",
    age: 25,
    isStudent: true
};

// Using Object constructor
const person = new Object();
person.name = "Bob";
person.age = 30;
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Accessing Properties</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>console.log(user.name);     // Dot notation
console.log(user["age"]);   // Bracket notation

let key = "isStudent";
console.log(user[key]);     // Dynamic key access</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Modifying and Deleting</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>user.age = 26;              // Modify
user.city = "New York";     // Add new property
delete user.isStudent;      // Delete property</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Looping Through Properties</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>for (let key in user) {
    console.log(key + ": " + user[key]);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Property Existence</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>console.log("name" in user);    // true
console.log(user.hasOwnProperty("age")); // true</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Object keys are always strings or symbols. Values can be any data type, including functions (methods).
    </div>

</main>
