<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/styling" class="text-blue-600 hover:underline dark:text-blue-400">Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Emotion</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🎭 Emotion – CSS-in-JS Library</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Emotion</strong> is a performant and flexible CSS-in-JS library for writing styles with JavaScript. It supports both styled-components-style and className-based approaches.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Installation</h2>
  <p class="mb-2 text-black dark:text-gray-300">For React:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install @emotion/react @emotion/styled
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 2. Using <code>@emotion/styled</code></h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import styled from '@emotion/styled';

const Button = styled.button`
  background-color: #2563eb;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 6px;
  font-weight: bold;

  &:hover {
    background-color: #1e40af;
  }
`;

function App() {
  return &lt;Button&gt;Click Me&lt;/Button&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎨 3. Using <code>css</code> prop</h2>
  <p class="mb-2 text-black dark:text-gray-300">This lets you apply styles directly to elements:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
/** @jsxImportSource @emotion/react */
import { css } from '@emotion/react';

const style = css`
  color: white;
  background: #22c55e;
  padding: 10px;
`;

function Alert() {
  return &lt;div css={style}&gt;Success!&lt;/div&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 4. Theming Support</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { ThemeProvider } from '@emotion/react';

const theme = {
  colors: {
    primary: '#9333ea',
  },
};

&lt;ThemeProvider theme={theme}&gt;
  &lt;App /&gt;
&lt;/ThemeProvider&gt;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Why Use Emotion?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Powerful CSS-in-JS syntax</li>
    <li>Supports theming and dynamic styles</li>
    <li>Works well with TypeScript</li>
    <li>Flexible — use styled or css prop</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/styled-components') ?>" class="hover:underline">← Previous: Styled Components</a>
  <a href="<?= base_url('react/conditional-styles') ?>" class="hover:underline">Next: Conditional Styling →</a>
</div>

</main>
