@extends('layout')

@section('content')
    

<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto border-width: 1px bg-white shadow-xl rounded pt-6 pb-8">
    <div class="flex flex-col text-center w-full mb-12 ">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
    <form action="/joinus/store" method="post">
      @csrf
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Full name</label>
            <input type="text" name="fname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Address</label>
            <input type="email"  name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>

        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Phone Number</label>
            <input type="text" name="pnumber" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>

        <div class="p-2 w-full">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Worktime</label>
            <input type="text" name="worktime" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        

        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea  name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button type="submit" class="flex mx-auto text-white bg-[#ff748e] border-0 py-2 px-8 focus:outline-none hover:bg-[#fc8da1] rounded text-lg">Submit</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</section>
    



  
@endsection
