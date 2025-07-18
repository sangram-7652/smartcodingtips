<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Animations and Keyframes</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Animating with Keyframes in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS provides built-in animation utilities using keyframes. You can apply simple animations or define custom ones using your configuration file.
        </p>

        <!-- Built-In Animation Utilities -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Built-In Animations</h2>
            <p class=" mb-2">Tailwind offers some default animations:</p>
            <ul class="list-disc list-inside  mb-4">
                <li><code>animate-spin</code> – spinning loader</li>
                <li><code>animate-ping</code> – fading circle</li>
                <li><code>animate-pulse</code> – pulsing element</li>
                <li><code>animate-bounce</code> – bouncing motion</li>
            </ul>

            <div class="flex space-x-6 items-center">
                <div class="h-10 w-10 rounded-full bg-blue-500 animate-spin"></div>
                <div class="h-10 w-10 rounded-full bg-green-500 animate-ping"></div>
                <div class="h-10 w-10 rounded-full bg-yellow-500 animate-pulse"></div>
                <div class="h-10 w-10 rounded-full bg-red-500 animate-bounce"></div>
            </div>

            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white mt-4 text-sm"><code>
&lt;div class="animate-spin"&gt;&lt;/div&gt;
&lt;div class="animate-ping"&gt;&lt;/div&gt;
&lt;div class="animate-pulse"&gt;&lt;/div&gt;
&lt;div class="animate-bounce"&gt;&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Custom Animations -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Creating Custom Keyframe Animations</h2>
            <p class=" mb-2">You can define custom keyframes and animation classes in your <code>tailwind.config.js</code> file:</p>

            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  theme: {
    extend: {
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        }
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      }
    }
  }
}
            </code></pre>

            <p class=" mt-4">Then apply it using:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="animate-wiggle"&gt;I'm wiggling!&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Timing and Control -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Animation Timing Utilities</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>duration-{ms}</code> – sets animation time</li>
                <li><code>delay-{ms}</code> – delays animation</li>
                <li><code>ease-in / ease-out / ease-in-out / linear</code> – timing function</li>
                <li><code>infinite, once, alternate</code> – via config or custom class</li>
            </ul>
            <p class="">
                Combine them to fine-tune animation experience.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Tailwind makes it incredibly easy to use both predefined and custom animations. You can quickly animate elements without writing custom CSS, and scale up with your own motion designs as needed.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/transitions') ?>" class="hover:underline">← Previous: Transitions and Timing Functions</a>
  <a href="<?= base_url('tailwind/position') ?>" class="hover:underline">Next: Position Types →</a>
</div>
    </article>
</main>
