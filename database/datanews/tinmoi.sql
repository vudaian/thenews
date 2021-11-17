-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 17, 2021 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datanews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinmoi`
--

CREATE TABLE `tinmoi` (
  `ID` int(11) NOT NULL,
  `titlenew` varchar(256) DEFAULT NULL,
  `imagenew` varchar(500) DEFAULT NULL,
  `timenew` varchar(500) DEFAULT NULL,
  `detailsnew` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinmoi`
--

INSERT INTO `tinmoi` (`ID`, `titlenew`, `imagenew`, `timenew`, `detailsnew`) VALUES
(19, 'Lộ chiêu bài Tịnh thất Bồng Lai - Thiền am bên bờ vũ trụ sử dụng nhiều năm qua để \"hái ra tiền\" một cách nhẹ nhàng.', 'https://cdnmedia.tinmoi.vn/upload/camnhung/2021/11/16/lo-chieu-bai-ong-le-tung-van-su-dung-nhieu-nam-de-tinh-that-bong-lai-hai-ra-tien-1637055486-3.jpg', '11/11/2021', 'Tịnh thất Bồng Lai nay được đổi tên là Thiền am bên bờ vũ trụ đang là cái tên được dư luận quan tâm đặc biệt. Là nơi nhận những em bé mồ côi những người có hoàn cảnh khó khăn nhưng người đứng đầu Tịnh thất Bồng Lai và những \"thầy tu\" bên trong thường xuyên khoe cuộc sống đủ đầy vật chất từ xe sang đến điện thoại thời thường.  Nhiều người không khỏi thắc mắc nguồn thu chính của Tịnh thất Bồng Lai đến từ đâu mà lại có cuộc sống sang chảnh đến vậy. Theo dõi những hoạt động của Thiền am bên bờ vũ tr'),
(26, 'Bất ngờ tại phiên xử Đường \"Nhuệ\": Nhiều luật sư bào chữa đứng dậy ra về; Bắt 2 kẻ lừa 165 người sang Hàn Quốc bằng đường biển, chiếm đoạt gần 3 tỷ đồng...', 'https://cdnmedia.tinmoi.vn/upload/camnhung/2021/11/17/tin-tuc-phap-luat-24h-bat-ngo-tai-phien-xu-duong-nhue-nhieu-luat-su-bao-chua-dung-day-ra-ve-1637142934-3.jpg', '15/6/2020', 'Sáng 17/11, HĐXX TAND tỉnh Thái Bình quyết định cho phiên xử Nguyễn Xuân Đường (Đường \"Nhuệ\") tiếp tục sau những đề nghị tạm hoãn của bị cáo và các luật sư bào chữa. Trong phần công bố khai mạc phiên tòa, bị cáo Nguyễn Mạnh Tiến (tức Tiến \"Trắng\") đã từ chối các luật sư được mời bảo vệ quyền lợi cho mình. Bị cáo nhiều lần không trả lời các câu hỏi của chủ tọa. Khi được cho phép trình bày tâm tư nguyện vọng, Tiến giơ tờ giấy lên đọc và khẳng định sai phạm đến đâu xin chịu đến đó, nhưng cho rằng mình không có tội. Bị cáo này cho rằng, bản thân đã bị bố nuôi đổ trách nhiệm trong nhiều vụ án. Còn Nguyễn Xuân Đường đề nghị HĐXX triệu tập những người liên quan trong vụ án, cụ thể, đó là những bị hại (chủ cơ sở dịch vụ tang lễ) mà Đường nói họ chỉ là đối tác làm ăn và muốn thay đổi kiểm sát viên. Một luật sư khác là người bào chữa cho Nguyễn Thị Dương đề nghị hoãn phiên tòa để triệu tập bị hại vì \"có nhiều lời khai không khách quan\". Các luật sư khác bảo vệ cho 7 bị cáo cùng quan điểm, họ cho rằng vụ án vi phạm quy định tố tụng. Sau khi hội ý, Chủ tọa phiên tòa nêu quan điểm, yêu cầu thay đổi kiểm sát viên của bị cáo Đường không có cơ sở chấp nhận. Các bị hại, nhân chứng, người liên quan vắng mặt nhưng đã có lời khai tại giai đoạn điều tra, nếu cần sẽ công bố nên HĐXX quyết định tiếp tục làm việc. Đáp lại quyết định của tòa, 8 luật sư bào chữa cho các bị cáo cho rằng HĐXX vi phạm nghiêm trọng luật tố tụng, không tôn trọng pháp luật nên cùng ra về, không tham gia phiên tòa. Chỉ còn luật sư của bị cáo Úy ở lại.'),
(27, 'UBND TP. Hà Nội quyết định siết chặt quản lý, đưa ra những thay đổi trong quy định với những người dân trở về từ vùng dịch', 'https://cdnmedia.tinmoi.vn/upload/honghoavideo/2021/11/17/nhung-thay-doi-trong-quy-dinh-danh-cho-nguoi-tu-vung-dich-tro-ve-ha-noi-1637146815-2.jpg', '16/11/2021', 'UBND TP. Hà Nội quyết định siết chặt quản lý, đưa ra những thay đổi trong quy định với những người dân trở về từ vùng dịch trong bối cảnh các ca nhiễm của thành phố những ngày qua ở mức từ 150 - 289 ca mắc mới mỗi ngày.   Theo Công điện hỏa tốc số 23 của UBND TP. Hà Nội, từ ngày 17/11, thành phố tăng cường cách ly, xét nghiệm đối với người về từ các tỉnh, thành phố khác. Cụ thể: - Đối với người đã tiêm đủ liều vaccine hoặc đã khỏi bệnh đi về từ khu vực nguy cơ rất cao, nguy cơ cao (cấp độ 4 và 3, tương ứng với màu đỏ và màu da cam) và các tỉnh, thành phố có số ca mắc cao như: TP.HCM, Bình Dương, Long An, Đồng Nai… cách ly tại nhà hoặc nơi lưu trú (có Quyết định cách ly của địa phương) trong vòng 7 ngày thay cho tự theo dõi sức khỏe tại nhà. Đồng thời xét nghiệm 2 lần vào ngày thứ nhất và ngày thứ 7 thay cho chỉ xét nghiệm 1 lần vào ngày thứ nhất. - Đối với những người tiêm chưa đủ liều hoặc chưa tiêm vaccine Covid-19 đi về từ khu vực nguy cơ cao (cấp độ 3, tương ứng màu da cam): cách ly tại nhà hoặc nơi lưu t');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tinmoi`
--
ALTER TABLE `tinmoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
