<?php

if (php_sapi_name() == 'cli-server' && preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
   return false;
}

$db = [
   'name' => 'David Rans',
   'title' => 'Software Engineer',
   'email' => 'david@davidrans.com',
   'phone' => '+1-805-555-5555',
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>David Rans</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32x32.png">
    <style>
      #card {
        perspective: 1000px;
      }

      #card_contents.flipped {
        transform: rotateY(180deg);
      }

      #card_contents {
        transition: transform .25s ease-in-out;

        transform-origin: 50% 50%;
        transform-style: preserve-3d;
      }

      #card_back {
        transform: rotateY(180deg);
        right: 28px;
      }

      #card_front,
      #card_back {
        position: absolute;
        height: 328px;
        width: 168px;
        backface-visibility: hidden;
      }
    </style>
  </head>
  <body class="h-screen content-center bg-gradient-to-r from-pink-100 to-blue-100">
    <div class="flex flex-row justify-evenly items-center min-h-screen">
       <div id="card" x-data="{}" @click="$el.querySelector('#card_contents').classList.toggle('flipped')">
         <span style="position: absolute; top: -20px; right: -20px">
            <svg class="w-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M94 187.1C120.8 124.1 183.3 80 256 80c39.7 0 77.8 15.8 105.9 43.9l4.1 4.1-35.7 35.7c-6.6 6.6-10.3 15.6-10.3 25c0 19.5 15.8 35.3 35.3 35.3H472c13.3 0 24-10.7 24-24V83.3C496 63.8 480.2 48 460.7 48c-9.4 0-18.3 3.7-25 10.3L400 94.1l-4.1-4.1C358.8 52.8 308.5 32 256 32C163.4 32 83.9 88.2 49.8 168.3c-5.2 12.2 .5 26.3 12.7 31.5s26.3-.5 31.5-12.7zm368 157c5.2-12.2-.4-26.3-12.6-31.5s-26.3 .4-31.5 12.6C391 388.1 328.6 432 256 432c-39.7 0-77.8-15.8-105.9-43.9l-4.1-4.1 35.7-35.7c6.6-6.6 10.3-15.6 10.3-25c0-19.5-15.8-35.3-35.3-35.3H40c-13.3 0-24 10.7-24 24V428.7C16 448.2 31.8 464 51.3 464c9.4 0 18.3-3.7 25-10.3L112 417.9l4.1 4.1C153.2 459.2 203.5 480 256 480c92.5 0 171.8-56 206-135.9zM448 176H385.9L448 113.9V176zM64 336h62.1L64 398.1V336z"/></svg>
         </span>
          <div id="card_contents" class="p-7 w-56 h-96 bg-white rounded-lg text-gray-600 shadow-xl">
             <div id="card_front" class="flex flex-col h-full">
                <div id="card-header" class="grow-0">
                  <div class="name uppercase text-3xl"><?= $db['name'] ?></div>
                  <hr class="my-2" />
                  <div class="title text-sm"><?= $db['title'] ?></div>
                </div>
                <div class="grow"></div>
                <div id="card-footer" class="grow-0">
                  <div class="email text-sm">
                    <a href="mailto:<?= $db['email'] ?>"><?= $db['email'] ?></a>
                    </div>
                    <div class="phone text-sm">
                      <a href="tel:<?= $db['phone'] ?>"><?= $db['phone'] ?></a>
                    </div>
                </div>
             </div>
             <div id="card_back" class="flex flex-col h-full">
                <div id="card-header" class="grow-0">
                  <div class="profile-image flex justify-evenly">
                     <img class="rounded-full w-24" src="/public/king_david.png" />
                  </div>
                </div>
                <div class="grow">
                  <ul class="pt-14">
                     <li>> Projects</li>
                     <li>> About Me</li>
                     <li>> Resume</li>
                  </ul>
                </div>
                <div id="card-footer" class="grow-0">
                  <div class="email text-sm">
                    <a href="mailto:<?= $db['email'] ?>"><?= $db['email'] ?></a>
                    </div>
                    <div class="phone text-sm">
                      <a href="tel:<?= $db['phone'] ?>"><?= $db['phone'] ?></a>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </body>
</html>
