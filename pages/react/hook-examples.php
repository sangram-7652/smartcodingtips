<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline dark:text-blue-400">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Hook Examples</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔁 React Hook Examples</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Here's a quick reference of real-world React Hook examples including <code>useState</code>, <code>useEffect</code>, <code>useRef</code>, <code>useContext</code>, and <code>useReducer</code>.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- useState Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 useState</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import { useState } from "react";

function Counter() {
  const [count, setCount] = useState(0);
  return (
    &lt;div&gt;
      &lt;p&gt;You clicked {count} times&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Click Me&lt;/button&gt;
    &lt;/div&gt;
  );
}</code></pre>

  <!-- useEffect Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🕒 useEffect</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import { useEffect } from "react";

function Timer() {
  useEffect(() => {
    const id = setInterval(() => {
      console.log("Tick");
    }, 1000);
    return () => clearInterval(id);
  }, []);
}</code></pre>

  <!-- useRef Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 useRef</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import { useRef } from "react";

function InputFocus() {
  const inputRef = useRef(null);
  return (
    &lt;div&gt;
      &lt;input ref={inputRef} type="text" /&gt;
      &lt;button onClick={() =&gt; inputRef.current.focus()}&gt;Focus Input&lt;/button&gt;
    &lt;/div&gt;
  );
}</code></pre>

  <!-- useContext Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 useContext</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import { createContext, useContext } from "react";

const ThemeContext = createContext("light");

function ThemedComponent() {
  const theme = useContext(ThemeContext);
  return &lt;p&gt;Theme is: {theme}&lt;/p&gt;;
}</code></pre>

  <!-- useReducer Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 useReducer</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import { useReducer } from "react";

function reducer(state, action) {
  switch (action.type) {
    case "increment": return { count: state.count + 1 };
    case "decrement": return { count: state.count - 1 };
    default: return state;
  }
}

function Counter() {
  const [state, dispatch] = useReducer(reducer, { count: 0 });
  return (
    &lt;div&gt;
      &lt;p&gt;Count: {state.count}&lt;/p&gt;
      &lt;button onClick={() =&gt; dispatch({ type: "increment" })}&gt;+&lt;/button&gt;
      &lt;button onClick={() =&gt; dispatch({ type: "decrement" })}&gt;-&lt;/button&gt;
    &lt;/div&gt;
  );
}</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📘 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>useState</code> handles local state</li>
    <li><code>useEffect</code> manages side effects</li>
    <li><code>useRef</code> gives direct access to DOM or persistent variables</li>
    <li><code>useContext</code> shares data across components</li>
    <li><code>useReducer</code> is great for complex state logic</li>
  </ul>

  <!-- Next Page -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/hook-rules') ?>" class="hover:underline">← Previous: Hook Rules & Best Practices</a>
  <a href="<?= base_url('react/prop-drilling') ?>" class="hover:underline ms-auto">Next: Props Drilling →</a>
</div>


</main>
