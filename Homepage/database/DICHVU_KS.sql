create table DICHVU_KS (
    MA_DV varchar(10) not null primary key ,
    TENDV varchar(100) not null,
    DONGIADV int not null,
    DONVITINH varchar(100) not null
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;
insert into DICHVU_KS values
('DV01','Giặt ủi quần áo',55000,'kg'),
('DV02','Cho thuê xe tự lái',880000,'24 giờ'),
('DV03','Xe đưa đón sân bay',399000,'lần đưa/đón'),
('DV04','Spa',825000,'người'),
('DV05','Fitness center',1250000,'người'),
('DV06','Sân golf và sân tennis',2500000,'người'),
('DV07','Casino',1050000,'vé-24h'),
('DV08','Quầy bar',700000,'người'),
('DV09','Ăn sáng',200000,'người'),
('DV10','Ăn trưa',450000,'người'),
('DV11','Ăn tối',550000,'người'),
('DV12','Combo ăn sáng/trưa/tối',1000000,'người'),
('DV13','Dọn phòng',250000,'lần'),
('DV14','Phòng họp',300000,'giờ'),
('DV15','Chăm sóc trẻ',405000,'giờ'),
('DV16','Chăm sóc thú cưng',175000,'24 giờ'),
('DV17','Bể bơi 4 mùa',370000,'người'),
('DV18','Combo Spa-Fitness center',2000000,'người'),
('DV19','Trang trí phòng theo chủ đề',799000,'phòng'),
('DV20','Tổ chức tiệc trong nhà hàng theo yêu cầu', 8000000,'bàn')


