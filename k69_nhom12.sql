-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2021 lúc 01:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_quiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_thi`
--

CREATE TABLE `bai_thi` (
  `id` int(5) NOT NULL,
  `ma_de_thi` int(5) NOT NULL,
  `ma_cau_hoi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `id` int(5) NOT NULL,
  `loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `luachon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dapan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucdo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`id`, `loai`, `noidung`, `luachon`, `dapan`, `mucdo`) VALUES
(1, 'one', '<p>Trong JavaScript sự kiện <strong>onunload</strong> được thực hiện khi n&agrave;o?</p>', 'a:4:{i:0;s:39:\"Khi bắt đầu chương trình chạy\";i:1;s:17:\"Khi click chuột\";i:2;s:37:\"Khi kết thúc một chương trình\";i:3;s:27:\"Khi di chuyển chuột qua\";}', 'Khi kết thúc một chương trình', 'coban'),
(2, 'one', '<p>Trong JavaScript sự kiện <strong>onblur</strong> được thực hiện khi n&agrave;o?</p>', 'a:4:{i:0;s:48:\"Khi một đối tượng trong form mất focus\";i:1;s:46:\"Khi một đối tượng trong form có focus\";i:2;s:36:\"Khi di chuyển con chuột qua form\";i:3;s:34:\"Khi click chuột vào nút lệnh\";}', 'Khi một đối tượng trong form mất focus', 'coban'),
(3, 'one', '<p>Trong JavaScript sự kiện <strong>onmouseover </strong>được thực hiện khi n&agrave;o?</p>', 'a:4:{i:0;s:48:\"Khi một đối tượng trong form mất focus\";i:1;s:46:\"Khi một đối tượng trong form có focus\";i:2;s:64:\"Khi di chuyển con chuột qua một đối tượng trong form\";i:3;s:34:\"Khi click chuột vào nút lệnh\";}', 'Khi di chuyển con chuột qua một đối tượng trong form', 'coban'),
(4, 'one', '<p>Trong JavaScript sự kiện <strong>onclick</strong> xảy ra khi n&agrave;o?</p>', 'a:4:{i:0;s:48:\"Khi một đối tượng trong form mất focus\";i:1;s:34:\"Khi click chuột vào nút lệnh\";i:2;s:46:\"Khi một đối tượng trong form có focus\";i:3;s:55:\"Khi click chuột vào một đối tượng trong form\";}', 'Khi click chuột vào nút lệnh', 'coban'),
(5, 'one', '<p>Trong JavaScript sự kiện <strong>onchange </strong>xảy ra khi n&agrave;o?</p>', 'a:4:{i:0;s:92:\"Xảy ra khi giá trị của một trường trong form được người dùng thay đổi\";i:1;s:48:\"Khi một đối tượng trong form mất focus\";i:2;s:46:\"Khi một đối tượng trong form có focus\";i:3;s:34:\"Khi click chuột vào nút lệnh\";}', 'Xảy ra khi giá trị của một trường trong form được người dùng thay đổi', 'coban'),
(6, 'one', '<p>C&uacute; ph&aacute;p khai b&aacute;o mảng n&agrave;o trong JavaScript sau đ&acirc;y l&agrave; đ&uacute;ng?&nbsp;</p>', 'a:4:{i:0;s:29:\"let arr = {item1, item2,…};\";i:1;s:29:\"let arr = [item1, item2,…];\";i:2;s:29:\"let arr = {item1; item2,…};\";i:3;s:29:\"let arr = [item1; item2,…];\";}', 'let arr = [item1, item2,…];', 'coban'),
(7, 'one', '<p>Để th&ecirc;m phần từ v&agrave;o mảng sử dụng phương thức n&agrave;o?</p>', 'a:4:{i:0;s:5:\"add()\";i:1;s:5:\"pop()\";i:2;s:8:\"addNew()\";i:3;s:6:\"push()\";}', 'push()', 'coban'),
(8, 'one', '<p>Hằng số trong JavaScript được khai b&aacute;o như thế n&agrave;o?</p>', 'a:3:{i:0;s:21:\"let tenHang = Giatri;\";i:1;s:23:\"const tenHang = Giatri;\";i:2;s:21:\"var tenHang = Giatri;\";}', 'const tenHang = Giatri;', 'coban'),
(9, 'one', '<p>JavaScript c&oacute; phải l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh hướng đối tượng kh&ocirc;ng?</p>', 'a:2:{i:0;s:3:\"Có\";i:1;s:6:\"Không\";}', 'Không', 'coban'),
(10, 'fill', '<p>Điền v&agrave;o chỗ trống: JavaScript c&oacute; thể điều khiển c&aacute;c thẻ HTML th&ocirc;ng qua thao t&aacute;c với ______.</p>', '', 'DOM', 'coban'),
(11, 'one', '<p>H&agrave;m <span class=\"fr-class-code\">prompt()</span> được sử dụng để l&agrave;m g&igrave;?</p>', 'a:4:{i:0;s:42:\"Hiển thị thông báo nhập thông tin\";i:1;s:38:\"Hiển thị một thông báo Yes, No\";i:2;s:28:\"Cả hai hành động trên\";i:3;s:31:\"Không phương án nào đúng\";}', 'Hiển thị thông báo nhập thông tin', 'coban'),
(12, 'one', '<p>H&agrave;m <span class=\"fr-class-code\">parseInt()</span> d&ugrave;ng để l&agrave;m g&igrave;?</p>', 'a:4:{i:0;s:34:\"Chuyển một chuỗi thành số\";i:1;s:41:\"Chuyển một chuỗi thành số thực\";i:2;s:48:\"Chuyển một số nguyên thành một chuỗi\";i:3;s:42:\"Chuyển một chuỗi thành số nguyên\";}', 'Chuyển một chuỗi thành số nguyên', 'coban'),
(13, 'one', '<p>Thực hiện kiểm tra nếu biến &quot;i&quot; kh&ocirc;ng bằng 5 bằng c&acirc;u lệnh n&agrave;o sau đ&acirc;y l&agrave; đ&uacute;ng?</p>', 'a:4:{i:0;s:11:\"if (i != 5)\";i:1;s:9:\"if i <> 5\";i:2;s:14:\"if i =! 5 then\";i:3;s:11:\"if (i <> 5)\";}', 'if (i != 5)', 'coban'),
(14, 'one', '<p>C&aacute;ch viết c&acirc;u lệnh điền kiện n&agrave;o sau đ&acirc;y l&agrave; đ&uacute;ng?</p>', 'a:4:{i:0;s:11:\"if (i == 5)\";i:1;s:14:\"if i == 5 then\";i:2;s:13:\"if i = 5 then\";i:3;s:8:\"if i = 5\";}', 'if (i == 5)', 'coban'),
(16, 'multi', '<p>C&oacute; những c&aacute;ch viết m&atilde; JavaScript n&agrave;o để chạy trong trang web?</p>', 'a:4:{i:0;s:48:\"viết trên trang HTML trong cặp thẻ script\";i:1;s:29:\"viết trên đầu file html\";i:2;s:66:\"viết tệp riêng và gọi đường dẫn vào trong file HTML\";i:3;s:28:\"viết sau thẻ đóng html\";}', 'a:2:{i:0;s:48:\"viết trên trang HTML trong cặp thẻ script\";i:1;s:66:\"viết tệp riêng và gọi đường dẫn vào trong file HTML\";}', 'coban'),
(17, 'one', '<p>Trong JavaScript sự kiện <strong>onmouseover </strong>xảy ra khi n&agrave;o?</p>', 'a:4:{i:0;s:48:\"Khi một đối tượng trong form mất focus\";i:1;s:64:\"Khi di chuyển con chuột qua một đối tượng trong form\";i:2;s:34:\"Khi kích chuột vào nút lệnh\";i:3;s:49:\"Khi một đối tượng trong form nhận focus\";}', 'Khi di chuyển con chuột qua một đối tượng trong form', 'coban'),
(18, 'one', '<p>Sự kiện onclick xảy ra khi n&agrave;o?</p>', 'a:4:{i:0;s:49:\"Khi một đối tượng trong form nhận focus\";i:1;s:48:\"Khi một đối tượng trong form mất focus\";i:2;s:55:\"Khi click chuột vào một đối tượng trong form\";i:3;s:34:\"Khi click chuột vào nút lệnh\";}', 'Khi click chuột vào nút lệnh', 'coban'),
(20, 'one', '<p>JavaScript l&agrave; ng&ocirc;n ngữ kịch bản c&oacute; che dấu được m&atilde; nguồn kh&ocirc;ng?</p>', 'a:3:{i:0;s:62:\"Không dấu được vì là kịch bản chạy phía client\";i:1;s:83:\"Dấu được vì chương trình hoạt động độc lập với trình duyệt\";i:2;s:33:\"Hai phát biểu trên đều sai\";}', 'Không dấu được vì là kịch bản chạy phía client', 'coban'),
(21, 'one', '<p>V&ograve;ng lặp While l&agrave; dạng v&ograve;ng lặp?</p>', 'a:4:{i:0;s:53:\"Không xác định và kiểm tra điều kiện sau\";i:1;s:58:\"Không xác định và kiểm tra điều kiện trước\";i:2;s:21:\"Cả hai dạng trên\";i:3;s:40:\"Không tồn tại dạng nào ở trên\";}', 'Không xác định và kiểm tra điều kiện trước', 'coban'),
(22, 'one', '<p>L&agrave;m c&aacute;ch n&agrave;o để gọi một h&agrave;m <strong>&quot;myFunction&quot;</strong> trong JavaScript?</p>', 'a:3:{i:0;s:26:\"call function myFunction()\";i:1;s:17:\"call myFunction()\";i:2;s:12:\"myFunction()\";}', 'myFunction()', 'coban'),
(24, 'one', '<p>T&iacute;nh đến thời điểm hiện tại JavaScript l&agrave; ng&ocirc;n ngữ xử l&iacute; ở đ&acirc;u?</p>', 'a:4:{i:0;s:6:\"Client\";i:1;s:22:\"Cả server và client\";i:2;s:22:\"Không ở dạng nào\";i:3;s:6:\"Server\";}', 'Cả server và client', 'coban'),
(25, 'one', '<p>Cặp thẻ n&agrave;o sau đ&acirc;y chữa m&atilde; JS?</p>', 'a:4:{i:0;s:27:\"<Javascript>...<Javascript>\";i:1;s:17:\"<java>....</java>\";i:2;s:21:\"<script> ...</script>\";i:3;s:28:\"Tất cả các dạng trên\";}', '<script> ...</script>', 'coban'),
(26, 'one', '<p>C&acirc;u lệnh <strong>break </strong>kết hợp với v&ograve;ng lặp để l&agrave;m g&igrave;?</p>', 'a:4:{i:0;s:42:\"Không có ý nghĩa gì trong vòng lặp\";i:1;s:33:\"Không thể kết hợp được\";i:2;s:42:\"Ngưng vòng lặp nếu gặp lệnh này\";i:3;s:38:\"Nhảy đến một tập lệnh khác\";}', 'Ngưng vòng lặp nếu gặp lệnh này', 'coban'),
(27, 'one', '<p>C&aacute;ch n&agrave;o để l&agrave;m tr&ograve;n số 7,25 tới số nguy&ecirc;n gần nhất?</p>', 'a:4:{i:0;s:14:\"Math.rnd(7.25)\";i:1;s:16:\"Math.round(7.25)\";i:2;s:9:\"rnd(7.25)\";i:3;s:11:\"round(7.25)\";}', 'Math.round(7.25)', 'coban'),
(28, 'one', '<p>JavaScript l&agrave; ng&ocirc;n ngữ dịch m&atilde; nguồn theo cơ chế dịch n&agrave;o?</p>', 'a:4:{i:0;s:12:\"Biên dịch\";i:1;s:46:\"Cả hai dạng biên dịch và thông dịch\";i:2;s:32:\"Không có dạng nào ở trên\";i:3;s:13:\"Thông dịch\";}', 'Thông dịch', 'coban'),
(29, 'one', '<p>Sự kiện n&agrave;o xảy ra khi người d&ugrave;ng click v&agrave;o một phần từ HTML tr&ecirc;n trang?</p>', 'a:4:{i:0;s:8:\"onchange\";i:1;s:7:\"onclick\";i:2;s:12:\"onmouseclick\";i:3;s:11:\"onmouseover\";}', 'onclick', 'coban'),
(30, 'multi', '<p>Những c&acirc;u lệnh n&agrave;o sau đ&acirc;y để khai b&aacute;o một biến?</p>', 'a:5:{i:0;s:22:\"let carName = {value};\";i:1;s:12:\"let carName;\";i:2;s:10:\"v carName;\";i:3;s:12:\"var carName;\";i:4;s:17:\"variable carName;\";}', 'a:3:{i:0;s:22:\"let carName = {value};\";i:1;s:12:\"let carName;\";i:2;s:12:\"var carName;\";}', 'coban'),
(31, 'one', '<p>C&aacute;ch n&agrave;o để tạo 1 h&agrave;m trong JavaScript?</p>', 'a:3:{i:0;s:23:\"function = myFunction()\";i:1;s:21:\"function myFunction()\";i:2;s:21:\"function:myFunction()\";}', 'function myFunction()', 'coban'),
(32, 'one', '<p>C&aacute;ch n&agrave;o để th&ecirc;m một comment nhiều d&ograve;ng trong JavaScript?</p>', 'a:3:{i:0;s:47:\"/*Đây là một comment trên nhiều dòng*/\";i:1;s:47:\"//Đây là một comment trên nhiều dòng//\";i:2;s:50:\"<!--Đây là một comment trên nhiều dòng-->\";}', '/*Đây là một comment trên nhiều dòng*/', 'coban'),
(33, 'one', '<p>Ng&ocirc;n ngữ JavaScript c&oacute; ph&acirc;n biệt chữ hoa, chữ thường kh&ocirc;ng?</p>', 'a:2:{i:0;s:3:\"Có\";i:1;s:7:\"Không \";}', 'Có', 'coban'),
(34, 'one', '<p>D&ugrave;ng c&aacute;ch n&agrave;o c&oacute; thể biết được tr&igrave;nh duyệt đang được sử dụng tại m&aacute;y Client?</p>', 'a:3:{i:0;s:12:\"browser.name\";i:1;s:14:\"client.navName\";i:2;s:17:\"navigator.appName\";}', 'navigator.appName', 'trungbinh'),
(35, 'one', '<p>C&acirc;u lệnh n&agrave;o đ&uacute;ng khi thực hiện gọi một script b&ecirc;n ngo&agrave;i c&oacute; t&ecirc;n file l&agrave; &quot;xxx.js&quot;<s>?</s></p>', 'a:3:{i:0;s:22:\"<script href=\"xxx.js\">\";i:1;s:22:\"<script name=\"xxx.js\">\";i:2;s:21:\"<script src=\"xxx.js\">\";}', '<script src=\"xxx.js\">', 'coban'),
(36, 'multi', '<p>Những c&aacute;ch đặt t&ecirc;n biến n&agrave;o sau đ&acirc;y l&agrave; đ&uacute;ng?</p>', 'a:4:{i:0;s:9:\"$fullName\";i:1;s:7:\"1conVit\";i:2;s:9:\"full-name\";i:3;s:8:\"fullName\";}', 'a:2:{i:0;s:9:\"$fullName\";i:1;s:8:\"fullName\";}', 'coban'),
(37, 'one', '<p>C&aacute;ch khai b&aacute;o biến như sau c&oacute; hợp lệ kh&ocirc;ng?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var fullName = &#39;Phong Trịnh Trọng&#39;, age = 18, workAt = &#39;FPT&#39;;</span></span></p>', 'a:2:{i:0;s:3:\"Có\";i:1;s:6:\"Không\";}', 'Có', 'coban'),
(38, 'one', '<p>Đ&acirc;u l&agrave; c&uacute; ph&aacute;p comment 1 d&ograve;ng?</p>', 'a:4:{i:0;s:2:\"**\";i:1;s:2:\"/*\";i:2;s:2:\"//\";i:3;s:2:\"||\";}', '//', 'coban'),
(39, 'multi', '<p>Đ&acirc;u l&agrave; c&uacute; ph&aacute;p comment nhiều d&ograve;ng hợp lệ(chọn 2)?</p>', 'a:4:{i:0;s:5:\"/* */\";i:1;s:7:\"/** **/\";i:2;s:2:\"//\";i:3;s:2:\"||\";}', 'a:2:{i:0;s:5:\"/* */\";i:1;s:7:\"/** **/\";}', 'coban'),
(40, 'one', '<p>Gi&aacute; trị của biến b sau khi kết th&uacute;c c&acirc;u lệnh sau l&agrave; bao nhi&ecirc;u?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var b = 69; b++</span></span></p>', 'a:4:{i:0;s:2:\"68\";i:1;s:2:\"69\";i:2;s:2:\"70\";i:3;s:2:\"71\";}', '70', 'coban'),
(41, 'one', '<p>Kết quả hiển thị của đoạn m&atilde; sau l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var a = 69&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var b = a++&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(a, b)</span></span></p>', 'a:4:{i:0;s:5:\"69 69\";i:1;s:5:\"69 70\";i:2;s:5:\"70 69\";i:3;s:5:\"70 70\";}', '70 69', 'trungbinh'),
(42, 'one', '<p>Kết quả của đầu ra sau l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var result = &#39;3&#39; + 2 + 1</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(result)</span></span></p>', 'a:4:{i:0;s:2:\"33\";i:1;s:3:\"123\";i:2;s:9:\"“321”\";i:3;s:8:\"“33”\";}', '“321”', 'trungbinh'),
(43, 'one', '<p>Kết quả đầu ra chương tr&igrave;nh sau l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let i = 0;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;let f = false, b;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;b = (f || ((i++) == 0));</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;console.log(b);</span></span></p>', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:5:\"false\";i:3;s:4:\"true\";}', 'true', 'trungbinh'),
(44, 'one', '<p>Cho đoạn chương tr&igrave;nh sau:</p><p><span id=\"isPasted\" style=\"color: rgb(251, 160, 38);\">let myArray = [3 ,4, 1, 2];&nbsp;</span></p><p><span style=\"color: rgb(251, 160, 38);\">myArray[3] = 0;</span></p><p>Phần tử myArray[0] c&oacute; gi&aacute; trị l&agrave;?</p><p><br></p>', 'a:4:{i:0;s:1:\"0\";i:1;s:1:\"1\";i:2;s:1:\"3\";i:3;s:1:\"4\";}', '3', 'trungbinh'),
(45, 'one', '<p>Kết quả &quot;1&quot; + &quot;1&quot; khi hiển trị tr&ecirc;n console l&agrave; g&igrave;?</p>', 'a:4:{i:0;s:1:\"2\";i:1;s:2:\"11\";i:2;s:9:\"Undefined\";i:3;s:8:\"“11”\";}', '“11”', 'trungbinh'),
(46, 'fill', '<p>Gi&aacute; trị của a l&agrave; bao nhi&ecirc;u khi thực hiện ph&eacute;p to&aacute;n sau?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var a = 9&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var result = a++ + a++ - --a;</span></span></p>', '', '9', 'trungbinh'),
(47, 'one', '<p>Kết quả hiển thị của h&agrave;m sau l&agrave; g&igrave; khi tham số year = 2016?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function run(year) {&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">if (year &gt;= 1 || year &lt;= 9999) {</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;if (year % 4 == 0 &amp;&amp; (year % 100 != 0 || year % 400 == 0)) {</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;console.log(year + &quot; is a leap year&quot;); }&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">else console.log(year + &quot; is not a leap year&quot;);</span></span></p>', 'a:3:{i:0;s:19:\"2016 is a leap year\";i:1;s:23:\"2016 is not a leap year\";i:2;s:9:\"Undefined\";}', '2016 is a leap year', 'trungbinh'),
(48, 'one', '<p>Kết quả của đoạn code sau l&agrave; g&igrave; với tham số a,b,c truyền v&agrave;o lần lượt l&agrave; 1,2,3?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function run(a, b, c) {&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let greatest;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;if (a &gt;= b &amp;&amp; a &gt;= c) greatest = a;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">else if (b &gt;= a &amp;&amp; b &gt;= c) greatest = b;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">else greatest = c;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(&quot;The greatest number is &quot; + greatest);</span></span></p>', 'a:4:{i:0;s:25:\"The greatest number  is 1\";i:1;s:27:\"The greatest number  is 123\";i:2;s:25:\"The greatest number  is 2\";i:3;s:25:\"The greatest number  is 3\";}', 'The greatest number  is 3', 'trungbinh'),
(49, 'one', '<p>Function sau cho kết quả l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function run() {&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var a = &quot;aa&quot;;&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var b = &quot;bb&quot;;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">return a.length == b.length;</span></span></p>', 'a:4:{i:0;s:5:\"false\";i:1;s:4:\"true\";i:2;s:9:\"“aa”;\";i:3;s:8:\"“bb”\";}', 'true', 'trungbinh'),
(50, 'one', '<p>Mảng b sau đ&acirc;y c&oacute; kết quả l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">a = [&quot;a&quot;, &quot;b&quot;, &quot;c&quot;];&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">b = [1, 2, 3];</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">b = b.concat(a);</span></span></p>', 'a:4:{i:0;s:8:\" [1,2,3]\";i:1;s:19:\"Không xác định\";i:2;s:31:\"[1,2,3,’a’,’b’,’c’]\";i:3;s:7:\"[a,b,c]\";}', '[1,2,3,’a’,’b’,’c’]', 'trungbinh'),
(51, 'one', '<p>Chương tr&igrave;nh sau đ&acirc;y cho kết quả l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let data = [1,2,3];&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let value = data.includes(5);&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log((value)? &#39;Yes&#39;: &#39;No&#39;)</span></span></p>', 'a:4:{i:0;s:2:\"No\";i:1;s:9:\"[1,2,3,5]\";i:2;s:7:\"[1,2,3]\";i:3;s:3:\"yes\";}', 'No', 'trungbinh'),
(52, 'one', '<p>Đ&acirc;u l&agrave; mảng data sau khi kết th&uacute;c chương tr&igrave;nh?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var data = [&quot;A&quot;,&quot;B&quot;,&quot;C&quot;]; console.log(data.reverse());</span></span></p>', 'a:4:{i:0;s:7:\"[A,B,C]\";i:1;s:25:\"[“A”,”B”,”C”]\";i:2;s:25:\"[“C”,”B”,”A”]\";i:3;s:4:\"null\";}', '[“C”,”B”,”A”]', 'trungbinh'),
(53, 'one', '<p>Phương thức <strong>Math.max(a,b,c)</strong> cho kết quả l&agrave; g&igrave;?</p>', 'a:4:{i:0;s:23:\"Giá trị cuối cùng\";i:1;s:48:\"Giá trị lớn nhất trong 3 giá trị a,b,c\";i:2;s:48:\"Giá trị nhỏ nhất trong 3 giá trị a,b,c\";i:3;s:23:\"Giá trị đầu tiên\";}', 'Giá trị lớn nhất trong 3 giá trị a,b,c', 'trungbinh'),
(54, 'one', '<p>Phương thức n&agrave;o sau đ&acirc;y d&ugrave;ng để t&iacute;nh gi&aacute; trị tuyệt đối?</p>', 'a:4:{i:0;s:10:\"Math.abs()\";i:1;s:11:\"Math.ceil()\";i:2;s:10:\"Math.min()\";i:3;s:12:\"Math.round()\";}', 'Math.abs()', 'trungbinh'),
(55, 'one', '<p>Phương thức to&aacute;n n&agrave;o sau đ&acirc;y d&ugrave;ng để t&iacute;nh gi&aacute; trị nhỏ nhất trong c&aacute;c gi&aacute; trị tuyền v&agrave;o?</p>', 'a:4:{i:0;s:10:\"Math.abs()\";i:1;s:11:\"Math.ceil()\";i:2;s:10:\"Math.min()\";i:3;s:12:\"Math.round()\";}', 'Math.min()', 'trungbinh'),
(56, 'one', '<p>Cho biết kết quả của h&agrave;m sau với a = 3, b = 4.</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function run(a, b) {&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">return Math.pow(a, 2) + Math.pow(b, 2);</span></span></p>', 'a:4:{i:0;s:1:\"5\";i:1;s:1:\"7\";i:2;s:2:\"15\";i:3;s:2:\"25\";}', '25', 'trungbinh'),
(57, 'one', '<p>Phương thức n&agrave;o để kiểm tra một số c&oacute; phải l&agrave; số nguy&ecirc;n?</p>', 'a:4:{i:0;s:14:\"Number.isInt()\";i:1;s:19:\"Number.isInterger()\";i:2;s:11:\"parString()\";i:3;s:10:\"parseInt()\";}', 'Number.isInterger()', 'trungbinh'),
(58, 'one', '<p>Phương thức n&agrave;o để chuyển đổi một chuỗi sang số nguy&ecirc;n?</p>', 'a:4:{i:0;s:10:\"Math.abs()\";i:1;s:11:\"Math.ceil()\";i:2;s:15:\"Math.parseInt()\";i:3;s:12:\"Math.round()\";}', 'Math.parseInt()', 'trungbinh'),
(59, 'one', '<p>Đ&acirc;u l&agrave; gi&aacute; trị thuộc t&iacute;nh &quot;age&quot; của đối tượng person sau?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var person &nbsp;= { firstName:&quot;Trung&quot;,</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">lastName:&quot;Vuong&quot;,&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">age:50,&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">eyeColor:&quot;blue&quot; };</span></span></p>', 'a:4:{i:0;s:2:\"50\";i:1;s:4:\"true\";i:2;s:11:\"“Trung”\";i:3;s:10:\"“blue”\";}', '50', 'trungbinh'),
(60, 'one', '<p>Phương thức n&agrave;o để sắp xếp một mảng theo thứ tự tăng dần?</p>', 'a:4:{i:0;s:8:\"delete()\";i:1;s:5:\"pop()\";i:2;s:6:\"push()\";i:3;s:6:\"sort()\";}', 'sort()', 'trungbinh'),
(61, 'one', '<p>H&agrave;m sau đ&acirc;y thực hiện thao t&aacute;c g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function isChan(soChan){</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;return soChan % 2==0;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">}</span></span></p>', 'a:4:{i:0;s:37:\"Kiểm tra một số là số chẵn\";i:1;s:35:\"Kiểm tra một số là số lẻ\";i:2;s:46:\"Kiểm tra một số là số nguyên dương\";i:3;s:37:\"Kiểm tra một số là số thực\";}', 'Kiểm tra một số là số chẵn', 'trungbinh'),
(62, 'one', '<p>Phương thức n&agrave;o sau đ&acirc;y trả về độ d&agrave;i của một mảng?</p>', 'a:4:{i:0;s:8:\"length()\";i:1;s:5:\"pop()\";i:2;s:6:\"push()\";i:3;s:8:\"revert()\";}', 'length()', 'trungbinh'),
(63, 'one', '<p>Phương thức n&agrave;o sau đ&acirc;y thực hiện nối mảng?</p>', 'a:4:{i:0;s:11:\"Math.ceil()\";i:1;s:8:\"concat()\";i:2;s:6:\"drop()\";i:3;s:5:\"pop()\";}', 'concat()', 'trungbinh'),
(64, 'one', '<p>Phương thức <strong>Date()</strong> trả về kết quả l&agrave; g&igrave;?</p>', 'a:4:{i:0;s:25:\"Ngày tháng hiện tại\";i:1;s:30:\"Ngày tháng năm của client\";i:2;s:30:\"Ngày tháng năm hiện tại\";i:3;s:17:\"Năm hiện tại\";}', 'Ngày tháng năm của client', 'trungbinh'),
(65, 'one', '<p>Sử dụng phương thức n&agrave;o để trả về năm?</p>', 'a:3:{i:0;s:8:\"getDay()\";i:1;s:13:\"getFullYear()\";i:2;s:10:\"getMonth()\";}', 'getFullYear()', 'trungbinh'),
(66, 'fill', '<p>Kết quả sau khi thực hiện phương thức <strong>Math.sqrt(16)</strong> l&agrave; ?</p>', '', '4', 'trungbinh'),
(67, 'one', '<p>Đ&acirc;u l&agrave; gi&aacute; trị của biến a sau khi thực hiện ph&eacute;p g&aacute;n sau:</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">a = Math.pow(2,4);</span></span></p>', 'a:4:{i:0;s:1:\"0\";i:1;s:3:\"0.5\";i:2;s:1:\"8\";i:3;s:2:\"16\";}', '16', 'trungbinh'),
(68, 'one', '<p>Kết quả n&agrave;o sau đ&acirc;y trả về th&aacute;ng ch&iacute;nh x&aacute;c?</p>', 'a:4:{i:0;s:8:\"getDay()\";i:1;s:13:\"getFullYear()\";i:2;s:17:\"getFullYear() + 1\";i:3;s:10:\"getMonth()\";}', 'getFullYear() + 1', 'trungbinh'),
(69, 'one', '<p>Để lấy gi&aacute; trị nguy&ecirc;n của một số sử dụng phương thức to&aacute;n n&agrave;o?</p>', 'a:4:{i:0;s:11:\"Math.ceil()\";i:1;s:10:\"Math.max()\";i:2;s:12:\"Math.round()\";i:3;s:12:\"Math.trunc()\";}', 'Math.trunc()', 'trungbinh'),
(70, 'one', '<p>Chương tr&igrave;nh sau kết th&uacute;c khi n&agrave;o?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">for (i = 1; i &lt;= 26563; i++) {</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;if (i == 23) break;&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">else { console.log(i); }</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;}</span></span></p>', 'a:4:{i:0;s:5:\"i = 1\";i:1;s:6:\"i = 23\";i:2;s:9:\"i = 26563\";i:3;s:15:\"lặp vô hạn\";}', 'i = 23', 'trungbinh'),
(71, 'one', '<p>Cho biết kết quả của chương tr&igrave;nh sau:</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function sayHi() {&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(name);</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(age);&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var name = &quot;Lydia&quot;; let age = 21;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">}</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;sayHi();</span></span></p>', 'a:4:{i:0;s:24:\"Lydia and ReferenceError\";i:1;s:19:\"Lydia and undefined\";i:2;s:21:\"ReferenceError and 21\";i:3;s:28:\"undefined and ReferenceError\";}', 'undefined and ReferenceError', 'nangcao'),
(72, 'one', '<p>Kết quả của chương tr&igrave;nh Javacript sau đ&acirc;y l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">for (var i = 0; i &lt; 3; i++) {&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">setTimeout(() =&gt; console.log(i),1);</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;}&nbsp;</span></span></p>', 'a:3:{i:0;s:15:\"0 1 2 and 0 1 2\";i:1;s:15:\"0 1 2 and 3 3 3\";i:2;s:15:\"3 3 3 and 0 1 2\";}', '3 3 3 and 0 1 2', 'nangcao'),
(73, 'one', '<p>Kết quả của chương tr&igrave;nh Javacript sau đ&acirc;y l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">+true;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;!&quot;ICT H&agrave; Nội&quot;;</span></span></p>', 'a:3:{i:0;s:11:\"1 and false\";i:1;s:13:\"false and NaN\";i:2;s:15:\"false and false\";}', '1 and false', 'nangcao'),
(74, 'one', '<p>Kết quả của chương tr&igrave;nh Javacript sau đ&acirc;y l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let c = { greeting: &quot;Hey!&quot; };&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let d;&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">d = c;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">c.greeting = &quot;Hello&quot;; console.log(d.greeting);</span></span></p>', 'a:5:{i:0;s:5:\"Hello\";i:1;s:3:\"Hey\";i:2;s:14:\"ReferenceError\";i:3;s:9:\"TypeError\";i:4;s:9:\"undefined\";}', 'Hello', 'nangcao'),
(75, 'one', '<p>Kết quả của chương tr&igrave;nh Javacript sau đ&acirc;y l&agrave; g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let a = 3;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;let b = new Number(3);</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;let c = 3;&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(a == b);&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(a === b);</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;console.log(b === c);</span></span></p>', 'a:4:{i:0;s:16:\"false false true\";i:1;s:15:\"false true true\";i:2;s:16:\"true false false\";i:3;s:15:\"true false true\";}', 'true false false', 'nangcao'),
(76, 'one', '<p>Code sau xuất ra kết quả bao nhi&ecirc;u nếu nhập lần lượt 20 v&agrave; 18</p><pre id=\"isPasted\" style=\"box-sizing: border-box; overflow: auto; font-family: monospace, monospace; font-size: 17px; background-color: rgb(241, 241, 241); padding: 4px 10px; border: none; border-radius: 0px; margin-top: 24px; color: rgb(0, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"color: rgb(251, 160, 38);\"> <span class=\"fr-class-code\">var xx = prompt(&quot;Bạn bao nhi&ecirc;u tuổi vậy?&quot;);<br style=\"box-sizing: border-box;\"> var xy = prompt(&quot;C&ograve;n người y&ecirc;u bao nhi&ecirc;u tuổi?&quot;);<br style=\"box-sizing: border-box;\"> var tong = xx + yy;<br style=\"box-sizing: border-box;\"> alert(tong);</span></span></pre>', 'a:4:{i:0;s:2:\"38\";i:1;s:4:\"1820\";i:2;s:4:\"2018\";i:3;s:5:\"Lỗi\";}', 'Lỗi', 'nangcao'),
(77, 'one', '<p>Code sau xuất ra kết quả bao nhi&ecirc;u nếu nhập lần lượt 19 v&agrave; 20?</p><pre id=\"isPasted\" style=\"box-sizing: border-box; overflow: auto; font-family: monospace, monospace; font-size: 17px; background-color: rgb(241, 241, 241); padding: 4px 10px; border: none; border-radius: 0px; margin-top: 24px; color: rgb(0, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">   var ny1 = prompt(&quot;Bạn bao nhi&ecirc;u tuổi vậy?&quot;);<br style=\"box-sizing: border-box;\"> var ny2 = prompt(&quot;C&ograve;n người y&ecirc;u bao nhi&ecirc;u tuổi?&quot;);<br style=\"box-sizing: border-box;\">    var tong = ny1 + ny2;<br style=\"box-sizing: border-box;\">    alert(tong);</span></span></pre>', 'a:4:{i:0;s:1:\"0\";i:1;s:2:\"39\";i:2;s:4:\"1920\";i:3;s:5:\"Lỗi\";}', '1920', 'nangcao'),
(78, 'multi', '<p>Chọn hai ph&aacute;t biểu đ&uacute;ng&nbsp;</p>', 'a:4:{i:0;s:51:\"alert() là hàm để nhập dữ liệu từ user\";i:1;s:80:\"confirm() là hàm trả về true/false để user xác nhận điều gì đó\";i:2;s:56:\"console.log() là lệnh giúp web developer debug lỗi\";i:3;s:48:\"prompt() là hàm dùng để thông báo lỗi.\";}', 'a:2:{i:0;s:80:\"confirm() là hàm trả về true/false để user xác nhận điều gì đó\";i:1;s:56:\"console.log() là lệnh giúp web developer debug lỗi\";}', 'nangcao'),
(79, 'multi', '<p>C&aacute;c c&aacute;ch để hiện 1 gi&aacute; trị hay biểu thức:</p>', 'a:5:{i:0;s:20:\"Dùng lệnh alert()\";i:1;s:22:\"Dùng lệnh confirm()\";i:2;s:29:\"Dùng lệnh document.write()\";i:3;s:42:\"Ghi vào thuộc tính innerHTML của tag\";i:4;s:20:\"Lệnh console.log()\";}', 'a:4:{i:0;s:20:\"Dùng lệnh alert()\";i:1;s:29:\"Dùng lệnh document.write()\";i:2;s:42:\"Ghi vào thuộc tính innerHTML của tag\";i:3;s:20:\"Lệnh console.log()\";}', 'coban'),
(80, 'one', '<p>Cho biết đoạn code dưới thực hiện th&ocirc;ng b&aacute;o g&igrave; nếu nhập v&agrave;o chữ &quot;a&quot;?</p><pre id=\"isPasted\" style=\"box-sizing: border-box; overflow: auto; font-family: monospace, monospace; font-size: 17px; background-color: rgb(241, 241, 241); padding: 4px 10px; border: none; border-radius: 0px; margin-top: 24px; color: rgb(0, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\"> var x = prompt(&quot;Bạn bao nhiểu tuổi&quot;);<br style=\"box-sizing: border-box;\"> if (isNaN(x)==true) alert(&quot;Vui l&ograve;ng nhập v&agrave;o một số&quot;);<br style=\"box-sizing: border-box;\"> else alert(&quot;Cảm ơn&quot;)</span></span>;</pre>', 'a:4:{i:0;s:9:\"Cảm ơn\";i:1;s:22:\"Không hiện gì cả\";i:2;s:5:\"Lỗi\";i:3;s:32:\"Vui lòng nhập vào một số\";}', 'Vui lòng nhập vào một số', 'nangcao'),
(81, 'one', '<p>console.log của chương tr&igrave;nh dưới đ&acirc;y cho bạn kết quả n&agrave;o?</p><pre id=\"isPasted\" style=\"box-sizing: border-box; overflow: auto; font-family: monospace, monospace; font-size: 17px; background-color: rgb(241, 241, 241); padding: 4px 10px; border: none; border-radius: 0px; margin-top: 24px; color: rgb(0, 0, 255); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var dt = [&quot;Ch&acirc;n th&agrave;nh&quot;, &quot;Nhường nhịn&quot;]; <br style=\"box-sizing: border-box;\">dt[2] = &quot;Khi&ecirc;m tốn&quot;;<br style=\"box-sizing: border-box;\">dt.push(&quot;Mạnh mẽ&quot;);<br style=\"box-sizing: border-box;\">console.log(dt, dt.length);</span></span></pre>', 'a:4:{i:0;s:5:\"Lỗi\";i:1;s:11:\"Mạnh mẽ\";i:2;s:71:\"[ \"Chân thành\", \"Nhường nhịn\", \"Khiêm tốn\", \"Mạnh mẽ\" ] 4\";i:3;s:37:\"[ \"Chân thành\", \"Nhường nhịn\"]\";}', '[ \"Chân thành\", \"Nhường nhịn\", \"Khiêm tốn\", \"Mạnh mẽ\" ] 4', 'nangcao'),
(82, 'multi', '<p>Chọn c&acirc;u đ&uacute;ng về h&agrave;m random v&agrave; round trong đối tượng Math</p>', 'a:4:{i:0;s:89:\"Khi gọi hàm Math.random() ; sẽ được 1 số thực ngẫu nhiên từ 0 đến 1.\";i:1;s:72:\"Khi gọi hàm Math.random(); sẽ được 1 số nguyên ngẫu nhiên\";i:2;s:76:\"Khi gọi hàm Math.round(x) sẽ được 1 số nguyên làm tròn của x\";i:3;s:71:\"Khi gọi hàm round(x) sẽ được 1 số nguyên làm tròn của x\";}', 'a:2:{i:0;s:76:\"Khi gọi hàm Math.round(x) sẽ được 1 số nguyên làm tròn của x\";i:1;s:76:\"Khi gọi hàm Math.round(x) sẽ được 1 số nguyên làm tròn của x\";}', 'trungbinh'),
(83, 'one', '<p>Function sau thực hiện h&agrave;nh động g&igrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function kiemtra(){ window.open(&quot;http://Quantrimang.com&quot;,&quot;Chao&quot;); }</span></span></p>', 'a:4:{i:0;s:53:\" Khi chạy thì một trang khác được hiện ra\";i:1;s:29:\"Hiện một trang duy nhất\";i:2;s:47:\"Khi kết thúc thì một site khác hiện ra\";i:3;s:30:\"Không chạy được vì sai\";}', ' Khi chạy thì một trang khác được hiện ra', 'nangcao'),
(84, 'one', '<p>Kết quả đầu ra chương tr&igrave;nh l&agrave; g&igrave;?<span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(typeof typeof 1);</span></span></p>', 'a:4:{i:0;s:8:\"\"number\"\";i:1;s:8:\"\"object\"\";i:2;s:8:\"\"string\"\";i:3;s:11:\"\"undefined\"\";}', '\"string\"', 'nangcao'),
(85, 'one', '<p>Chọn gi&aacute; trị biến message?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let message = &quot;This&quot;;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let message = &quot;That&quot;;</span></span></p>', 'a:4:{i:0;s:6:\"\"That\"\";i:1;s:6:\"\"This\"\";i:2;s:10:\"\"ThisThat\"\";i:3;s:11:\"SyntaxError\";}', 'SyntaxError', 'nangcao'),
(86, 'one', '<p>Kết quả trả về l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">const obj = { a:&#39;one&#39;, b:&#39;two&#39;,a:&#39;three&#39;};</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(obj);</span></span></p>', 'a:4:{i:0;s:11:\"SyntaxError\";i:1;s:17:\"{a:\"one\",b:\"two\"}\";i:2;s:19:\"{a:\"three\",b:\"two\"}\";i:3;s:19:\"{b:\"two\",a:\"three\"}\";}', '{a:\"three\",b:\"two\"}', 'nangcao'),
(87, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let newList = [1, 2, 3].push(4);</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(newList.push(5));</span></span></p><p><br></p>', 'a:4:{i:0;s:5:\"Error\";i:1;s:11:\"[1,2,3,4,5]\";i:2;s:9:\"[1,2,3,4]\";i:3;s:9:\"[1,2,3,5]\";}', 'Error', 'nangcao'),
(88, 'one', '<p>kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(3 + 4 + &#39;5&#39;);</span></span></p>', 'a:4:{i:0;s:4:\"\"12\"\";i:1;s:5:\"\"345\"\";i:2;s:4:\"\"75\"\";i:3;s:2:\"12\";}', '\"75\"', 'nangcao'),
(89, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">const list = [1 + 2, 1 * 2, 1 / 2];</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(list);</span></span></p>', 'a:4:{i:0;s:27:\"[\"1 + 2\", \"1 * 2\", \"1 / 2\"]\";i:1;s:14:\"[\"12\", 2, 0.5]\";i:2;s:9:\"[1, 1, 1]\";i:3;s:11:\"[3, 2, 0.5]\";}', '[3, 2, 0.5]', 'nangcao'),
(90, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">document.write(&#39;cat&#39;.charAt(1));</span></span></p>', 'a:4:{i:0;s:11:\"SyntaxError\";i:1;s:1:\"a\";i:2;s:1:\"b\";i:3;s:1:\"c\";}', 'a', 'nangcao'),
(91, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(&#39;I want pizza&#39;[0]);</span></span></p>', 'a:4:{i:0;s:2:\"\"\"\";i:1;s:3:\"\"I\"\";i:2;s:11:\"SyntaxError\";i:3;s:9:\"undefined\";}', '\"I\"', 'nangcao'),
(92, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let greeting;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">greetign={};</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(greetign);</span></span></p>', 'a:3:{i:0;s:8:\"Object{}\";i:1;s:39:\"ReferenceError: greetign is not defined\";i:2;s:9:\"undefined\";}', 'Object{}', 'nangcao'),
(93, 'multi', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let number = 0;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(number++);</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(++number);</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(number);</span></span></p>', 'a:5:{i:0;s:1:\"0\";i:1;s:1:\"2\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";}', 'a:3:{i:0;s:1:\"0\";i:1;s:1:\"2\";i:2;s:1:\"2\";}', 'nangcao'),
(94, 'one', '<p>Kết quả hiển thị l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">const numbers = [1, 2, 3];</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">numbers[10] = 11;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">console.log(numbers);</span></span></p>', 'a:4:{i:0;s:11:\"SyntaxError\";i:1;s:13:\"[1, 2, 3, 11]\";i:2;s:24:\"[1, 2, 3, 7 x empty, 11]\";i:3;s:23:\"[1, 2, 3, 7 x null, 11]\";}', '[1, 2, 3, 7 x empty, 11]', 'nangcao'),
(95, 'multi', '<p>A=3, B=6. Chọn c&aacute;c đ&aacute;p &aacute;n để biểu thức đ&uacute;ng</p>', 'a:4:{i:0;s:10:\"(++A>=B-3)\";i:1;s:18:\"(A%2!=0)&&(B%2!=0)\";i:2;s:18:\"(A%2==0)||(B%2==0)\";i:3;s:8:\"A++ != 4\";}', 'a:3:{i:0;s:10:\"(++A>=B-3)\";i:1;s:18:\"(A%2==0)||(B%2==0)\";i:2;s:8:\"A++ != 4\";}', 'trungbinh'),
(96, 'one', '<p>Kết quả của c&acirc;u lệnh l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">3 * &quot;bob&quot;;</span></span></p>', 'a:4:{i:0;s:5:\"\"NaN\"\";i:1;s:8:\"\"number\"\";i:2;s:8:\"\"string\"\";i:3;s:11:\"SyntaxError\";}', '\"NaN\"', 'trungbinh'),
(97, 'one', '<p>kết quả của c&acirc;u lệnh l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">typeof(NaN);</span></span></p>', 'a:3:{i:0;s:5:\"\"NaN\"\";i:1;s:8:\"\"number\"\";i:2;s:8:\"\"string\"\";}', '\"number\"', 'trungbinh'),
(98, 'one', '<p>Chọn c&uacute; ph&aacute;p arrow function tương đương với h&agrave;m sau đ&acirc;y</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">function bob (a){</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">return a+ 100;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">}</span></span></p>', 'a:4:{i:0;s:21:\"let bob = a => a+100;\";i:1;s:25:\"let bob = a => {a} + 100;\";i:2;s:23:\"let bob = {a} => a+100;\";i:3;s:23:\"{let bob} = a => a+100;\";}', 'let bob = a => a+100;', 'coban'),
(99, 'one', '<p>Sao ch&eacute;p một mảng ta sử dụng?</p>', 'a:4:{i:0;s:13:\"concat(pos,n)\";i:1;s:6:\"copy()\";i:2;s:6:\"join()\";i:3;s:7:\"slice()\";}', 'slice()', 'trungbinh'),
(100, 'fill', '<p>Kết quả hiển thị l&agrave;?</p><p>let str = &quot;Apple, Banana, Kiwi&quot;;</p><p>document.write(str.slice(7,13));</p>', '', 'Banana', 'coban'),
(101, 'fill', '<p>Kết quả của part l&agrave;?</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let str = &quot;Apple, Banana, Kiwi&quot;;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">let part = str.substr(-4);</span></span></p>', '', 'Kiwi', 'trungbinh'),
(102, 'fill', '<p>let str = &quot;Please locate where &#39;locate&#39; occurs!&quot;;</p><p>document.write(str.indexOf(&quot;locate&quot;));</p>', '', '7', 'coban'),
(103, 'fill', '<p>Gi&aacute; trị của a sau khi kết th&uacute;c chương tr&igrave;nh sau l&agrave;:</p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var a = 5;&nbsp;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">var b = 6;</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;for (var i = 1; i &lt; 3; i++) {</span></span></p><p><span class=\"fr-class-code\"></span><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">&nbsp;a = ++b * b - a;&nbsp;</span></span></p><p><span style=\"color: rgb(251, 160, 38);\"><span class=\"fr-class-code\">}</span></span></p>', '', '61', 'nangcao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de_thi`
--

CREATE TABLE `de_thi` (
  `ma_de_thi` int(5) NOT NULL,
  `ten_de_thi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc` int(5) NOT NULL,
  `cau_hoi_coban` int(5) NOT NULL,
  `cau_hoi_trungbinh` int(5) NOT NULL,
  `cau_hoi_nangcao` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `de_thi`
--

INSERT INTO `de_thi` (`ma_de_thi`, `ten_de_thi`, `khoa_hoc`, `cau_hoi_coban`, `cau_hoi_trungbinh`, `cau_hoi_nangcao`) VALUES
(1, 'JavaScript cơ bản đề số 1', 7, 10, 6, 4),
(2, 'JavaScript cơ bản đề số 2', 7, 10, 6, 4),
(3, 'JavaScript vận dụng đề số 1', 8, 8, 10, 2),
(4, 'JavaScript vận dụng đề số 2', 8, 8, 10, 2),
(9, 'JavaScript nâng cao - đề số 1', 9, 5, 5, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ket_qua`
--

CREATE TABLE `ket_qua` (
  `id` int(5) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc` int(5) NOT NULL,
  `de_thi` int(5) NOT NULL,
  `diem` int(11) NOT NULL,
  `ngay` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ket_qua`
--

INSERT INTO `ket_qua` (`id`, `username`, `khoa_hoc`, `de_thi`, `diem`, `ngay`) VALUES
(5, 'admin.khanh', 7, 2, 0, '2021-12-29 15:29:38'),
(6, 'admin.khanh', 7, 1, 0, '2021-12-29 15:37:22'),
(7, 'admin.khanh', 7, 1, 1, '2021-12-29 15:40:43'),
(8, 'admin.khanh', 7, 1, 1, '2021-12-29 15:45:46'),
(9, 'admin.khanh', 7, 1, 1, '2021-12-29 15:46:06'),
(13, 'admin.khanh', 8, 3, 1, '2021-12-29 15:55:43'),
(14, 'admin.khanh', 8, 4, 1, '2021-12-30 09:47:52'),
(15, 'admin.khanh', 9, 9, 0, '2021-12-30 09:56:50'),
(16, 'admin.khanh', 8, 3, 4, '2021-12-30 10:02:34'),
(18, 'admin.khanh', 7, 1, 0, '2021-12-30 10:23:11'),
(19, 'admin.khanh', 7, 1, 1, '2021-12-30 12:08:35'),
(20, 'admin.khanh', 7, 1, 11, '2021-12-30 12:12:20'),
(21, 'admin.khanh', 7, 1, 0, '2021-12-30 12:13:03'),
(22, 'dathoi2018', 7, 1, 1, '2021-12-30 12:16:47'),
(23, 'dathoi2018', 7, 1, 6, '2021-12-30 12:17:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id`, `name`, `description`) VALUES
(7, 'Khóa học JavaScript cơ bản', 'Học JavaScript cơ bản : Biến, kiểu dữ liệu, một số hàm cơ bản...'),
(8, 'Khóa học JavaScript Vận dụng', 'Học JavaScript ở mức Vận dụng với các hàm toán học, một số đoạn mã áp dụng...'),
(9, 'Khóa học JavaScript nâng cao', 'JavaScript nâng cao với các câu hỏi ở mức độ thực hành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'nguyenphiikhanh', 'Trần Thùy Dung', 'nguyenphiikhanh@gmail.com', 'aaa', 'user'),
(2, 'admin.khanh', 'Khanh admin', 'nguyenphiikhanh@gmail.com', 'khanhdz', 'admin'),
(4, 'dathoi2018', 'Nguyễn Ngọc Huy', 'thankhuya4@gmail.com', '123456', 'user'),
(5, 'dathoi2019', 'Nguyễn Ngọc Hà', 'thankhuya5@gmail.com', '123456', 'user'),
(6, 'longdz', 'Nguyễn Ngọc Long', 'Longngoc@gmail.com', '123456', 'user'),
(7, 'thaong', 'Nguyễn Thu Thảo', 'ttthao@gmail.com', '123456', 'user'),
(8, 'diepanh', 'Đỗ Diệp Anh', 'diepanhdo@gmail.com', '123456', 'user'),
(9, 'lamtris', 'Nguyễn Thanh Lam', 'lamnt@gmail.com', '123456', 'user'),
(10, 'kienng', 'Nguyễn Trung Kiên', 'kiennt@gmail.com', '123456', 'user'),
(11, 'thanhct', 'Nguyễn Công Thành', 'thanhct@gmail.com', '123456', 'user'),
(12, 'CP10', 'Nguyễn Công Phượng', 'phuongnc@gmail.com', '123456', 'user'),
(13, 'khanhphii', 'Nguyễn Phi Khánh', 'khanhphii@gmail.com', '654321', 'user'),
(14, 'linhxinh', 'Trần Ngọc Linh', 'linhnt@gmail.com', '123456', 'user'),
(15, 'phuongng', 'Nguyễn Hà Phương', 'phuongnh@gmail.com', '123456', 'user'),
(16, 'kane', 'Hà Duy Kiên', 'harrykane@gmail.com', '123456', 'user'),
(17, 'giangnt', 'Nguyễn Trà Giang', 'giangnt2@gmail.com', '123456', 'user'),
(18, 'sonba', 'Lương Sơn Bá', 'bals@gmail.com', '123456', 'user'),
(19, 'trucanh', 'Trúc Anh Đài', 'trucanh@gmail.com', '123456', 'user'),
(20, 'bich', 'Nguyễn Ngọc Bích', 'ruby@gmail.com', '123456', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`ma_de_thi`);

--
-- Chỉ mục cho bảng `ket_qua`
--
ALTER TABLE `ket_qua`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  MODIFY `ma_de_thi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `ket_qua`
--
ALTER TABLE `ket_qua`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
