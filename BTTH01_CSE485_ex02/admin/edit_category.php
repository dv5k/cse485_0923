<!DOCTYPE html>
<head>
    <title>Edit Genre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <script src="../resources/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../resources/css/page_frame.css">
    <link rel="stylesheet" href="../resources/css/custom_items.css">
  </style>
</head>
<body>
    <div class="content">
        <?php include '../reuse/head_nav_management_bar.php' ?>
        
        <p class="text-center fw-bold fs-4">SỬA THÔNG TIN THỂ LOẠI</p>
        <div class="row mb-3">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên thể loại</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div><div class="row mb-3">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <a href="./category.php" class="btn btn-warning me-1">Quay lại</a>
                <a href="#" class="btn btn-success ms-1">Lưu</a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

    <?php include '../reuse/footer.php' ?>
</body>
</html>

