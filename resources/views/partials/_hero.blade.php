<section class="relative h-72 bg-[#4269f5] flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center" style="background-image: url('images/laravel-logo.png')"></div>
        <div class="z-10">
            <h1 class="text-6xl font-bold uppercase text-white">
                Conne<span class="text-black">KT</span>
            </h1>
            <p class="text-lg text-gray-200 font-bold my-4">
                Sign in to tell us about yourself in order to get a job 
            </p>
            
        @auth
        <div>
            <a href="/login" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign in to List a Gaks</a>
        </div>
        @else
        <div>
            <a href="/register" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign up to List a Gaks</a>
        </div>
        @endauth
    </div>
</section>