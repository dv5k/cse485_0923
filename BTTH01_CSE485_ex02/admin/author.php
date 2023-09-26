<!DOCTYPE html>
<head>
    <title>Author</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <script src="../resources/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../resources/css/page_frame.css">
    <link rel="stylesheet" href="../resources/css/custom_items.css">
    <script src="https://kit.fontawesome.com/58854422a4.js" crossorigin="anonymous"></script>
  </style>
</head>
<body>
    <div class="content">
        <?php include '../reuse/head_nav_management_bar.php' ?>
        
        <div class="row mb-3">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <a href="./add_author.php" class="btn btn-success justify-content-start">
                    Thêm mới
                </a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                    </thead>
                    <tbody>
                        <?php
                            for ($i = 1; $i < 4; $i++) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo "Nguyễn Văn A" ?></td>
                            <td><?php echo '<img src="https://dummyimage.com/50x50.png/ff4444/ffffff" class="rounded" alt="...">' ?></td>
                            <td>
                                <a href="./edit_author.php" class="btn bnt-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn bnt-primary">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                            
                        <?php       
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

    <?php include '../reuse/footer.php' ?>
</body>
</html>

