<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                </div>
                <div class="ms-3 name">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access')): ?>
                    <h5 class="font-bold">Admin</h5>
                    <a class="btn btn-danger mt-3" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                    <?php else: ?>
                    <a class="btn btn-primary" href="<?php echo e(url('/dashboard')); ?>">Login</a>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\daun\resources\views/layouts/user.blade.php ENDPATH**/ ?>