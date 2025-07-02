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
            <li class="text-gray-500">Checkbox & Radio</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Checkbox & Radio Buttons</h1>
        <p class="text-lg mb-4">
            HTML checkboxes and radio buttons allow users to make selections from a list of options. They are commonly used in forms for user preferences, surveys, and questionnaires.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Checkbox</h2>
            <p class="mb-2">
                A checkbox allows users to select one or more options independently. Use the same <code>name</code> if multiple selections belong to the same group.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form&gt;
  &lt;label&gt;
    &lt;input type="checkbox" name="hobby" value="reading"&gt; Reading
  &lt;/label&gt;&lt;br&gt;
  &lt;label&gt;
    &lt;input type="checkbox" name="hobby" value="music"&gt; Music
  &lt;/label&gt;&lt;br&gt;
  &lt;label&gt;
    &lt;input type="checkbox" name="hobby" value="travel"&gt; Travel
  &lt;/label&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Radio Buttons</h2>
            <p class="mb-2">
                Radio buttons allow users to select only one option from a group. All radio inputs in the same group must share the same <code>name</code>.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;form&gt;
  &lt;label&gt;
    &lt;input type="radio" name="gender" value="male"&gt; Male
  &lt;/label&gt;&lt;br&gt;
  &lt;label&gt;
    &lt;input type="radio" name="gender" value="female"&gt; Female
  &lt;/label&gt;&lt;br&gt;
  &lt;label&gt;
    &lt;input type="radio" name="gender" value="other"&gt; Other
  &lt;/label&gt;
&lt;/form&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips for Checkboxes & Radios</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always group related options using <code>fieldset</code> and <code>legend</code> for better accessibility.</li>
                <li>Wrap input elements with <code>&lt;label&gt;</code> for a better clickable experience.</li>
                <li>Ensure each option has a <code>value</code> attribute for form data processing.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-button-tag.php" class="text-blue-600 hover:underline">HTML Button Tag →</a></p>
        </div>
    </article>
</main>
