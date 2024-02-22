<?php $__env->startSection('content'); ?>
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Assign Subject</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="<?php echo e(route('classes.index')); ?>" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="table w-full mt-8 bg-white rounded">
            <form action="<?php echo e(route('store.class.assign.subject',$classid)); ?>" method="POST" class="w-full max-w-lg px-6 py-12">
                <?php echo csrf_field(); ?>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Assign Subject
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center">
                                <label>
                                    <input name="selectedsubjects[]" class="mr-2 leading-tight" type="checkbox" value="<?php echo e($subject->id); ?>"
                                        <?php $__currentLoopData = $assigned->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e(($item->id === $subject->id) ? 'checked' : ''); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    >
                                    <span class="text-sm">
                                        <?php echo e($subject->name); ?>

                                    </span>
                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Assign Subject
                        </button>
                    </div>
                </div>
            </form>        
        </div>

        <div class="w-full py-12">
            <h2 class="text-gray-700 uppercase font-bold my-2">Students</h2>
            <div class="flex items-center bg-gray-200">
                <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Name</div>
                <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Email</div>
                <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-semibold">Phone</div>
                <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-semibold">Satellite</div>
            </div>
            <?php $__currentLoopData = $assigned->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex items-center justify-between border border-gray-200 mb-px">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($student->user->name); ?></div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($student->user->email); ?></div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium"><?php echo e($student->phone); ?></div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium"><?php echo e($student->parent->user->name); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KKariuki\Desktop\Studentmanagement\College-System-Laravel\resources\views/backend/classes/assign-subject.blade.php ENDPATH**/ ?>