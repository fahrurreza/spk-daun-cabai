

<?php $__env->startSection('content'); ?>
    
<div class="flex flex-wrap">
    <div class="w-full px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
            <div class="text-center flex justify-between">
            <h6 class="text-blueGray-700 text-xl font-bold">
                Form Pertanyaan
            </h6>
            
            </div>
        </div>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
<div class="flex flex-wrap mt-4">
            <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Jawab Pertanyaan Di Bawah Ini
                      </h3>
                    </div>
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <form method="post" action="<?php echo e(url('/client')); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            No
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Pertanyaan
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Jawaban
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $soalan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <?php echo e($loop->iteration); ?>

                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <?php echo e($soal->gejala); ?>

                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <?php $__currentLoopData = $jawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="<?php echo e($soal->kode); ?>" value="<?php echo e($jawab->nilai); ?>" />
                                            <span class="ml-2"><?php echo e($jawab->jawaban); ?></span>
                                        </label>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                  
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">
                        Simpan
                        </button>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
</div>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    charset="utf-8"
></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script type="text/javascript">
    /* Make dynamic date appear */
    (function () {
    if (document.getElementById("get-current-year")) {
        document.getElementById(
        "get-current-year"
        ).innerHTML = new Date().getFullYear();
    }
    })();
    /* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
    }

    (function () {
    /* Chart initialisations */
    /* Line Chart */
    var config = {
        type: "line",
        data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
            label: new Date().getFullYear(),
            backgroundColor: "#4c51bf",
            borderColor: "#4c51bf",
            data: [65, 78, 66, 44, 56, 67, 75],
            fill: false,
            },
            {
            label: new Date().getFullYear() - 1,
            fill: false,
            backgroundColor: "#fff",
            borderColor: "#fff",
            data: [40, 68, 86, 74, 56, 60, 87],
            },
        ],
        },
        options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: false,
            text: "Sales Charts",
            fontColor: "white",
        },
        legend: {
            labels: {
            fontColor: "white",
            },
            align: "end",
            position: "bottom",
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            xAxes: [
            {
                ticks: {
                fontColor: "rgba(255,255,255,.7)",
                },
                display: true,
                scaleLabel: {
                display: false,
                labelString: "Month",
                fontColor: "white",
                },
                gridLines: {
                display: false,
                borderDash: [2],
                borderDashOffset: [2],
                color: "rgba(33, 37, 41, 0.3)",
                zeroLineColor: "rgba(0, 0, 0, 0)",
                zeroLineBorderDash: [2],
                zeroLineBorderDashOffset: [2],
                },
            },
            ],
            yAxes: [
            {
                ticks: {
                fontColor: "rgba(255,255,255,.7)",
                },
                display: true,
                scaleLabel: {
                display: false,
                labelString: "Value",
                fontColor: "white",
                },
                gridLines: {
                borderDash: [3],
                borderDashOffset: [3],
                drawBorder: false,
                color: "rgba(255, 255, 255, 0.15)",
                zeroLineColor: "rgba(33, 37, 41, 0)",
                zeroLineBorderDash: [2],
                zeroLineBorderDashOffset: [2],
                },
            },
            ],
        },
        },
    };
    var ctx = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(ctx, config);

    /* Bar Chart */
    config = {
        type: "bar",
        data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
            label: new Date().getFullYear(),
            backgroundColor: "#ed64a6",
            borderColor: "#ed64a6",
            data: [30, 78, 56, 34, 100, 45, 13],
            fill: false,
            barThickness: 8,
            },
            {
            label: new Date().getFullYear() - 1,
            fill: false,
            backgroundColor: "#4c51bf",
            borderColor: "#4c51bf",
            data: [27, 68, 86, 74, 10, 4, 87],
            barThickness: 8,
            },
        ],
        },
        options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: false,
            text: "Orders Chart",
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        legend: {
            labels: {
            fontColor: "rgba(0,0,0,.4)",
            },
            align: "end",
            position: "bottom",
        },
        scales: {
            xAxes: [
            {
                display: false,
                scaleLabel: {
                display: true,
                labelString: "Month",
                },
                gridLines: {
                borderDash: [2],
                borderDashOffset: [2],
                color: "rgba(33, 37, 41, 0.3)",
                zeroLineColor: "rgba(33, 37, 41, 0.3)",
                zeroLineBorderDash: [2],
                zeroLineBorderDashOffset: [2],
                },
            },
            ],
            yAxes: [
            {
                display: true,
                scaleLabel: {
                display: false,
                labelString: "Value",
                },
                gridLines: {
                borderDash: [2],
                drawBorder: false,
                borderDashOffset: [2],
                color: "rgba(33, 37, 41, 0.2)",
                zeroLineColor: "rgba(33, 37, 41, 0.15)",
                zeroLineBorderDash: [2],
                zeroLineBorderDashOffset: [2],
                },
            },
            ],
        },
        },
    };
    ctx = document.getElementById("bar-chart").getContext("2d");
    window.myBar = new Chart(ctx, config);
    })();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kucing\resources\views/client/diagnosa.blade.php ENDPATH**/ ?>