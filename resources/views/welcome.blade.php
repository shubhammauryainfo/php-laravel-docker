<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NexBytes - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="font-inter bg-white text-gray-800">

  <div class="max-w-[1440px] mx-auto">

    <!-- Header -->
    <header class="flex items-center justify-between py-6 px-8 bg-white shadow-md">
      <div class="flex items-center space-x-3">
        <img src="https://placehold.co/150x50" alt="NexBytes Logo" class="h-12 w-auto" />
        <span class="text-2xl font-bold text-[#1F2937]">NexBytes</span>
      </div>
      <nav class="hidden md:flex space-x-8 text-gray-700">
        <a href="#" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="#" class="hover:text-blue-600">Services</a>
        <a href="#" class="hover:text-blue-600">Portfolio</a>
        <a href="#" class="hover:text-blue-600">Contact</a>
      </nav>
      <div class="hidden md:block">
        <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700">Get Started</a>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col-reverse md:flex-row items-center justify-between px-8 py-16 bg-[#F9FAFB]">
      <div class="max-w-lg">
        <h1 class="text-4xl font-bold mb-6 text-[#111827]">Empowering Your Digital Future</h1>
        <p class="text-gray-600 mb-6">
          NexBytes helps businesses unlock their full potential through innovative technology solutions.
        </p>
        <div class="flex space-x-4">
          <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Get Started</a>
          <a href="#" class="text-blue-600 px-6 py-3 rounded-md border border-blue-600 hover:bg-blue-50">Learn More</a>
        </div>
      </div>
      <div class="mb-10 md:mb-0">
        <img src="https://source.unsplash.com/600x400/?technology,business" alt="Hero Image" class="w-full h-auto rounded-md" />
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-8 bg-white">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#111827] mb-4">Our Services</h2>
        <p class="text-gray-600">Delivering excellence across every touchpoint.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 bg-[#F3F4F6] rounded-lg shadow-sm text-center">
          <i class="fas fa-laptop-code text-blue-600 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-[#111827] mb-2">Web Development</h3>
          <p class="text-gray-600">Custom websites and applications built for performance and scalability.</p>
        </div>
        <div class="p-6 bg-[#F3F4F6] rounded-lg shadow-sm text-center">
          <i class="fas fa-mobile-alt text-blue-600 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-[#111827] mb-2">App Development</h3>
          <p class="text-gray-600">Crafting seamless mobile experiences for iOS and Android.</p>
        </div>
        <div class="p-6 bg-[#F3F4F6] rounded-lg shadow-sm text-center">
          <i class="fas fa-cloud text-blue-600 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-[#111827] mb-2">Cloud Solutions</h3>
          <p class="text-gray-600">Scale your business with reliable cloud computing services.</p>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-20 px-8 bg-[#F9FAFB]">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <img src="https://source.unsplash.com/500x400/?team,technology" alt="About NexBytes" class="w-full md:w-1/2 rounded-md" />
        <div>
          <h2 class="text-3xl font-bold text-[#111827] mb-6">About NexBytes</h2>
          <p class="text-gray-600 mb-6">
            NexBytes is your trusted partner in digital transformation. Our team of experts delivers innovative solutions
            that drive growth and efficiency.
          </p>
          <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Learn More</a>
        </div>
      </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 px-8 bg-blue-600 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Ready to start your project?</h2>
      <p class="mb-6">Get in touch with NexBytes today and let's build something great together.</p>
      <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100">Contact Us</a>
    </section>

    <!-- Footer -->
    <footer class="bg-[#111827] text-gray-400 py-8 px-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <p>&copy; 2025 NexBytes. All rights reserved.</p>
        </div>
        <div class="flex space-x-6">
          <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="hover:text-white"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </footer>

  </div>

</body>

</html>
