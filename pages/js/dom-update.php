<!-- JavaScript DOM - Changing Content -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/dom-changing-content" class="text-blue-600 hover:underline">Changing Content</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Changing Content with JavaScript</h1>

    <p class="mb-4">
        JavaScript can dynamically change the content of HTML elements using the DOM. This is useful for interactive web apps, user feedback, and live updates.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📝 <code>textContent</code></h2>
    <p class="mb-4">
        Safely sets or gets the text content of an element. It does not render HTML.
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.querySelector("p").textContent = "New text goes here.";</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🌐 <code>innerHTML</code></h2>
    <p class="mb-4">
        Sets or gets HTML inside an element. Use with caution as it can be a security risk (XSS).
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.getElementById("output").innerHTML = "&lt;strong&gt;Bold Text&lt;/strong&gt;";</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ <code>innerText</code> (Less Common)</h2>
    <p class="mb-4">
        Similar to <code>textContent</code> but affected by CSS (like <code>display:none</code>).
    </p>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const title = document.querySelector("h1");
title.innerText = "Updated Title";</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Updating Inputs and Forms</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>document.querySelector("input").value = "New input value";</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 When to Use Each</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>textContent</code> – Best for plain text.</li>
        <li><code>innerHTML</code> – Needed when inserting HTML elements.</li>
        <li><code>innerText</code> – Reflects what’s visible to users.</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Use <code>textContent</code> for security and performance. Avoid <code>innerHTML</code> unless HTML rendering is required.
    </div>

</main>
