/*
Navicat MySQL Data Transfer

Source Server         : 192.168.2.11_3306
Source Server Version : 50614
Source Host           : 192.168.2.11:3306
Source Database       : hos

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2018-10-06 17:20:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pname`
-- ----------------------------
DROP TABLE IF EXISTS `pname`;
CREATE TABLE `pname` (
  `name` varchar(100) NOT NULL DEFAULT '',
  `class` int(11) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `provis_code` varchar(5) DEFAULT NULL,
  `hos_guid` varchar(38) DEFAULT NULL,
  `hos_guid_ext` varchar(64) DEFAULT NULL,
  `min_age` int(11) DEFAULT NULL,
  `marrystatus` char(1) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `ix_hos_guid` (`hos_guid`),
  KEY `ix_hos_guid_ext` (`hos_guid_ext`)
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of pname
-- ----------------------------
INSERT INTO `pname` VALUES ('Miss', '2', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('Mr.', '31', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('Mrs.', '52', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('คุณ', '1292', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('คุณหญิง', '1302', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ต.', '3761', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ต.หญิง', '3762', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ท.', '3751', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ท.หญิง', '3752', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.ต.', '2221', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.ต.หญิง', '2222', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.ท.', '2211', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.ท.หญิง', '2212', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.อ.', '2201', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.ส.อ.หญิง', '2202', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.อ.', '3741', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ.อ.หญิง', '3742', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศตรีหญิง', '5252', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศตรี', '5251', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศโทหญิง', '5242', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศโท', '5241', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศเอกหญิง', '5232', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('จ่าอากาศเอก', '5231', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ด.ช.', '11', '1', '001', null, null, null, null);
INSERT INTO `pname` VALUES ('ด.ญ.', '22', '2', '002', null, null, null, null);
INSERT INTO `pname` VALUES ('ด.ต.', '6731', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ด.ต.หญิง', '6732', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ดร.', '1401', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ท.พ.', '1361', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ต.', '3631', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ต.พ.ญ.', '3911', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ต.ม.ล.', '3891', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ต.ม.ล.หญิง', '3892', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ต.หญิง', '3632', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.พ.', '1341', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.ส.', '42', '2', '004', null, null, null, null);
INSERT INTO `pname` VALUES ('น.อ.พิเศษ', '3571', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('น.อ.พิเศษหญิง', '3572', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นช', '71', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นนส.', '2281', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นนส.หญิง', '2282', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นรจ.', '3791', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นรจ.หญิง', '3792', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นรต.', '6781', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นรต.หญิง', '6782', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นักเรียนจ่าอากาศหญิง', '5282', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นักเรียนจ่าอากาศ', '5281', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นักเรียนนายเรืออากาศ', '5271', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นักเรียนนายเรืออากาศหญิง', '5272', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาง', '52', '2', '005', null, null, null, null);
INSERT INTO `pname` VALUES ('นาย', '31', '1', '003', null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาโท', '3611', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาโทหญิง', '3612', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศตรี', '5121', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศตรีหญิง', '5122', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศโท', '5101', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศโทหญิง', '5102', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศเอก', '5081', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาอากาศเอกหญิง', '5082', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาเอก', '3591', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('นาวาเอกหญิง', '3592', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('บาทหลวง', '8381', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.ต.', '3731', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.ต.หญิง', '3732', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.ท.', '3721', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.ท.หญิง', '3722', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.อ.', '3711', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.จ.อ.หญิง', '3712', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ญ.', '1352', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.', '2121', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.ต.', '6651', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.ต.หญิง', '6652', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.ท.', '6631', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.ท.หญิง', '6632', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.หญิง', '2122', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.อ.', '6611', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ต.อ.หญิง', '6612', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ท.', '2101', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ท.น.พ.', '2711', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ท.น.พ.หญิง', '2712', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.ท.หญิง', '2102', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.อ.', '2081', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.อ.พิเศษ', '2061', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.อ.พิเศษหญิง', '2062', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พ.อ.หญิง', '2082', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระ', '8311', '1', '831', null, null, null, null);
INSERT INTO `pname` VALUES ('พระครู', '8181', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระครูใบฎีกา', '8191', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระครูปลัด', '8121', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระปริยัติ', '8281', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระมหา', '8391', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระสมุห์', '8161', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พระอธิการ', '8301', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ต', '2041', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ต.ต.', '6551', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ต.ต.หญิง', '6552', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ตหญิง', '2042', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ท.', '2021', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ท.หญิง', '2022', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ร.ต.', '3551', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.ร.ต.หญิง', '3552', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.', '2001', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.ต.', '5041', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.ต.หญิง', '5042', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.ท.', '5021', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.ท.หญิง', '5022', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.หญิง', '2002', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.อ.', '5001', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พล.อ.อ.หญิง', '5002', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจ', '6811', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสมัคร', '6861', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสมัครหญิง', '6862', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสำรอง', '6841', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสำรองพิเศษ', '6851', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสำรองพิเศษหญิง', '6852', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจสำรองหญิง', '6842', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลตำรวจหญิง', '6812', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลทหาร', '2261', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลทหารหญิง', '2262', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลฯทหารเรือ', '3771', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลฯทหารเรือหญิง', '3772', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลฯทหารอากาศ', '5261', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พลฯทหารอากาศหญิง', '5262', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศตรีหญิง', '5222', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศตรี', '5221', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศโทหญิง', '5212', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศโท', '5211', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศเอกหญิง', '5202', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('พันจ่าอากาศเอก', '5201', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ม.จ.', '1201', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ม.ร.ว.', '1211', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ม.ล.', '1221', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('แม่ชี', '8632', '2', '863', null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.', '2181', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ต.', '6711', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ต.หญิง', '6712', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ท.', '6691', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ท.หญิง', '6692', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ม.ล.', '2521', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.ม.ล.หญิง', '2522', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.หญิง', '2182', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.อ.', '6671', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ต.อ.หญิง', '6672', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ท.', '2161', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.ท.หญิง', '2162', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.อ.', '2141', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ร.อ.หญิง', '2142', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศตรี', '5181', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศตรีหญิง', '5182', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศโท', '5161', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศโทหญิง', '5162', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศเอก', '5141', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('เรืออากาศเอกหญิง', '5142', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ น.ต.', '3641', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ น.ต.หญิง', '3642', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ น.อ.', '3601', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ น.อ.หญิง', '3602', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.', '2131', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.ต.', '6661', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.ต.หญิง', '6662', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.ท.', '6641', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.ท.หญิง', '6642', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ต.หญิง', '2132', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ท.', '2111', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.ท.หญิง', '2112', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.อ.', '2091', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ พ.อ.หญิง', '2092', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.', '2191', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.ต.', '6721', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.ต.หญิง', '6722', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.ท.', '6701', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.ท.หญิง', '6702', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.หญิง', '2192', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.อ.', '6681', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ต.อ.หญิง', '6682', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ท.', '2171', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.ท.หญิง', '2172', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.อ.', '2151', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่ ร.อ.หญิง', '2152', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่นาวาอากาศตรีหญิง', '5132', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่นาวาอากาศตรี', '5131', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศตรีหญิง', '5192', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศตรี', '5191', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศโท', '5171', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศโทหญิง', '5172', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศเอก', '5151', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ว่าที่เรืออากาศเอกหญิง', '5152', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ศจ.น.พ.', '1321', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.', '2251', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.ต.', '6771', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.ต.หญิง', '6772', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.ท.', '6761', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.ท.หญิง', '6762', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.หญิง', '2252', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.อ.', '6751', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ต.อ.หญิง', '6752', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ท.', '2241', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.ท.หญิง', '2242', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.อ.', '2231', '1', null, null, null, null, null);
INSERT INTO `pname` VALUES ('ส.อ.หญิง', '2232', '2', null, null, null, null, null);
INSERT INTO `pname` VALUES ('สามเณร', '8321', '1', '832', null, null, null, null);
INSERT INTO `pname` VALUES ('หม่อม', '1462', '2', null, null, null, null, null);
