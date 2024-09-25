<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../../components/head.php" ?>
</head>

<body>
    <div class="container-scroller">
        <?php include "../../components/navtop.php" ?>
        <!-- partial:partials/_sidebar.html -->
        <?php include "../../components/sidebar.php" ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include "../../components/navbot.php" ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <h3 class="mb-0">Hi, welcome back! <span class="ps-0 h6 ps-sm-2 text-muted d-inline-block">Your web analytics dashboard template.</span>
                        </h3>
                        <div class="d-flex">
                            <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                                <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                            <button type="button" class="btn btn-sm bg-white btn-icon-text border ms-3">
                                <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                            <button type="button" class="btn btn-sm ms-3 btn-success"> Add User</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex">
                                    <h3 class="card title">About</h3>
                                    <a href="" class="btn btn-primary ms-auto">Edit Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include "../../components/footer.php" ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php include "../../components/script.php" ?>
</body>

</html>