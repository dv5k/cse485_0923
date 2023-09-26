--Tạo database và tạo các bảng theo yêu cầu đề bài

CREATE DATABASE BTTH01_CSE485;

USE BTTH01_CSE485;

CREATE TABLE tacgia (
    ma_tgia INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ten_tgia VARCHAR(100) NOT NULL,
    hinh_tgia VARCHAR(100)
) CHARACTER SET utf8mb4;

CREATE TABLE theloai (
    ma_tloai INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ten_tloai VARCHAR(50) NOT NULL
) CHARACTER SET utf8mb4;

CREATE TABLE baiviet (
    ma_bviet INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tieude VARCHAR(200) NOT NULL,
    ten_bhat VARCHAR(100) NOT NULL,
    ma_tloai INT UNSIGNED NOT NULL,
    FOREIGN KEY (ma_tloai) REFERENCES theloai (ma_tloai),
    tomtat TEXT NOT NULL,
    noidung TEXT,
    ma_tgia INT UNSIGNED NOT NULL,
    FOREIGN KEY (ma_tgia) REFERENCES tacgia (ma_tgia),
    ngayviet DATETIME NOT NULL DEFAULT CURRENT_DATE(),
    hinhanh VARCHAR(200)
) CHARACTER SET utf8mb4;


-- Thực hiện truy vấn

USE BTTH01_CSE485;

-- 3.a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT * 
FROM baiviet 
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai 
WHERE theloai.ten_tloai = 'Nhạc trữ tình';

-- 3.b. Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT * 
FROM baiviet 
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
WHERE tacgia.ten_tgia = 'Nhacvietplus';

-- 3.c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT * 
FROM theloai 
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_tloai IS NULL;

-- 3.d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, 
-- tên bài hát, tên tác giả, tên thể loại, ngày viết.
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai

-- 3.e. Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ma_tloai, theloai.ten_tloai, COUNT(*) AS genre_count
FROM theloai
JOIN baiviet ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ma_tloai, theloai.ten_tloai
ORDER BY genre_count DESC
LIMIT 1;

-- 3.f.Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT tacgia.ma_tgia, tacgia.ten_tgia, COUNT(*) AS post_count
FROM tacgia
JOIN baiviet ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY tacgia.ma_tgia, tacgia.ten_tgia
ORDER BY post_count DESC
LIMIT 2;

-- 3.g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, 
-- “thương”, “anh”, “em”
SELECT baiviet.ma_bviet, baiviet.ten_bhat
FROM baiviet
WHERE baiviet.ten_bhat LIKE "%yêu%"
    OR baiviet.ten_bhat LIKE "%thương%"
    OR baiviet.ten_bhat LIKE "%anh%"
    OR baiviet.ten_bhat LIKE "%em%"

-- 3.h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa
-- 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat
FROM baiviet
WHERE baiviet.tieude LIKE '%yêu%' 
	OR baiviet.tieude LIKE '%thương%' 
    OR baiviet.tieude LIKE '%anh%'
    OR baiviet.tieude LIKE '%em'
    OR baiviet.ten_bhat LIKE '%yêu%'
    OR baiviet.ten_bhat LIKE '%thương%'
    OR baiviet.ten_bhat LIKE '%anh%'
    OR baiviet.ten_bhat LIKE '%em'

-- 3.i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm 
-- theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, 
baiviet.tomtat, baiviet.noidung, tacgia.ten_tgia, baiviet.ngayviet, baiviet.hinhanh
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia

-- 3.j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về 
-- danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi.
DELIMITER //
CREATE PROCEDURE sp_DSBaiViet (IN genre_name VARCHAR(50))
BEGIN
	DECLARE genre_exist INT;
    
    SELECT COUNT(*) INTO genre_exist
    FROM theloai
    WHERE theloai.ten_tloai = genre_name;
    
    IF genre_exist = 0 THEN
    	SIGNAL SQLSTATE '45000'
        	SET MESSAGE_TEXT = 'Thể loại cần tìm không tồn tại';
	END IF;

	SELECT baiviet.tieude
    FROM baiviet
    JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
    WHERE theloai.ten_tloai = genre_name;
END;
// DELIMITER ;

-- 3.k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
-- khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo.

ALTER TABLE theloai
ADD SLBaiViet INT UNSIGNED AFTER ten_tloai;

-- Thủ tục để cập nhật số lượng bài viết theo từng dòng của bảng theloai
DELIMITER //
CREATE PROCEDURE sp_LayDSBaiViet (IN row_number INT UNSIGNED)
BEGIN
	DECLARE cnt INT;

	SELECT COUNT(*) INTO cnt
    FROM baiviet
    WHERE baiviet.ma_tloai = row_number;
    
    IF cnt > 0 THEN
    	UPDATE theloai
        SET SLBaiViet = cnt
        WHERE theloai.ma_tloai = row_number;
    END IF;
    
    IF cnt = 0 THEN
    	UPDATE theloai
        SET SLBaiViet = 0
        WHERE theloai.ma_tloai = row_number;
    END IF;
END;
// DELIMITER ;

-- Gọi thủ tục cập nhật số lượng bài viết
CALL sp_LayDSBaiViet(1);
CALL sp_LayDSBaiViet(2);
CALL sp_LayDSBaiViet(3);
CALL sp_LayDSBaiViet(4);
CALL sp_LayDSBaiViet(5);
CALL sp_LayDSBaiViet(6);
CALL sp_LayDSBaiViet(7);
CALL sp_LayDSBaiViet(8);
CALL sp_LayDSBaiViet(9);
CALL sp_LayDSBaiViet(10);

-- Các trigger cập nhật số lượng bài viết trong bảng theloai
DELIMITER //
CREATE TRIGGER tg_CapNhatTheLoai
AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai 
    SET SLBaiViet = SLBaiViet + 1 
    WHERE ma_tloai = NEW.ma_tloai;
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER tg_DeleteBaiViet
AFTER DELETE ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai 
    SET SLBaiViet = SLBaiViet - 1 
    WHERE ma_tloai = OLD.ma_tloai;
END //
DELIMITER ;

-- 3.l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng 
-- Đăng nhập/Quản trị trang web.
CREATE TABLE USERS (
    user_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    UNIQUE username,
    password VARCHAR(20) NOT NULL
);