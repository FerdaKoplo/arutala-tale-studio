<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arutala Tale Studio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

    <div class="relative overflow-hidden" id="Home">
        <!-- Banner -->
        <div class="relative overflow-hidden" id="Home">
        <!-- Top Banner -->
        <div class="relative w-full opacity-30 blur-lg">
            <div class="animate-marquee_left flex" style="rotate: 5deg">
                <div class="flex shrink-0">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($gambar as $item)
                            <img src="{{ asset('storage/' . $item->gambar_banner) }}" alt="img" 
                                 class="md:-translate-y-64 -translate-y-32 w-full md:w-auto h-auto">
                        @endforeach
                    @endfor
                </div>
                <div class="flex shrink-0">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($gambar as $item)
                            <img src="{{ asset('storage/' . $item->gambar_banner) }}" alt="img" 
                                 class="md:-translate-y-64 -translate-y-32 w-full md:w-auto h-auto">
                        @endforeach
                    @endfor
                </div>
            </div>
            <div class="absolute top-0 right-0 w-1/2 h-1/3 bg-black" 
                style="clip-path: polygon(100% 0%, 0% 0%, 100% 40%);">
            </div>
        </div>

        <!-- Navbar section -->
        <div class="relative">
            <div id="navbar" class="bg-black backdrop-blur-2xl bg-opacity-40 fixed top-0 w-full z-50">
                
                <nav class="lg:px-32 md:px-6 px-4 flex flex-col lg:flex-row justify-between">
                    <div class="flex justify-between items-center">
                        <a href="#Home">
                            <img src="/assets/logo.png" alt="" class="grayscale" width="80">
                        </a>
                        <div class="lg:hidden" name="mobile">
                            <i class="fa-solid text-white fa-bars"></i>
                        </div>
                        <div class="hidden" name="closeMenu">
                            <i class="fa-solid text-white fa-xmark"></i>
                        </div>
                    </div>
                    <ul  class="hidden lg:flex flex-col lg:flex-row text-xl items-center mx-auto gap-6 lg:gap-12 py-3 font-semibold text-white">
                        <li><a href="#Home">HOME</a></li>
                        <li><a href="#OC">OC DESIGN</a></li>
                        <li><a href="#VTUBER">VTUBER BUILD</a></li>
                        <li><a href="#TERMOFSERVICE">TERM OF SERVICE</a></li>
                        <li><a href="#TEAM">TEAM</a></li>
                    </ul>
                    <div class="absolute top-full left-0 w-full bg-black font-bold bg-opacity-40 backdrop-blur-2xl opacity-0 pointer-events-none transition-all duration-200 ease-in-out" name="menuMobile">
                        <div class=" text-white list-none w-full flex flex-col gap-3 py-3 items-center justify-center ">
                            <li><a href="#Home">HOME</a></li>
                            <li><a href="#OC">OC DESIGN</a></li>
                            <li><a href="#VTUBER">VTUBER BUILD</a></li>
                            <li><a href="#TERMOFSERVICE">TERM OF SERVICE</a></li>
                            <li><a href="#TEAM">TEAM</a></li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Middle Banner Section -->
        <div class="relative">
            <!-- Main Marquee -->
            <div class="animate-marquee_right grayscale hover:grayscale-0 duration-300 flex md:-mt-80 -mt-40 z-10 relative">
                <div class="flex shrink-0">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($gambar as $item)
                            <img src="{{ asset('storage/' . $item->gambar_banner) }}" alt="img" 
                                 class="w-full md:w-auto h-auto">
                        @endforeach
                    @endfor
                </div>
            </div>

            <!-- Title Section -->
            <div class="absolute mt-5 flex flex-col items-center gap-2 left-1/2 -translate-x-1/2 z-20 text-white">
                <div class="flex items-center flex-col md:flex-row">
                    <img src="/assets/logo.png" alt="" class="grayscale" width="80">
                    <h1 class="text-3xl md:text-5xl font-bold text-center">ARUTALA TALE</h1>
                </div>
                <p class="text-lg md:text-2xl opacity-70 text-center px-4">INDONESIAN BASED ART & LIVE 2D GUILD</p>
            </div>
            
            <!-- Bottom Marquee -->
            <div class="animate-marquee_right flex opacity-30 blur-lg md:-mt-72 -mt-40 z-0 relative">
                <div class="flex shrink-0">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($gambar as $item)
                            <img src="{{ asset('storage/' . $item->gambar_banner) }}" alt="img" 
                                 class="w-full md:w-auto h-auto">
                        @endforeach
                    @endfor
                </div>
                <div class="flex shrink-0">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($gambar as $item)
                            <img src="{{ asset('storage/' . $item->gambar_banner) }}" alt="img" 
                                 class="w-full md:w-auto h-auto">
                        @endforeach
                    @endfor
                </div>
            </div>
        
            <div class="absolute bottom-0 right-0 w-full h-1/3 bg-black"
                 style="clip-path: polygon(100% 100%, 0% 100%, 100% 40%);">
            </div>
        </div>
    </div>
    
    <!-- About -->
    <div class="relative mt-10">
        <div class="" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgb(90, 7, 100)), url('{{ asset('assets/bg.jpg') }}');">
            <div class="grid md:grid-cols-2 grid-cols-1 lg:px-32 md:px-6 px-4 items-center gap-8">
                <div class="text-center md:text-left">
                    <img src="{{ asset('storage/' . $item->gambar_screen) }}" alt="img" class="w-full max-w-[600px] mx-auto -mt-16 md:-mt-32">
                </div>

                <div class="text-white flex flex-col gap-3 pb-8 md:pb-0">
                    <h1 class="text-xl text-yellow-500 font-semibold">BRINGING VTUBER TO LIFE WITH ARUTALE</h1>
                    <p class="max-w-prose text-sm">In a medieval realm, Arutale emerged as a Guild led by Sam Tsukuyomi. They're like wizards and enchanters of old, creating magical characters through Live2D and Vtuber.<br>
                        <br>
                        With a diverse team of 10 talented members, they weave digital enchantments and bring characters to life.<br>
                        <br>
                        Whether it's charming Vtuber creatures or enigmatic knights, their creations will transport you to an enchanting world.<br>
                        <br>
                        Enter the realm of Arutale and experience the magic of Live2D and Vtuber.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- OC Design -->
    <div class="relative mt-10" id="OC">
        <div class="lg:px-32 md:px-6 px-4 grid lg:grid-cols-2 grid-cols-1 items-center gap-8">
            <div class="flex flex-col gap-10">
                <div class="text-4xl font-semibold text-center lg:text-left">
                    <h1 class="text-white">OC <span class="text-yellow-500">DESIGN</span></h1>
                </div>
                <div class="z-10 grid  grid-cols-2  gap-5  ">
                    @foreach ($oc_design as $item)    
                    <div class=" grayscale hover:grayscale-0  border-4 border-white inline-block group duration-300 ">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/50 pointer-events-none"></div>
                            <img src="{{ asset('storage/' . $item->gambar_grid_oc) }}" alt="img"  class="w-full h-auto object-cover " >
                        </div>
                        @endforeach
                </div>
                <h2 class="z-10 text-white font-semibold text-center lg:text-left text-xl lg:text-2xl">
                    Give a life to your precious original character!
                </h2>
            </div>

            <div class="relative z-10">
                @foreach ($gambar as $item)
                    <img src="{{ asset('storage/' . $item->gambar_layout_oc_design) }}" alt="img" class="w-full max-w-[600px] mx-auto">
                @endforeach
            </div>

            {{-- Gambar Segitiga --}}
            <div class="absolute bottom-0 right-0 w-full h-full bg-fuchsia-950"
                style="clip-path: polygon(100% 100%, 0% 100%, 100% 5%);">
            </div>
        </div>
    </div>

    <!-- Layout Vtuber Build -->
    <div class="relative mt-10" id="VTUBER">
        <div class="lg:px-32 md:px-6 px-4 grid lg:grid-cols-2 grid-cols-1 items-center gap-8">
            <div class="flex lg:items-start items-center flex-col gap-16">
                <div class="text-4xl font-semibold text-center md:text-left">
                    <h1 class="text-white">VTUBER <span class="text-yellow-500">BUILD</span></h1>
                </div>
                @foreach($video_url as $video)
                <div class=" z-10 ">
                    <iframe 
                        class="w-full max-w-4xl mx-auto aspect-video border-2   border-white grayscale hover:grayscale-0 duration-300"
                        width="600" 
                        height="400" 
                        src="{{ $video->video_url }}" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                @endforeach
            </div>
            
            <div class="relative z-10">
                @foreach ($gambar as $item)
                <img src="{{ asset('storage/' . $item->gambar_layout_vtuber_build) }}" alt="img" class="w-full max-w-[600px] mx-auto">
                @endforeach
            </div>

            {{-- Gambar Segitiga / bg-fuchsia-950 adalah warna segitiganya --}}
            <div class="absolute bottom-0 right-0 w-full h-full bg-fuchsia-950"
                style="clip-path: polygon(100% 100%, 0% 100%, 100% 5%);">
            </div>
        </div>
    </div>

    <!-- Layout Term of Service -->
    <div class="relative mt-10" id="TERMOFSERVICE">
        <div class="lg:px-32 md:px-6 px-4 grid lg:grid-cols-2  grid-cols-1 items-end gap-8">
            <div class="flex flex-col gap-10">
                <div class="text-4xl z-10 font-semibold text-center lg:text-left">
                    <h1 class="text-yellow-500 ">TERM OF SERVICE</h1>
                </div>
                <div class="z-10 text-white  p-6 rounded-lg ">
                    <h2 class="text-yellow-400 text-2xl font-bold mb-4">Terms of Service</h2>
                    <ul class="w-10/12 flex flex-col gap-3 list-none text-base lg:text-lg">
                        <li class="flex items-start"><span class="text-green-400 mr-2">✔</span> 50% down payment is required to secure a commission slot.</li>
                        <li class="flex items-start"><span class="text-green-400 mr-2">✔</span> The remaining 50% must be paid when the work is 90% complete and ready for client review.</li>
                        <li class="flex items-start"><span class="text-green-400 mr-2">✔</span> The agreement is finalized once the client sends the down payment.</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2">⚠</span> Refunds are not available after the deal is made, but work worth 50% of the price will still be delivered.</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2">⚠</span> Cancellations are not accepted after the down payment is made.</li>
                        <li class="flex items-start"><span class="text-blue-400 mr-2">➤</span> Serious clients only.</li>
                        <li class="flex items-start"><span class="text-green-400 mr-2">✔</span> Revisions can only be requested after full payment.</li>
                        <li class="flex items-start"><span class="text-blue-400 mr-2">➤</span> Weekly updates will be sent to the client.</li>
                        <li class="flex items-start"><span class="text-yellow-400 mr-2">⚡</span> Additional requests beyond the original agreement will be charged accordingly.</li>
                        <li class="flex items-start"><span class="text-yellow-400 mr-2">⚡</span> Please be respectful and honor agreements.</li>
                    </ul>
                </div>
                
                <div class="text-white z-10  p-6 rounded-lg  mt-6">
                    <h2 class="text-yellow-400 text-2xl font-bold mb-4">Refund Policy</h2>
                    <ul class="flex flex-col gap-3 list-none text-base lg:text-lg">
                        <li class="flex items-start"><span class="text-red-400 mr-2">⚠</span> If no updates are provided for more than 2 months after the project starts, the client is eligible for a refund.</li>
                        <li class="flex items-start"><span class="text-red-400 mr-2">⚠</span> If the artist/riggers fail to communicate from the beginning, a refund may be requested.</li>
                    </ul>
                </div>
            </div>

            <div class="relative z-10">
                @foreach ($gambar as $item)
                    <img src="{{ asset('storage/' . $item->gambar_layout_termofservice) }}" alt="img" class="w-full max-w-[600px] mx-auto">
                @endforeach
            </div>

            {{-- Gambar Segitiga / bg-fuchsia-950 adalah warna segitiganya --}}
            {{-- <div class="absolute bottom-0 right-0 w-full h-full bg-fuchsia-950" 
                style="clip-path: polygon(100% 100%, 0% 100%, 100% 5%);">
            </div> --}}
            <div class="absolute bottom-0 right-0 w-full h-full bg-fuchsia-950" 
                style="clip-path: polygon(0% 100%, 100% 100%, 0% 0%);">
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="relative mt-10 " id="TEAM">
        <div class="lg:px-32 md:px-6 px-4">
            <div>
                <h1 class="text-white text-4xl font-semibold text-center md:text-left">Our <span class="text-yellow-500">Team</span></h1> 
            </div>

            <div class="font-bebas mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 z-10 relative">
                @foreach ($team as $item)
                    <a href="{{ $item->link_sosmed_member }}" class="block" target="_blank">
                        <div class="border-2 border-white relative opacity-50 grayscale hover:opacity-100 hover:grayscale-0 inline-block group duration-300">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/50 pointer-events-none"></div>
                            <img src="{{ asset('storage/' . $item->gambar_member) }}" alt="img" class="w-full">
                            <h1 class="opacity-0 group-hover:opacity-100 text-white text-lg md:text-2xl lg:text-4xl duration-300 absolute inset-0 flex items-end justify-center font-bold">{{ $item->nama_member }}</h1>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="lg:px-32 px-4 mt-10 flex flex-col lg:items-start items-center">
        <div class="text-white text-4xl font-semibold ">
            <h1>Contact <span class="text-yellow-500">Us</span></h1> 
        </div>
        <div class="text-white mt-10 flex gap-6 text-3xl">
            <a href="https://discord.gg/3EWMyjUrk2" target="_blank" class="fa-brands fa-discord"></a>
            <a href="https://x.com/arutalatale" target="_blank" class="fa-brands fa-twitter"></a>
        </div>
        
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>