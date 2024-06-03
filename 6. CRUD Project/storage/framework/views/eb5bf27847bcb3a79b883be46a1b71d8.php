<div class="mx-96 px-96 py-40">
    <p class="text-4xl mb-20">Hi Admin CoderCamp</p>
    <!--[if BLOCK]><![endif]--><?php if($this->action == "create"): ?>
        <form wire:submit.prevent="create">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input wire:model="namaSiswa" type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                                </div>
                                <div class="text-red-500 text-xs"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['namaSiswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]--></div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <fieldset>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Kelas</legend>
                                <div class="grid grid-cols-5 mt-6 space-y-6">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->listKelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex items-center gap-x-3">
                                            <input wire:click="updateData(<?php echo e($kelas->id); ?>)" id="push-<?php echo e($kelas->id); ?>" name="kelas" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="push-<?php echo e($kelas->id); ?>" class="uppercase block text-sm font-medium leading-6 text-gray-900"><?php echo e($kelas->namaKelas); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </fieldset>
                        </div>
                        <div class="sm:col-span-4 mt-10">
                            <label for="guru" class="block text-sm font-medium leading-6 text-gray-900">Guru</label>
                            <div class="mt-2">
                                <div class="flex rounded-md sm:max-w-md">
                                    <p wire:poll class="flex-1 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400"> <?php echo e($this->namaGuru); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/"  class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </form>
    <?php elseif($this->action == "update"): ?>
        <form wire:submit.prevent="update">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input wire:model="namaSiswa" type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-black focus:ring-0 sm:text-sm sm:leading-6" placeholder="<?php echo e($siswa->nama); ?>">
                                </div>
                                <div class="text-red-500 text-xs"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['namaSiswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]--></div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <fieldset>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Kelas</legend>
                                <div class="grid grid-cols-5 mt-6 space-y-6">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->listKelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex items-center gap-x-3">
                                            <input wire:click="updateData(<?php echo e($kelas->id); ?>)" id="push-<?php echo e($kelas->id); ?>" name="kelas" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="push-<?php echo e($kelas->id); ?>" class="uppercase block text-sm font-medium leading-6 text-gray-900"><?php echo e($kelas->namaKelas); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </fieldset>
                        </div>
                        <div class="sm:col-span-4 mt-10">
                            <label for="guru" class="block text-sm font-medium leading-6 text-gray-900">Guru</label>
                            <div class="mt-2">
                                <div class="flex rounded-md sm:max-w-md">
                                    <p wire:poll class="flex-1 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400"> <?php echo e($this->namaGuru); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/"  class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </form>
    <?php else: ?>
        Maaf Anda memasuki Link yang salah
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH I:\CodingLab\Test\Test-Case\resources\views/livewire/dashboard.blade.php ENDPATH**/ ?>