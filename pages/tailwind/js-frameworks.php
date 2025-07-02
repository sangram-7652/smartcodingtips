<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Using Tailwind with React/Vue</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Using Tailwind with React and Vue</h1>
        <p class="text-lg mb-4">
            Tailwind CSS integrates seamlessly with modern JavaScript frameworks like React and Vue. You can use utility classes directly in your components, enabling rapid development and consistent design.
        </p>

        <!-- React Setup -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Setting Up Tailwind in React (Vite or CRA)</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
// Install dependencies
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

// tailwind.config.js
content: [
  "./src/**/*.{js,jsx,ts,tsx}",
],

// index.css
@tailwind base;
@tailwind components;
@tailwind utilities;
            </code></pre>
            <p class="text-lg mt-2">Then import <code>index.css</code> in your <code>main.jsx</code> or <code>App.jsx</code>.</p>
        </section>

        <!-- React Example -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. React Component Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
function Card() {
  return (
    &lt;div className="bg-white rounded shadow p-4"&gt;
      &lt;h2 className="text-xl font-bold"&gt;Tailwind + React&lt;/h2&gt;
      &lt;p className="text-gray-600"&gt;Utility-first styling is awesome!&lt;/p&gt;
    &lt;/div&gt;
  );
}
            </code></pre>
        </section>

        <!-- Vue Setup -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Setting Up Tailwind in Vue (Vite or Vue CLI)</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
// Install dependencies
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

// tailwind.config.js
content: [
  "./index.html",
  "./src/**/*.{vue,js,ts,jsx,tsx}",
],

// src/assets/tailwind.css
@tailwind base;
@tailwind components;
@tailwind utilities;
            </code></pre>
            <p class="text-lg mt-2">Import the CSS file in <code>main.js</code>:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
import './assets/tailwind.css';
            </code></pre>
        </section>

        <!-- Vue Example -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">4. Vue Component Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;template&gt;
  &lt;div class="bg-white rounded shadow p-4"&gt;
    &lt;h2 class="text-xl font-bold"&gt;Tailwind + Vue&lt;/h2&gt;
    &lt;p class="text-gray-600"&gt;Works beautifully in Vue too!&lt;/p&gt;
  &lt;/div&gt;
&lt;/template&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Tips and Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use component-based design with utility-first styles.</li>
                <li>Leverage Tailwind’s responsive and dark mode classes.</li>
                <li>Use <code>@apply</code> inside <code>.module.css</code> or `<style scoped>` for advanced reuse.</li>
                <li>Enable IDE IntelliSense for Tailwind class suggestions.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Whether you use React or Vue, Tailwind provides a modern way to style UI with flexibility and maintainability. It reduces the need for custom CSS and works well with component-driven development.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/plugins-install" class="text-blue-600 hover:underline">Installing Tailwind Plugins →</a></p>
        </div>
    </article>
</main>
