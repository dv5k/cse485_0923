<!DOCTYPE html>
<head>
    <title>Edit Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <script src="../resources/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../resources/css/page_frame.css">
    <link rel="stylesheet" href="../resources/css/custom_items.css">
    <script src="../resources/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://kit.fontawesome.com/58854422a4.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#datetimepicker').datetimepicker();
        });
    </script>
</head>
<body>
    <div class="content">
        <?php include '../reuse/head_nav_management_bar.php' ?>
        
        <p class="text-center fw-bold fs-4">SỬA THÔNG TIN BÀI VIẾT</p>
        <div class="row mb-3">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!--tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh-->
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên tiêu đề</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên bài hát</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên thể loại</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tóm tắt</span>
                    <textarea class="form-control" aria-label="Summary"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Nội dung</span>
                    <textarea class="form-control" aria-label="Content"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên tác giả</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group mb-3" id="datetimepicker1">
                    <span class="input-group-text">Ngày viết</span>
                    <input type="text" class="form-control" id="datepicker">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
                <a href="./post.php" class="btn btn-warning me-1">Quay lại</a>
                <a href="#" class="btn btn-success ms-1">Lưu</a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker();
        });
    </script>

    <?php include '../reuse/footer.php' ?>
</body>
</html>

