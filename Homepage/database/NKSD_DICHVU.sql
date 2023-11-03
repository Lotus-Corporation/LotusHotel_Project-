create table NKSD_DICHVU (
    MA_NKSD_DICHVU int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MA_KH int,
    foreign key (MA_KH) references KHACHHANG(MA_KH),
    TONGTIEN_DV int
    )ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into NKSD_DICHVU(MA_KH,TONGTIEN_DV) values
(10,500000),
(6,3050000),
(2,3500000),
(9,400000),
(12,720000),
(8,850000),
(1,450000),
(3,350000),
(5,854000),
(20,1240000)
