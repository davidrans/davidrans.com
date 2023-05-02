<?php

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
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <style>
      #card {
        perspective: 1000px;
      }

      #card:hover #card_contents, #card:active #card_contents, #card:focus #cardContents {
        transform: rotateY(180deg);
      }

      #card_contents {
        transition: transform .25s ease-in-out;

        transform-origin: 50% 50%;
        transform-style: preserve-3d;
      }

      #card_back {
        transform: rotateY(180deg);
        position: absolute;
        right: 28px;
      }

      #card_front {
        position: absolute;
        height: 328px;
      }

      #card_front,
      #card_back {
        backface-visibility: hidden;
      }
    </style>
  </head>
  <body class="h-screen content-center bg-gradient-to-r from-pink-100 to-blue-100">
    <div class="flex flex-row justify-evenly items-center min-h-screen">
       <div id="card">
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
                  <div class="title text-sm"><?= $db['title'] ?></div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </body>
</html>
