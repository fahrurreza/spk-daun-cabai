

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
                                                        <form method="post" action="<?php echo e(url('/solusi')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <form class="form form-horizontal">
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <label>Pilih Penyakit</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <select class="form-select" id="basicSelect" name='penyakit_id'>
                                                                                    <option disabled selected>Pilih...</option>
                                                                                    <?php $__currentLoopData = $penyakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($list->id); ?>"><?php echo e($list->penyakit); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label>Solusi</label>
                                                                            </div>
                                                                            <div class="col-md-8 form-group">
                                                                                <input type="txet" class="form-control"
                                                                                    name="solusi" placeholder="Input here...">
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
                                                        <th>Solusi</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $penyakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($list->kode); ?> - <?php echo e($list->penyakit); ?></td>
                                                        <td>
                                                            <ul>
                                                                <?php $__currentLoopData = $list->solusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solusi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                <?php echo e($solusi->solusi); ?>

                                                                </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </td>
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
                                                                            <form method="post" action="<?php echo e(url('/solusi/edit')); ?>">
                                                                                <?php echo csrf_field(); ?>
                                                                                <div class="modal-body">
                                                                                    <div class="form-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <label>Code</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="text" class="form-control"
                                                                                                    name="code" value="<?php echo e($list->kode); ?>" disabled>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <label>Nama Penyakit</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="txet" class="form-control"
                                                                                                    name="penyakit" value="<?php echo e($list->penyakit); ?>" disabled>
                                                                                            </div>
                                                                                            <?php $__currentLoopData = $list->solusi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solusi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <div class="col-md-4">
                                                                                                <label>Solusi</label>
                                                                                            </div>
                                                                                            <div class="col-md-8 form-group">
                                                                                                <input type="hidden" name="id<?php echo e($solusi->id); ?>" value="<?php echo e($solusi->id); ?>">
                                                                                                <input type="hidden" name="penyakit_id" value="<?php echo e($solusi->penyakit_id); ?>">
                                                                                                <input type="txet" class="form-control"
                                                                                                    name="solusi<?php echo e($solusi->id); ?>" value="<?php echo e($solusi->solusi); ?>">
                                                                                            </div>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cabai\resources\views/solusi/index.blade.php ENDPATH**/ ?>