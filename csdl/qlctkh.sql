-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2021 lúc 10:54 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlctkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Maso` int(11) NOT NULL,
  `Ho_Ten` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Maso`, `Ho_Ten`, `username`, `password`, `email`, `sdt`) VALUES
(1, 'tran gia hao', 'admin', '12345', 'trangiahao@gmail.com', 839032613);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachhb`
--

CREATE TABLE `danhsachhb` (
  `id_hb` int(10) NOT NULL,
  `lop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsachhb`
--

INSERT INTO `danhsachhb` (`id_hb`, `lop`) VALUES
(26, 1),
(27, 2),
(28, 3),
(29, 4),
(30, 5),
(31, 6),
(32, 7),
(33, 8),
(34, 9),
(35, 10),
(36, 11),
(37, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dslop`
--

CREATE TABLE `dslop` (
  `id_lop` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `id_hb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dslop`
--

INSERT INTO `dslop` (`id_lop`, `hoten`, `tenlop`, `id_hb`) VALUES
(45, 'Huỳnh Yến Ngân', 'A2', 26),
(46, 'Trần Minh Bảo', 'A6', 26),
(47, 'Lê Trần Bảo Khang', 'A6', 26),
(49, 'Châu Trần Quốc Khánh', 'A8', 27),
(50, 'Phạm Xuân Huỳnh', 'A5', 26),
(51, 'Nguyễn Huỳnh Như', 'A5', 27),
(52, 'Dương Thị Như Ý', 'A5', 27),
(53, 'Nguyễn Minh Long', 'A1', 27),
(54, 'La Gia Linh', 'A2', 28),
(55, 'Lê Gia Khang', 'A4', 28),
(56, 'Lê Trần Bảo Di', 'A8', 28),
(57, 'Nguyễn Ngọc Anh Thư', 'A5', 28),
(58, 'Trần Trọng Hiếu', 'A3', 28),
(59, 'Nguyễn Ngọc Minh Anh', 'A8', 28),
(60, 'Hồ Ngọc Hân', 'A6', 29),
(61, 'Trương Đoàn Huy Hoàng', 'A5', 29),
(62, 'Phạm Thành Ân', 'A2', 29),
(63, 'Trần Ngọc Huỳnh Anh', 'A3', 30),
(64, 'Lâm Đạt', 'A5', 30),
(66, 'Đặng Hoàng Khang', 'A3', 31),
(67, 'Huỳnh Gia Hân', 'A3', 31),
(68, 'Cao Khánh Tâm', 'A6', 31),
(69, 'Đỗ Hoàng Hiệp', 'A2', 31),
(70, 'Nguyễn Thị Thùy Linh', 'A8', 31),
(71, 'Nguyễn Thị Thùy Trang', 'A10', 32),
(72, 'Lại Nhã Vy', 'A1', 32),
(73, 'Trần Phương Minh Vy', 'A1', 32),
(74, 'Nguyễn Kiến Văn', 'A10', 32),
(75, 'Huỳnh Minh Triết', 'A1', 32),
(76, 'Nguyễn Trang Mỹ Linh', 'A7', 33),
(77, 'Nguyễn Thị Kim Kiều', 'A6', 33),
(78, 'Trần Ngọc Nhi', 'A7', 33),
(79, 'Nguyễn Huỳnh Bảo Ngọc', 'A11', 33),
(80, 'Nguyễn Thiên Vũ', 'A12', 33),
(81, 'Hứa Trung Điền', 'A6', 34),
(82, 'Nguyễn Ngọc Vân Anh', 'A3', 34),
(83, 'Lưu Nguyên Huy', 'A1', 34),
(84, 'Trần Diệu Ngân Thy', 'A4', 34),
(85, 'Cao Ánh Ngọc', 'A2', 34),
(86, 'Nguyễn Quốc Thái', 'A2', 35),
(87, 'Trần Phương Minh Anh', 'A5', 35),
(88, 'Trần Minh Hậu', 'A2', 35),
(89, 'Nguyễn Khôi', 'A2', 35),
(90, 'Võ Thị Trúc Giang', 'A4', 35),
(91, 'Nguyễn Hạnh Mỹ', 'A10', 36),
(92, 'Hà Gia Tuấn', 'A4', 36),
(93, 'Lê Hồng Ngọc', 'A6', 36),
(94, 'Nguyễn Thúy Vy', 'B2', 36),
(95, 'Hứa Huỳnh Than Nghĩa', 'A5', 37),
(96, 'Đào Xuân Trung', 'A8', 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `ctkh` text NOT NULL,
  `chucnang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `ctkh`, `chucnang`) VALUES
(4, '', ''),
(7, 'Quản Lý Công Tác Khuyến học được thành lập theo Quyết định số 895/QĐ.UB.TC ngày 20/10/2020 của Chủ tịch UBND. Đến tháng 9 năm 2020, Quản Lý Công Tác Khuyến Học lần thứ I đã được tổ chức, đánh dấu sự ra đời chính thức của Hội khuyến học tỉnh.Từ ngày thành lập đến nay, qua 03 lần Đại hội với rất nhiều biến đổi, Hội khuyến học các cấp đã không ngừng phấn đấu để trưởng thành và phát triển trong điều kiện có nhiều thuận lợi nhưng không ít những khó khăn của một tổ chức xã hội, hiệu quả hoạt động khuyến học khuyến tài đã thể hiện trên nhiều lĩnh vực khác nhau. Tổ chức đã được thành lập và phủ kín ở 04 cấp tỉnh, huyện, xã, khóm ấp và trường học; bước đầu thành lập ban khuyến học trong cơ quan, đơn vị và cơ sở tôn giáo. Đề án “Củng cố tổ chức và hoạt động Hội khuyến học giai đoạn 2011 – 2015” được triển khai thực hiện đã làm tăng thêm điều kiện thuận lợi cho việc củng cố kiện toàn bộ máy tổ chức Hội ở các cấp. Từ đó đến nay, Hội khuyến học ở cấp tỉnh và 11 Huyện thị thành ổn định, có được biên chế, có được những cán bộ.', ''),
(8, 'Các Chi hội Khuyến học phát triển nhanh ở khu phố, ấp và tổ hội ở các tổ dân phố, xóm, hình thành một mạng lưới chân rết ở cộng đồng dân cư, bám chặt vào nhân dân. 100% khu phố, ấp tại 24 quận huyện đã có chi hội khuyến học. Hiện nay, tổng số toàn thành phố có 741.455 hội viên khuyến học, chiếm 9,57% dân số và đạt 12,17% tổng số dân trên 18 tuổi. Hội viên khuyến học đại đa số là nhà giáo nghỉ hưu, cán bộ hưu trí, cựu chiến binh, người cao tuổi, các nhà doanh nghiệp, Việt kiều, thân nhân Việt kiều, bà con người Hoa… Có nơi như ở Tân Bình, quận 5, Bình Thạnh, một số vị chức sắc tôn giáo cũng tham gia Hội. Gần đây có hiện tượng đáng mừng là các gia đình hiếu học đều tự nguyện tham gia Hội. Đáng chú ý ở một số chi bộ, Đảng bộ cơ sở, hầu hết đảng viên đều tham gia làm hội viên của Hội.', '1. Nhiệm vụ, nguyên tắc tổ chức và hoạt động của Công Tác Khuyến học thành hội là một tổ chức xã hội đặt dưới sự lãnh đạo của Thành ủy, sự quản lý của Ủy ban nhân dân thành phố và là thành viên của Mặt trận Tổ quốc Việt Nam, là cấp trực thuộc Trung ương Hội Khuyến học Việt Nam. Đại hội Đại biểu thành phố là cơ quan lãnh đạo cao nhất của Thành Hội được tổ chức thường kỳ 5 năm một lần (trường hợp bất thường sớm hay muộn hơn thì phải được 2/3 số ủy viên Ban chấp hành yêu cầu) để đánh giá tình hình thực hiện Nghị quyết của nhiệm kỳ; quyết định chương trình công tác của nhiệm kỳ tiếp theo, cử ra Ban chấp hành mới của Thành Hội.'),
(9, 'Các cấp Hội cơ sở đã có 473.505 gia đình đăng ký phấn đấu là Gia đình hiếu học đạt 26% tổng số hộ dân thành phố, trong đó:', '1.1. Ban chấp hành Thành Hội có nhiệm vụ'),
(10, 'GĐHH được công nhận 376.431/473.505 tỷ lệ 79% so với năm 2013 tăng 156.161 gia đình và đạt 21% trên tổng số hộ dân của thành phố. Dòng họ được công nhận 70/108 đạt tỷ lệ 64% Khu dân cư khuyến học được công nhận 452/798 đạt tỷ lệ 56% Cộng đồng khuyến học được công nhận là 97/184 đạt tỷ lệ 52% Đơn vị học tập được công nhận 520/986 đạt tỷ lệ 52%.', '- Tổ chức lãnh đạo thực hiện Nghị quyết của Đại hội, tổ chức chỉ đạo, thực hiện có hiệu quả các kế hoạch công tác của Hội. - Phân công công tác các ủy viên Ban chấp hành. - Bầu ban thường trực gồm: chủ tịch, các phó chủ tịch và các ủy viên để thay mặt Ban chấp hành. - Điều hành công việc thường xuyên của Hội trong nhiệm kỳ. - Cử Ban kiểm tra gồm Trưởng ban, Phó trưởng ban và các ủy viên. - Cử Chủ tịch Hội đồng quản lý Quỹ Khuyến học. - Ban chấp hành Thành Hội họp 6 tháng một lần và họp bất thường khi cần do Ban thường vụ triệu tập. - Hướng dẫn giúp đỡ, kiểm tra hoạt động của các tổ chức Hội cấp dưới và đơn vị trực thuộc. Quản lý các tổ chức giúp việc của Ban chấp hành, các đơn vị sự nghiệp, sản xuất kinh doanh trực thuộc (nếu có). - Xây dựng, quản lý và sử dụng có hiệu quả Quỹ Khuyến học.'),
(11, 'II. Tình Hình Chung', '1.2. Ban Thường Vụ Thành Hội'),
(12, '1. Hệ thống tổ chức Hội đã được xây dựng và phát triển đều khắp quận, huyện, phường, xã và một số trường học, cơ sở sản xuất, kinh doanh,… tạo được một mạng lưới khuyến học gắn liền với cộng đồng dân cư và đưa công tác khuyến học đến tận hộ gia đình.', 'Ban thường vụ được Ban chấp hành ủy quyền tổ chức, thực hiện các chương trình công tác và các Nghị quyết của hội nghị. Ban chấp hành có nhiệm vụ sau: - Ra các quyết định, lập các kế hoạch để thực hiện các Nghị quyết và các chương trình công tác của hội nghị Ban chấp hành Thành Hội. - Hướng dẫn, theo dõi và giúp đỡ các cấp Hội hoạt động, tổng hợp tình hình, điều hành công việc của Thành Hội. - Chỉ đạo hoạt động của Hội đồng Tư vấn, Hội đồng Bảo trợ, các ban chuyên môn, các tổ nghiệp vụ sự nghiệp, các tổ chức nghiên cứu thuộc Thành Hội. - Quản lý tài sản, tài chánh của Hội, quản lý và đưa ra quyết định, kế hoạch sử dụng Quỹ Khuyến học của Hội. - Quyết định các vấn đề về tổ chức và nhân sự, xem xét khen thưởng, kỷ luật, quyết định các chế độ trợ cấp hoạt động đối với cán bộ Hội. - Chuẩn bị Hội nghị Ban chấp hành của Thành hội. - Ban thường vụ họp một tháng một lần do Chủ tịch Ban chấp hành Hội chủ trì. Hội làm việc theo nguyên tắc: dân chủ bàn bạc và phân công cá nhân phụ trách để giúp ban thường vụ nắm tình hình và làm tham mưu kịp thời cho ban thường vụ. Bộ phận thường trực được phân công theo dõi, xử lý công việc hàng ngày của hội và báo cáo với ban thường vụ vào kỳ họp mỗi tháng.'),
(13, '2. Bước đầu đã phát động được phong trào khuyến học, khuyến tài, có chuyển biến tích cực trong quá trình thực hiện chủ trương xây dựng xã hội học tập. Đã xây dựng một số mô hình phường, xã, trường học làm tốt công tác khuyến học, khuyến tài, động viên nhân dân học tập, xây dựng gia đình hiếu học và hỗ trợ phát triển giáo dục có kết quả thiết thực.', 'Vận động Quỹ khuyến học các cấp trong tỉnh năm sau luôn tăng cao hơn năm trước. Quỹ khuyến học các cấp hàng năm tiếp nhận bằng tiền và hiện vật quy ra tiền từ 15 đến 22 tỷ. Bằng nguồn vận động trên, hằng năm HKH các cấp đã cấp học bổng, trợ cấp khó khăn, khen thưởng cho hàng ngàn lượt HS-SV; thực hiện các chương trình, dự án hỗ trợ phát triển giáo dục đào tạo như: đã xây dựng 03 trường mẫu giáo, 05 căn nhà công vụ cho giáo viên, cấp hàng ngàn xe đạp cho HS nghèo ở xa trường học, hằng trăm triệu đồng mua sách giáo khoa và hàng trăm máy vi tính tặng các trường học. Chương trình “Tiếp bước đến trường” là một hoạt động mới đã tạo được dấu ấn trong toàn xã hội, nhằm hỗ trợ tập vở, sách giáo khoa, dụng cụ học tập, quần áo cho học sinh con em của hộ nghèo và cận nghèo, học sinh mồ côi có hoàn cảnh đặc biệt khó khăn trong đầu năm học mới, tạo điều kiện cho học sinh được đến trường, không bỏ học vì gia cảnh nghèo khó.'),
(14, '3. Tập hợp và xây dựng đội ngũ cán bộ, trong đó, hàng ngàn cán bộ đã nghỉ hưu là những nhà tài trợ có tâm huyết và nhiệt tình, chịu thương chịu khó, hăng hái tham gia công tác Hội, góp phần thực hiện có kết quả chủ trương xã hội hóa giáo dục của Đảng và Nhà nước.', '1. Nhiệm vụ, nguyên tắc tổ chức và hoạt động của Công Tác Khuyến học thành hội là một tổ chức xã hội đặt dưới sự lãnh đạo của Thành ủy, sự quản lý của Ủy ban nhân dân thành phố và là thành viên của Mặt trận Tổ quốc Việt Nam, là cấp trực thuộc Trung ương Hội Khuyến học Việt Nam. Đại hội Đại biểu thành phố là cơ quan lãnh đạo cao nhất của Thành Hội được tổ chức thường kỳ 5 năm một lần (trường hợp bất thường sớm hay muộn hơn thì phải được 2/3 số ủy viên Ban chấp hành yêu cầu) để đánh giá tình hình thực hiện Nghị quyết của nhiệm kỳ; quyết định chương trình công tác của nhiệm kỳ tiếp theo, cử ra Ban chấp hành mới của Thành Hội.'),
(17, '4. Huy động được nguồn lực, xây dựng được hệ thống Quỹ Khuyến học từ thành phố đến quận, huyện, phường, xã đạt kết quả rất đáng trân trọng, phục vụ thiết thực cho các chương trình hỗ trợ phát triển giáo dục, nhất là ở vùng sâu vùng xa và bộ phận học sinh, sinh viên, giáo viên có hoàn cảnh khó khăn.', ''),
(18, '5. Từ phong trào, đã xuất hiện những nhân tố mới, những điển hình tiên tiến như số quận, huyện, phường, xã đã năng động, sáng taọ, tuân thủ nghiêm túc sự lãnh đạo của cấp ủy Đảng, sự quản lý của chính quyền, biết khơi dậy truyền thống hiếu học của nhân dân, liên kết chặt chẽ với các ngành, đoàn thể tạo ra sức mạnh tổng hợp, phát huy được phong trào khuyến học khá sôi nổi và có hiệu quả.', ''),
(19, '6. Hội Khuyến học Thành phố cũng quan tâm đẩy mạnh công tác đối ngoại để tuyên truyền về công tác khuyến học. Nhiều vị người Nhật Bản, Pháp, Anh, Thụy Điển… đã tự nguyện giúp đỡ tài trợ cho Quỹ Khuyến học.', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocbong`
--

CREATE TABLE `hocbong` (
  `id` int(11) NOT NULL,
  `tenhb` text NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocbong`
--

INSERT INTO `hocbong` (`id`, `tenhb`, `noidung`, `hinhanh`, `link`) VALUES
(11, 'Chương trình học bổng dài hạn “SCG Sharing the Dream 2021”', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học;  Nhằm hỗ trợ tân sinh viên của Trường có điều kiện học tập tốt hơn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Công ty TNHH SCG Việt Nam triển khai Chương trình học bổng dài hạn “SCG Sharing the Dream 2021”, cụ thể như sau.', 'a5.png', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-dai-han-scg-sharing-the-dream-2021/'),
(14, 'Chương trình học bổng PANASONIC 2021', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học năm 2021; Nhằm khuyến khích sinh viên có thành tích học tập tốt và hỗ trợ sinh viên có hoàn cảnh khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Văn phòng Học bổng Panasonic Việt Nam triển khai Chương trình học bổng Panasonic năm 2021, cụ thể như sau:', 'a20.png', 'https://dsa.ueh.edu.vn/hoc-bong/thong-bao-ve-chuong-trinh-hoc-bong-panasonic-nam-2021/'),
(15, 'Chương trình học bổng Acecook Happy Scholarship 2021', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học; Nhằm mục đích san sẻ khó khăn đồng thời khích lệ, cổ vũ những tấm gương sinh viên vượt khó học tập tốt, Phòng Chăm sóc và hỗ trợ người học phối hợp với Công ty Cổ phần Acecook Việt Nam triển khai Chương trình học bổng Acecook Happy Scholarship 2021 cho sinh viên, cụ thể như sau.', 'a7.png', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-acecook-happy-scholarship-2021/'),
(16, 'Chương trình học bổng “Swing for Dreams” năm 2021', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học; Nhằm hỗ trợ các sinh viên có hoàn cảnh khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Công ty Cổ phần Đầu tư Nam Long triển khai Chương trình học bổng “Swing for Dreams” năm 2021, cụ thể như sau', 'a9.jpg', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-swing-for-dreams-nam-2021/'),
(17, 'Quỹ AEON 1% – Công ty TNHH AEON Việt Nam triển khai Chương trình Học bổng AEON năm 2021', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học năm 2021;  Nhằm hỗ trợ sinh viên có hoàn cảnh khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Quỹ AEON 1% – Công ty TNHH AEON Việt Nam triển khai Chương trình Học bổng AEON năm 2021, cụ thể như sau', 'a10.jpg', 'https://dsa.ueh.edu.vn/hoc-bong/chuong-trinh-hoc-bong-aeon-nam-2021/'),
(18, 'Chương trình học bổng dài hạn Kumho Asiana lần thứ 15', 'Căn cứ vào chức năng, nhiệm vụ hoạt động của Phòng Chăm sóc và hỗ trợ người học;  Nhằm hỗ trợ tân sinh viên của Trường đạt thành tích cao, có hoàn cảnh gia đình khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Quỹ Học bổng Văn hóa Việt Nam Kumho Asiana triển khai Chương trình học bổng dài hạn Kumho Asiana lần thứ 15, cụ thể như sau.', 'a6.jpg', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-dai-han-kumho-asiana-lan-thu-15/'),
(19, 'Chương trình học bổng VietinBank năm 2021', 'Căn cứ vào chức năng, nhiệm vụ của Phòng Chăm sóc và hỗ trợ người học;  Nhằm khuyến khích sinh viên có thành tích học tập tốt và hỗ trợ sinh viên có hoàn cảnh khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Ngân hàng TMCP Công Thương Việt Nam (VietinBank) triển khai Chương trình học bổng VietinBank năm 2021 cho sinh viên, cụ thể như sau.', 'a8.png', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-vietinbank-nam-2021/'),
(22, 'Chương trình học bổng “MB – Đồng hành cùng sinh viên” năm 2021', 'Căn cứ vào chức năng, nhiệm vụ của Phòng Chăm sóc và hỗ trợ người học;  Nhằm khuyến khích sinh viên có thành tích học tập tốt và hỗ trợ sinh viên có hoàn cảnh khó khăn, Phòng Chăm sóc và hỗ trợ người học phối hợp với Ngân hàng TMCP Quân đội (MB) triển khai Chương trình học bổng “MB – Đồng hành cùng sinh viên” năm 2021 cho sinh viên, cụ thể như sau', 'a21.png', 'https://dsa.ueh.edu.vn/hoc-bong/hoc-bong-mb-dong-hanh-cung-sinh-vien-nam-2021/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huongnghiep`
--

CREATE TABLE `huongnghiep` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `huongnghiep`
--

INSERT INTO `huongnghiep` (`id`, `tieude`, `hinhanh`, `noidung`, `link`) VALUES
(1, 'Định hướng theo học nghề thiết kế website', 'a12.png', 'Nghề thiết kế website đang làm một xu hướng và thu hút ngày càng đông lực lượng lao động, Hướng nghiệp Việt phân tích một số vấn đề định hướng nghề nghiệp thiết kế website để bạn đọc hiểu hơn về nghề này.', 'https://www.huongnghiepviet.com/v3/hoc-nghe-co-viec/39402-dinh-huong-theo-hoc-nghe-thiet-ke-website'),
(2, 'Chưa học hết cấp 2 có học nghề được không?', 'a13.jpg', ' Trong thời gian vừa qua, Hướng nghiệp Việt nhận được rất nhiều câu hỏi từ các em học sinh, cũng như các anh chị đã đi làm nhưng nghỉ học và chưa học hết cấp 2. Các bạn đều rất mong được học nghề, nhưng đang còn băn khoăn vì chưa học hết cấp 2. Vậy thì chưa học hết cấp 2 có đi học nghề được không?', 'https://www.huongnghiepviet.com/v3/hoc-nghe-co-viec/36272-chua-hoc-het-cap-2-co-hoc-nghe-duoc-khong'),
(3, 'Chọn học nghề Điện công nghiệp học gì, làm gì?', 'a14.jpg', ' Nước ta đang trong quá trình phát triển trở thành một nước công nghiệp hóa, hiện đại hóa, trong đó hệ thống điện công nghiệp giữ một vai trò quan trọng then chốt cho sự phát triển đó.', 'https://www.huongnghiepviet.com/v3/hoc-nghe-co-viec/13009-nghe-dien-cong-nghiep-hoc-gi-lam-gi'),
(4, 'Ngành quản trị kinh doanh là gì, làm gì?', 'a16.jpg', ' Xã hội hiện đại không thể nhắc đến vai trò của kinh tế và theo đó là các hoạt động kinh doanh trên khắp thế giới. Một đất nước phát triển luôn gắn tới hình ảnh kinh tế phát triển. Hoạt động kinh doanh trên thế giới hiện nay cực kỳ rộng lớn, và sôi động. Chỉ ở Việt Nam đã có hơn hàng trăm ngàn doanh nghiệp hoạt động.', 'https://www.huongnghiepviet.com/v3/huong-nghiep/nganh-nghe/kinh-te-tai-chinh/39-nganh-quan-tri-kinh-doanh'),
(5, 'Ngành Kỹ thuật điều khiển và tự động hoá là gì?', 'a15.jpg', ' Ngành này trước đây còn có tên gọi là nghành công nghệ tự động, đây là ngành của thời đại công nghiệp. Khi các nhà máy công nghiệp được hình thành, cũng là thời điểm mà ngành kỹ thuật điều khiển và tự động hóa thể hiện rõ vai trò quan trong của mình. Khi nào vẫn còn các nhà máy sản xuất công nghiệp, khi đó ngành kỹ thuật điều khiển và tự động hóa vẫn còn thể hiện vai trò quan trọng của mình.', 'https://www.huongnghiepviet.com/v3/huong-nghiep/nganh-nghe/ky-thuat-cong-nghe/27969-nganh-ky-thuat-dieu-khien-va-tu-dong-hoa'),
(6, 'Tìm hiểu định hướng ngành kinh doanh thương mại là gì, làm gì?', 'a17.jpg', ' Ngành kinh doanh thương mại chính là nhân tố tham gia trực tiếp các công việc kinh doanh trong tổ chức. Công việc trong ngành kinh doanh thương mại thiên về kỹ năng thực tế nhiều hơn.', 'https://www.huongnghiepviet.com/v3/huong-nghiep/nganh-nghe/kinh-te-tai-chinh/44211-tim-hieu-dinh-huong-nganh-kinh-doanh-thuong-mai-la-gi-lam-gi'),
(8, 'Ngành luật là gì, làm gì?', 'a18.jfif', ' Bạn đã từng yêu thích các nhân vật tài trí, dũng cảm đấu tranh chống lại cái ác, bảo vệ điều thiện và lẽ công bằng trong các phim Bạch tuộc, Bao Thanh Thiên, Nữ luật sư xinh đẹp. Họ đều làm ngành luật đấy!', 'https://www.huongnghiepviet.com/v3/huong-nghiep/nganh-nghe/xa-hoi-nhan-van-nghe-thuat/42-nganh-luat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `hinhanh`, `noidung`, `link`) VALUES
(4, 'Xét cấp khoảng 240 suất học bổng năm học 2021-2022', 'a22.jpg', 'Chương trình học bổng “Khuyến học Đại học Cần Thơ” năm học 2021-2022 của Trường Đại học Cần Thơ sẽ xét cấp khoảng 240 suất học bổng (3 triệu đồng/suất), trong đó dành 100 suất cho tân sinh viên khóa 47.', 'https://baocantho.com.vn/xet-cap-khoang-240-suat-hoc-bong-nam-hoc-2021-2022-a138282.html'),
(5, 'Quỹ Nhi đồng Liên Hiệp Quốc khuyến cáo giúp giáo viên dạy trực tuyến hiệu quả', 'a23.jpeg', 'Việc dạy - học trực tuyến trong giai đoạn giãn cách xã hội đặt ra yêu cầu làm thế nào để giáo viên và học sinh tương tác tốt, học sinh tập trung học và nhận được kiến thức cần thiết. Các chuyên gia của Quỹ Nhi đồng Liên Hiệp Quốc khuyến cáo một số lời khuyên giúp đội ngũ giáo viên có sự chuẩn bị tốt để việc dạy trực tuyến đạt hiệu quả.', 'https://baocantho.com.vn/quy-nhi-dong-lien-hiep-quoc-khuyen-cao-giup-giao-vien-day-truc-tuyen-hieu-qua-a138222.html'),
(6, 'Đại học Y dược TP HCM dành 17 tỷ đồng học bổng cho tân sinh viên', 'a24.jpg', '850 tân sinh viên Đại học Y dược TP HCM thuộc diện hộ nghèo, chính sách, người khuyết tật sẽ nhận được học bổng trị giá từ 25 đến 100% học phí.  Theo thông báo tối 5/10, Đại học Y dược TP HCM cấp 63 suất học bổng 100% học phí, 100 suất 75%, 164 suất 50% và 525 suất 25%. Quỹ học bổng hơn 17 tỷ đồng được trích từ 15% mức thu học phí khóa 2021 với hơn 2.300 sinh viên. Sinh viên năm hai trở đi được nhận học bổng theo chính sách riêng.', 'https://vnexpress.net/dai-hoc-y-duoc-tp-hcm-danh-17-ty-dong-hoc-bong-cho-tan-sinh-vien-4367755.html');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanban`
--

CREATE TABLE `vanban` (
  `id` int(11) NOT NULL,
  `vanban` text NOT NULL,
  `dean` text NOT NULL,
  `linkvb` text NOT NULL,
  `linkda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vanban`
--

INSERT INTO `vanban` (`id`, `vanban`, `dean`, `linkvb`, `linkda`) VALUES
(3, 'Nội dung cơ bản của học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh', 'Đề án “Xây dựng xã hội học tập giai đoạn 2021-2030”', 'https://www.quangngai.dcs.vn/-uong-day-nong/-/asset_publisher/hIBc6Tqn9pAH/content/noi-dung-thuc-hien-viec-hoc-tap-va-lam-theo-tu-tuong-ao-uc-phong-cach-ho-chi-minh-tren-ia-ban-tinh-nam-2021-', 'https://moet.gov.vn/tintuc/Pages/tin-tong-hop.aspx?ItemID=7459'),
(4, 'Hướng dẫn thực hiện nhiệm vụ giáo dục đại học năm học 2021-2022', 'Đề án học tập ngoại ngữ cho cán bộ, công chức, viên chức', 'https://luatvietnam.vn/giao-duc/cong-van-4499-bgddt-gddh-2021-huong-dan-thuc-hien-nhiem-vu-giao-duc-dai-hoc-nam-hoc-2021-2022-210568-d6.html', 'https://thuvienphapluat.vn/van-ban/bo-may-hanh-chinh/quyet-dinh-1659-qd-ttg-2019-chuong-trinh-quoc-gia-hoc-tap-ngoai-ngu-cho-can-bo-cong-chuc-428840.aspx?v=d'),
(5, 'Hướng dẫn thực hiện nhiệm vụ thanh tra, kiểm tra nội bộ năm học 2021 - 2022 đối với CSGDĐH, trường CĐSP', 'Đề án ghép chức năng học tập cộng đồng vào hoạt động tại Trung tâm Văn hóa - Thể thao cấp xã', 'https://moet.gov.vn/giaoducquocdan/thanh-tra/Pages/chi-tiet-van-ban-chi-dao-dieu-hanh.aspx?ItemID=3039', 'https://www.baocamau.com.vn/van-hoa/ghep-chuc-nang-hoc-tap-cong-dong-vao-trung-tam-van-hoa-the-thao-xa-47418.html'),
(6, 'Hướng dẫn thực hiện nhiệm vụ quản lý chất lượng năm học 2021 - 2022', 'Đề án Giáo dục thông minh từ năm 2021 – 2030', 'https://moet.gov.vn/tintuc/Pages/tin-tong-hop.aspx?ItemID=7535', 'https://giaoduc.net.vn/giao-duc-24h/thanh-pho-ho-chi-minh-phe-duyet-de-an-giao-duc-thong-minh-tu-nam-2021-2030-post220911.gd'),
(7, 'Thực hiện Chỉ thị 05: Học tập, làm theo Bác và nêu gương', 'Đề án \"Truyền thông về xây dựng Xã hội học tập\" giai đoạn 2019-2020', 'https://binhdinh.dcs.vn/hoc-tap-lam-theo-tu-tuong-dao-duc-ho-chi-minh/-/asset_publisher/content/tiep-tuc-thuc-hien-chi-thi-05-hoc-tap-lam-theo-bac-va-neu-guong', 'https://www.quangtri.gov.vn/chi-tiet-tin/-/view-article/1/13729062791727/1574304721680');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Maso`);

--
-- Chỉ mục cho bảng `danhsachhb`
--
ALTER TABLE `danhsachhb`
  ADD PRIMARY KEY (`id_hb`);

--
-- Chỉ mục cho bảng `dslop`
--
ALTER TABLE `dslop`
  ADD PRIMARY KEY (`id_lop`),
  ADD KEY `id_hb` (`id_hb`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocbong`
--
ALTER TABLE `hocbong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `huongnghiep`
--
ALTER TABLE `huongnghiep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vanban`
--
ALTER TABLE `vanban`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Maso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhsachhb`
--
ALTER TABLE `danhsachhb`
  MODIFY `id_hb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `dslop`
--
ALTER TABLE `dslop`
  MODIFY `id_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `hocbong`
--
ALTER TABLE `hocbong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `huongnghiep`
--
ALTER TABLE `huongnghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `vanban`
--
ALTER TABLE `vanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dslop`
--
ALTER TABLE `dslop`
  ADD CONSTRAINT `dslop_ibfk_1` FOREIGN KEY (`id_hb`) REFERENCES `danhsachhb` (`id_hb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
