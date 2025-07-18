<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Tailwind UI vs Headless UI</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Tailwind UI (Paid) vs Headless UI (Free)</h1>
        <p class=" mb-4">
            Tailwind UI and Headless UI are two powerful resources created by the Tailwind Labs team. They serve different purposes and suit different needs when building modern UIs with Tailwind CSS.
        </p>

        <!-- Tailwind UI -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Tailwind UI (Paid)</h2>
            <p class=" mb-2">
                <strong>Tailwind UI</strong> is a premium component library built by the creators of Tailwind CSS. It provides you with beautifully designed, responsive components using Tailwind’s utility classes.
            </p>
            <ul class="list-disc list-inside  mb-4">
                <li>Includes hundreds of professionally designed components</li>
                <li>Covers multiple categories like navbars, modals, tables, dashboards, etc.</li>
                <li>Available for HTML, React, and Vue</li>
                <li>Requires a license — one-time or team-based pricing</li>
                <li>Great for production-level UI work</li>
            </ul>
            <p class="">Official site: <a href="https://tailwindui.com" class="text-blue-600  dark:text-blue-400 hover:underline" target="_blank">tailwindui.com</a></p>
        </section>

        <!-- Headless UI -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. Headless UI (Free)</h2>
            <p class=" mb-2">
                <strong>Headless UI</strong> is an open-source library of unstyled, fully accessible components designed to integrate seamlessly with Tailwind CSS — especially for dynamic UIs.
            </p>
            <ul class="list-disc list-inside  mb-4">
                <li>Includes functional components like modals, dropdowns, tabs, popovers</li>
                <li>No styles included — you style them yourself using Tailwind classes</li>
                <li>Built specifically for React and Vue</li>
                <li>Promotes full control over appearance and layout</li>
                <li>Ideal for advanced JavaScript-driven UIs with accessibility in mind</li>
            </ul>
            <p class="">Official site: <a href="https://headlessui.dev" class="text-blue-600  dark:text-blue-400 hover:underline" target="_blank">headlessui.dev</a></p>
        </section>

        <!-- Comparison Table -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Comparison Summary</h2>
            <div class="dark:bg-gray-900 dark:text-white">
                <table class="table-auto w-full text-left border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-800">
                            <th class="p-2 border">Feature</th>
                            <th class="p-2 border">Tailwind UI</th>
                            <th class="p-2 border">Headless UI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 border">Pricing</td>
                            <td class="p-2 border">Paid</td>
                            <td class="p-2 border">Free</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800">
                            <td class="p-2 border">Component Type</td>
                            <td class="p-2 border">Styled UI Components</td>
                            <td class="p-2 border">Functional (unstyled)</td>
                        </tr>
                        <tr>
                            <td class="p-2 border">Framework Support</td>
                            <td class="p-2 border">HTML, React, Vue</td>
                            <td class="p-2 border">React, Vue</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800">
                            <td class="p-2 border">Accessibility</td>
                            <td class="p-2 border">Yes</td>
                            <td class="p-2 border">Yes (fully accessible)</td>
                        </tr>
                        <tr>
                            <td class="p-2 border">Customization</td>
                            <td class="p-2 border">Limited (pre-styled)</td>
                            <td class="p-2 border">Full control</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Choose <strong>Tailwind UI</strong> if you want production-ready UI kits and time-saving design patterns. Opt for <strong>Headless UI</strong> when you need accessible components with complete visual freedom.
            </p>
        </section>

       <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/plugin-typography') ?>" class="hover:underline">← Previous: Typography, Aspect-Ratio, Line-Clamp</a>
  <a href="<?= base_url('tailwind/integration') ?>" class="hover:underline">Next: Integration with PostCSS and Vite →</a>
</div>
    </article>
</main>
