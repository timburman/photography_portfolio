<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Timberman's Gallery</title>
</head>
<style>
  .imag {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    }
</style>
<body>
  
  <?php
    include "nav.html" ?>

  <hr>
  
  
  <form class = "ml-4 mr-4" action = "./backend/content.php" method = "post">
    <div class="mb-6">
      <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
      <input type="Name" id="name" name="Name" class="p-2 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Aryan" required>
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
      <input type="email" name="Email" id="email" class="p-2 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="aryan@123.com" required>
    </div>
    <div class="mb-6">
      <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone-No</label>
      <input type="tel" name="Phone" id="phone" class="p-2 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
      <!-- <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
          <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
        </div>
        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
      </div> -->
      <input type="submit" text="Submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
  </form>

  <?php
    include "footer.html"
  ?>
</body>
</html>