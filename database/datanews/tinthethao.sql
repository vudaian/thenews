-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 17, 2021 lúc 05:53 PM
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
-- Cấu trúc bảng cho bảng `tinthethao`
--

CREATE TABLE `tinthethao` (
  `ID` int(11) NOT NULL,
  `titlesport` varchar(150) DEFAULT NULL,
  `imagesport` varchar(500) DEFAULT NULL,
  `timesport` varchar(500) DEFAULT NULL,
  `detailssport` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinthethao`
--

INSERT INTO `tinthethao` (`ID`, `titlesport`, `imagesport`, `timesport`, `detailssport`) VALUES
(9, 'Sau hai trận thua liên tiếp trong tháng 11 của vòng loại thứ 3 World Cup 2022 khu vực châu Á, ĐT Việt Nam nhiều khả năng rơi xuống vị trí thứ 100 của ', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637119591-1.jpeg', '09/11/2021', 'Ở lượt trận thứ 6 bảng B vòng loại cuối World Cup 2022, ĐT Việt Nam vừa tiếp tục trải qua trận thua thứ 6 liên tiếp sau thất bại 0-1 trước Saudi Arabia trên sân nhà Mỹ Đình. Thất bại là điều đã được dự báo trước. Và một điều có thể dự báo trước khác cũng đã xảy ra, ĐT Việt Nam sẽ tụt xuống vị trí thứ 100 trên BXH FIFA sau lượt trận tháng 11 này. Theo tính toán của trang Football Ranking, ĐT Việt Nam sẽ bị trừ thêm 7,8 điểm với thất bại trên kể trên, sau khi đã bị trừ 6,1 điểm ở trận thua trước đ'),
(14, 'Không phải đối đầu với Erling Haaland, ĐT Hà Lan vẫn có một trận đấu tương đối khó khăn trước ĐT Na Uy. ', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637112324-1.jpg', '11/11/2021', 'Không phải đối đầu với Erling Haaland, ĐT Hà Lan vẫn có một trận đấu tương đối khó khăn trước ĐT Na Uy. Phải nỗ lực tới những phút cuối cùng, ĐT Hà Lan mới có được chiến thắng chung cuộc để bảo toàn ngôi đầu, trực tiếp giành vé đi Qatar.   Sau khi lỡ hẹn với World Cup 2018 và bị làng bóng đá thế giới chê cười, ĐT Hà Lan đã rất nỗ lực ở vòng loại World Cup 2022 lần này. Trước lượt đấu cuối cùng, họ chỉ hơn Na Uy và Thổ Nhĩ Kỳ đúng 2 điểm, và hoàn toàn có thể đánh mất vị trí dẫn đầu, thậm chí mất luôn vị trí thứ 2 có quyền đá play-off nếu để thua trước Na Uy.  May mắn đầu tiên đến với họ là việc chân sút “khét tiếng” Erling Haaland của Na Uy đã phải vắng mặt vì chấn thương. Ở trận lượt đi, sao trẻ của Dortmund cũng đã phá lưới Hà Lan và giúp Na Uy cầm hòa cơn lốc màu da cam. Khi không có tiền đạo đã đóng góp 5 bàn thắng ở vòng loại trong đội hình, Na Uy buộc phải chọn lối chơi phòng ngự phản công trên sân của Hà Lan. Thế trận chặt chẽ khiến cho cả hai đội đều không tạo ra nhiều cơ hội trong 45 phút đầu tiên của trận đấu. Memphis Depay vẫn chơi nổi bật nhất với những cơ hội khá nguy hiểm trong hiệp 1. Anh có một lần đánh đầu cận thành, một cú đánh gót bất ngờ và một cú vô lê cực mạnh từ ngoài vòng cấm nhưng đều không thể đánh bại thủ môn Nyland. Bước sang hiệp 2, thế trận vẫn không có nhiều khác biệt khi cả hai đội đều muốn đặt rủi ro thua trận ở mức thấp nhất. Na Uy là đội cần phải chiến thắng nhưng họ cũng chẳng thể tạo ra nhiều cơ hội thực sự nguy hiểm nào. Chỉ đến những phút cuối trận, kịch tính mới xảy ra trên sân Rotterdam. Chỉ trong vòng 7 phút, đội chủ nhà Hà Lan đã có liền 2 bàn thắng. Phút 84 Steven Bergwijn ghi bàn mở tỷ số cho Hà Lan sau đường chuyền của Danjuma. Tới phút 90+1 chính Bergwijn là người kiến tạo để Depay lập công ấn định chiến thắng 2-0 cho đội chủ nhà. Kết quả chung cuộc trận Hà Lan đánh bại Na Uy với tỷ số 2-0.  Chiến thắng này giúp “Cơn lốc màu da cam” giữ vững ngôi đầu bảng sau khi kết thúc vòng loại World Cup 2022 khu vực châu Âu, qua đó giành tấm vé chính thức tới VCK World Cup 2022. Trong khi đó, Na Uy tụt xuống vị trí thứ 3, xếp sau cả Thổ Nhĩ Kỳ và không thể có được tấm vé đá trận play-off, đồng thời tạm biệt giấc mơ World Cup.'),
(15, 'Sau thất bại đáng tiếc với tỷ số 0-1 trên sân nhà Mỹ Đình trước Saudi Arabia, ĐT Việt Nam còn phải chịu thêm nhiều tổn thất về lực lượng.', 'https://cdnmedia.tinmoi.vn/upload/theanhbtv/2021/11/17/1637115756-1.jpg', '16/11/2021', 'Ở lượt trận thứ 6 vòng loại thứ ba World Cup 2022, dù có được lợi thế sân nhà cùng sự cổ vũ của hơn 10.000 CĐV trên sân Mỹ Đình, Việt Nam vẫn phải chịu thất bại với tỷ số 0-1 trước Saudi Arabia. Các học trò của HLV Park Hang Seo đã thi đấu rất nỗ lực nhưng vẫn không thể san lấp được khoảng cách về đẳng cấp trước đối thủ hàng đầu châu Á. Như vậy, chúng ta tiếp tục kéo dài thành tích toàn thua lên con số 6 trận. Không những vậy, sau trận đấu, HLV Park Hang Seo còn gặp thêm những vấn đề về tình hình nhân sự. Ở phút 38, đội trưởng Quế Ngọc Hải đã có tình huống nổi nóng với đội trưởng Al Faraj của Saudi Arabia sau khi chứng kiến đối phương liên tiếp phạm lỗi với Công Phượng và Duy Mạnh. Trung vệ đội trưởng của ĐT Việt Nam đã chạy tới đẩy Al Faraj và liên tục chỉ vào mặt cầu thủ này. Với hành động không đẹp, Quế Ngọc Hải đã nhận thẻ vàng từ trọng tài chính Hattab Hanna. Đây là thẻ vàng thứ 2 của Hải Quế ở vòng loại thứ 3, qua đó khiến cho anh sẽ bị treo giò ở trận đấu tiếp của ĐT Việt Nam gặp Australia. Trước đó, anh cũng lĩnh thẻ trong trận đấu với Oman. Quế Ngọc Hải sẽ chỉ có thể trở lại trong đội hình ở trận đấu với ĐT Trung Quốc vào ngày 1/2/2022 (tức Mồng 1 Tết âm lịch). Thiếu vắng đội trưởng Quế Ngọc Hải thực sự sẽ là tổn thất lớn với ĐT Việt Nam. Trong thời gian qua, vị trí trung vệ của ĐT Việt Nam đã liên tục gặp vấn đề chủ yếu vì cơn bão chấn thương. May mắn ở chỗ, HLV Park có khá nhiều lựa chọn về nhân sự cho vị trí trung vệ của ĐT Việt Nam. Thành Chung hoặc Đình Trọng (nếu khỏe mạnh) đều có thể được tin tưởng thay thế vị trí của Quế Ngọc Hải thi đấu bên cạnh Duy Mạnh và Bùi Tiến Dũng trong trận đấu với Australia. Ngoài ra, HLV Park Hang Seo cũng đau đầu vì chấn thương của Tiến Linh. Tiền đạo sinh năm 1997 là một cầu thủ rất ít khi bị thầy Park thay thế. Tuy nhiên trong trận đấu đêm qua, Tiến Linh đã buộc phải tập tễnh rời sân nhường chỗ cho Văn Toàn vì cầu thủ của Bình Dương đã gặp chấn thương. Theo tiết lộ của HLV Park, Tiến Linh đã gặp vấn đề ở cổ chân. Chưa rõ mức độ chấn thương của tiền đạo người Hải Dương sẽ ra sao nhưng anh đã phải nhờ tới sự trợ giúp của Duy Mạnh khi rời sân từ bên ở ngoài đường piste. Sau trận đấu với Saudi Arabia, ĐT Việt Nam sẽ nghỉ ngơi trong 3 ngày trước khi tập trung trở lại vào ngày 20/11 để gấp rút chuẩn bị cho AFF Cup 2020 chỉ còn hơn 2 tuần nữa là khai mạc. Vào ngày 6/12, thầy trò HLV Park Hang Seo sẽ thi đấu trận ra quân gặp ĐT Lào trên hành trình bảo vệ chức vô địch.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tinthethao`
--
ALTER TABLE `tinthethao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
