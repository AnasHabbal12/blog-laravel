<?php $__env->startSection('content'); ?>




<!--Header-->
<div class="container m-auto text-center pt-15 pd-5 ">
    <h1 class="text-6xl font-bold">Edit Post</h1>
</div>
<!--Form-->
<div class="container m-auto text-center pt-15 pd-5 ">
    <form action="/blog/<?php echo e($post -> slug); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="title" value="<?php echo e($post -> title); ?>" class="w-full text-6xl h-20 rounded-lg shadow-lg border-b p-15 mb-5 ">
        <textarea name="description" id="" cols="30" rows="10"  class="w-full text-6xl h-20 rounded-lg shadow-lg border-b p-15 mb-5 "><?php echo e($post -> description); ?></textarea>
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col  items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" name="image" type="file" class="hidden" />
            </label>
        </div>

        <button class="bg-green-200 hover:bg-green-700
        text-gray-700 hover:text-gray-200
        transition duration-300
        cursor-pointer
        p-5 rounded-lg
        my-10
        font-bold uppercase" type="submit">Post Save </button>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel\resources\views/blog/edit.blade.php ENDPATH**/ ?>