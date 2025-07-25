<?php
include 'config.php';
include 'includes/header.php';
?>

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <section class="bg-white p-6 rounded-xl shadow-md dark:bg-gray-900 dark:text-white">
        <h1 class="text-3xl font-bold mb-6 ">Contact Us</h1>
        <p class=" mb-6">Have questions, feedback, or business inquiries? We'd love to hear from you.</p>

        <!-- Contact Form -->
        <form action="#" method="post" class="space-y-4">
            <div>
                <label for="name" class="block font-medium text-gray-700 dark:text-white">Your Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400 bg-gray-100">
            </div>

            <div>
                <label for="email" class="block font-medium text-gray-700 dark:text-white">Your Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400 bg-gray-100">
            </div>

            <div>
                <label for="message" class="block font-medium text-gray-700 dark:text-white">Your Message</label>
                <textarea id="message" name="message" rows="5" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400 bg-gray-100"></textarea>
            </div>

            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Send Message
            </button>
        </form>

        <!-- Static Info (Optional) -->
        <div class="mt-10 border-t pt-6 text-sm ">
            <p><strong>Email:</strong> sangramsingh.dev@gmail.com</p>
            <p><strong>Website:</strong> https://www.smartcodingtips.com</p>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>