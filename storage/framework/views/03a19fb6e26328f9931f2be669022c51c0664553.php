<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبورد
                <small>مدیریتی</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبورد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">



                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">

                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">جدول اشخاص</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table direction table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th>نام پدر</th>
                                            <th>تاریخ تولد</th>
                                            <th>محل تولد</th>
                                            <th>کد ملی</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($people_result as $person): ?>
                                                <?php $person = (object) $person;?>
                                                <tr>
                                                    <td><?php echo e($person->firstName); ?></td>
                                                    <td><?php echo e($person->lastName); ?></td>
                                                    <td><?php echo e($person->fatherName); ?></td>
                                                    <td><?php echo e(date('Y-m-d',$person->date)); ?></td>
                                                    <td><?php echo e($person->birthCity); ?></td>
                                                    <td><?php echo e($person->countryId); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>نام</th>
                                            <th>نام خانوادگی</th>
                                            <th>نام پدر</th>
                                            <th>تاریخ تولد</th>
                                            <th>محل تولد</th>
                                            <th>کد ملی</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="plugins/fastclick/fastclick.js"></script>
<script>
    $(function () {
        $('#example1').DataTable({
            "language": {
                "search": "  جستجو : ",
                "search": "  جستجو _INPUT_ بر روی جدول اشخاص : ",
                "info":           "نمایش _START_ تا _END_ از _TOTAL_ ورودی",
                "infoEmpty":      "نمایش 0 تا 0 از 0 ورودی",
                "infoFiltered":   "(فیلترشده از _MAX_ ورودی)",
                "infoPostFix":    "",
                "lengthMenu":     "نمایش _MENU_ ورودی",
                "loadingRecords": "در حال بارگذاری...",
                "processing":     "در حال پردازش...",
                "zeroRecords":    "هیچ رکوردی یافت نشد",
                "paginate": {
                    "first":      "اولین",
                    "last":       "آخرین",
                    "next":       "بعدی",
                    "previous":   "قبلی"
                },
                "aria": {
                    "sortAscending":  ": مرتب سازی صعودی",
                    "sortDescending": ": مرتب سازی نزولی"
                }
            },
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>