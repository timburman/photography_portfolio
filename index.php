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

    <section class="text-gray-700 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Photos By Aryan Kaushik
            <br class="hidden lg:inline-block">@timberman
          </h1>
          <p class="mb-8 leading-relaxed">Begginer in photography.</p>
          <div class="flex justify-center">
            <form action="https://instagram.com/_timberman__" method="get" target="_blank">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
              Instagram
              </button>
            </form>
          </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img class="rounded" alt="hero" src="/AdobeLightroom/DSC_0290%20(1).jpg?raw=true">
        </div>
      </div>
    </section>
    <hr>
    
    <?php
      include "footer.html"
    ?>

  </body>
  </html>