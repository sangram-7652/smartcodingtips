<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/forms" class="text-blue-600 hover:underline dark:text-blue-400">Forms</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Formik / RHF / Yup</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧰 Form Libraries: Formik, React Hook Form, Yup</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Managing complex forms in React becomes easier with libraries like <strong>Formik</strong>, <strong>React Hook Form</strong>, and <strong>Yup</strong> for validation. Here's an overview of each.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Formik -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Formik</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Formik simplifies form state, validation, and submission. It integrates well with Yup for schema-based validation.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-4 overflow-x-auto"><code>
import { Formik, Form, Field, ErrorMessage } from 'formik';

&lt;Formik
  initialValues={{ email: '' }}
  onSubmit={(values) =&gt; console.log(values)}
&gt;
  &lt;Form&gt;
    &lt;Field name="email" type="email" /&gt;
    &lt;ErrorMessage name="email" /&gt;
    &lt;button type="submit"&gt;Submit&lt;/button&gt;
  &lt;/Form&gt;
&lt;/Formik&gt;
  </code></pre>

  <!-- React Hook Form -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎣 2. React Hook Form (RHF)</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    A lightweight and performant form library that uses React hooks. Very fast and requires minimal re-renders.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-4 overflow-x-auto"><code>
import { useForm } from 'react-hook-form';

const { register, handleSubmit } = useForm();
const onSubmit = data =&gt; console.log(data);

&lt;form onSubmit={handleSubmit(onSubmit)}&gt;
  &lt;input {...register("email")} /&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
  </code></pre>

  <!-- Yup -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 3. Yup (Validation)</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Yup is a JavaScript schema builder for validating values. Commonly used with Formik or RHF.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-4 overflow-x-auto"><code>
import * as Yup from 'yup';

const schema = Yup.object({
  email: Yup.string().email().required(),
});
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">🤔 When to Use What?</h2>
  <ul class="list-disc list-inside mb-4 text-black dark:text-gray-300">
    <li><strong>Formik:</strong> Beginner-friendly, good for complex forms</li>
    <li><strong>React Hook Form:</strong> Best performance, lightweight</li>
    <li><strong>Yup:</strong> Use it for schema-based validations</li>
  </ul>

  <p class="text-black dark:text-gray-300">
    All of these tools enhance productivity and make your forms clean, reliable, and scalable.
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/form-submit') ?>" class="hover:underline">← Previous: Form Submission</a>
  <a href="<?= base_url('react/login-example') ?>" class="hover:underline ms-auto">Next: Login Example →</a>
</div>

</main>
