DROP DATABASE IF EXISTS KayukiBook;
CREATE DATABASE KayukiBook;
USE KayukiBook;
CREATE TABLE PhieuNhap (
	MaPhieuNhap int AUTO_INCREMENT PRIMARY KEY NOT null,
    NgayNhap date NOT null
);
INSERT INTO phieunhap (NgayNhap)VALUES
	('2024-05-03'),
    ('2024-05-06'),
    ('2022-05-10'),
    ('2022-05-13'),
    ('2022-05-17'),
    ('2022-05-20'),
    ('2022-05-24'),
    ('2022-05-27'),
    ('2022-05-31'),
    ('2022-06-03'),
    ('2022-06-07'),
    ('2022-06-10'),
    ('2022-06-14'),
    ('2022-06-17'),
    ('2022-06-21'),
    ('2022-06-24'),
    ('2022-06-28');
CREATE TABLE TheLoai(
    IDTheLoai int not null AUTO_INCREMENT PRIMARY KEY,
    TenTheLoai varchar(50) not null UNIQUE
);
INSERT INTO TheLoai (TenTheLoai)VALUES
    ('Comedy'),
    ('Shounen'),
    ('Adventure'),
    ('Drama'),
    ('Action'),
    ('Fantasy'),
    ('Sci Fi'),
    ('Slice Of Life'),
    ('School Life'),
    ('Supernatural'),
    ('Seinen'),
    ('Romance'),
    ('Mystery'),
    ('Historical'),
    ('Non-Human Protagonists'),
    ('Mature'),
    ('Elemental Powers'),
    ('Familu Friendly'),
    ('Tragedy'),
    ('Gender Bender'),
    ('Psychological'),
    ('Sport'),
    ('Shoujo'),
    ('Ecchi'),
    ('Monsters'),
    ('Josei'),
    ('Shounen-Ai');
CREATE TABLE TacGia(
    IDTacGia int not null AUTO_INCREMENT PRIMARY KEY,
    TenTacGia varchar(50) not null UNIQUE,
    QueQuan varchar(50) not null,
    TrangThai boolean
    -- 1: Đã nghỉ hưu, 0: Còn sáng tác
);
INSERT INTO TacGia(TenTacGia,QueQuan,TrangThai)VALUES
	('Taku Kuwabara','Japan',0),
	('Hiromu Arakawa, Huang Jin Zhou, Ryo Yashiro, Kusanagi','Japan',0),
	('Hiro Mashima','Japan',0),
	('Fujiko Fujio','Toyama',1),
	('Momoko Sakura','Japan',1),
	('Daisuke Ashihara','Japan',0),
	('Sorata Akiduki','Japan',0),
	('Hidekichi Matsumoto','Japan',0),
	('Kohei Horikoshi','Japan',0),
	('Aki Hamazi','Japan',0),
	('Kanehito Yamada, Tsukasa Abe','Japan',0),
	('Itokatsu','Japan',0),
	('suu Morishita','Japan',0),
	('so-ma-to','Japan',0),
	('Kamui Fujiwara, Takashi Umemura, Yuji Horii','Japan',0),
	('Yusuke Murata, One','Japan',0),
	('Yoshito Usui, Kazuki Nakajima, Kenta Aiba','Japan',0),
	('Soubee Amako','Japan',0),
	('Gosho Aoyama, Mayuko Kanba','Japan',0),
	('Dubu (Redice Studio), Chugong','Japan',0),
	('Kawo Tanuki, Choco Aya','Japan',0),
	('Takehiko Inoue','Okuchi, Kagoshima',0),
	('Makoto Ojiro','Saitama',0),
	('Hứa Trọng Lâm','Nam Kinh',1),
	('Kamui Fujiwara, Chiaki Kawamata','Japan',0),
	('Kana Akatsuki, Suoh','Japan',0),
	('Gege Akutami','Japan',0),
	('Daisuke Aizawa, Touzai','Japan',0);
CREATE TABLE NhaXuatBan(
    IDNhaXuatBan int not null AUTO_INCREMENT PRIMARY KEY,
    TenNXB varchar(50) not null UNIQUE,
    DiaChi varchar(50) not null,
    SDT varchar(50) not null UNIQUE,
    Email varchar(30),
    GiamDoc varchar(50)
);
INSERT INTO NhaXuatBan(TenNXB,DiaChi,SDT,Email,GiamDoc)VALUES
	('NXB Shueisha','Chiyoda, Tokyo, Nhật Bản','0854183458','shueisha@yahoo.com','Shinichi Hirono'),
	('NXB Mỹ Thuật','44B, Hàm Long, Hoàn Kiếm, Hanoi, Vietnam','0912350326','mythuat@hust.con','Không có'),
	('NXB Houbunsha','1-2-12 Koraku, Bunkyo-ku, Tokyo 112-8580','0954773527','Houbunsha@gmail.com','Takashi Takashi'),
	('NXB Hải Phòng','Số 5 phố Nguyễn khuyến - Phường Cầu Đất - Quận Ngô Quyền - Hải Phòng','0766376851','sunghoacai@gmail.com','Hà Mạnh Cường'),
	('NXB Kim Đồng','Số 55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội','1900571595','cskh_online@nxbkimdong.com.vn','Bùi Tuấn Nghĩa');
