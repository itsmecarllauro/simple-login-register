<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap');
  </style>
</head>
<body class="bg-[#e6e0d4] min-h-screen flex flex-col items-center justify-center p-6">
  <div class="max-w-7xl w-full">
    <header class="mb-10 px-4 sm:px-6 md:px-12 text-center">
      <h1
        class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-widest text-[#3f3a39] font-montserrat uppercase"
        style="letter-spacing: 0.2em;"
      >
        USER REGISTRATION IN PHP
      </h1>
      <h2
        class="mt-2 text-lg sm:text-xl md:text-2xl font-semibold tracking-widest text-[#3f3a39] font-montserrat uppercase"
        style="letter-spacing: 0.15em;"
      >
        WITH LOGIN FORM
      </h2>
    </header>

    <main class="flex flex-col sm:flex-row gap-8 justify-center px-4 sm:px-6 md:px-12">

      <section
        class="bg-white border border-gray-200 p-6 w-full max-w-xs sm:max-w-sm shadow-sm relative"
      >
        <span
          class="absolute top-3 right-3 text-xs text-gray-700 font-semibold font-sans cursor-pointer"
          ><a href="index.php" class="hover:underline">Login</a></span
        >
        <h3
          class="text-center text-xl font-bold text-gray-900 font-sans mb-6"
          >Registration</h3
        >
        <form action="register.php" method="POST">
          <label
            for="reg-username"
            class="block text-xs font-semibold text-gray-700 mb-1 font-sans"
            >Username <span class="text-red-600">*</span></label
          >
          <input
            id="reg-username"
            name="username"
            type="text"
            aria-label="Username"
            class="w-full border border-gray-300 rounded px-3 py-1.5 mb-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400"
            required
          />

          <label
            for="reg-email"
            class="block text-xs font-semibold text-gray-700 mb-1 font-sans"
            >Email <span class="text-red-600">*</span></label
          >
          <input
            id="reg-email"
            name="email"
            type="email"
            aria-label="Email"
            class="w-full border border-gray-300 rounded px-3 py-1.5 mb-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400"
            required
          />

          <label
            for="reg-password"
            class="block text-xs font-semibold text-gray-700 mb-1 font-sans"
            >Password <span class="text-red-600">*</span></label
          >
          <input
            id="reg-password"
            name="password"
            type="password"
            aria-label="Password"
            class="w-full border border-gray-300 rounded px-3 py-1.5 mb-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400"
            required
          />

          <label
            for="reg-confirm-password"
            class="block text-xs font-semibold text-gray-700 mb-1 font-sans"
            >Confirm Password <span class="text-red-600">*</span></label
          >
          <input
            id="reg-confirm-password"
            name="confirm_password"
            type="password"
            aria-label="Confirm Password"
            class="w-full border border-gray-300 rounded px-3 py-1.5 mb-6 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400"
            required
          />

          <button
            type="submit"
            class="w-full bg-yellow-400 text-black text-xs font-sans font-semibold rounded py-2"
          >
            Sign up
          </button>

          <p class="mt-4 text-red-500 text-xs text-center" id="error-message"></p>
        </form>
      </section>
    </main>
  </div>
</body>
</html>