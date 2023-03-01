<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tabel Jadwal</h3>
                <h6 class="font-weight-normal mb-0">Jadwal Masuk Departemen IT <span class="text-primary">- PT. Sumber Alfaria Trijaya Tbk</span></h6>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
    <div id="successMessage" class="alert alert-success" role="alert">
        <i class="fa fa-check"></i>&nbsp;<?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- DataTables -->
<div class="container">
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Time
                                </th>
                                <th class="text-uppercase"><?php echo date('l'); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+1 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+2 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+3 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+4 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+5 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+6 day")); ?></th>
                                <th class="text-uppercase"><?php echo date('l',strtotime("+7 day")); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $no = 1;
                                foreach ($jadwal as $jd) {
                                ?>
                            <tr>
                                <td class="align-middle"><?=$jd['jam'];?></td>
                                <td>
                                    <?php foreach ($jadwal_detail as $jdrow) { 
                                            if ($jdrow['id_user'] == $jd['id_user']) {
                                            ?>
                                                <?=$jdrow['usr_nama'];?>
                                        <?php }
                                        } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>