CREATE TABLE Sach(
    IDSach int not null AUTO_INCREMENT,
    TenSach varchar(70) not null,
    IDTheLoai int not null,
    IDTacGia int not null,
    Gia float not null,
    IDNhaXuatBan int not null,
    SoLuongKho float not null,
    MaPhieuNhap int NOT null,
    AnhBia varchar(60),
    PRIMARY KEY(IDSach),
    FOREIGN KEY(IDTheLoai) REFERENCES TheLoai(IDTheLoai),
    FOREIGN KEY(IDTacGia) REFERENCES TacGia(IDTacGia),
    FOREIGN KEY(IDNhaXuatBan) REFERENCES NhaXuatBan(IDNhaXuatBan),
    FOREIGN KEY(MaPhieuNhap) REFERENCES PhieuNhap(MaPhieuNhap)
);
INSERT INTO Sach(TenSach,IDTheLoai,IDTacGia,Gia,IDNhaXuatBan,SoLuongKho,MaPhieuNhap,AnhBia)VALUES
	('Rồng không trung - Tập 6',2,1,40000,5,34,1,'rong_khong_trung_bia_tap_6.jpg'),
	('Thần thú diễn võ(Hiromu Arakawa) - Tập 2',2,2,35000,1,45,1,'than_thu_dien_vo_bia_tap_2.jpg'),
	('Thánh thạch Rave - Tập 32',2,3,30000,3,56,2,'thanh_thach_rave_bia_tap_32.jpg'),
	('Ninja Hattori(Fujiko Fujiko A) - Tập 3',2,4,25000,2,123,2,'ninja_hattori_bia_tap_3.jpg'),
	('Nhóc Maruko - Tập 8',2,5,40000,4,43,3,'nhoc_maruko_bia_tap_8.jpg'),
	('World Trigger - Tập 12',3,6,35000,3,57,3,'world_trigger_bia_tap_12.jpg'),
	('Bạch tuyết tóc đỏ - Tập 11',1,7,30000,2,67,4,'bach_tuyet_toc_do_bia_tap_11.jpg'),
	('Có chó có mèo,ngày nào cũng vui - Tập 7',8,8,35000,1,83,4,'co_cho_co_meo_ngay_nao_cung_vui_bia_tap_7_1.jpg'),
	('Học viện Siêu Anh hùng - Tập 38',10,9,25000,4,143,5,'hoc_vien_sieu_anh_hung_my_hero_academy_38.jpg'),
	('Câu lạc bộ những kẻ mất ngủ - Tập 2',8,10,40000,5,31,5,'cau_lac_bo_nhung_ke_mat_ngu_bia_tap_2.jpg'),
	('Bocchi The Rock! - Tập 3',8,11,40000,5,21,6,'bocchi_the_rock_bia_tap_3.jpg'),
	('Frieren - Pháp sư tiễn táng - Tập 6',6,12,45000,5,21,6,'frieren_phap_su_tien_tang_bia_tap_6.jpg'),
	('Nina ở thị trấn cao nguyên - Tập 10',8,13,38000,5,69,7,'nina_o_thi_tran_cao_nguyen_10.jpg'),
	('Ngôn ngữ yêu thương - Tập 8',12,14,30000,5,82,7,'ngon_ngu_yeu_thuong_8.jpg'),
	('Shadows House - Tập 2',6,15,45000,5,156,8,'shadow_house_bia_tap_2.jpg'),
	('Dragon Quest:Dấu ấn Roto - Những người kế thừa - Tập 23',3,16,40000,4,23,8,'dragon_quest_dau_an_roto_bia_tap_1.jpg'),
	('One-Punch Man - Tập 27',10,17,25000,2,47,9,'one_punch_man.jpg'),
	('Shin cậu bé bút chì - Truyện dài - Tập 13',2,18,25000,1,61,9,'shin_cau_be_but_chi_truyen_dai_tap_13.jpg'),
	('Ninja Rantaro - Tập 29',2,19,40000,3,37,10,'ninja_rantaro_bia_tap_29.jpg'),
	('Thám Tử Lừng Danh Conan - Hanzawa - Chàng hung thủ số nhọ - Tập 7',2,20,25000,5,112,10,'conan_hanzawa_chang_hung_thu_so_nho_7.jpg'),
	('Solo Leveling - Tôi thăng cấp một mình - Tập 13',5,21,30000,5,231,11,'solo-leveling_bia_pvc-card_tap-13.jpg'),
	('World Trigger - Tập 14',26,6,35000,1,6,11,'world_trigger_bia_tap_14.jpg'),
	('Bạch tuyết tóc đỏ - Tập 13',1,7,30000,5,29,12,'bach_tuyet_toc_do_13.jpg'),
	('Rồng săn tìm nhà - Tập 2',4,22,40000,3,39,12,'Dragon_goes_house_hunnting.jpg'),
	('Slam Dunk Deluxe Edition - Tập 21',2,23,60000,5,57,13,'slam_drunk_21.jpg'),
	('Chị Chion ở đền mèo - Tập 2',23,24,50000,5,71,13,'neko-no-otera-no-chion-san-jp-2.jpg'),
	('Tân Ninja Hattori(Fujiko Fujiko A) - Tập 1',2,4,25000,5,98,14,'Tan_ninja_hatori_vol1.jpg'),
	('Bocchi The Rock! - Tập 4',8,11,40000,5,63,14,'bocchi_the_rock_4.jpg'),
	('Học viện Siêu anh hùng - Tập 39',10,9,25000,5,46,15,'Hoc_vien_sieu_anh_hung_39.jpg'),
	('Phong Thần Diễn Nghĩa(Deluxe Edition) - Tập 3',14,25,70000,5,94,15,'Phong_than_dien_nghia_3.jpg'),
	('Dragon Quest:Cuộc phiêu lưu của Dũng sĩ Dai(Deluxe Edition) - Tập 1',14,4,69000,5,66,16,'Dragon_Quest_Cuoc_phieu_luu_cua_Dung_si_Dai.jpeg'),
	('Sứ giả bốn mùa - Vũ điệu mùa xuân - Tập 2',1,15,140000,5,43,16,'su_gia_4_mua_vu_dieu_mua_xuan_2.jpg'),
	('Chú thuật hồi chiến - Tập 23',2,21,30000,5,26,17,'Jujutsu_Kaisen_vol23.jpg'),
	('Chúa tể Bóng tối - Tập 3',6,23,40000,5,9,17,'Chua_te_bong_toi_vol3.jpg');
