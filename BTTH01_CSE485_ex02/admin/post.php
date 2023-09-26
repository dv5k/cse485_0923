<!DOCTYPE html>
<head>
    <title>Post</title>
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
                <a href="./add_post.php" class="btn btn-success justify-content-start">
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
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Tóm tắt</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Ngày viết</th>
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
                            <td><?php echo "Bài hát nhạc trẻ" ?></td>
                            <td><?php echo "Hồng nhan" ?></td>
                            <td><?php echo "Nhạc trữ tình" ?></td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                    <?php echo "Phần tóm tắt nội dung bài viết phê bình âm nhạc 22" ?></td>
                                </span>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                <?php echo "Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.

Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.

Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.

In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.

Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.

Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.

Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.

Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.

Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.

Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.

Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.

Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.

Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.

Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.

Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.

Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.

Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.

Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem." ?>
                                </span>    
                            </td>
                            <td><?php echo "Nguyễn Văn A" ?></td>
                            <td><?php echo "26/09/2023" ?></td>
                            <td><?php echo '<img src="https://dummyimage.com/50x50.png/ff4444/ffffff" class="rounded" alt="...">' ?></td>
                            <td>
                                <a href="./edit_post.php" class="btn bnt-primary">
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

