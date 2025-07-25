<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/deployment" class="text-blue-600 hover:underline dark:text-blue-400">Deployment</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Hosting Platforms</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌐 Hosting Platforms for React Apps</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    There are many platforms available to deploy your React app — from simple static hosting to full-featured CI/CD platforms. Here's a comparison of the most popular options.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Hosting List -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ Popular Hosting Platforms</h2>

  <ul class="list-disc list-inside text-black dark:text-gray-300 space-y-4">

    <li>
      <strong>🔧 Vercel</strong><br />
      - Best for Next.js and React<br />
      - GitHub/GitLab/Bitbucket integration<br />
      - Free SSL, custom domains, fast builds<br />
      - Command: <code>vercel</code><br />
      <a href="https://vercel.com" target="_blank" class="text-blue-600 dark:text-blue-400 underline">Visit Vercel →</a>
    </li>

    <li>
      <strong>🎯 Netlify</strong><br />
      - Easy drag-and-drop or Git deployment<br />
      - Instant rollback, serverless functions support<br />
      - Command: <code>netlify deploy</code><br />
      <a href="https://netlify.com" target="_blank" class="text-blue-600 dark:text-blue-400 underline">Visit Netlify →</a>
    </li>

    <li>
      <strong>🔥 Firebase Hosting</strong><br />
      - Free tier, HTTPS, CLI tools<br />
      - Works well with full Firebase backend (Auth, DB)<br />
      - Commands: <code>firebase init</code>, <code>firebase deploy</code><br />
      <a href="https://firebase.google.com/products/hosting" target="_blank" class="text-blue-600 dark:text-blue-400 underline">Visit Firebase →</a>
    </li>

    <li>
      <strong>☁️ GitHub Pages</strong><br />
      - Great for portfolios/docs<br />
      - Requires <code>gh-pages</code> package<br />
      - Static hosting only<br />
      <a href="https://pages.github.com/" target="_blank" class="text-blue-600 dark:text-blue-400 underline">Visit GitHub Pages →</a>
    </li>

    <li>
      <strong>🛠️ Render / Railway</strong><br />
      - Simple full-stack deployment<br />
      - Great for connecting Node.js backends<br />
      - Automated deployments via Git
    </li>

    <li>
      <strong>🧩 Custom Hosting</strong><br />
      - Use Apache, Nginx, or cPanel<br />
      - Upload contents of the <code>build</code> folder manually<br />
      - Requires FTP/SFTP or control panel access
    </li>

  </ul>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mt-10 mb-4 text-black dark:text-white">✅ Choosing the Right Platform</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Use <strong>Vercel</strong> or <strong>Netlify</strong> for frontend-only projects</li>
    <li>Use <strong>Firebase</strong> if you're using Firebase Auth or Firestore</li>
    <li>Use <strong>Render</strong> or <strong>Railway</strong> for full-stack apps</li>
    <li>Use <strong>GitHub Pages</strong> for portfolios or documentation</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/build') ?>" class="hover:underline">← Previous: Build for Production</a>
  <a href="<?= base_url('react/env-vars-deploy') ?>" class="hover:underline">Next: Env Variables →</a>
</div>

</main>
