create table CHITIET_NKSDDV (
    MA_CT_NKSDDV varchar(10) primary key not null ,
    MA_NKSD_DICHVU varchar(10) not null,
    foreign keY (MA_NKSD_DICHVU)  references NKSD_DICHVU(MA_NKSD_DICHVU),
    MA_DV varchar(10) not null,
    foreign keY (MA_DV)  references DICHVU(MA_DV),
    SOLUONG int not null
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into CHITIET_NKSDDV VALUES
('CTDV01','NKDV01','DV01',2),
('CTDV02','NKDV01','DV13',1),
('CTDV03','NKDV02','DV18',3),
('CTDV04','NKDV03','DV01',2),
('CTDV22','NKDV03','DV12',5),
('CTDV23','NKDV03','DV17',5),
('CTDV05','NKDV04','DV06',2),
('CTDV06','NKDV04','DV07',2),
('CTDV07','NKDV05','DV19',1),
('CTDV08','NKDV05','DV20',5),
('CTDV09','NKDV05','DV13',1),
('CTDV10','NKDV05','DV09',20),
('CTDV11','NKDV06','DV12',3),
('CTDV12','NKDV06','DV06',2),
('CTDV13','NKDV06','DV17',3),
('CTDV14','NKDV07','DV02',1),
('CTDV15','NKDV08','DV08',4),
('CTDV16','NKDV08','DV07',4),
('CTDV17','NKDV09','DV14',2),
('CTDV18','NKDV09','DV06',6),
('CTDV19','NKDV10','DV01',1),
('CTDV20','NKDV10','DV12',3),
('CTDV21','NKDV10','DV17',3)
