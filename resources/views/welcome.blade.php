<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-violet-300">
        <nav class="flex justify-around">
            <div class="w-20 ">
                <a href=""><img src="{{ asset('img/logolion.jpg') }}" alt=""></a>
            </div>
            <div class="text-xl font-serif space-x-10 m-4 text-indigo-600 ">
                <a href="" class="hover:text-white">Home</a>
                <a href="" class="hover:text-white">About Us</a>
                <a href="" class="hover:text-white">Services</a>
                <a href="" class="hover:text-white">Members</a>
            </div>
            <div class=" text-xl font-serif m-4 text-indigo-600">
                <a href="{{ route('login') }}" class="hover:text-white">Login</a>
                <a href="{{ route('register') }}" class="hover:text-red-600">Register</a>
            </div>
        </nav>
    </div>
    <div class="p-5 text-center">
            <h3 class="font-bold text-3xl">Get an advanced inbox with Proton Mail</h3>
        </div>
    <div class="grid grid-cols-4">
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600 shadow-2xl hover:transition-all hover:shadow-red-500">powerful features and integration<i
                    class="fad fa-plus fa-spin"></i></a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Customizable inbox</a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Helpful automation</a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Build-in encryption</a>
        </div>
    </div>
    <div class="grid grid-cols-4">
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Effortless Organisation<i
                    class="fad fa-plus fa-spin"></i></a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Easy management of contacts</a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Helpful and needful use</a>
        </div>
        <div class="border p-8 m-5 rounded-xl hover:border-violet-900 border-blue-500">
            <a href="" class="text-xl font-sans text-purple-600">Build-in encryption</a>
        </div>
    </div>
    <marquee behavior="" direction="" class="p-5 text-4xl text-sky-700">The Proton Family plan lets you protect your loved ones by giving them access to all Proton services and premium features.</marquee>
    <div class="h-screen bg-violet-950">
<div class="text-center container">
    <h1 class="p-3 text-6xl text-white">Proton</h1>
    <h2 class="p-5 font-serif text-xl text-yellow-50">Proton is privacy by default.
Choose a better internet.</h2>
<button class="p-2 rounded-2xl transition-transform bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-yellow-50">create account &nbsp;<span class=" hover:block text-yellow-50"><i class="fa-solid fa-arrow-right fa-beat"></i></span></button>
</div>
    </div>
</body>

</html>
