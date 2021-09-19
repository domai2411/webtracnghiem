/*
 Navicat Premium Data Transfer

 Source Server         : 192.168.180.193
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 192.168.180.193:3306
 Source Schema         : mmt

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 19/09/2021 17:32:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for linhvuc
-- ----------------------------
DROP TABLE IF EXISTS `linhvuc`;
CREATE TABLE `linhvuc`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linhvuc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `test` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `numlv` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of linhvuc
-- ----------------------------
INSERT INTO `linhvuc` VALUES (1, 'Test lv', 'quiz1', 10);

-- ----------------------------
-- Table structure for quiz1
-- ----------------------------
DROP TABLE IF EXISTS `quiz1`;
CREATE TABLE `quiz1`  (
  `id` int(10) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `A` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `B` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `C` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `D` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `linhvuc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quiz1
-- ----------------------------
INSERT INTO `quiz1` VALUES (1, 'Lĩnh vực nào sau đây đã ứng dụng công nghệ IoT ?', 'Tất cả đều đúng', 'Vận tải', 'Nông nghiệp', 'Y tế', 'Test lv', 'testimage.jpg');
INSERT INTO `quiz1` VALUES (2, 'Định hướng chiến lược VNPT 4.0 của tập đoàn VNPT  là gì?', 'Chuyển đổi VNPT thành nhà cung cấp dịch vụ số', 'Chuyển đổi VNPT thành nhà cung cấp dịch vụ mạng', 'Chuyển đổi VNPT thành nhà cung cấp internet hàng đầu tại Việt Nam', 'Chuyển đổi VNPT thành nhà cung cấp dữ liệu', 'Test lv', 'testimage.jpg');
INSERT INTO `quiz1` VALUES (3, 'Hiện nay, có 4 mô hình dịch vụ triển khai điện toán đám mây chính đang được sử dụng phổ biến. Đó là những mô hình nào sau đây?', 'Public Cloud, Private Cloud, Hybrid Cloud và Community Cloud.', 'Public Cloud, Private Cloud, Hybrid Cloud và Cloud Server.', 'Public Cloud, Private Cloud,  Cloud Server và Cloud Hosting.', 'Public Cloud, Private Cloud, Hybrid Cloud và Cloud Hosting.', 'Test lv', 'trans.JPG');
INSERT INTO `quiz1` VALUES (4, 'Khối dữ liệu Block Chain  được lưu trữ trên mô hình mạng nào?', 'Peer to Peer', 'Peer to server', 'Client Server', 'Server Server', 'Test lv', 'trans.JPG');
INSERT INTO `quiz1` VALUES (5, 'VNPT đã phát triển hệ sinh thái các giải pháp để có thể giúp số hóa doanh nghiệp. Đó là:', 'Tất cả các giải pháp đều đúng', 'Hệ thống quản trị nguồn nhân lực (VNPT HRM)', 'Hệ thống quản lý kênh phân phối (VNPT DMS); Chữ ký số, Hóa đơn điện tử…', 'Hệ thống xác thực và định danh điện tử eKYC', 'Test lv', 'testimage.jpg');
INSERT INTO `quiz1` VALUES (6, 'Những dịch vụ nào sau đây không dùng điện toán đám mây (Cloud Computing)?', 'Máy chủ ảo VPS (Virtual Private Server) hay Shared Hosting', 'Nền tảng đám mây (Cloud Platform)', 'Máy chủ ảo đám mây (Cloud Server)', 'Dịch vụ dùng điện toán đám mây ( Cloud Services)', 'Test lv', 'trans.JPG');
INSERT INTO `quiz1` VALUES (7, 'Điều gì đã thúc đẩy sự phát triển của trí tuệ nhân tạo (AI) trong giai đoạn hiện tại?', 'Tất cả đều đúng', 'Machine Learning', 'Deep Learning', 'Data Science', 'Test lv', 'trans.JPG');
INSERT INTO `quiz1` VALUES (8, 'Dữ liệu lớn (Big Data) khác dữ liệu thường điểm nào ?', 'Khả năng lưu trữ  lớn hơn\n(Khả năng lưu trữ và xử lý dữ liệu )', 'Không có khả năng truy vấn dữ liệu', 'Cả 3 đều sai', 'Không đa dạng bằng dữ liệu thường', 'Test lv', 'trans.JPG');
INSERT INTO `quiz1` VALUES (9, 'Google Drive là một trong các ứng dụng của nền tảng điện toán đám mây, điều này đúng hay sai?', 'Đúng', 'Sai', NULL, NULL, 'Test lv', 'testimage.jpg');
INSERT INTO `quiz1` VALUES (10, 'Đến nay, thế giới vẫn chưa có một định nghĩa thống nhất về Đô thị thông minh. Nhưng về cơ bản, đó là mô hình thành phố ứng dụng công nghệ thông tin, trí tuệ nhân tạo để:', 'Quản lý nâng cao tiêu chuẩn cuộc sống đô thị; cải thiện chất lượng phục vụ của chính quyền thành phố; sử dụng hiệu quả các nguồn năng lượng, tài nguyên thiên nhiên', 'Quản lý, nâng cao tiêu chuẩn cuộc sống đô thị', 'Cải thiện chất lượng phục vụ của chính quyền thành phố', 'Sử dụng hiệu quả các nguồn năng lượng, tài nguyên thiên nhiên.', 'Test lv', 'trans.JPG');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `testname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dataname` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remark` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `num` int(3) NULL DEFAULT NULL,
  `trytime` int(3) NULL DEFAULT NULL,
  `lop` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES (1, 'Thi thử', 'quiz1', 'kiemtra15', '10:00', 5, 1000, 'TEST');

-- ----------------------------
-- Table structure for test_des
-- ----------------------------
DROP TABLE IF EXISTS `test_des`;
CREATE TABLE `test_des`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_do_id` int(11) NULL DEFAULT NULL,
  `quiz` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `num` int(11) NULL DEFAULT NULL,
  `answer` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `array` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 88950 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of test_des
-- ----------------------------
INSERT INTO `test_des` VALUES (88921, 1406, 'quiz1', 5, NULL, '4312');
INSERT INTO `test_des` VALUES (88922, 1406, 'quiz1', 6, NULL, '1324');
INSERT INTO `test_des` VALUES (88923, 1406, 'quiz1', 1, NULL, '4231');
INSERT INTO `test_des` VALUES (88924, 1407, 'quiz1', 8, NULL, '2431');
INSERT INTO `test_des` VALUES (88925, 1407, 'quiz1', 5, NULL, '3412');
INSERT INTO `test_des` VALUES (88926, 1407, 'quiz1', 4, NULL, '2314');
INSERT INTO `test_des` VALUES (88927, 1408, 'quiz1', 3, NULL, '2431');
INSERT INTO `test_des` VALUES (88928, 1408, 'quiz1', 5, NULL, '4312');
INSERT INTO `test_des` VALUES (88929, 1408, 'quiz1', 2, NULL, '2413');
INSERT INTO `test_des` VALUES (88930, 1409, 'quiz1', 3, NULL, '2413');
INSERT INTO `test_des` VALUES (88931, 1409, 'quiz1', 1, NULL, '2413');
INSERT INTO `test_des` VALUES (88932, 1409, 'quiz1', 4, NULL, '2143');
INSERT INTO `test_des` VALUES (88933, 1409, 'quiz1', 10, NULL, '3124');
INSERT INTO `test_des` VALUES (88934, 1409, 'quiz1', 8, NULL, '1423');
INSERT INTO `test_des` VALUES (88935, 1409, 'quiz1', 9, NULL, '1432');
INSERT INTO `test_des` VALUES (88936, 1409, 'quiz1', 5, NULL, '4213');
INSERT INTO `test_des` VALUES (88937, 1409, 'quiz1', 6, NULL, '1423');
INSERT INTO `test_des` VALUES (88938, 1409, 'quiz1', 7, NULL, '3124');
INSERT INTO `test_des` VALUES (88939, 1409, 'quiz1', 2, NULL, '1234');
INSERT INTO `test_des` VALUES (88940, 1410, 'quiz1', 8, NULL, '2431');
INSERT INTO `test_des` VALUES (88941, 1410, 'quiz1', 10, NULL, '4312');
INSERT INTO `test_des` VALUES (88942, 1410, 'quiz1', 3, NULL, '2143');
INSERT INTO `test_des` VALUES (88943, 1410, 'quiz1', 6, NULL, '4213');
INSERT INTO `test_des` VALUES (88944, 1410, 'quiz1', 7, NULL, '3142');
INSERT INTO `test_des` VALUES (88945, 1410, 'quiz1', 4, NULL, '3421');
INSERT INTO `test_des` VALUES (88946, 1410, 'quiz1', 2, NULL, '1234');
INSERT INTO `test_des` VALUES (88947, 1410, 'quiz1', 1, NULL, '1243');
INSERT INTO `test_des` VALUES (88948, 1410, 'quiz1', 9, NULL, '1324');
INSERT INTO `test_des` VALUES (88949, 1410, 'quiz1', 5, NULL, '3214');

-- ----------------------------
-- Table structure for test_do
-- ----------------------------
DROP TABLE IF EXISTS `test_do`;
CREATE TABLE `test_do`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NULL DEFAULT NULL,
  `starttime` datetime NULL DEFAULT NULL,
  `endtime` datetime NULL DEFAULT NULL,
  `mark` int(5) NULL DEFAULT NULL,
  `test` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `total_mark` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1411 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of test_do
-- ----------------------------
INSERT INTO `test_do` VALUES (1396, 1, '2021-09-19 17:16:09', '2021-09-19 17:16:09', 0, 'quiz1', 40);
INSERT INTO `test_do` VALUES (1397, 1, '2021-09-19 17:16:50', '2021-09-19 17:16:50', 0, 'quiz1', 40);
INSERT INTO `test_do` VALUES (1398, 1, '2021-09-19 17:16:59', '2021-09-19 17:16:59', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1399, 1, '2021-09-19 17:17:03', '2021-09-19 17:17:03', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1400, 1, '2021-09-19 17:17:28', '2021-09-19 17:17:28', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1401, 1, '2021-09-19 17:18:10', '2021-09-19 17:18:10', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1402, 1, '2021-09-19 17:20:56', '2021-09-19 17:20:56', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1403, 1, '2021-09-19 17:21:04', '2021-09-19 17:21:04', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1404, 1, '2021-09-19 17:21:19', '2021-09-19 17:21:19', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1405, 1, '2021-09-19 17:22:49', '2021-09-19 17:22:49', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1406, 1, '2021-09-19 17:24:19', '2021-09-19 17:24:19', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1407, 1, '2021-09-19 17:24:49', '2021-09-19 17:24:49', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1408, 1, '2021-09-19 17:26:13', '2021-09-19 17:26:13', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1409, 1, '2021-09-19 17:27:37', '2021-09-19 17:27:37', 0, 'quiz1', 2);
INSERT INTO `test_do` VALUES (1410, 1, '2021-09-19 17:27:58', '2021-09-19 17:27:58', 0, 'quiz1', 2);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `lop` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `masv` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 98 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'testhv', 'testhv', 'SV Test', 'Test', 'Lop Test', '111111');
INSERT INTO `user` VALUES (2, 'hvtest2', '12345678', 'HV Test 2', 'Test2', 'Lop Test', '222222');

-- ----------------------------
-- Table structure for userlog
-- ----------------------------
DROP TABLE IF EXISTS `userlog`;
CREATE TABLE `userlog`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NULL DEFAULT NULL,
  `login_time` datetime NULL DEFAULT NULL,
  `logout_time` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 923 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of userlog
-- ----------------------------
INSERT INTO `userlog` VALUES (920, 1, '2021-09-19 17:16:02', '2021-09-19 17:17:14');
INSERT INTO `userlog` VALUES (921, 1, '2021-09-19 17:17:25', '2021-09-19 17:21:07');
INSERT INTO `userlog` VALUES (922, 1, '2021-09-19 17:21:16', '2021-09-19 17:27:58');

-- ----------------------------
-- Table structure for view
-- ----------------------------
DROP TABLE IF EXISTS `view`;
CREATE TABLE `view`  (
  `views` int(255) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of view
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
