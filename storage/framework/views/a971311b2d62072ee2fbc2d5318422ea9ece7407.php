<?php $__env->startSection('content'); ?>

    <!--Hero--->
    <div class="hero-bg-img flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pd-10 text-center">Welcome to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-l">start reading</a>
    </div>
    <!--content -->
    <div class="container sm:grid sm:grid-cols-2 gap-15 mx-auto py-15 sm:m-0 container">
        <div class="mx-2 md-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/900/600" alt=""></div>
        <div class="flex flex-col items-left justify-center m-10">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2023</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">you can find a list of all programming languages here.</p>
            <p class="py-4 text-gray-500 text-sm leading-6"> you can find a list of all programming languages here you can find a list of all programming languages here you can find a list of all programming languages here you can find a list of all programming languages here.</p>
            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">read more...</a>
        </div>
    </div>
    <!--category-->
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">blod Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4 ">
            <div class="font-bold text-3xl py-2">Design</div>
            <div class="font-bold text-3xl py-2">Web Development</div>
            <div class="font-bold text-3xl py-2">Embadded Systems</div>
            <div class="font-bold text-3xl py-2">PLC</div>
        </div>
    </div>
    <!--recent posts-->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">php is general-porouse secripting language geared toward web development.it was organlly created php is general-porouse secripting language geared toward web development.it was organlly created</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">Back-end</a></li>
                </ul>
                <h3 class="text-l py-10 leading-6 "> php is general-porouse secripting language geared toward web development.it was organlly created php is general-porouse secripting language geared toward web development.it was organlly created</h3>
                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/900/600"  alt="">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel\resources\views/index.blade.php ENDPATH**/ ?>