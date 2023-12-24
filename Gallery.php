<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="index.js"></script>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
  <style>
  .imag {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    }

  .hovers {
    height: 100px;
    width: 100px;
  }
  </style>
<body>


  <?php
      include "nav.html" ?>


  <hr>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Gallery</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base"></p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block hover:hovers" src="/AdobeLightroom/DSC_0032.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="/AdobeLightroom/IMG_20200511_055441.jpg">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="/AdobeLightroom/DSC_0042.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="/AdobeLightroom/IMG_20200322_182052.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/4">
                <img alt="gallery" class="w-full object-cover h-full object-center block " src="/AdobeLightroom/DSC_0261.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="/AdobeLightroom/DSC_0047%20(1).jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="/AdobeLightroom/IMG_20200426_060440.jpg">
              </div>
            </div>
          </div>
        </div>
      </section>
  <hr>

  <?php
    include "footer.html"
  ?>
</body>
</html>