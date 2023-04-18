<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">SPK TANAMAN CABAI</a>
            </div>
            <div class="header-top-right">

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <ul>

                <li class="menu-item">
                    <a href="<?php echo e(url('/')); ?>" class='menu-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access')): ?>
                <li class="menu-item  ">
                    <a href="<?php echo e(url('/penyakit')); ?>" class='menu-link'>
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Data Penyakit</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="<?php echo e(url('/ciri')); ?>" class='menu-link'>
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Data Ciri Penyakit</span>
                    </a>
                </li>

                <li class="menu-item  ">
                    <a href="<?php echo e(url('/solusi')); ?>" class='menu-link'>
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Data Solusi Penyakit</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

</header><?php /**PATH C:\xampp\htdocs\daun\resources\views/layouts/header.blade.php ENDPATH**/ ?>