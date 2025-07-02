<!-- JavaScript Project – Calculator -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/calculator" class="text-blue-600 hover:underline">Calculator</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-6">🧮 Build a Simple Calculator with JavaScript</h1>

    <p class="mb-4">
        Create a basic calculator that can handle addition, subtraction, multiplication, and division.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 HTML Markup</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>&lt;div id="calc"&gt;
    &lt;input type="text" id="display" disabled /&gt;
    &lt;div class="buttons"&gt;
        &lt;button&gt;7&lt;/button&gt; &lt;button&gt;8&lt;/button&gt; &lt;button&gt;9&lt;/button&gt; &lt;button&gt;/&lt;/button&gt;
        &lt;button&gt;4&lt;/button&gt; &lt;button&gt;5&lt;/button&gt; &lt;button&gt;6&lt;/button&gt; &lt;button&gt;*&lt;/button&gt;
        &lt;button&gt;1&lt;/button&gt; &lt;button&gt;2&lt;/button&gt; &lt;button&gt;3&lt;/button&gt; &lt;button&gt;-&lt;/button&gt;
        &lt;button&gt;0&lt;/button&gt; &lt;button&gt;C&lt;/button&gt; &lt;button&gt;=&lt;/button&gt; &lt;button&gt;+&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 JavaScript Logic</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const display = document.getElementById("display");
const buttons = document.querySelectorAll("#calc button");

let expression = "";

buttons.forEach(button =&gt; {
    button.addEventListener("click", () =&gt; {
        const value = button.textContent;

        if (value === "C") {
            expression = "";
            display.value = "";
        } else if (value === "=") {
            try {
                display.value = eval(expression);
                expression = display.value;
            } catch {
                display.value = "Error";
                expression = "";
            }
        } else {
            expression += value;
            display.value = expression;
        }
    });
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎨 Basic Styling (Optional)</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>&lt;style&gt;
#calc {
    max-width: 300px;
    margin: auto;
    text-align: center;
}
#display {
    width: 100%;
    padding: 12px;
    font-size: 1.5rem;
    text-align: right;
}
.buttons {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    margin-top: 10px;
}
button {
    padding: 15px;
    font-size: 1.2rem;
}
&lt;/style&gt;</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Note:</strong> You can replace <code>eval()</code> with a safer expression parser for production apps.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Skills You Practice</h2>
    <ul class="list-disc list-inside mb-6">
        <li>DOM selection and event handling</li>
        <li>String manipulation and expressions</li>
        <li>Building interactive UIs with JS</li>
    </ul>

</main>
