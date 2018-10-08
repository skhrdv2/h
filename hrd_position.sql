/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : hrd

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-10-07 12:30:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `hrd_position`
-- ----------------------------
DROP TABLE IF EXISTS `hrd_position`;
CREATE TABLE `hrd_position` (
  `position_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำแหน่งหลัก',
  `position_location_code` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_fte` int(3) DEFAULT NULL,
  `position_j18` int(3) DEFAULT NULL,
  `position_groups_id` int(3) DEFAULT NULL COMMENT 'กลุ่ม',
  `position_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อตำแหน่ง',
  `position_file` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_status` enum('N','Y') DEFAULT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูลตำแหน่งบุคลากร';

-- ----------------------------
-- Records of hrd_position
-- ----------------------------
INSERT INTO `hrd_position` VALUES ('1', '3-6-001', '4', '5', '1', 'นักกายภาพบำบัด', 'c:/FILE/01.pdf', 'Y');
INSERT INTO `hrd_position` VALUES ('2', '3-6-002', null, null, '1', 'นักกิจกรรมบำบัด', null, 'N');
INSERT INTO `hrd_position` VALUES ('3', '3-6-004', null, null, '1', 'นักจิตวิทยาคลินิก', null, 'N');
INSERT INTO `hrd_position` VALUES ('4', '3-6-005', '5', '3', '1', 'ทันตแพทย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('5', '3-6-006', '3', '2', '1', 'นักเทคนิคการแพทย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('6', '3-6-007', null, null, '1', 'นายสัตวแพทย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('7', '3-6-008', '48', '42', '1', 'พยาบาลวิชาชีพ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('8', '3-6-009', '13', '4', '1', 'นายแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('9', '3-6-010', '3', null, '1', 'แพทย์แผนไทย', 'c:/FILE/01.pdf', 'Y');
INSERT INTO `hrd_position` VALUES ('10', '3-6-011', null, null, '1', 'เภสัชกร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('11', '3-6-013', '1', null, '1', 'นักรังสีการแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('12', '3-6-019', null, null, '1', 'นักเวชศาสตร์การสื่อความหมาย', null, 'N');
INSERT INTO `hrd_position` VALUES ('13', '3-6-020', null, null, '1', 'นักเทคโนโลยีหัวใจและทรวงอก', null, 'N');
INSERT INTO `hrd_position` VALUES ('14', '3-6-021', null, null, '1', 'นักฟิสิกส์การแพทย์', 'c:/FILE/01.pdf', 'N');
INSERT INTO `hrd_position` VALUES ('15', '3-6-022', null, null, '1', 'นักทัศนมาตร', null, 'N');
INSERT INTO `hrd_position` VALUES ('16', '3-7-001', null, null, '1', 'นักกายอุปกรณ์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('17', '3-7-020', null, null, '1', 'วิศวกรไฟฟ้า', null, 'N');
INSERT INTO `hrd_position` VALUES ('18', '3-8-022', null, null, '1', 'นักวิชาการศึกษาพิเศษ', null, 'N');
INSERT INTO `hrd_position` VALUES ('19', '3-5-007', null, null, '2', 'นักฟิสิกส์รังสี', null, 'N');
INSERT INTO `hrd_position` VALUES ('20', '3-5-010', null, null, '2', 'นักวิทยาศาสตร์', null, 'N');
INSERT INTO `hrd_position` VALUES ('21', '3-6-003', '1', null, '2', 'นักจิตวิทยา', null, 'N');
INSERT INTO `hrd_position` VALUES ('22', '3-6-012', '1', null, '2', 'นักโภชนาการ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('23', '3-6-015', '7', '6', '2', 'นักวิชาการสาธารณสุข', null, 'Y');
INSERT INTO `hrd_position` VALUES ('24', '3-6-016', null, null, '2', 'นักอาชีวบำบัด', null, 'N');
INSERT INTO `hrd_position` VALUES ('25', '3-6-017', null, null, '2', 'นักวิชาการอาหารและยา', null, 'N');
INSERT INTO `hrd_position` VALUES ('26', '3-6-018', null, null, '1', 'นักวิทยาศาสตร์การแพทย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('27', '3-7-004', null, null, '2', 'ช่างภาพการแพทย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('28', '3-8-026', null, null, '2', 'นักสังคมสงเคราะห์', null, 'N');
INSERT INTO `hrd_position` VALUES ('29', '3-1-013', '1', '1', '3', 'นักวิชาการคอมพิวเตอร์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('30', '3-1-004', '1', '1', '4', 'นักจัดการงานทั่วไป', null, 'Y');
INSERT INTO `hrd_position` VALUES ('31', '3-1-006', null, null, '4', 'นักทรัพยากรบุคคล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('32', '3-1-008', null, null, '4', 'นิติกร', null, 'N');
INSERT INTO `hrd_position` VALUES ('33', '3-1-012', null, null, '4', 'นักวิเคราะห์นโยบายและแผน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('34', '3-1-015', null, null, '4', 'นักเทคโนโลยีสารสนเทศ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('35', '3-1-016', '1', '1', '4', 'นักวิชาการพัสดุ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('36', '3-1-019', null, null, '4', 'นักวิชาการสถิติ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('37', '3-1-021', null, null, '4', 'นักวิเทศสัมพันธ์', null, 'N');
INSERT INTO `hrd_position` VALUES ('38', '3-2-006', '1', '1', '4', 'นักวิชาการเงินและบัญชี', null, 'Y');
INSERT INTO `hrd_position` VALUES ('39', '3-2-009', null, null, '4', 'นักวิชาการตรวจสอบภายใน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('40', '3-3-005', null, null, '4', 'นักประชาสัมพันธ์', null, 'N');
INSERT INTO `hrd_position` VALUES ('41', '3-3-007', null, null, '4', 'นักวิชาการเผยแพร่', null, 'Y');
INSERT INTO `hrd_position` VALUES ('42', '3-3-008', null, null, '4', 'นักวิชาการโสตทัศนศึกษา', null, 'Y');
INSERT INTO `hrd_position` VALUES ('43', '3-4-001', null, null, '4', 'นักวิชาการเกษตร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('44', '3-7-015', null, null, '4', 'วิศวกร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('45', '3-8-003', null, null, '4', 'บรรณารักษ์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('46', '3-8-021', null, null, '4', 'นักวิชาการศึกษา', null, 'Y');
INSERT INTO `hrd_position` VALUES ('47', '3-8-025', null, null, '4', 'วิทยาจารย์', null, 'N');
INSERT INTO `hrd_position` VALUES ('48', '4-1-001', '1', '1', '5', 'เจ้าพนักงานธุรการ', null, 'N');
INSERT INTO `hrd_position` VALUES ('49', '4-1-002', '1', '1', '5', 'เจ้าพนักงานพัสดุ', null, 'N');
INSERT INTO `hrd_position` VALUES ('50', '4-1-004', '2', null, '5', 'เจ้าพนักงานเวชสถิติ', null, 'N');
INSERT INTO `hrd_position` VALUES ('51', '4-1-005', null, null, '5', 'เจ้าพนักงานสถิติ', null, 'N');
INSERT INTO `hrd_position` VALUES ('52', '4-2-002', '4', '4', '5', 'เจ้าพนักงานการเงินและบัญชี', null, 'N');
INSERT INTO `hrd_position` VALUES ('53', '4-3-004', null, null, '5', 'เจ้าพนักงานเผยแพร่ประชาสัมพันธ์', null, 'N');
INSERT INTO `hrd_position` VALUES ('54', '4-3-007', null, '1', '5', 'เจ้าพนักงานโสตทัศนศึกษา', null, 'N');
INSERT INTO `hrd_position` VALUES ('55', '4-4-001', null, null, '5', 'เจ้าพนักงานการเกษตร', null, 'N');
INSERT INTO `hrd_position` VALUES ('56', '4-6-001', '4', null, '5', 'เจ้าพนักงานทันตสาธารณสุข', null, 'N');
INSERT INTO `hrd_position` VALUES ('57', '4-6-002', '5', '4', '5', 'เจ้าพนักงานเภสัชกรรม', null, 'Y');
INSERT INTO `hrd_position` VALUES ('58', '4-6-003', null, null, '5', 'โภชนากร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('59', '4-6-004', '1', '1', '5', 'เจ้าพนักงานรังสีการแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('60', '4-6-005', '1', null, '5', 'เจ้าพนักงานวิทยาศาสตร์การแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('61', '4-6-007', null, null, '5', 'เจ้าพนักงานสาธารณสุข', null, 'Y');
INSERT INTO `hrd_position` VALUES ('62', '4-6-008', null, null, '5', 'เจ้าพนักงานอาชีวบำบัด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('63', '4-6-011', '4', null, '5', 'เจ้าพนักงานเวชกิจฉุกเฉิน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('64', '4-6-012', null, null, '5', 'เจ้าพนักงานการแพทย์แผนไทย', null, 'Y');
INSERT INTO `hrd_position` VALUES ('65', '4-7-003', null, null, '5', 'นายช่างศิลป์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('66', '4-7-006', null, null, '5', 'ช่างกายอุปกรณ์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('67', '4-7-007', '1', '1', '5', 'เจ้าพนักงานเครื่องคอมพิวเตอร์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('68', '4-7-012', null, null, '5', 'ช่างทันตกรรม', null, 'Y');
INSERT INTO `hrd_position` VALUES ('69', '4-7-013', '1', '1', '5', 'นายช่างเทคนิค', null, 'Y');
INSERT INTO `hrd_position` VALUES ('70', '4-7-014', '2', '2', '5', 'นายช่างไฟฟ้า', null, 'Y');
INSERT INTO `hrd_position` VALUES ('71', '4-7-016', null, null, '5', 'นายช่างโยธา', null, 'Y');
INSERT INTO `hrd_position` VALUES ('72', '4-8-001', null, null, '5', 'ครูการศึกษาพิเศษ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('73', '7-8-015', null, null, '5', 'เจ้าพนักงานห้องสมุด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('74', '1113', null, null, '6', 'พนักงานประจำตึก', null, 'Y');
INSERT INTO `hrd_position` VALUES ('75', '1114', null, null, '6', 'พนักงานเปล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('76', '1115', null, null, '6', 'พนักงานซักฟอก', null, 'Y');
INSERT INTO `hrd_position` VALUES ('77', '1117', '9', '9', '6', 'พนักงานบริการ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('78', '1119', null, null, '6', 'พนักงานรับโทรศัพท์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('79', '1201', '2', '2', '6', 'พนักงานเกษตรพื้นฐาน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('80', '1304', null, null, '6', 'พนักงานเรือยนต์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('81', '1409', null, null, '6', 'พนักงานบริการเอกสารทั่วไป', null, 'Y');
INSERT INTO `hrd_position` VALUES ('82', '1410', null, null, '6', 'พนักงานเก็บเอกสาร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('83', '1413', null, null, '6', 'พนักงานบริการสื่ออุปกรณ์การสอน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('84', '1504', null, null, '6', 'พนักงานเก็บเงิน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('85', '1505', null, null, '6', 'พนักงานโสตทัศนศึกษา', null, 'Y');
INSERT INTO `hrd_position` VALUES ('86', '1509', null, null, '6', 'พนักงานผลิตน้ำประปา', null, 'N');
INSERT INTO `hrd_position` VALUES ('87', '2101', null, null, '6', 'พนักงานการเงินและบัญชี', null, 'Y');
INSERT INTO `hrd_position` VALUES ('88', '2106', null, null, '6', 'พนักงานพัสดุ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('89', '2108', '1', '1', '6', 'พนักงานธุรการ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('90', '2113', '1', '1', '6', 'พนักงานพิมพ์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('91', '2203', null, null, '6', 'พนักงานประเมินผล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('92', '2209', null, null, '6', 'พนักงานการศึกษา', null, 'N');
INSERT INTO `hrd_position` VALUES ('93', '2210', null, null, '6', 'พนักงานห้องสมุด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('94', '2301', null, null, '6', 'พนักงานสื่อสาร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('95', '2311', null, null, '6', 'ล่ามภาษาต่างประเทศ', null, 'N');
INSERT INTO `hrd_position` VALUES ('96', '2317', null, null, '6', 'ครูพี่เลี้ยง', null, 'N');
INSERT INTO `hrd_position` VALUES ('97', '2318', null, null, '6', 'พี่เลี้ยง', null, 'N');
INSERT INTO `hrd_position` VALUES ('98', '2401', null, null, '6', 'พนักงานช่วยการพยาบาล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('99', '2403', null, null, '6', 'พนักงานช่วยเหลือคนไข้', null, 'Y');
INSERT INTO `hrd_position` VALUES ('100', '2404', null, null, '6', 'ผู้ช่วยพยาบาล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('101', '2406', null, null, '6', 'ผู้ช่วยทันตแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('102', '2408', null, null, '6', 'พนักงานเภสัชกรรม', null, 'Y');
INSERT INTO `hrd_position` VALUES ('103', '2409', null, null, '6', 'พนักงานประจำห้องยา', null, 'Y');
INSERT INTO `hrd_position` VALUES ('104', '2410', null, null, '6', 'ผู้ช่วยพนักงานสุขศึกษา', null, 'N');
INSERT INTO `hrd_position` VALUES ('105', '2411', null, null, '6', 'ผู้ช่วยเจ้าหน้าที่อนามัย', null, 'N');
INSERT INTO `hrd_position` VALUES ('106', '2412', null, null, '6', 'ผู้ช่วยเจ้าหน้าที่สาธารณสุข', null, 'Y');
INSERT INTO `hrd_position` VALUES ('107', '2413', null, null, '6', 'พนักงานการแพทย์และรังสีเทคนิค', null, 'Y');
INSERT INTO `hrd_position` VALUES ('108', '2414', null, null, '6', 'พนักงานจุลทัศนกร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('109', '2915', null, null, '6', 'พนักงานประกอบอาหาร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('110', '2416', null, null, '6', 'พนักงานห้องผ่าตัด', null, 'N');
INSERT INTO `hrd_position` VALUES ('111', '2418', null, null, '6', 'พนักงานผ่าและรักษาศพ', null, 'N');
INSERT INTO `hrd_position` VALUES ('112', '2421', null, null, '6', 'พนักงานบัตรรายงานโรค', null, 'Y');
INSERT INTO `hrd_position` VALUES ('113', '2424', null, null, '6', 'พนักงานปฏิบัติการทดลองพาหะนำโรค', null, 'N');
INSERT INTO `hrd_position` VALUES ('114', '2429', null, null, '6', 'ผู้ช่วยนักกายภาพบำบัด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('115', '2435', null, null, '6', 'พนักงานกู้ชีพ', null, 'N');
INSERT INTO `hrd_position` VALUES ('116', '2510', null, null, '6', 'พนักงานประจำห้องทดลอง', null, 'Y');
INSERT INTO `hrd_position` VALUES ('117', '2513', null, null, '6', 'พนักงานวิทยาศาสตร์', null, 'N');
INSERT INTO `hrd_position` VALUES ('118', '2916', null, null, '6', 'พนักงานพิธีสงฆ์', null, 'N');
INSERT INTO `hrd_position` VALUES ('119', '3203', null, null, '6', 'ช่างไฟฟ้าและอิเล็กทรอนิกส์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('120', '3324', null, null, '6', 'ช่างเหล็ก', null, 'N');
INSERT INTO `hrd_position` VALUES ('121', '3335', null, null, '6', 'ช่างฝีมือทั่วไป', null, 'Y');
INSERT INTO `hrd_position` VALUES ('122', '3612', null, null, '6', 'ช่างต่อท่อ', null, 'N');
INSERT INTO `hrd_position` VALUES ('123', '3701', null, null, '6', 'ช่างศิลป์', null, 'N');
INSERT INTO `hrd_position` VALUES ('124', '3718', null, null, '6', 'ช่างตัดเย็บผ้า', null, 'N');
INSERT INTO `hrd_position` VALUES ('125', '3727', null, null, '6', 'ช่างตัดผม', null, 'N');
INSERT INTO `hrd_position` VALUES ('126', '3903', null, null, '6', 'ช่างซ่อมเครื่องทำความเย็น', null, 'N');
INSERT INTO `hrd_position` VALUES ('127', '3910', null, null, '6', 'ช่างเครื่องช่วยคนพิการ', null, 'N');
INSERT INTO `hrd_position` VALUES ('128', '3912', null, null, '6', 'ผู้ช่วยช่างทั่วไป', null, 'Y');
INSERT INTO `hrd_position` VALUES ('130', '3913', null, null, '6', 'พนักงานขับรถยนต์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('131', '3914', null, null, '6', 'พนักงานรักษาความปลอดภัย', null, 'Y');
INSERT INTO `hrd_position` VALUES ('132', '3915', null, null, '1', 'พยาบาลเทคนิค', null, 'Y');
INSERT INTO `hrd_position` VALUES ('133', '', null, null, '6', 'แม่บ้าน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('134', '3916', null, null, '5', 'เจ้าหน้าที่พิมพ์ดีด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('135', '3917', null, null, '5', 'เจ้าหน้าที่ธุรการ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('136', '3918', null, null, '4', 'เจ้าหน้าที่บริหารงานทั่วไป', null, 'Y');
INSERT INTO `hrd_position` VALUES ('137', null, null, null, '6', 'ผู้ช่วยเหลือคนไข้', null, 'Y');
INSERT INTO `hrd_position` VALUES ('138', null, null, null, '6', 'พนักงานช่วยเหลือคนไข้', null, 'Y');
INSERT INTO `hrd_position` VALUES ('139', null, null, null, '5', 'เจ้าหน้าที่พิมพ์ดีด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('140', null, null, null, '6', 'ผู้ช่วยทันตแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('141', null, null, null, '5', 'เจ้าหน้าที่วิทยาศาสตร์การแพทย์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('142', null, null, null, '6', 'เจ้าหน้าที่พยาบาล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('143', null, null, null, '6', 'เจ้าหน้าที่ส่งเสริมสุขภาพ ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('144', null, null, null, '6', 'คนครัว', null, 'Y');
INSERT INTO `hrd_position` VALUES ('145', null, null, null, '6', 'คนสวน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('146', null, null, null, '6', 'คนงาน', null, 'Y');
INSERT INTO `hrd_position` VALUES ('147', null, null, null, '6', 'พนักงานซักรีด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('148', null, null, null, '6', 'พนักงานจุลทัศนกร', null, 'Y');
INSERT INTO `hrd_position` VALUES ('149', null, null, null, '6', 'นักการภารโรง', null, 'N');
INSERT INTO `hrd_position` VALUES ('150', null, null, null, '6', 'ยาม', null, 'N');
INSERT INTO `hrd_position` VALUES ('151', null, null, null, '5', 'ช่างเทคนิค', null, 'N');
INSERT INTO `hrd_position` VALUES ('152', null, null, null, '4', 'เจ้าหน้าที่พัสดุ', null, 'Y');
INSERT INTO `hrd_position` VALUES ('153', null, null, null, '4', 'เจ้าหน้าที่บันทึกข้อมูล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('154', null, null, null, '5', 'พนักงานคอมพิวเตอร์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('155', null, null, null, '4', 'หมอนวดแผนไทย', null, 'N');
INSERT INTO `hrd_position` VALUES ('156', null, null, null, '5', 'เจ้าหน้าที่ระบบคอมพิวเตอร์', null, 'Y');
INSERT INTO `hrd_position` VALUES ('157', null, null, null, '4', 'พนักงานช่วยการพยาบาล', null, 'Y');
INSERT INTO `hrd_position` VALUES ('158', null, null, null, '6', 'ผู้ช่วยห้องปฏิบัติการ', null, 'N');
INSERT INTO `hrd_position` VALUES ('159', null, null, null, '6', 'พนักงานทำความสะอาด', null, 'Y');
INSERT INTO `hrd_position` VALUES ('160', '3-6-023', null, null, '2', 'นักปฏิบัติการฉุกเฉินการแพทย์', null, 'N');