CREATE TABLE ChiTietPhieuNhap (
    MaChiTietPhieuNhap int AUTO_INCREMENT PRIMARY KEY NOT null,
    MaSP int not null,
    MaPhieuNhap int NOT null,
    SoLuongNhap int not null,
    NgayBan date NOT null,
    FOREIGN KEY(MaPhieuNhap) REFERENCES PhieuNhap(MaPhieuNhap),
    FOREIGN KEY(MaSP) REFERENCES Sach(IDSach)
);
INSERT INTO ChiTietPhieuNhap (MaPhieuNhap ,MaSP , SoLuongNhap, NgayBan)VALUES
    (1,5,2,'2024-05-03'),
    (2,6,2,'2024-05-06'),
    (3,7,2,'2022-05-10'),
    (4,5,2,'2022-05-13'),
    (5,6,2,'2022-05-17'),
    (6,14,2,'2022-05-20'),
    (7,8,2,'2022-05-24'),
    (8,17,2,'2022-05-27'),
    (9,21,2,'2022-05-31'),
    (10,24,2,'2022-06-03'),
    (11,26,2,'2022-06-07'),
    (12,15,2,'2022-06-10'),
    (13,18,2,'2022-06-14'),
    (14,29,2,'2022-06-17'),
    (15,31,2,'2022-06-21'),
    (16,1,2,'2022-06-24'),
    (17,33,2,'2022-06-28');
CREATE TABLE QuanTri (
    MaQuanTri int AUTO_INCREMENT PRIMARY KEY,
    Fullname varchar(50) NOT NULL,
	TaiKhoan varchar(100) NOT null,
    Pass varchar(100)
);

INSERT INTO QuanTri(Fullname,TaiKhoan, Pass) VALUES
    ('Tạ Văn Phúc','phuc20230282P.hust',MD5('Phuc1234@')),
    ('Nguyễn Chiến Thắng','thang20230291P.hust',MD5('1234$')),
    ('Kayuki','Kayuki2910',MD5('1234$')
);

CREATE TABLE Khachhang(
    IDKhachhang int not null AUTO_INCREMENT PRIMARY KEY,
    TenKH varchar(50) not null,
    TaiKhoan varchar(50) not null UNIQUE,
    MatKhau varchar(50) not null,
    DiaChi varchar(200) not null,
    SDT varchar(50) not null UNIQUE,
    Ngaysinh date not null,
    Gender boolean not null
);

