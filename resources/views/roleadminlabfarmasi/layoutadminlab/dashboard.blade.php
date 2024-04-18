<!DOCTYPE html>
<html>
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="logo.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Dashboard Admin Laboratorium Prodi Farmasi</title>
    </head>
    <!-- END: Head -->
    <body class="py-5 bg-merah200-polteka text-putih-polteka font-polteka">
        <!-- BEGIN: Mobile Menu -->
        <div class="block md:hidden bg-merah200-polteka text-putih-polteka">
            <div class="flex mr-auto">
                <a href="#" class="ml-8 flex-grow">
                    <img alt="Logo" class="w-10" src="logoputih.png">
                </a>
                <a href="#" class="mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 buttonToogle" viewBox="0 0 24 24"><path fill="currentColor" d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1m0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1M3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1"/></svg>
                </a>
            </div>
            <hr class="border-1 w-full mt-3 border-putih-polteka border-opacity-25">
            <ul class="py-5 mx-8 mobileMenu hidden">
                <li>
                    <a href="{{ route('dashboardadminlabfarmasi') }}" class="flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 1024 1024"><path fill="currentColor" d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2M568 868H456V664h112zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3z"/></svg>
                        </div>
                        <div class="ml-3 mt-1 font-semibold">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li Class="opcion-con-desplegable">
                    <a href="#" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.55" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm0 5h18M10 3v18"/></svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Lab Farmasetika
                        </div>
                    </a>
                    <ul class="desplegable hidden mt-3 ml-10">
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('databarangadminlabfarmasetika') }}">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangmasukadminlabfarmasetika') }}">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangkeluaradminlabfarmasetika') }}">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li Class="opcion-con-desplegable">
                    <a href="#" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.55" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm0 5h18M10 3v18"/></svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Lab Tek. Farmasetika
                        </div>
                    </a>
                    <ul class="desplegable hidden mt-3 ml-10">
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('databarangadminlabtekfarmasi') }}">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangmasukadminlabtekfarmasi') }}">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangkeluaradminlabtekfarmasi') }}">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li Class="opcion-con-desplegable">
                    <a href="#" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.55" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm0 5h18M10 3v18"/></svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Lab Kimia
                        </div>
                    </a>
                    <ul class="desplegable hidden mt-3 ml-10">
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('databarangadminlabfarmasikimia') }}">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangmasukadminlabfarmasikimia') }}">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangkeluaradminlabfarmasikimia') }}">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li Class="opcion-con-desplegable">
                    <a href="#" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.55" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm0 5h18M10 3v18"/></svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Lab Farmakognosi
                        </div>
                    </a>
                    <ul class="desplegable hidden mt-3 ml-10">
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('databarangadminlabfarmakognosi') }}">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangmasukadminlabfarmakognosi') }}">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0 hover:font-bold">
                                <a href="{{ route('barangkeluaradminlabfarmakognosi') }}">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="menu__devider my-6"></li>   
                <li>
                    <a href="{{ route('ubahpwadminlabfarmasi') }}" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Ubah Password
                        </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="{{ route('ubahppadminlabfarmasi') }}" class="flex hover:font-bold">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>
                        <div class="ml-3 mt-1">
                            Ubah Gambar Profile
                        </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="{{ route('login') }}" class="flex hover:font-bold" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-6 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        <div class="ml-3 mt-6"> {{ __('Logout') }} </div>
                    </a>
                    <form id="logout-form" action="#" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <script>
                const buttonToogle = document.querySelector('.buttonToogle')
                const mobileMenu = document.querySelector('.mobileMenu')

                buttonToogle.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                })
            </script>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mr-0 md:mr-8 bg-merah200-polteka text-putih-polteka">
            <!-- BEGIN: Side Menu -->
            <nav class="hidden md:block xl:w-[20%] lg:w-[12%] md:w-[12%]">
                <div href="" class="intro-x flex xl:justify-start md:justify-center lg:justify-center xl:pl-5 pt-4">
                    <img alt="Logo" class="xl:hidden lg:w-[50px] md:w-[50px] lg:mt-2" src="logoputih.png">
                    <span class="xl:block hidden text-putih-polteka text-lg ml-3 font-semibold text-[20px]"> Polteka <br>Mangunwijaya</br> </span> 
                </div>
                <div class="my-7"></div>
                <ul>
                    <li>
                        <a href="{{ route('dashboardadminlabfarmasi') }}" class="hidden xl:justify-start xl:flex pt-2 text-hitam-polteka bg-abu-polteka rounded-full xl:ml-8 lg:ml-10 md:ml-6 w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg href="{{ route('dashboardadminlabfarmasi') }}" xmlns="http://www.w3.org/2000/svg" class="xl:w-6 lg:w-8 lg:mr-10 xl:mr-0 md:w-8 md:mr-6" viewBox="0 0 1024 1024"><path fill="currentColor" d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2M568 868H456V664h112zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3z"/></svg>
                            </div>
                            <div class="ml-2 mb-3 font-semibold hidden xl:block">Dashboard</div>
                        </a>
                        <a href="{{ route('dashboardadminlabfarmasi') }}" class="xl:hidden justify-center flex pt-2 md:px-5 lg:px-7 text-hitam-polteka bg-abu-polteka rounded-full md:ml-6 lg:ml-10 w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg href="{{ route('dashboardadminlabfarmasi') }}" xmlns="http://www.w3.org/2000/svg" class="xl:w-6 lg:w-8 lg:mr-10 xl:mr-0 md:w-8 md:mr-6" viewBox="0 0 1024 1024"><path fill="currentColor" d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2M568 868H456V664h112zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3z"/></svg>
                            </div>
                        </a>
                    </li>
                    <li class="my-6"></li>
                    <li>
                        <a class="md:justify-center lg:justify-center xl:justify-start flex">
                            <div class="xl:ml-8 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="xl:w-6 lg:w-8 md:w-8" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.55" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm0 5h18M10 3v18"/></svg>
                            </div>
                            <div class="ml-2 mb-3 font-semibold hidden xl:block">Manajemen</div>
                        </a>
                    </li>
                    <li class="opcion-con-desplegable">
                        <a href="#" class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5">
                            Lab Farmasetika
                        </a>
                        <a href="#" class="xl:hidden justify-center hover:justify-start flex hover:mb-2 hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="block xl:hidden md:w-8 " viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                            </div>
                        </a>
                        <ul class="desplegable xl:ml-[43px] mt-3 hidden md:absolute xl:static left-5 xl:border-none xl:bg-none xl:text-start md:border md:w-40 md:bg-merah200-polteka md:rounded md:text-center">
                            <li class="block xl:hidden py-2 xl:py-0">
                                <a href="#" class="font-bold">
                                    L. Farmasetika
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('databarangadminlabfarmasetika') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangmasukadminlabfarmasetika') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangkeluaradminlabfarmasetika') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable">
                        <a href="#" class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5">
                            Lab Tek. Farmasetika
                        </a>
                        <a href="#" class="xl:hidden justify-center hover:justify-start flex hover:mb-2 hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="block xl:hidden md:w-8 " viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                            </div>
                        </a>
                        <ul class="desplegable xl:ml-[43px] mt-3 hidden md:absolute xl:static left-5 xl:border-none xl:bg-none xl:text-start md:border md:w-40 md:bg-merah200-polteka md:rounded md:text-center">
                            <li class="block xl:hidden py-2 xl:py-0">
                                <a href="#" class="font-bold">
                                    L. Tek. Farmasetika
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('databarangadminlabtekfarmasi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangmasukadminlabtekfarmasi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangkeluaradminlabtekfarmasi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable">
                        <a href="#" class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5">
                            Lab Kimia
                        </a>
                        <a href="#" class="xl:hidden justify-center hover:justify-start flex hover:mb-2 hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="block xl:hidden md:w-8 " viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                            </div>
                        </a>
                        <ul class="desplegable xl:ml-[43px] mt-3 hidden md:absolute xl:static left-5 xl:border-none xl:bg-none xl:text-start md:border md:w-40 md:bg-merah200-polteka md:rounded md:text-center">
                            <li class="block xl:hidden py-2 xl:py-0">
                                <a href="#" class="font-bold">
                                    L. Kimia
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('databarangadminlabfarmasikimia') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangmasukadminlabfarmasikimia') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangkeluaradminlabfarmasikimia') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable">
                        <a href="#" class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5">
                            Lab Farmakognosi
                        </a>
                        <a href="#" class="xl:hidden justify-center hover:justify-start flex hover:mb-2 hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="block xl:hidden md:w-8 " viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                            </div>
                        </a>
                        <ul class="desplegable xl:ml-[43px] mt-3 hidden md:absolute xl:static left-5 xl:border-none xl:bg-none xl:text-start md:border md:w-40 md:bg-merah200-polteka md:rounded md:text-center">
                            <li class="block xl:hidden py-2 xl:py-0">
                                <a href="#" class="font-bold">
                                    L. Farmakognosi
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('databarangadminlabfarmakognosi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Data Barang
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangmasukadminlabfarmakognosi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Masuk
                                </a>
                            </li>
                            <li class="py-2 xl:py-0">
                                <a href="{{ route('barangkeluaradminlabfarmakognosi') }}" class="xl:hover:text-hitam-polteka xl:hover:bg-abu-polteka xl:hover:rounded-full xl:hover:w-52 xl:hover:ml-4 xl:py-2 xl:pl-5 xl:block">
                                    Barang Keluar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-6"></li>
                    <li>
                        <a class="md:justify-center lg:justify-center xl:justify-start flex">
                            <div class="xl:ml-8 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:w-6 xl:h-6 w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                                </svg>
                            </div>
                            <div class="ml-2 mb-3 font-semibold hidden xl:block">Pengaturan</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ubahpwadminlabfarmasi') }}">
                            <div class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5">
                                Ubah Password
                            </div>
                        </a>
                        <a href="{{ route('ubahpwadminlabfarmasi') }}" class="xl:hidden justify-center hover:justify-start flex hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:mb-2 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                            <div class="xl:ml-8 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="block xl:hidden xl:w-6 lg:w-8 md:w-8" viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('ubahppadminlabfarmasi') }}">
                                    <div class="hidden xl:block ml-8 mb-3 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:ml-10 hover:w-full hover:py-2 hover:pl-5"> 
                                    Ubah Gambar Profil 
                                    </div>
                                </a>
                                <a href="{{ route('ubahppadminlabfarmasi') }}" class="xl:hidden justify-center hover:justify-start flex hover:pt-2 hover:md:px-5 hover:lg:px-7 hover:text-hitam-polteka hover:bg-abu-polteka hover:rounded-full hover:md:ml-6 hover:lg:ml-10 hover:w-full">
                                    <div class="xl:ml-8 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="block xl:hidden xl:w-6 lg:w-8 md:w-8" viewBox="0 0 256 256"><path fill="currentColor" d="M245 110.64a16 16 0 0 0-13-6.64h-16V88a16 16 0 0 0-16-16h-69.33l-27.73-20.8a16.14 16.14 0 0 0-9.6-3.2H40a16 16 0 0 0-16 16v144a8 8 0 0 0 8 8h179.1a8 8 0 0 0 7.59-5.47l28.49-85.47a16.05 16.05 0 0 0-2.18-14.42M93.34 64l27.73 20.8a16.12 16.12 0 0 0 9.6 3.2H200v16H69.77a16 16 0 0 0-15.18 10.94L40 158.7V64Z"/></svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-8"></li>
                    <li>
                        <a href="{{ route('login') }}" class="md:justify-center lg:justify-center xl:justify-start flex">
                            <div class="xl:ml-8 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:w-6 xl:h-6 w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                </svg>
                            </div>
                            <div class="ml-2 mb-3 font-semibold hidden xl:block"> {{ __('Logout') }}</div>
                        </a>
                        <!-- <form id="logout-form" method="POST" class="d-none">
                                        @csrf
                                    </form> -->
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            @yield('content')
            <!-- END: Content -->
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

            opcionesConDesplegable.forEach(function (opcion) {
                const link = opcion.querySelector("a");

                opcion.addEventListener("click", function () {
                    const desplegable = opcion.querySelector(".desplegable");
                    const menuText = opcion.querySelector("a");

                    desplegable.classList.toggle("hidden");

                    if (!desplegable.classList.contains("hidden")) {
                        menuText.style.fontWeight = "bold";
                    } else {
                        menuText.style.fontWeight = "normal";
                    }
                });
            });
        });
        </script>
       
        <!-- END: JS Assets-->
        
    </body>
</html>