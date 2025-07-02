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
                <a href="html-tutorials.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Form Tag</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Form Tag</h1>
        <p class="text-lg mb-4">
            The <code>&lt;form&gt;</code> tag in HTML is used to create an interactive form for user input. It can include fields like text boxes, radio buttons, checkboxes, and submit buttons.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Structure</h2>
            <p class="mb-2">Here is a simple form with text input and a submit button:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form action="submit.php" method="post"&gt;
  &lt;label for="name"&gt;Name:&lt;/label&gt;
  &lt;input type="text" id="name" name="name"&gt;&lt;br&gt;&lt;br&gt;
  
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Important Attributes</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>action</code> – Specifies where to send the form data.</li>
                <li><code>method</code> – Determines the HTTP method (e.g., <code>get</code> or <code>post</code>).</li>
                <li><code>name</code> – Used to reference form controls in scripts or backend.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Form Elements</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>&lt;input&gt;</code> – For user input (text, password, radio, etc.).</li>
                <li><code>&lt;textarea&gt;</code> – For multiline text input.</li>
                <li><code>&lt;select&gt;</code> – For dropdown lists.</li>
                <li><code>&lt;button&gt;</code> – For clickable buttons.</li>
                <li><code>&lt;label&gt;</code> – Associates a label with an input element.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example with Multiple Inputs</h2>
            <p class="mb-2">This example demonstrates different input types in a form:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form action="submit.php" method="post"&gt;
  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email"&gt;&lt;br&gt;&lt;br&gt;

  &lt;label&gt;
    &lt;input type="checkbox" name="subscribe"&gt; Subscribe to newsletter
  &lt;/label&gt;&lt;br&gt;&lt;br&gt;

  &lt;label&gt;Gender:&lt;/label&gt;&lt;br&gt;
  &lt;input type="radio" name="gender" value="male"&gt; Male&lt;br&gt;
  &lt;input type="radio" name="gender" value="female"&gt; Female&lt;br&gt;&lt;br&gt;

  &lt;input type="submit" value="Register"&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-input-types.php" class="text-blue-600 hover:underline">Input Types Explained →</a></p>
        </div>
    </article>
</main>
