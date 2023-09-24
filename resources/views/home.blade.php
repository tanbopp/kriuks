<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriuks</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white overflow-x-hidden">

    <div class="w-full h-screen fixed overflow-hidden">
        <div class="w-[400px] h-[400px] bg-red-200 absolute rounded-full right-[-20px] top-[-20px]"></div>
        <div class="w-[400px] h-[400px] bg-red-200 absolute rounded-full left-[-20px] bottom-[-20px]"></div>
    </div>

    <div class="w-full min-h-[100vh] bg-white/50 absolute top-0 z-10 backdrop-blur-[10rem] flex flex-col items-center gap-14 py-6">
        <div class="max-md:w-11/12 w-10/12 flex justify-between items-center">
            <img src="image/logo/logo_kriuks.png" alt="Logo Kriuks" class="w-[100px]">
        </div>

        <div class="flex flex-col gap-4">
            <!-- <img src="image/logo/logo_kriuks.png" alt="Logo Kriuks" class="w-[400px]"> -->
            <h1 class="text-7xl font-bold tracking-tighter text-center">Welcome to <span class="text-red-500">Kriuks!</span></h1>
            <p class="text-base text-center">Kriuks, gurihnya disetiap gigitan!</p>
        </div>

        <div class="max-md:w-11/12 w-10/12 flex flex-wrap gap-5 justify-center">
            <!-- card 1 -->
            <a href="/menu" class="max-md:w-full md:max-w-sm ring-1 ring-black/10 hover:ring-black/50 p-6 bg-transparent rounded-xl cursor-pointer transition duration-300 ease-in-out group">
                <div class="flex gap-3 group-hover:text-red-500 transition duration-300 ease-in-out">
                    <h3 class="text-lg font-bold flex">Menu Rasa</h3>
                    <h3 class="group-hover:translate-x-4 text-lg transition duration-300 ease-in-out">→</h3>
                </div>
                <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ratione, voluptatibus.</p>
            </a>

            <!-- card 2 -->
            <a href="/menu" class="max-md:w-full md:max-w-sm ring-1 ring-black/10 hover:ring-black/50 p-6 bg-transparent rounded-xl cursor-pointer transition duration-300 ease-in-out group">
                <div class="flex gap-3 group-hover:text-red-500 transition duration-300 ease-in-out">
                    <h3 class="text-lg font-bold flex">Promo</h3>
                    <h3 class="group-hover:translate-x-4 text-lg transition duration-300 ease-in-out">→</h3>
                </div>
                <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ratione, voluptatibus.</p>
            </a>

            <!-- card 3 -->
            <a href="/menu" class="max-md:w-full md:max-w-sm ring-1 ring-black/10 hover:ring-black/50 p-6 bg-transparent rounded-xl cursor-pointer transition duration-300 ease-in-out group">
                <div class="flex gap-3 group-hover:text-red-500 transition duration-300 ease-in-out">
                    <h3 class="text-lg font-bold flex">Lokasi</h3>
                    <h3 class="group-hover:translate-x-4 text-lg transition duration-300 ease-in-out">→</h3>
                </div>
                <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ratione, voluptatibus.</p>
            </a>

            <!-- card 4 -->
            <a href="/menu" class="max-md:w-full md:max-w-sm ring-1 ring-black/10 hover:ring-black/50 p-6 bg-transparent rounded-xl cursor-pointer transition duration-300 ease-in-out group">
                <div class="flex gap-3 group-hover:text-red-500 transition duration-300 ease-in-out">
                    <h3 class="text-lg font-bold flex">Outlet</h3>
                    <h3 class="group-hover:translate-x-4 text-lg transition duration-300 ease-in-out">→</h3>
                </div>
                <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ratione, voluptatibus.</p>
            </a>
        </div>
    </div>
    
</body>
</html>