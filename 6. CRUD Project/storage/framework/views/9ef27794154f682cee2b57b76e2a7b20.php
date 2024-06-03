<div class="w-full h-full mt-56">

    <p class="text-center text-4xl uppercase underline-offset-2 decoration-black underline">Daftar Siswa, Kelas, Dan Walikelas Sekolah CoderCamp</p>

    <div class="flex m-10 justify-center">
        <table class="table-fixed border text-xl">
            <thead>
                <tr>
                    <th class="px-2 py-1">Nama</th>
                    <th class="px-2 py-1">Kelas</th>
                    <th class="px-2 py-1">Wali Kelas</th>
                    <th class="px-2 py-1">Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr class="border">
                    <td class="mx-2 my-1 p-2 border">
                        <?php echo e($siswa->nama); ?>

                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        <?php echo e($siswa->kelas->namaKelas); ?>

                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $siswa->kelas->gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($guru->nama); ?>

                            <!--[if BLOCK]><![endif]--><?php if(!$loop->last): ?>, <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </td>
                    <td class="mx-2 my-1 p-2 border">
                        <?php echo e($siswa->tanggalLahir); ?>

                    </td>
                    <td>
                        <a href="/dashboard/update/<?php echo e($siswa->id); ?>" class="px-3 py-2 bg-yellow-300 rounded-lg text-black font-semibold cursor-pointer">Update Siswa</a>
                        <a wire:click="deleteData(<?php echo e($siswa->id); ?>)" class="px-3 py-2 bg-red-500 rounded-lg text-white font-semibold cursor-pointer">Delete Siswa</a>
                    </td>
                </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

        </table>
    </div>
        <div class="flex m-10 justify-center">
            <a href="/dashboard/create" class="w-2/12 py-2 bg-sky-400 rounded-lg text-white text-center uppercase">Tambah Siswa</a>
        </div>





</div>
<?php /**PATH I:\CodingLab\Test\Test-Case\resources\views/livewire/home-view.blade.php ENDPATH**/ ?>