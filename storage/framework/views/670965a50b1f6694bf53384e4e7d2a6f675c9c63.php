<?php
    $penyakit = DB::table('penyakit')->get();
    $ciri = DB::table('ciri')->get();
    $solusi = DB::table('solusi_penyakit')->get();
?>
<div class="row">
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldDocument"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Penyakit</h6>
                            <h6 class="font-extrabold mb-0"><?php echo e(count($penyakit)); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldEdit"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Ciri Penyakit</h6>
                            <h6 class="font-extrabold mb-0"><?php echo e(count($ciri)); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldPaper"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Solusi Penyakit</h6>
                            <h6 class="font-extrabold mb-0"><?php echo e(count($solusi)); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\cabai\resources\views/layouts/card.blade.php ENDPATH**/ ?>