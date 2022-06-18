

<div class="flex my-0 p-0  text-center w-full bg-white border-t border-gray-300 z-50 ">
    
        <a href="{{url('/')}} " class="m-auto px-2 py-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ request()->is('/') ? 'text-gray-900' : 'text-gray-400' }} " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>   
    
    
        <a href="{{url('notificaciones')}}" class="m-auto px-2 py-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ request()->is('notificaciones') ? 'text-gray-900' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        </a>
    
    
        <a href="{{url('crear')}}" class="m-auto px-2 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ request()->is('crear') ? 'text-gray-900' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
    
    
        <a href="{{url('mensajes')}}" class="m-auto px-2 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ request()->is('mensajes') ? 'text-gray-900' : 'text-gray-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
        </a>

    
    <div class="m-auto px-2 py-3">
        <!-- Profile dropdown -->
        <div x-data="{isOpen:false}" class="  relative">
            <div>
              <button type="button" @click="isOpen = !isOpen" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100">
                    <img src="" alt="Foto de perfil">
                </span>
                
              </button>
            </div>
  
            <!--
              Dropdown menu, show/hide based on menu state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div 
            
            x-cloak x-show="isOpen"
              x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
              x-transition:enter-start="translate-x-full"
              x-transition:enter-end="translate-x-0"
              x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
              x-transition:leave-start="translate-x-0"
              x-transition:leave-end="translate-x-full"

            class="origin-top-right absolute -right-4  -mt-32 w-64 rounded-md shadow-2xl py-1  bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" style="  top: -475px; " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-top" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <div class="flex px-4 ">
                  <div class=" p-1 vertical-middle">
                    <a href="{{url('perfil')}}" class=" {{ request()->is('perfil') ?  : '' }} block  py-1 text-base text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <img src="" alt="Foto de perfil">
                        </span>
                    </a>
                  </div>
                  <div class="ml-auto py-2 cursor-pointer " @click="isOpen = !isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </div>
              </div>
             
              <div class="text-left px-4 leading-none">
                  

<a href="{{url('perfil')}}"><span class="text-black font-bold text-lg leading-none"></span></a>
                <br>
                <span class="text-gray-400 text-base leading-snug"><span>@</span></span>
            </div>
            <div class="flex text-base pb-3 py-1 border-b px-4 font-normal text-gray-600">
                
                
            </div>

            <a href="{{url('perfil')}}" class="flex px-4 {{ request()->is('perfil') ? 'bg-gray-100' : '' }}">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </div>
                <div>
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi perfil</div>
                </div>
            </a>

            <a href="{{url('referidos')}}" class="flex px-4 {{ request()->is('referidos') ? 'bg-gray-100' : '' }}">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                </div>
                <div>
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-0">Mis referencias</div>
                </div>
            </a>

            <a href="{{url('marcadores')}}" class="flex px-4 {{ request()->is('marcadores') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                      </svg>
                </div>
                <div >
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-1">Marcadores</div>
                </div>
            </a>

            <a href="{{url('galeria')}}" class="flex px-4 {{ request()->is('galeria') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                </div>
                <div >
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-1">Galeria</div>
                </div>
            </a>


            <a href="{{url('configuracion')}}" class="flex px-4 {{ request()->is('configuracion') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                </div>
                <div >
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-1">Configuración</div>
                </div>
            </a> 
            
            
            <a href="{{url('facturacion')}}" class="flex px-4 {{ request()->is('facturacion') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                      </svg>
                </div>
                <div >
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" role="menuitem" tabindex="-1" id="user-menu-item-1">Facturación</div>
                </div>
            </a>
            <hr>
            <a href="{{url('tarjetas')}}" class="flex px-4 {{ request()->is('tarjetas') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                      </svg>
                </div>
                <div >
                    <div class="block px-3 py-2 text-base text-gray-700 font-semibold text-left leading-none" role="menuitem" tabindex="-1" id="user-menu-item-1"> <span>Tus tarjetas</span> <br> <span class="text-gray-400 text-sm">Para suscribirte</span> </div>
                    
                </div>
            </a>
            <a href="{{url('monedero')}}" class="flex px-4 {{ request()->is('monedero') ? 'bg-gray-100' : '' }} ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                </div>
                <div >
                    <div class="  block px-3 py-2 text-base text-gray-700 font-semibold leading-none text-left" role="menuitem" tabindex="-1" id="user-menu-item-1"> <span>Mi billetera virtual</span> <br> <span class="text-gray-400 text-sm">Para recargar y suscribirte</span> </div>
                </div>
            </a>
            
                <a href="{{url('bancos')}}" class="flex px-4 {{ request()->is('bancos') ? 'bg-gray-100' : '' }} ">
                    <div class="my-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
                    <div >
                        <div class="  block px-3 py-2 text-base text-gray-700 font-semibold leading-none text-left " role="menuitem" tabindex="-1" id="user-menu-item-1"> <span>Añadir banco</span> <br> <span class="text-gray-400 text-sm">Para recibir dinero</span> </div>
                    </div>
                </a>
            
            
                <a href="{{url('backoffice')}}" class="flex px-4 {{ request()->is('backoffice') ? 'bg-gray-100' : '' }} ">
                    <div class="my-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                          </svg>
                    </div>
                    <div >
                        <div class="  block px-3 py-2 text-base text-gray-700 font-semibold leading-none text-left " role="menuitem" tabindex="-1" id="user-menu-item-1"> <span>Admin</span> <br> <span class="text-gray-400 text-sm">Backoffice</span> </div>
                    </div>
                </a>
            
            <hr>
            <div class="flex px-4 cursor-pointer ">
                <div class="my-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                </div>
                <div class="  block px-3 py-2 text-base text-gray-700 font-semibold" >
                    <!-- Botòn cerrar sesiòn-->
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Cerrar sesión') }}
                    </div>
                    </form>
                </div>
            </div>
             
            
              
            </div>
          </div>

    </div>
</div>