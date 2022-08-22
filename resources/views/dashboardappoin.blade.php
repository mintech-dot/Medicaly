@extends('dashboardlayout')

@section('content')
    
<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#1D4ED8" stroke="#1D4ED8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                    </svg>
                    
                    <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                </div>
            </div>
            <nav class="mt-10">
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="dashboardappoin">
                    <span class="mx-3">Appointments</span>
                </a>
    
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100"
                    href="/dashboard">
                    <span class="mx-3">Sponsors</span>
                </a>
    
               

                
                
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-blue-700">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
    
                    
                </div>
    
                <div class="flex items-center">
                    
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                            class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover"
                            src="https://i.ibb.co/5v10Kxd/5402435-account-profile-user-avatar-man-icon.png"
                            alt="Your avatar">
                        </button>
    
                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                            style="display: none;"></div>
    
                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                            style="display: none;">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white">Profile</a>
                            
                            <a href="../logout.php"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium text-center">Sponsors</h3>
                    <div>
                    <p class="text-center text-lg text-red-500"> </p>
                    </div>
                    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
                    
                    <div class="flex flex-col justify-center md:justify-start my-auto pt-9 md:pt-0 px-9 ">
                    @foreach($ordersUpdate as $p)    
                    <form class="flex flex-col pt-3 " action="/dashboardappoin/update" method="post">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Full name
                                      </label>
                                      <input type="text" name="fname" value="{{$p->full_name}}" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Full name" />                        
                                </div>
                                  <div class="w-full md:w-1/2 px-3">
                                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Address
                                    </label>
                                   <input type="text" name="address" value="{{$p->address}}" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Address" />                        
                                 </div>
                                </div>
                                
                               
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                      Phone number
                                      </label>
                                      <input type="text" name="pnumber" value="{{$p->p_number}}" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Phone number" />                        
                                  </div>
                                    <div class="w-full md:w-1/2 px-3">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                      Clinic Name
                                      </label>
                                      <input type="text" name="med" value="{{$p->med}}" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Email" />                        
                                  </div>
                                  </div>
                                  <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                      Appointement Day
                                    </label>
                                      <input type="text" name="date" value="{{$p->date}}" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Work Time" />                        
                                  </div>
                                    
                                  </div>
                                  
                                
                                  <input type="hidden" name="id" value="{{$p->id}}">
                                  <input type="submit" value="Update" class="bg-blue-700 text-white font-bold text-lg hover:bg-blue-500 p-2 mt-8 rounded-lg">
                               
                              </form>
                              @endforeach
                        <div class="text-center pt-12 pb-12">
                        </div>
                    </div>
                    </div>
              
              
              
                      <!--Card-->
                      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
              
              
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">                              
                      <thead>
                                  <tr>
                                      <th data-priority="1">Full name</th>
                                      <th data-priority="2">Address</th>
                                      <th data-priority="3">Phone Number</th>
                                      <th data-priority="4">Clinic Name</th>
                                      <th data-priority="5">Appointement Day</th>
                                      <th data-priority="8">Edit</th>
                                      <th data-priority="9">Delete</th>


                                    </tr>
                              </thead>
                              <tbody>
                              @foreach($orders as $p)
                                            <tr>
                                            <td>{{$p->full_name}}</td>
                                            <td>{{$p->address}}</td>
                                            <td>{{$p->p_number}}</td>	
                                            <td>{{$p->med}}</td>	
                                            <td>{{$p->date}}</td>	

                                            <td><a href="dashboardappoin/edit/{{$p->id}}"> <button name="Edit" type="submit"  class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded\">Edit</button> </a></td> 
                                            <td><a href="dashboardappoin/delete/{{$p->id}}"><button name="Delete" class="bg-slate-700 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded\">Delete</button></a></td>
                              @endforeach   	
              
                                  <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
              
                                  
                              </tbody>
              
                          </table>
              
              
                      </div>
                      <!--/Card-->
                  <div class="text-center pt-12 pb-12">
                  </div>
              
                  </div>
                  <!--/container-->
@endsection
