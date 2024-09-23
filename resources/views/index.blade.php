<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('logos/logo.png') }}" type="image/x-icon">
        <title>Encanto Grazing Food</title>

        <meta name="description" content="Encanto Grazing Food - Surpreenda quem você ama com nossas cestas de café da manhã, brunch entre outros produtos." />

        <meta property="og:title" content="Encanto Grazing Food" />
        <meta property="og:description" content="Surpreenda quem você ama com nossas cestas de café da manhã, brunch entre outros produtos." />
        <meta property="og:image" content="{{asset('images/hero.png')}}" />
        <meta property="og:url" content="https://encantograzingfood.com.br" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="pt_BR" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <!-- Header -->
        <header class="w-full bg-secondary px-5 py-4">
            <div class="max-w-screen-xl m-auto flex justify-between items-center">
                <div class="max-w-24 m-0 sm:max-w-28">
                    <img class="w-full" src="{{ asset('logos/logo_escrita.png') }}" alt="escrita logo marca encanto grazing food">
                </div>
                <a href="https://wa.me/5554991257469" target="_blank">
                    <button class="flex flex-row gap-2">
                        <svg class="w-6 h-6" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.05 5.06923C18.1331 4.14334 17.041 3.4092 15.8375 2.9096C14.634 2.40999 13.3431 2.15492 12.04 2.15923C6.58 2.15923 2.13 6.60923 2.13 12.0692C2.13 13.8192 2.59 15.5192 3.45 17.0192L2.05 22.1592L7.3 20.7792C8.75 21.5692 10.38 21.9892 12.04 21.9892C17.5 21.9892 21.95 17.5392 21.95 12.0792C21.95 9.42923 20.92 6.93923 19.05 5.06923ZM12.04 20.3092C10.56 20.3092 9.11 19.9092 7.84 19.1592L7.54 18.9792L4.42 19.7992L5.25 16.7592L5.05 16.4492C4.22755 15.1363 3.79092 13.6185 3.79 12.0692C3.79 7.52923 7.49 3.82923 12.03 3.82923C14.23 3.82923 16.3 4.68923 17.85 6.24923C18.6176 7.0131 19.2259 7.92178 19.6396 8.92256C20.0533 9.92335 20.2642 10.9963 20.26 12.0792C20.28 16.6192 16.58 20.3092 12.04 20.3092ZM16.56 14.1492C16.31 14.0292 15.09 13.4292 14.87 13.3392C14.64 13.2592 14.48 13.2192 14.31 13.4592C14.14 13.7092 13.67 14.2692 13.53 14.4292C13.39 14.5992 13.24 14.6192 12.99 14.4892C12.74 14.3692 11.94 14.0992 11 13.2592C10.26 12.5992 9.77 11.7892 9.62 11.5392C9.48 11.2892 9.6 11.1592 9.73 11.0292C9.84 10.9192 9.98 10.7392 10.1 10.5992C10.22 10.4592 10.27 10.3492 10.35 10.1892C10.43 10.0192 10.39 9.87923 10.33 9.75923C10.27 9.63923 9.77 8.41923 9.57 7.91923C9.37 7.43923 9.16 7.49923 9.01 7.48923H8.53C8.36 7.48923 8.1 7.54923 7.87 7.79923C7.65 8.04923 7.01 8.64923 7.01 9.86923C7.01 11.0892 7.9 12.2692 8.02 12.4292C8.14 12.5992 9.77 15.0992 12.25 16.1692C12.84 16.4292 13.3 16.5792 13.66 16.6892C14.25 16.8792 14.79 16.8492 15.22 16.7892C15.7 16.7192 16.69 16.1892 16.89 15.6092C17.1 15.0292 17.1 14.5392 17.03 14.4292C16.96 14.3192 16.81 14.2692 16.56 14.1492Z" fill="white"/>
                        </svg>
    
                        <p class="text-slate-50 font-montserrat font-semibold text-sm md:text-base">(54) 99125-7469</p>
                    </button>
                </a>
            </div>
        </header>
        <!-- Header -->
   

        <main>
             <!-- Banners -->
            <section class="w-full pb-5">
                <div class="w-full">
                    <div class="swiper">
                        
                        <!-- Container dos banners -->
                        <div class="swiper-wrapper" >
                            <!-- Slides do carrossel -->
                            <div class="swiper-slide">
                                <img src="{{ asset('images/banner_grazing.png')}}" alt="Banner 1" class="w-full">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('images/banner_grazing2.png')}}" alt="Banner 1" class="w-full">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- baneers -->

            <!-- Hero -->
            <section class="w-full px-4 py-4 md:px-10 md:py-10">
                <div class="max-w-screen-xl m-auto flex flex-col justify-between gap-5 items-center md:flex-row md:gap-10">
                    <div class="w-full flex flex-col items-center gap-5 md:gap-10" data-aos="zoom-in-up">
                        <div class="flex flex-col gap-3">
                            <h1 class="font-lhcencoreregular text-center text-2xl font-medium xl:text-5xl xl:text-center text-pretty">Transforme uma simples cesta de café da manhã em um momento especial!</h1>
                            <p class="font-montserrat text-center text-sm tracking-wide xl:text-base xl:text-center">
                                <!-- Cestas encantadoras capazes de unir sabor e emoção em um único presente. </br> -->
                                Criadas e entregues nas cidades de Marau, Vila Maria | RS. 
                            </p>
                        </div>
                        <a href="https://wa.me/5554991257469" target="_blank" class="w-full md:max-w-80">
                            <button class="w-full bg-secondary px-4 py-4 rounded-2xl font-montserrat font-medium text-sm md:text-base flex align-center gap-1 justify-center shadow-md transform transition duration-300 ease-in-out hover:scale-110 md:max-w-80">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1001 4.91002C18.1832 3.98413 17.0911 3.24999 15.8876 2.75039C14.6841 2.25078 13.3932 1.99571 12.0901 2.00002C6.6301 2.00002 2.1801 6.45002 2.1801 11.91C2.1801 13.66 2.6401 15.36 3.5001 16.86L2.1001 22L7.3501 20.62C8.8001 21.41 10.4301 21.83 12.0901 21.83C17.5501 21.83 22.0001 17.38 22.0001 11.92C22.0001 9.27002 20.9701 6.78002 19.1001 4.91002ZM12.0901 20.15C10.6101 20.15 9.1601 19.75 7.8901 19L7.5901 18.82L4.4701 19.64L5.3001 16.6L5.1001 16.29C4.27765 14.9771 3.84102 13.4593 3.8401 11.91C3.8401 7.37002 7.5401 3.67002 12.0801 3.67002C14.2801 3.67002 16.3501 4.53002 17.9001 6.09002C18.6677 6.85389 19.276 7.76257 19.6897 8.76335C20.1034 9.76414 20.3143 10.8371 20.3101 11.92C20.3301 16.46 16.6301 20.15 12.0901 20.15ZM16.6101 13.99C16.3601 13.87 15.1401 13.27 14.9201 13.18C14.6901 13.1 14.5301 13.06 14.3601 13.3C14.1901 13.55 13.7201 14.11 13.5801 14.27C13.4401 14.44 13.2901 14.46 13.0401 14.33C12.7901 14.21 11.9901 13.94 11.0501 13.1C10.3101 12.44 9.8201 11.63 9.6701 11.38C9.5301 11.13 9.6501 11 9.7801 10.87C9.8901 10.76 10.0301 10.58 10.1501 10.44C10.2701 10.3 10.3201 10.19 10.4001 10.03C10.4801 9.86002 10.4401 9.72002 10.3801 9.60002C10.3201 9.48002 9.8201 8.26002 9.6201 7.76002C9.4201 7.28002 9.2101 7.34002 9.0601 7.33002H8.5801C8.4101 7.33002 8.1501 7.39002 7.9201 7.64002C7.7001 7.89002 7.0601 8.49002 7.0601 9.71002C7.0601 10.93 7.9501 12.11 8.0701 12.27C8.1901 12.44 9.8201 14.94 12.3001 16.01C12.8901 16.27 13.3501 16.42 13.7101 16.53C14.3001 16.72 14.8401 16.69 15.2701 16.63C15.7501 16.56 16.7401 16.03 16.9401 15.45C17.1501 14.87 17.1501 14.38 17.0801 14.27C17.0101 14.16 16.8601 14.11 16.6101 13.99Z" fill="black"/>
                                </svg>
                                Entrar em contato
                            </button>
                        </a>
                    </div>
                    <div class="max-w-[635px] w-full" data-aos="zoom-in-up">
                        <img class="w-full" src="{{ asset('images/hero.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- Hero -->
            

            <!-- Produtos -->
            <section class="w-full h-full pt-5 p-0 md:pt-10  bg-center bg-no-repeat bg-cover" style="background-image: url('{{asset('images/teste.jpg')}}')"> <!-- Section vai ter imagem de fundo -->
                <div class="max-w-screen-xl m-auto flex border-t-2 border-l-2 border-r-2 border-secondary sm:flex flex-col px-4 py-4 md:px-10 bg-white rounded-t-xl gap-5"> <!-- fundo branco -->
                    <!-- Container titulo e subtitulo -->
                    <div class="w-full" data-aos="zoom-in">
                        <h2 class="text-center font-lhcencoreregular text-3xl xl:text-4xl font-bold">
                            Produtos
                        </h2>
                        <h3 class="text-center font-montserrat text-sm xl:text-base font-medium">Encanto Grazing Food</h3>
                    </div>
                    <!-- Container das miniaturas -->
                    <div class="w-full grid grid-cols-1 gap-5 sm:grid-cols-2 md:gap-10">
                    
                        @foreach ($produtos as $produto)
                        <!-- Container minatura -->
                            @if($produto['nome'] != 'Despertar Kids')
                                <div class="bg-white w-fit h-fit md:h-full flex flex-col items-center shadow-md rounded-2xl xl:flex-row transition-transform duration-300 ease-in-out transform hover:scale-110" data-aos="zoom-in">
                                    <div class="w-full h-full overflow-hidden relative rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none">
                                        <img  src="{{ asset($produto['imagem']) }}" alt="{{$produto['descricao']}}" class="w-full h-full object-cover rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none transition-transform duration-300 ease-in-out transform hover:scale-110">
                                    </div>
                                    <div class="w-full h-full p-4 flex flex-col justify-between gap-5">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-lhcencoreregular text-2xl font-semibold">{{$produto['nome']}}</h3>
                                            <div class="flex gap-1 ">
                                                <svg width="18" height="18" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_359_810)">
                                                    <path d="M13.8493 12.6819C14.3488 12.6819 14.7461 12.3676 15.1029 11.928C15.8332 11.0282 14.6341 10.3091 14.1768 9.95695C13.7119 9.59895 13.1929 9.39615 12.6666 9.34855M11.9999 8.01522C12.9204 8.01522 13.6666 7.26902 13.6666 6.34855C13.6666 5.42808 12.9204 4.68188 11.9999 4.68188" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                                                    <path d="M2.1506 12.6819C1.65106 12.6819 1.25374 12.3676 0.896988 11.928C0.166687 11.0282 1.36574 10.3091 1.82305 9.95695C2.28794 9.59895 2.80701 9.39615 3.33329 9.34855M3.66663 8.01522C2.74615 8.01522 1.99996 7.26902 1.99996 6.34855C1.99996 5.42808 2.74615 4.68188 3.66663 4.68188" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                                                    <path d="M5.38912 10.7561C4.70793 11.1773 2.92191 12.0373 4.00972 13.1135C4.54111 13.6393 5.13293 14.0153 5.877 14.0153H10.1229C10.8669 14.0153 11.4587 13.6393 11.9901 13.1135C13.0779 12.0373 11.2919 11.1773 10.6107 10.7561C9.01333 9.76833 6.98647 9.76833 5.38912 10.7561Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.3333 5.68184C10.3333 6.97051 9.2886 8.01518 7.99993 8.01518C6.71127 8.01518 5.66659 6.97051 5.66659 5.68184C5.66659 4.39318 6.71127 3.34851 7.99993 3.34851C9.2886 3.34851 10.3333 4.39318 10.3333 5.68184Z" stroke="black" stroke-width="1.5"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_359_810">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.681885)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <span class="font-montserrat font-medium text-xs">{{$produto['serve']}}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-montserrat text-sm text-pretty">{{$produto['descricao']}}</p>
                                        </div>
                                        <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                                            <a href="https://wa.me/5554991257469?text=Ol%C3%A1%20encanto%20gostaria%20de%20saber%20mais%20sobre%20o%20produto%20{{$produto['url_nome']}}" target="_blank">
                                                <button class="w-full flex items-center justify-center gap-2 bg-secondary px-4 py-2 rounded-2xl font-montserrat font-medium shadow-md transform transition duration-300 ease-in-out hover:scale-110">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.5 7.5V6.36364C7.5 3.95367 9.51472 2 12 2C14.4853 2 16.5 3.95367 16.5 6.36364V7.5" stroke="black" stroke-width="1.5"/>
                                                        <path d="M2.70352 18.6124C2.19716 17.3029 2.68147 15.6144 3.6501 12.2373L5 7.5H19L20.3499 12.2373C21.3185 15.6144 21.8028 17.3029 21.2965 18.6124C20.9864 19.4143 20.4358 20.1097 19.7145 20.6104C16.9865 22.5043 6.8944 22.4216 4.28549 20.6104C3.56418 20.1097 3.01361 19.4143 2.70352 18.6124Z" stroke="black" stroke-width="1.5"/>
                                                        <path d="M10 11H14" stroke="black" stroke-width="1.5"/>
                                                    </svg>
                                                        
                                                    Encomendar
                                                </button>
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>
                            @else     
                                
                        
                                <div id="normal" class="bg-white w-fit h-fit md:h-full flex flex-col items-center shadow-md rounded-2xl xl:flex-row transition-transform duration-300 ease-in-out transform hover:scale-110" data-aos="zoom-in">
                                    <div class="w-full h-full overflow-hidden relative rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none">
                                        <!-- Valor 1 será o padrão exibido inicialmente -->
                                        <img id="produto-imagem" src="{{ asset($produto['imagem']) }}" alt="{{$produto['descricao']}}" class="w-full h-full object-cover rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none transition-transform duration-300 ease-in-out transform hover:scale-110">
                                    </div>
                                    <div class="w-full h-full p-4 flex flex-col justify-between gap-5">
                                        <div class="flex justify-between items-center">
                                            <!-- Nome do produto será exibido como padrão (Valor 1) -->
                                            <h3 id="produto-nome" class="font-lhcencoreregular text-2xl font-semibold">{{$produto['nome']}}</h3>
                                            <div class="relative">
                                                <button class="bg-secondary rounded-full p-2 flex justify-center items-center" onclick="toggleDropdown()">
                                                    Selecione
                                                    <svg id="arrow-1" class="h-5 w-5 text-black transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <!-- Dropdown -->
                                                <div id="dropdown" class="absolute right-0 mt-2 w-56 bg-white shadow-lg rounded-lg hidden">
                                                    <div class="py-1 w-full">
                                                        <!-- Opção 1: Não faz nada, já é o valor padrão -->
                                                        <div class="px-4 py-2 text-sm w-full text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="selectOption('personalizado')">Despertar Kids Personalizado</div>
                                                        <!-- Opção 2: Atualiza com novos valores via JavaScript -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Descrição do produto como padrão (Valor 1) -->
                                            <p id="produto-descricao" class="font-montserrat text-sm text-pretty">{{$produto['descricao']}}</p>
                                        </div>
                                        <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                                            <a href="https://wa.me/5554991257469?text=Ol%C3%A1%20encanto%20gostaria%20de%20saber%20mais%20sobre%20o%20produto%20Despertar%20{{$produto['url_nome']}}" target="_blank">
                                                <button class="w-full flex items-center justify-center gap-2 bg-secondary px-4 py-2 rounded-2xl font-montserrat font-medium shadow-md transform transition duration-300 ease-in-out hover:scale-110">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.5 7.5V6.36364C7.5 3.95367 9.51472 2 12 2C14.4853 2 16.5 3.95367 16.5 6.36364V7.5" stroke="black" stroke-width="1.5"/>
                                                        <path d="M2.70352 18.6124C2.19716 17.3029 2.68147 15.6144 3.6501 12.2373L5 7.5H19L20.3499 12.2373C21.3185 15.6144 21.8028 17.3029 21.2965 18.6124C20.9864 19.4143 20.4358 20.1097 19.7145 20.6104C16.9865 22.5043 6.8944 22.4216 4.28549 20.6104C3.56418 20.1097 3.01361 19.4143 2.70352 18.6124Z" stroke="black" stroke-width="1.5"/>
                                                        <path d="M10 11H14" stroke="black" stroke-width="1.5"/>
                                                    </svg>
                                                    Encomendar
                                                </button>
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>

                                <div id="personalizado" class="bg-white w-fit h-fit md:h-full flex flex-col items-center shadow-md rounded-2xl xl:flex-row transition-transform duration-300 ease-in-out transform hover:scale-110 hidden" data-aos="zoom-in">
                                    <div class="w-full h-full overflow-hidden relative rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none">
                                        <!-- Valor 1 será o padrão exibido inicialmente -->
                                        <img id="produto-imagem" src="{{ asset('images/produtos/kids_perso.webp') }}" alt="Despertar Kids Personalizado" class="w-full h-full object-cover rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none transition-transform duration-300 ease-in-out transform hover:scale-110">
                                    </div>
                                    <div class="w-full h-full p-4 flex flex-col justify-between gap-5">
                                        <div class="flex justify-between items-center">
                                            <!-- Nome do produto será exibido como padrão (Valor 1) -->
                                            <h3 id="produto-nome" class="font-lhcencoreregular text-2xl font-semibold">Despertar Kids Personalizado</h3>
                                            <div class="relative">
                                                <button class="bg-secondary rounded-full p-2 flex justify-center items-center" onclick="toggleDropdown()">
                                                    Selecione
                                                    <svg id="arrow-2" class="h-5 w-5 text-black transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <!-- Dropdown -->
                                                <div id="dropdown2" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden">
                                                    <div class="py-1">
                                                        <!-- Opção 1: Não faz nada, já é o valor padrão -->
                                                        <div class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 cursor-pointer" onclick="selectOption('normal')">Despertar Kids</div>
                                                        <!-- Opção 2: Atualiza com novos valores via JavaScript -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Descrição do produto como padrão (Valor 1) -->
                                            <p id="produto-descricao" class="font-montserrat text-sm text-pretty">Caixa de madeira, formato Mickey e borboleta , suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows.Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.</p>
                                        </div>
                                        <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                                            <a href="https://wa.me/5554991257469?text=Ol%C3%A1%20encanto%20gostaria%20de%20saber%20mais%20sobre%20o%20produto%20Despertar%20Kids%20Personalizado" target="_blank">
                                                <button class="w-full flex items-center justify-center gap-2 bg-secondary px-4 py-2 rounded-2xl font-montserrat font-medium shadow-md transform transition duration-300 ease-in-out hover:scale-110">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.5 7.5V6.36364C7.5 3.95367 9.51472 2 12 2C14.4853 2 16.5 3.95367 16.5 6.36364V7.5" stroke="black" stroke-width="1.5"/>
                                                        <path d="M2.70352 18.6124C2.19716 17.3029 2.68147 15.6144 3.6501 12.2373L5 7.5H19L20.3499 12.2373C21.3185 15.6144 21.8028 17.3029 21.2965 18.6124C20.9864 19.4143 20.4358 20.1097 19.7145 20.6104C16.9865 22.5043 6.8944 22.4216 4.28549 20.6104C3.56418 20.1097 3.01361 19.4143 2.70352 18.6124Z" stroke="black" stroke-width="1.5"/>
                                                        <path d="M10 11H14" stroke="black" stroke-width="1.5"/>
                                                    </svg>
                                                    Encomendar
                                                </button>
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>
                                
                            @endif
                            <!-- Container minatura -->
                        @endforeach
                    </div>
                    <!-- Container das miniaturas -->

                </div>
            </section>
            <!-- Produtos -->

            <!-- Sobre e depoimentos -->
            <section class="w-full">
                <div class="flex flex-col gap-5 px-4 py-5 md:px-10 md:py-10 relative bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/sobre.png') }})">
                
                    <div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-center font-lhcencoreregular font-semibold text-3xl text-white" data-aos="zoom-in-up">A Encanto Grazing Food</h2>
                            <p class="max-w-2xl m-auto font-montserrat text-center text-white text-pretty tracking-wide" data-aos="zoom-in-up">A Encanto surgiu da necessidade de ter em nossa cidade uma opção de presente/comida afetiva, que fosse além de alimento, que entregasse amor, gratidão, pedido de desculpas, desejos de felicidades, enfim, que enchesse os olhos, a barriga e o coração de quem receber.</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-lhcencoreregular text-2xl text-center text-white font-semibold" data-aos="zoom-in-up">Depoimentos </h3>
                        <div class="max-w-7xl m-auto grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4" data-aos="zoom-in-up">
                            <div class="bg-white p-5 text-center flex flex-col gap-4 rounded-2xl">
                                <span class="font-lhcencoreregular text-2xl font-semibold">Caroline</span>
                                <p class="font-montserrat">“Maravilhosa, obrigada!</br> Virei cliente, sempre que precisar vou chamar!”</p>
                            </div>
                            <div class="bg-secondary p-4 text-center flex flex-col gap-4 rounded-2xl">
                                <span class="font-lhcencoreregular text-2xl font-semibold">Jessica</span>
                                <p class="font-montserrat">“Ficou lindo e ela amou! Com certeza vou pegar mais vezes! Trabalho impecável. Atendimento de qualidade.”</p>
                            </div>
                            <div class="bg-white p-4 text-center flex flex-col gap-4 rounded-2xl">
                                <span class="font-lhcencoreregular text-2xl font-semibold">Danielle</span>
                                <p class="font-montserrat">“Maravilhoso, simplesmente. Obrigada por além de entregar comida boa, entregar amor!”</p>
                            </div>
                            <div class="bg-secondary p-4 text-center flex flex-col gap-4 rounded-2xl">
                                <span class="font-lhcencoreregular text-2xl font-semibold">Cleide</span>
                                <p class="font-montserrat">“Obrigada pelo carinho... Amei meu lanche que ainda se tornou café da manhã! Tudo uma delícia!”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Perguntas Frequentes -->
            <section class="px-4 py-5 md:px-10 md:py-10">
                <div class="max-w-7xl m-auto flex flex-col gap-5 md:flex-row">
                    <h3 class="font-lhcencoreregular font-semibold text-3xl text-center md:w-2/5">Perguntas Frequentes</h3>
                    <div class="w-full md:w-3/5">
                        <ul class="flex flex-col gap-4">
                            <li>
                                <div class="border-b border-gray-200 py-4 px-4 shadow rounded-2xl">
                                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq(1)">
                                        <h3 class="font-montserrat text-lg font-semibold text-gray-800"> Quando é feito o pagamento?</h3>
                                        <div class="min-h-5 min-w-5">
                                            <svg id="arrow-1" class="h-5 w-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="answer-1" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <p class="mt-2 text-gray-600 font-montserrat">
                                            Pelo menos 50% do valor no momento que é feito o pedido. 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border-b border-gray-200 py-4 px-4 shadow rounded-2xl">
                                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq(2)">
                                        <h3 class="font-montserrat text-lg font-semibold text-gray-800"> Com quantos dias de antecedência preciso fazer o pedido?</h3>
                                        <div class="min-h-5 min-w-5">
                                            <svg id="arrow-2" class="h-5 w-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="answer-2" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <p class="mt-2 text-gray-600 font-montserrat">
                                            O ideal é pelo menos 24 horas de antecedência, porém se tiver disponibilidade dos itens e de agenda conseguimos montar em poucas horas. 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border-b border-gray-200 py-4 px-4 shadow rounded-2xl">
                                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq(3)">
                                        <h3 class="font-montserrat text-lg font-semibold text-gray-800"> Porque nosso produto Encanta quem consome?</h3>
                                        <div class="min-h-5 min-w-5">
                                            <svg id="arrow-3" class="h-5 w-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="answer-3" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <p class="mt-2 text-gray-600 font-montserrat">
                                            Temos muitos itens produzidos aqui na Encanto, de forma artesanal, que fazem muito sucesso. Tudo é preparado com muito carinho, cuidado e amor, sempre presando qualidade e excelência. 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border-b border-gray-200 py-4 px-4 shadow rounded-2xl">
                                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq(4)">
                                        <h3 class="font-montserrat text-lg font-semibold text-gray-800"> Balões personalizados, bolos recheados, biscoitos decorados, tem?</h3>
                                        <div class="min-h-5 min-w-5">
                                            <svg id="arrow-4" class="h-5 w-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="answer-4" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <p class="mt-2 text-gray-600 font-montserrat">
                                            Tem sim, temos parceiras para esses produtos, porém precisamos de pelo menos 48 hrs de antecedência no pedido. 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border-b border-gray-200 py-4 px-4 shadow rounded-2xl">
                                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFaq(5)">
                                        <h3 class="font-montserrat  text-lg font-semibold text-gray-800"> ⁠Porque todos os produtos tem frutas?</h3>
                                        <div class="min-h-5 min-w-5">
                                            <svg id="arrow-5" class="h-5 w-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="answer-5" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <p class="mt-2 text-gray-600 font-montserrat">
                                            As frutas tem um papel bem especial nos nossos produtos, além de darem refrescância e colorido nas montagens elas servem para fazer a limpeza do paladar entre um item e outro. 
                                        </p>
                                    </div>
                                </div>
                            </li>
        
                        </ul>
                    </div>
                </div>
            </section>  
        </main>
        <footer class="px-4 py-5" style="background-image: url({{asset('images/footer.png')}})">
            <div class="flex flex-col gap-5" data-aos="zoom-in-up">
                <div class="max-w-40 m-auto pr-6" >
                    <img class="transform transition duration-300 ease-in-out hover:scale-110" src="{{asset('logos/logo.png')}}" alt="logo encanto grazing food">
                </div>
                <div class="flex justify-center gap-4 border-b-2 border-dashed pb-4">
                    
                    <div class="bg-secondary p-2 rounded-full transform transition duration-300 ease-in-out hover:scale-150">
                        <a href="https://www.instagram.com/encantograzingfood/">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2ZM7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-secondary p-2 rounded-full transform transition duration-300 ease-in-out hover:scale-150">
                        <a href="https://wa.me/5554991257469" class="transform transition duration-300 ease-in-out hover:scale-150">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.05 4.91C18.1331 3.98411 17.0411 3.24997 15.8376 2.75036C14.634 2.25076 13.3431 1.99568 12.04 2C6.58005 2 2.13005 6.45 2.13005 11.91C2.13005 13.66 2.59005 15.36 3.45005 16.86L2.05005 22L7.30005 20.62C8.75005 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.9501 17.38 21.9501 11.92C21.9501 9.27 20.92 6.78 19.05 4.91ZM12.04 20.15C10.56 20.15 9.11005 19.75 7.84005 19L7.54005 18.82L4.42005 19.64L5.25005 16.6L5.05005 16.29C4.2276 14.9771 3.79097 13.4593 3.79005 11.91C3.79005 7.37 7.49005 3.67 12.03 3.67C14.23 3.67 16.3 4.53 17.85 6.09C18.6177 6.85386 19.226 7.76254 19.6397 8.76333C20.0534 9.76411 20.2642 10.8371 20.26 11.92C20.2801 16.46 16.58 20.15 12.04 20.15ZM16.56 13.99C16.31 13.87 15.09 13.27 14.87 13.18C14.64 13.1 14.48 13.06 14.31 13.3C14.14 13.55 13.67 14.11 13.53 14.27C13.39 14.44 13.24 14.46 12.99 14.33C12.74 14.21 11.94 13.94 11 13.1C10.26 12.44 9.77005 11.63 9.62005 11.38C9.48005 11.13 9.60005 11 9.73005 10.87C9.84005 10.76 9.98005 10.58 10.1 10.44C10.22 10.3 10.27 10.19 10.35 10.03C10.43 9.86 10.39 9.72 10.33 9.6C10.27 9.48 9.77005 8.26 9.57005 7.76C9.37005 7.28 9.16005 7.34 9.01005 7.33H8.53005C8.36005 7.33 8.10005 7.39 7.87005 7.64C7.65005 7.89 7.01005 8.49 7.01005 9.71C7.01005 10.93 7.90005 12.11 8.02005 12.27C8.14005 12.44 9.77005 14.94 12.25 16.01C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.69 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.03 14.27C16.96 14.16 16.81 14.11 16.56 13.99Z" fill="black"/>
                            </svg>
                        </a>                            
                    </div>
                </div>
                <div class="w-full text-white text-sm text-center flex flex-col justify-center gap-4 md:flex-row">
                    <p>© 2024 Encanto Grazing Food. Todos os direitos reservados.</p>
                    
                    <p>Desenvolvido por Padilha's Webdesign</p>
                </div>
            </div>
        </footer>
        <a href="https://wa.me/5554991257469" target="_blank">
            <img src="{{ asset('images/whats.png') }}" alt="WhatsApp" class="fixed bottom-4 right-4 w-16 h-16 animate-pulse-slow"/>
        </a>
        
    </body>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    var swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 5000, // 1 segundo
            disableOnInteraction: false, // Continua após interação
        },
        loop: true, // Faz o loop infinito dos slides
    });

    function toggleFaq(faqNumber) {
      const answer = document.getElementById(`answer-${faqNumber}`);
      const arrow = document.getElementById(`arrow-${faqNumber}`);

      // Verifica se o conteúdo está oculto
      if (answer.style.maxHeight) {
        // Esconde a resposta
        answer.style.maxHeight = null;
      } else {
        // Mostra a resposta, ajustando a altura máxima ao tamanho do conteúdo
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
      // Alterna a visibilidade da resposta
    //   answer.classList.toggle('hidden');

      // Rotaciona a setinha para baixo (caso esteja aberta)
      arrow.classList.toggle('rotate-180');
    }

    let dropdownOpen = false;

    function toggleDropdown() {
        const dropdown = document.getElementById("dropdown");
        const dropdown2 = document.getElementById("dropdown2");
        const arrow = document.getElementById("arrow-1");
        const arrow2 = document.getElementById("arrow-2");

        dropdownOpen = !dropdownOpen;

        dropdown.classList.toggle("hidden", !dropdownOpen);
        dropdown2.classList.toggle("hidden", !dropdownOpen);
        arrow.style.transform = dropdownOpen ? "rotate(180deg)" : "rotate(0deg)";
        arrow2.style.transform = dropdownOpen ? "rotate(180deg)" : "rotate(0deg)";
    }

    function selectOption(cesta) {
        // Somente atualiza se a opção não for a "default"
        const personalizado = document.getElementById("personalizado");
        const normal = document.getElementById("normal");

        if(cesta == 'personalizado'){
            personalizado.classList.remove("hidden");
            normal.classList.add("hidden");
        }else{
            normal.classList.remove("hidden");
            personalizado.classList.add("hidden");
        }
        
        // Fechar o dropdown
        toggleDropdown();
    }
</script>

    
</html>


