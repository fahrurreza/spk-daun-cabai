

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
                                            <?php if($data != 0): ?>
                                            <div class="alert alert-light-success color-success">
                                                Perkiraan penyakit tanaman padi anda adalah <b><?php echo e($data['penyakit']); ?></b> <?php echo e($data['cf'] * 100); ?>%
                                                <p>Solusi :</p> 
                                                <ul>
                                                    <?php $__currentLoopData = $solusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($list->solusi); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                                <p><a href="<?php echo e(url('/')); ?>">Kembali</a></p>
                                            </div>
                                            <?php else: ?>
                                            <div class="alert alert-light-danger color-danger">
                                                <i class="bi bi-exclamation-circle"></i> 
                                                Maaf, Tidak ada rule yang sesuai. Silahkan pilih kembali ciri-ciri tanaman padi anda. <a href="<?php echo e(url('/')); ?>">Klik disini</a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                </div>

            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fajri\resources\views/home/hasil.blade.php ENDPATH**/ ?>