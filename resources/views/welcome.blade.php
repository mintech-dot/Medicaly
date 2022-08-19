@extends('layout')

@section('content')

  <!-- Navbar -->
  <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a class="mr-5 hover:text-gray-600">About us</a>
      <a class="mr-5 hover:text-gray-600">Start now</a>
      <a class="hover:text-gray-600">Contact Us</a>
    </nav>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-600 lg:items-center lg:justify-center mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-[#044D5E] rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Medicaly</span>
    </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <button class="inline-flex items-center text-white bg-[#ff748e] border-0 py-1 px-3 focus:outline-none hover:bg-[#fc8da1] rounded text-base mt-4 md:mt-0">Search Now
        
      </button>
    </div>
  </div>
</header>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="{{ URL('img/doctor.svg') }}">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-[#044D5E]">Free and Open source CRUD Project</h1>
      <p class="mb-8 leading-relaxed">The idea of this project is to book a medical appointment at your nearest doctor or upon request. Doctors can also share information about their whereabouts.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-[#044D5E] border-0 py-2 px-6 focus:outline-none hover:bg-[#06687e] rounded text-lg">Search Now</button>
        <a href="/joinus">
        <button class="ml-4 inline-flex text-white bg-[#ff748e] border-0 py-2 px-6 focus:outline-none hover:bg-[#fc8da1] rounded text-lg">Join us</button>
        </a>
      </div>
    </div>
  </div>
</section>

<div class="container px-5 py-8 mx-auto">
      <div  class=" flex flex-col text-center w-full mb-20">
        <h1 class="title-font xl:text-4xl text-3xl font-bold bg-clip-text text-[#044D5E]"> Search Now !</h1>
    </div>
    <div class="px-8 md:px-16 sm:px-36 lg:px-64">
    <form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-600 sr-only ">Search</label>
    <div class="relative">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#06687e] focus:border-[#06687e]" placeholder="Search Places, Nouns,..." required="">
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#044D5E] hover:bg-[#06687e] focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
    </div>
    </form>
    </div>


</div>
<div class="grid gap-6 sm:grid-cols-2 container p-5 mx-auto lg:grid-cols-3 ">
@foreach($joinus as $p)
      <div class="relative group">
          <div aria-hidden="true" class="absolute inset-0 rounded-xl shadow-xl transition duration-300 group-hover:scale-105 lg:group-hover:scale-110"></div>
            <div class="relative text-center space-y-4 p-6 md:p-8">
                <img src="{{ URL('img/orders.svg') }}" class="w-16 m-auto" width="512" height="512" >
                <h4 class="text-2xl text-gray-600 font-medium transition group-hover:text-[#044D5E]">{{$p->name}}</h4>
                <p class="text-gray-600">{{$p->description}}</p>
                <a href="orders" class="ml-4 inline-flex">
                <button class=" text-white bg-[#044D5E] border-0 py-2 px-6 focus:outline-none hover:bg-[#06687e] rounded text-lg">Order now</button>  
                </a>
            </div>
          </div>
          @endforeach

      </div>

</div>

  <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-[#044D5E]">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Feel free to contact us and to give feedbacks</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#044D5E] focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-[#ff748e] border-0 py-2 px-8 focus:outline-none hover:bg-[#fc8da1] rounded text-lg">Contact Us</button>
        </div>
        
      </div>
    </div>
  </div>
</section>

<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-[#044D5E] rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Medicaly</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Medicaly —
      <a href="https://twitter.com/raid_sobhi" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@raid_sobhi</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg>
      </a>
      <a class="ml-3 text-gray-500">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
      </a>
      <a class="ml-3 text-gray-500">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
      </a>
    </span>
  </div>
</footer>

@endsection
