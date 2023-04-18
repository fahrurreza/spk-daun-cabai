

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
                                    <?php if(session('status_error')): ?>
                                    <div class="alert alert-light-danger color-danger">
                                        <i class="bi bi-exclamation-circle"></i> 
                                        <?php echo e(session('status')); ?>

                                    </div>
                                    <?php elseif(session('status')): ?>
                                    <div class="alert alert-light-success color-success">
                                        <i class="bi bi-check-circle"></i>
                                        <?php echo e(session('status')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Data Penyakit</h4>
                                        </div>
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-bs-toggle="modal" data-bs-target="#primary">
                                                Input
                                            </button>

                                            <!--primary theme Modal -->
                                            <div class="modal fade text-left" id="primary" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel160"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">
                                                                Form Input
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="<?php echo e(url('/ciri')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <form class="form form-horizontal">
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <label>Code</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="code" value="C<?php echo e($code + 1); ?>" disabled>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Nama Ciri</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <input type="txet" class="form-control"
                                                                                    name="ciri" placeholder="Input here...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-primary ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Ciri-ciri</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $ciri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($list->kode); ?></td>
                                                        <td><?php echo e($list->ciri); ?></td>
                                                        <td>
                                                            <center>
                                                                <span type="button" class="badge bg-success" data-bs-toggle="modal" data-bs-target="#success<?php echo e($list->id); ?>"><i class="bi bi-pencil"></i></span>
                                                                <div class="modal fade text-left" id="success<?php echo e($list->id); ?>" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel110"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-success">
                                                                                <h5 class="modal-title white" id="myModalLabel110">
                                                                                    Form Edit
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                                    <i data-feather="x"></i>
                                                                                </button>
                                                                            </div>
                                                                            <form method="post" action="<?php echo e(url('/ciri/'.$list->id)); ?>">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('patch'); ?>
                                                                                <div class="modal-body">
                                                                                    <div class="form-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Code</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="text" class="form-control"
                                                                                                    name="kode" value="<?php echo e($list->kode); ?>" disabled>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <label>Nama Penyakit</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="text" class="form-control"
                                                                                                    name="ciri" value="<?php echo e($list->ciri); ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-light-secondary"
                                                                                        data-bs-dismiss="modal">
                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                    </button>
                                                                                    <button type="submit" class="btn btn-primary ml-1">
                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Save</span>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <form action="<?php echo e(url('ciri/'.$list->id)); ?>" method="post">
                                                                    <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?>
                                                                    <button class="btn btn-sm btn-danger mt-2" type="submit"><i class="bi bi-trash"></i></button>
                                                                    </form>
                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\daun\resources\views/ciri/index.blade.php ENDPATH**/ ?>