INSERT INTO Khachhang(TenKH,TaiKhoan,MatKhau,DiaChi,SDT,Ngaysinh,Gender) VALUES
	('Anh Tuấn','tuandeptrai@gmail.com',MD5('Tuan1234@'),'Hà Nội','0123456789','2003-03-26',1),
    ('Lan Anh','lananh@gmail.com',MD5('Anh1234@'),'Hải Phòng','0934544226','2003-06-11',0),
    ('Hải Anh','haianh@yahoo.com',MD5('haibeo2k@'),'Hưng Yên','0988266476','2000-01-06',1);
CREATE TABLE PhuongThucThanhToan(
    MaPTTT int not null AUTO_INCREMENT PRIMARY KEY,
    TenPTTT varchar(50) not null
);
INSERT INTO PhuongThucThanhToan(TenPTTT) VALUES
    ('Thanh toán tiền mặt'),
    ('Thanh toắn online');
CREATE TABLE PhuongThucVanChuyen(
    MaPTVC int not null AUTO_INCREMENT PRIMARY KEY,
    TenPTVC varchar(50) not null
);  
INSERT INTO PhuongThucVanChuyen(TenPTVC) VALUES
    ('Vận chuyển nhanh'),
    ('Vận chuyển thường');
CREATE TABLE HoaDon(
    MaHoaDon int not null AUTO_INCREMENT PRIMARY KEY,
    IDKhachhang int not null,
    MaPTTT int,
    MaPTVC int,
    TongTien decimal(10,2),
    NgayBan datetime DEFAULT CURRENT_TIMESTAMP(),
    TrangThai smallint(1), -- 0: trong kho, 1: đang giao, 2: đã giao
    FOREIGN KEY (IDKhachhang) REFERENCES Khachhang(IDKhachhang),
    FOREIGN KEY (MaPTTT) REFERENCES PhuongThucThanhToan(MaPTTT),
    FOREIGN KEY (MaPTVC) REFERENCES PhuongThucVanChuyen(MaPTVC)
);

INSERT INTO HoaDon(IDKhachhang, MaPttt, MaPTVC, TongTien, NgayBan, TrangThai) VALUES
    (1,1,2,235000,'2023-01-15',1),
    (2,2,1,180000,'2023-02-10',1),
    (3,1,2,150000,'2023-03-05',2),
    (1,2,1,210000,'2023-04-20',1),
    (2,1,2,190000,'2023-05-22',2),
    (2,2,1,1060000,'2023-06-18',1),
    (3,1,2,810000,'2023-07-02',2),
    (1,2,1,255000,'2023-08-25',1),
    (2,1,2,80000,'2023-09-10',2),
    (2,2,1,270000,'2023-10-05',1),
    (3,1,2,270000,'2023-11-15',2),
    (1,2,1,280000,'2023-12-28',1),
    (1,1,2,820000,'2024-01-28',1),
    (2,2,1,225000,'2024-02-20',1),
    (3,1,2,175000,'2024-03-12',2),
    (1,2,1,270000,'2024-04-18',1),
    (2,1,2,285000,'2024-05-26',2),
    (2,2,1,1335000,'2024-06-11',1),
    (3,1,2,920000,'2024-07-02',2);
CREATE TABLE ChiTietHoaDon(
    MaChiTietHoaDon int not null AUTO_INCREMENT PRIMARY KEY,
    MaHoaDon int not null,
    MaSP int not null,
    SoLuongBan float DEFAULT NULL,
    FOREIGN KEY (MaHoaDon) REFERENCES HoaDon(MaHoaDon),
    FOREIGN KEY (MaSP) REFERENCES Sach(IDSach)
);

INSERT INTO ChiTietHoaDon(MaHoaDon, MaSP, SoLuongBan) VALUES
    (1,6,3),
    (1,8,2),
    (1,25,1),
    (2,12,4),
    (3,17,6),
    (4,21,7),
    (5,18,2),
    (5,2,4),
    (6,9,8),
    (6,2,1),
    (6,30,10),
    (6,27,5),
    (7,29,12),
    (7,33,17),
    (8,12,3),
    (8,14,4),
    (9,19,2),
    (10,15,6),
    (11,23,9),
    (12,24,7),
    (13,6,12),
    (13,8,8),
    (13,25,2),
    (14,12,5),
    (14,17,7),
    (15,21,9),
    (16,18,3),
    (16,2,6),
    (17,9,10),
    (17,2,2),
    (17,30,12),
    (17,27,7),
    (18,29,14),
    (18,33,19);