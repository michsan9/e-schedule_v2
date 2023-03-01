<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('_partials/header') ?>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php $this->load->view('_partials/navbar') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <?php $this->load->view('_partials/sidebar') ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <?php $this->load->view($content); ?>
                </div>

                <?php $this->load->view('_partials/footer') ?>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/modal') ?>

    <?php $this->load->view('_partials/js') ?>

    <?php $this->load->view('_partials/ajax') ?>

</body>

</html>