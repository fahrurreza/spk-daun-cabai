

<?php $__env->startSection('content'); ?>
    
<div class="content-wrapper container">
                <div class="page-heading">
                    <h3><?php echo e($halaman); ?></h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <?php echo $__env->make('layouts.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Selamat datang</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-light-success color-success">
                                                Aplikasi ini merupakan aplikasi sistem pendukung keputusan (SPK)
                                                pada kondisi tanaman cabai. Sistem ini dapat berjalan dengan mengisi
                                                ciri-ciri yang terdapat pada padi anda. Anda kemudian dapat mengetahui
                                                penyakit dan solusi yang dapat anda berikan pada tanaman cabai anda.
                                                Aplikasi ini berjalan menggunakan metode CF (Certainty Factor).
                                                Selamat mencoba
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-light-success color-success">
                                                <i class="bi bi-check-circle"></i>
                                                Centanglah ciri-ciri berikut ini jika pada tanaman cabai kalian terdapat ciri tersebut
                                            </div>
                                        </div>
                                        <form action="<?php echo e(url('/proses')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <table class="table mx-3" id="table">
                                                <tbody>
                                                <tbody>
                                                    <?php $__currentLoopData = $ciri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($list->ciri); ?></td>
                                                        <td>
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" name="C<?php echo e($loop->iteration); ?>" class="form-check-input">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-primary btn-sm mx-3">Proses</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                </div>

            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\daun\resources\views/home/index.blade.php ENDPATH**/ ?>