<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Done !</title>
</head>
    <body >
        <section class="text-gray-800 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
              <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" src="<?php echo e(URL('img/order.svg')); ?>">
              <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium bg-clip-text text-transparent bg-[#044D5E]">Booking request sent successfully</h1>
                <p class="mb-8 leading-relaxed">Your request will be confirmed by one of the clinic workers</p>
                <div class="flex justify-center">
                  <a href="/" class="inline-flex" >
                  <button class=" text-white bg-[#ff748e] border-0 py-2 px-6 focus:outline-none hover:bg-[#fc8da1] rounded-full text-lg">Back to Home</button>
                  <a>
                </div>
                
              </div>
            </div>
          </section>
    </body>
</html><?php /**PATH /home/mintech/Documents/Node js/medical-appointments/resources/views/done.blade.php ENDPATH**/ ?>