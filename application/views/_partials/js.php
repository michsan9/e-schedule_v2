<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- plugins:js -->
<script src="<?= site_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= site_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= site_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= site_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?= site_url() ?>assets/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= site_url() ?>assets/js/off-canvas.js"></script>
<script src="<?= site_url() ?>assets/js/hoverable-collapse.js"></script>
<script src="<?= site_url() ?>assets/js/template.js"></script>
<script src="<?= site_url() ?>assets/js/settings.js"></script>
<script src="<?= site_url() ?>assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= site_url() ?>assets/js/dashboard.js"></script>
<script src="<?= site_url() ?>assets/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<!-- Plugin CKEditor -->
<script src="<?= site_url() ?>assets/plugins/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('uraian_kegiatan');
</script>
<script>
    CKEDITOR.replace('saran_thl');
</script>
<script>
    CKEDITOR.replace('saran_kasum');
</script>
<script>
    CKEDITOR.replace('saran_pimpinan');
</script>
<!-- <script>
    $(function() {
        $('.select2').select2()
    })
</script> -->