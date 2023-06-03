<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- <img src="{{ asset ('logo/logo66.png') }}" alt=""> --}}

        <!-- Styles -->
        <style>
            /* /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before

            {--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;
                
                font-family:Figtree, sans-serif;font-feature-settings:normal}{margin:0;

             transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.

                            stroke-gray-400{stroke:#a2acbd}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;

                                padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm


                                ul {

height: 80px;
width: 100%;
margin: 0;
padding: 0 auto;
background-color: rgb(237, 241, 239);
margin-top: 20px ;
}
ul li{
    float: left;
    list-style: none;
    margin-right: 30px;
    margin-top: 20px;
    background-color: rgb(0, 255, 42);
    padding: 5px;
    border-radius: 20px;
}
h1, p { text-align: center}
img{
    margin-top: 0;


}
footer{
    margin-top: 150px;
    height: 200px;
    width: 100%;
    background-color: #0a5deb
    text-align: center;
}
body{
    background: rgb(19, 213, 213)

}

        </style>

    </head>


    <body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>

                        @endif
                    @endauth
                </div>
            @endif
            {{-- <img src="{{ asset ('logo/logo66.png') }}" alt=""> --}}


               <div>
                <ul>
                    <li><a href=""><img src="{{ asset ('logo/logo66.png') }}" alt="">
                    </a></li>

                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Blogs</a></li>
                    <li><a href="">Privacy Polecy</a></li>

                    </ul>
                </div>
                <br>

                <h1 >My Love Bangladeash</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Unde, soluta modi sit necessitatibus expedita ratione, quos, <br> ipsum at quia accusantium reprehenderit asperiores suscipit nobis. <br> Sequi ratione voluptates dolores consequuntur laudantium.</p>

                <img src="images/md4.jpg" alt="" width="100%" >

                <h1 >My Love Bangladeash</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Unde, soluta modi sit necessitatibus expedita ratione, quos, <br> ipsum at quia accusantium reprehenderit asperiores suscipit nobis. <br> Sequi ratione voluptates dolores consequuntur laudantium.</p>

                <img src="images/md2.jfif" alt="" width="100%" >


                <footer><p>copy right md zaman 2023 01747924646</p> </footer>





        </div>
    </body>
</html>
