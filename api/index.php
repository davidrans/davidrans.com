<?php

$db = [
   'name' => 'David Rans',
   'title' => 'Software Engineer',
   'email' => 'david@davidrans.com',
   'phone' => '+1-805-555-5555',
];

/* $inputClasses = ' mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 '; */
/* $editForm = ' */
/* <form class="grid grid-cols-1 gap-6 p-7 w-80 bg-white rounded-lg text-gray-600"> */
/*     <h2 class="text-2xl">Edit Card</h2> */
/*     <label class="block"> */
/*         <span class="text-gray-700">Full name</span> */
/*         <input type="text" name="name" value="${db.name}" class="${inputClasses}" /> */
/*     </label> */
/*     <label class="block"> */
/*         <span class="text-gray-700">Title</span> */
/*         <input type="text" name="title" value="${db.title}" class="${inputClasses}" /> */
/*     </label> */
/*     <label class="block"> */
/*         <span class="text-gray-700">Email</span> */
/*         <input type="email" name="email" value="${db.email}" class="${inputClasses}" /> */
/*     </label> */
/*     <label class="block"> */
/*         <span class="text-gray-700">Phone</span> */
/*         <input type="tel" name="phone" value="${db.phone}"  class="${inputClasses}" /> */
/*     </label> */
/*     <button type="submit">Save</button> */
/* </form> */
/* '; */

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>David Rans</title>
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  </head>
  <body class="h-screen content-center bg-gradient-to-r from-pink-100 to-blue-100">
    <div class="flex flex-row justify-evenly items-center min-h-screen">
       <div id="card" class="flex flex-col p-7 w-56 h-96 bg-white rounded-lg text-gray-600 shadow-xl">
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
    </div>
  </body>
</html>
