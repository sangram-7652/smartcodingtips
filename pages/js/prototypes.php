<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/prototypes" class="text-blue-600 hover:underline">Prototypes</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🔗 JavaScript Prototypes</h1>

  <p class="mb-4">
    In JavaScript, every object has a hidden internal property called <code>[[Prototype]]</code> which can be accessed using <code>__proto__</code> or more reliably through <code>Object.getPrototypeOf()</code>. Prototypes allow objects to share properties and methods.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📚 What is a Prototype?</h2>
  <p class="mb-4">
    Think of prototypes as inheritance in JavaScript. When you try to access a property or method on an object, JavaScript will look at the object first. If it doesn't find it, it goes up the prototype chain.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Constructor Function and Prototype</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>function Person(name) {
  this.name = name;
}

// Adding method to prototype
Person.prototype.greet = function() {
  console.log("Hi, I’m " + this.name);
};

const john = new Person("John");
john.greet(); // "Hi, I’m John"
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Prototype Chain Example</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>console.log(john.__proto__ === Person.prototype); // true
console.log(Person.prototype.__proto__ === Object.prototype); // true
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚀 Using <code>Object.create()</code></h2>
  <p class="mb-2">
    You can also manually create objects with a specific prototype using <code>Object.create()</code>.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const animal = {
  speak() {
    console.log("I can speak");
  }
};

const dog = Object.create(animal);
dog.speak(); // "I can speak"
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Summary</h2>
  <ul class="list-disc list-inside mb-6">
    <li>All JavaScript objects have a prototype.</li>
    <li>Methods and properties can be added to constructor function’s prototype.</li>
    <li>Prototype chain enables inheritance.</li>
    <li>Use <code>Object.create()</code> to set prototypes manually.</li>
  </ul>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Understanding prototypes helps in debugging, memory optimization, and writing reusable object-oriented code.
  </div>

</main>
