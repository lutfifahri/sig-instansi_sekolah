-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2018 at 05:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siginstansi_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Anwar Saputra');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `dibaca` varchar(50) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `gambar`, `tanggal`, `penulis`, `dibaca`) VALUES
(1, 'Pesona Pantai Labombo Kota Palopo', '<p>Daerah Luwu Raya merupakan salah satu wilayah yang cukup menarik di provinsi Sulawesi selatan, dimana terdapat banyak lokasi yang mnejadi objek wisata bagi pelancong maupun wisatawan manca Negara yang ingin berkunjung kesana. Ada banyak lokasi yang bias di jadikan referensi sebagai objek Pariwisata seperti Buntu Matabing, Sungai Latuppa, Permandian Meli, Pantai Lemo dan Danau Matano dan juga Pantai Labombo. Dengan banyaknya objek wisata yang hadir di daerah Luwu Raya membuat mesti banyak biaya untuk menjaga dan merawat lokasi-lokasi pariwisata yang ada.</p>\r\n\r\n<p>Dan salah satu hal yang akan dibahas kali ini adalah objek wisata Pantai Labombo Kota Palopo. Menurut hasil wawancara dengan pengelola tempat tersebut adalah yakni bapak Markus Saru&rsquo; Allo atau lebih akrab disapa Pak Max, tempat ini telah mulai di buka sebagai objek wisata sekitar tahun 2006. Namun mulai di kelola secara baik pada Maret 2009 oleh MAX Production pada tahun 2010 awal.</p>\r\n\r\n<p>Pembangunannya dimulai dengan merehabilitasi lokasi pantai yang sebelumnya terserang abrasi pantai, dengan pembangunan tanggul yang menjadi penangkal ombak. Yang kemudian dillanjutkan pada tahun berikutnya dengan pembangunan wahana seperti Flying Fox, Outbound, dan juga pembangunan taman bermain dan alat-alat pembantu yang lain seperti bebek-bebek. Dengan seiring pembangunan pantai labombo maka kunjungan wisatawan baik local maupun mancanegara mulai berdatangan.</p>\r\n\r\n<p>Dengan konsep yang menarik dan keramahan para petugas yang mengelola sehingga pengunjungpun merasa nyaman.</p>\r\n\r\n<p>Selengkapnya : <a href=\"http://www.kompasiana.com/febrianto.syam/pesona-pantai-labombo-kota-palopo_5517ed86813311ae689de722\">http://www.kompasiana.com/</a></p>\r\n', '27tifatul_sembiring.jpg', '2016-08-14', 'Admin', '129'),
(4, 'Ini Rencana Archandra Tahar Setelah Dicopot Jokowi', '<p>Mantan Menteri Energi dan Sumber Daya Mineral (ESDM) Archandra Tahar yang menjabat kurang dari 21 hari mengaku belum punya rencana&lrm; setelah jabatannya dicopot Presiden Joko Widodo, pada Senin (15/8) malam.</p>\r\n\r\n<p>Sebab, pria berdarah minang ini juga kehilangan posisinya sebagai Presiden Direktur Petroneering di Texas, Amerika Serikat.</p>\r\n\r\n<p>Saat ditanya bagaimana rencananya ke depan, Archandra yang juga lulusan Tekni Mesin Institut Teknologi Bandung (ITB) ini mengaku belum tahu.&lrm;</p>\r\n\r\n<p>&ldquo;Saya sudah bilang, semua sudah ada yang atur. Allah the best plan,&rdquo; kata dia di Masjid Al-Azhar, Kebayoran Baru, Jakarta Selatan.</p>\r\n\r\n<p>Di masjid ini, Archandra mengisi kultum saat salat zuhur.&lrm; Mengenai alasannya mengisi kultum di Masjid Al-Azhar, ia pun menjawabnya dengan normatif.</p>\r\n\r\n<p>&ldquo;Saya ke sini salat zuhur,&rdquo; imbuhnya.</p>\r\n\r\n<p>Pria yang menghabiskan masa kecilnya di Kelurahan Parupuk Tabing, Kecamatan Kototangah, Sumatera Barat ini tidak bersedia diwawancarai seputar pencopotannya dari kabinet kerja. Dia hanya berlalu, dengan dikawal pengurus masjid. (Mg4/jpnn)</p>\r\n\r\n<p>Sumber : http://fajar.co.id/2016/08/16/ini-rencana-archandra-tahar-setelah-dicopot-jokowi/</p>\r\n', 'Archandra-Tahar-3.jpg', '2016-08-14', 'Admin', '34'),
(5, '72 Anggota Paskibraka Masuk Karantina', '<p>Setelah kurang lebih sebulan menjalani latihan fisik baris-berbaris, sebanyak 72 anggota Pasukan Pengibar Bendera (Paskibra) mulai menjalani masa karantina. Masa karantina selama tiga hari diadakan di Hotel Kamanre, Kelurahan Benteng, Kecamatan Wara Timur.</p>\r\n\r\n<p>Senin, 15 Agustus 2016 sekira pukul 12:00 Wita, anggota Paskibra memasuki zona karantina yang dinamai Desa Bahagia. Tetapi sebelumnya, anggota Paskibra ini menjalani prosesi mandi air kembang dilanjutkan minum air kelapa. Prosesi ini dipimpin oleh Kadispora Nuryadin bersama pelatih dari Kodim 1403 Sawerigading, Konpi Senapan C 721 Makkasau dan PPI.</p>\r\n\r\n<p>&ldquo;Kita menyiapkan 22 kamar untuk anggota Paskibra dengan pelatih dari TNI dan PPI,&rdquo; kata Nuryadin.<br />\r\nAda 10 orang dari Purna Paskibraka Indonesia (PPI), 8 orang dari TNI-AD dan 1 orang dari Dispora mendampingi 72 paskibraka. 10 PPI ini merupakan purna Paskibra mulai tahun 1997 hingga 2015. Kesemuanya rata-rata mahasiswa dari UNCP, UNANDA, STIEM, STIMIK dan UMI. Ada juga yang sudah bekerja di lingkup Pemerintah Kota (Pemkot) Palopo.</p>\r\n\r\n<p>Kasdim 1403 Sawerigading, Mayor Inf Alauddin memberikan semangat kepada para anggota paskibraka. Katanya, anggota Paskibra harus siap fisik dan mental. Makanya kesehatan juga perlu dijaga.</p>\r\n\r\n<p>&ldquo;Jika ada yang pingsan, maka Paskibra tahun ini gagal,&rdquo; tegasnya.</p>\r\n\r\n<p>Koordinator pelatih Pasukan Paskibraka, Pelda Nasrullah yang dimintai keteranganya oleh Palopo Pos mengatakan, sebanyak 72 siswa SMA/SMK se-kota Palopo mulai menjalani masa karantina. Ada 34 siswa laki-laki dan 38 siswa perempuan. Usia mereka maksimal 17 tahun.</p>\r\n\r\n<p>Mereka tergabung dalam pasukan 17-8-45. Untuk pasukan 8, ada 4 orang anggota TNI-AD Kompi Senapan C 721 Makkasau yang akan mengapit.</p>\r\n\r\n<p>&ldquo;Pelatih yang terlibat ada 4 orang dari Kodim 1403 Sawerigading, 6 orang dari Konpi Senapan C 721 dan 1 orang dari jajaran Kodim, serta 6 orang dari PPI yang masuk SK namun ada tambahan 4 orang,&rdquo; kata Pelda Nasrullah.</p>\r\n\r\n<p>Para pelatih dari Kodim diantaranya, Pelda Nasrullah, Serda Abd Asiz, Sertu Yakobus dan Serda Mustakim. Dua perwira TNI juga terlibat yakni, Kapten Inf Sukardi dan Lettu CBA Okla. Kedua perwira ini nantinya akan tampil sebagai Danru Pasukan Paskibraka.(ara/rhm)</p>\r\n\r\n<p>Sumber : http://palopopos.fajar.co.id/2016/08/16/72-anggota-paskibraka-masuk-karantina/</p>\r\n', 'poto-Paskibraka.jpg', '2016-08-16', 'Admin', '1001'),
(6, 'Keranda Mayat Dibawa ke DPRD', '<p>Masyarakat Toraja makin geram menanggapi isu penghentian pembangunan bandara baru Buntu Kunik di Kecamatan Mengkendek, Tana Toraja. Mereka pun melakukan aksi unjuk rasa menuntut pemerintah pusat melanjutkan megaproyek, yang sempat terhenti anggaran pembangunannya pada tahun 2016 ini.</p>\r\n\r\n<p>Setelah sebelumnya masyarakat melakukan aksi unjuk rasa saat reses anggota Komisi V DPR RI, Bahrum Daido ke Toraja, Senin, 15 Agustus kemarin, ratusan warga yang tergabung dalam Front Perjuangan Rakyat Toraja (FPRT), kembali melakukan aksi unjuk rasa di gedung DPRD dan kantor bupati Tana Toraja.</p>\r\n\r\n<p>Saat melakukan aksi unjuk rasa, para warga ini membawa serta keranda mayat, sebagai simbol rasa duka mereka atas isu penghentian pembangunan Bandara Buntu Kunik.<br />\r\nMassa demostran yang dikawal ketat aparat kepolisian mula-mula melakukan orasi di gedung DPRD Tana Toraja.</p>\r\n\r\n<p>Mereka menuntut lembaga wakil rakyat tersebut melakukan langkah-langkah politik untuk memperingatkan dan mendesak pemerintah pusat melanjutkan pembangunan bandara Buntu Kunik.</p>\r\n\r\n<p>Gaung bersambut, tujuh anggota dewan yang hadir menerima aspirasi, berpindah tempat dari kursi ke barisan pengunjuk rasa. Para anggota dewan ini juga ikut memegang spanduk dan menyuarakan desakan yang sama dengan pengunjuk rasa.</p>\r\n\r\n<p>&ldquo;Apa yang saudara-saudara sampaikan ini juga menjadi pergumulan kami di dewan. Percayalah, kita akan sama-sama memperjuangkan kelanjutan pembangunan bandara Buntu Kunik,&rdquo; tegas salah satu anggota dewan, Semuel Tandirerung.</p>\r\n\r\n<p>Usai di DPRD, massa pengunjuk rasa bergerak ke kantor bupati Tana Toraja. Di depan kantor bupati, mereka kembali melakukan orasi. Dalam orasinya, massa menyebut pemerintah pusat tidak bisa seenaknya menghentikan pembangunan Bandara Buntu Kunik.</p>\r\n\r\n<p>Sebab, dalam prosesnya warga Toraja sudah berkorban begitu besar untuk mendukung terwujudnya bandara ini.</p>\r\n\r\n<p>Diantara pengorbanan warga adalah pemindahan beberapa mayat dari dalam liang batu (makam) dan penyerahan lahan, yang hingga saat ini masih jadi polemik.</p>\r\n\r\n<p>Mengeluarkan, apalagi memindahkan mayat, merupakan sesuatu yang tabu sesuai adat istiadat Toraja. Jangankan mengeluarkan mayat dari dalam liang kubur, membuka pintu liang pun, merupakan sesuatu yang sangat sakral.</p>\r\n\r\n<p>&ldquo;Membuka pintu liang (makam) berarti ada mayat baru yang kita mau kasi masuk. Ini, mayat dari dalam liang kita rela pindahkan, hanya semata-mata untuk mendukung program pemerintah membangun bandara,&rdquo; ungkap Rasyid Mappadang, salah satu warga.</p>\r\n\r\n<p>Menurut Rasyid, pemerintah pusat harus mempertimbangkan pengorbanan masyarakat Toraja yang begitu besar. Pemerintah tidak bisa menyepelekan pengorbanan itu, karena terkait arwah nenek moyang yang mayatnya dipindahkan tersebut.</p>\r\n\r\n<p>&ldquo;Ini bukan hal main-main. Jadi, saya minta dengan sangat, pemerintah pusat jangan anggap remeh ini,&rdquo; tegas Rasyid.<br />\r\nDiketahui, beberapa waktu belakangan ini beredar isu bahwa anggaran pembangunan Bandara Buntu Kunik di kecamatan Mengkendek dialihkan ke Bandara Bua di Kabupaten Luwu.</p>\r\n\r\n<p>Itu terbukti dari tidak tersedianya anggaran untuk kelanjutan pembangunan Bandara Buntu Kunik dalam APBN induk maupun APBN perubahan tahun 2016. (ave)</p>\r\n\r\n<p>Sumber : http://palopopos.fajar.co.id/2016/08/16/keranda-mayat-dibawa-ke-dprd/</p>\r\n', 'Demo-Bandara-2.jpg', '2016-08-16', 'Admin', '342'),
(7, 'Hadiri Sidang Negara, Andi Ichi Pakai “Baju Bodo”', '<p>Anggota MPR RI Fraksi Partai Golkar asal Sulsel Andi Fauziah Pujiwatie Hatta turut hadir dalam sidang tahunan MPR RI/DPR RI, Selasa 16 Agustus 2016 di Gedung Nusantara, Senayan, Jakarta</p>\r\n\r\n<p>Tak biasanya, event akbar tahunan ini pun dimanfaatkan Andi Ichi, sapaan akrabnya hadir dengan mengenakan baju adat wanita Sulsel, yakni &ldquo;Baju Bodo&rdquo;.</p>\r\n\r\n<p>Dengan balutan baju bodo warna hijau tosca lengkap dengan pernak pernik aksesoris, Andi Ichi tampil cantik diantara sejumlah anggota MPR/DPR RI dari dapil lain.</p>\r\n\r\n<p>&ldquo;Iya dong, kita bangga jadi orang Sulsel. Tak hanya saya, banyak Anggota DPR yang perempuannya juga mengenakan baju adat dari daerahnya,&rdquo; ujarnya. (idr/fmc)</p>\r\n', 'andi-ichi.jpg', '2016-08-16', 'Admin', '52'),
(8, 'Tips Meredakan Amarah Sebelum Anda Dikuasainya', '<p>Pada suatu titik, setiap orang pasti pernah merasa marah dan tidak ada yang salah dengan hal itu, karena amarah sejatinya adalah hal yang lumrah dirasakan setiap individu.</p>\r\n\r\n<p>Yang tidak biasa adalah ketika seseorang kesulitan untuk mengatasi rasa marah itu sendiri. Seseorang yang memasuki tahap kronis dari tingkat amarahnya tidak hanya merugikan kesehatan orang itu sendiri, melainkan juga hubungan percintaan, pekerjaan, kehidupan sosial dan reputasi yang telah terbangun.</p>\r\n\r\n<p>&ldquo;Amarah itu sendiri berada antara baik dan buruk,&rdquo; jelas ahli anger management dan seorang profesor psikiatri di Robert Wood Johnson Medical School Rutgers University Mitch Abrams, PhD seperti dikutipp dari WebMD.</p>\r\n\r\n<p>Amarah tingkat ringan dan menengah bisa menjadi hal yang baik, karena dapat menyadarkan anda dari hal yang salah dan mendorong anda menjadi pribadi yang lebih baik.</p>\r\n\r\n<p>Namun pada tingkat amarah kronis, seiring berjalannya waktu, maka kondisi tersebut akan membawa seseorang pada masalah kesehatan seperti tinggi tekanan darah, diabetes, kolestrerol tinggi dan masalah kesehatan lain.</p>\r\n\r\n<p>Ketika seseorang marah, maka seseorang akan terekspos pada prilaku membuat keputusan yang tergesa-gesa atau tanpa pikir panjang. Jadi tidak heran mengapa amarah kerap berkaitan dengan banyaknya sejumlah kecelakaan dan aktifitas seperti merokok, berjudi, mimum-minum keras, dan kebiasan makan berlebihan.</p>\r\n\r\n<p>Abrams berpendapat bahwa amarah juga memiliki peran penting terhadap depresei seseorang. Sementara studi lainnya menyebutkan bahwa menahan amarah juga sama buruknya dengan mereka dengan amarah yang meledak-ledak.</p>\r\n\r\n<p>&ldquo;Tidak ada orang yang terkena masalah karena merasa marah. Namun terkadang mereka terkena masalah akibat kelakuan mereka disaat mereka merasa marah,&rdquo; Abrams menekankan.</p>\r\n\r\n<p>Bagi anda yang ingin mengontrol amarah anda, Abrams menyarankan untuk mengatur nafas dan melemaskan otot-otot anda yang tegang. Bayangkan pantai atau tempat lainnya yang memberikan efek damai. Tarik dan kemudian buang nafas anda sembari membayangkan strees anda yang reda secara perlahan.</p>\r\n\r\n<p>Semakin banyak anda berlatih menggunakan teknik ini, semakin besar dan cepat efek dari teknik relaksasi itu bekerja pada situasi yang tak mengenakan. Selain itu, mengontrol diri dengan alunan musik instrumental dan natural pun menjadi salah satu cara terbaik menenangkan emosi dalam diri anda.</p>\r\n\r\n<p>&ldquo;Semakin cepat anda bereaksi atas sebelum amarah menguasai anda akan semakin baik. Kuncinya adalah menenangkan diri anda sendiri sebelum meledak,&rdquo; Abrams menyarankan.</p>\r\n\r\n<p>Sumber : http://fajar.co.id/2016/08/14/tips-meredakan-amarah-sebelum-anda-dikuasainya/</p>\r\n', 'IMG_7579.jpg', '2016-08-16', 'Admin', '92'),
(9, 'Dorong Pembentukan Provinsi Luwu, Pemuda Luwu Raya Bentuk GP3L', '<p>Sejumlah pemuda Tana Luwu melakukan konsolidasi pembentukan Gerakan Pemuda Percepatan Provinsi Luwu (GP3L), di Icon Cafe Palopo, Jumat (19/2/2016) malam. Pembentukan GP3L ini dimaksudkan untuk mendorong segera dibentuknya Provinsi Luwu.</p>\r\n\r\n<p>Menurut salah satu penggagas dari pembentukan GP3L, Samsul, apa yang dilakukan bersama sejumlah pemuda Tana Luwu ini merupakan perjuangan yang sudah lama. Namun untuk saat ini diperlukan kembali semangat kebersamaan dalam bentuk gerakan untuk memperjuangkan terbentuknya Provinsi Luwu.</p>\r\n\r\n<p>&ldquo;Pertemuan ini untuk segera mengambil langkah-langkah konkrit sekaitan dngan percepatan pembentukan Provinsi Luwu Raya. Yang diinisiasi oleh sejumlah tokoh pemuda se-Tana Luwu,&rdquo; ujar Syamsul.</p>\r\n\r\n<p>Langkah kongrit yang akan dikerja dalam waktu dekat, mengumpulkan dukungan politik masyarakat melalui badan perwakilan desa (BPD) dan Kepala Desa sebagai representasi masyarakat di Desanya masing-masing.</p>\r\n\r\n<p>Menurutnya, pekerjaan ini akan di koordinir oleh masing-masing presidium GP3L yang ada di masing kabupaten kota. Mulai dari Kabupaten Luwu, Kota Palopo, Kabupaten Luwu Utara, Kabupaten Luwu Timur dan Luwu Tengah.</p>\r\n\r\n<p>&ldquo;Gerakan ini tidak menegasi ataupun terjadi tumpang tindih dengan semangat kelompok lain untuk pembentukan provinsi Luwu. Akan tetapi ini menjadi semangat baru bagi pembentukan provinsi Luwu yang sudah lama diidamkan,&rdquo; jelas Anggota KPUD Kota Palopo itu.</p>\r\n\r\n<p>Pembentukan GP3L ini dihadir oleh sejumlah tokoh pemuda yang ada di Tana Luwu seperti, Maksum Runi, Isdaruddin, Haidir Jidar, Bata manurun, Sofyan Thamrin, Bahtiar Manadjeng, Abdul Rahman Nur, Baharman Supri, Wayuddin Alqadri, Jaya Hartawan, Rizal Muthahhari, Idham Adiatmaja.</p>\r\n\r\n<p>Sumber : http://sulsel.pojoksatu.id/read/2016/02/19/dorong-pembentukan-provinsi-luwu-pemuda-luwu-raya-bentuk-gp3l/</p>\r\n', 'Bentuk-Provinsi-Luwu-Raya-730x350.jpg', '2016-08-16', 'Admin', '53');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `ikon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `ikon`) VALUES
(25, 'Sekolah', 'Sekolah', 'sekolah.png'),
(24, 'Universitas', 'Universitas', 'universitas.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `komentar` varchar(300) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `website`, `komentar`) VALUES
(1, 'Ali Akbar', 'aliakbaruncp@gmail.com', 'http://akbardesign.org', 'Keren websitenya gan!'),
(2, 'Siti Komariyah', 'siti.sitikom@gmail.com', '', 'Website yang sangat bagus, dilengkapi dengan berita, derection, dan map lokasi.. good job!');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `telp` varchar(20) NOT NULL,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `kategori`, `nama`, `alamat`, `telp`, `latittude`, `longitude`, `gambar`) VALUES
(16, 25, 'SMK N 1 Jambi', 'Jalan A. Thalib, Simpang IV Sipin, Telanaipura, Kota Jambi, Jambi 36124', '(0741) 60681', '-1.6102967', '103.5760239', ''),
(17, 25, 'SMK Dharma Bhakti 1 Jambi', 'Jl. Untung Suropati No.87, RT.32, Jelutung, Kota Jambi, Jambi 36124', '(0741) 41243', '-1.6209911', '103.6099948', 'sentral_masamba.jpg'),
(11, 24, 'Universitas Jambi', 'Jl. Lintas Jambi - Muara Bulian Km. 15, Mendalo Darat, Jambi Luar Kota, Kota Jambi, Jambi 36122', '0811-7422-799', '-1.6112849', '103.5198154', ''),
(15, 24, 'Universitas Batanghari', 'Jalan Slamet Riyadi No.01, Broni Jambi Kel. Sei. Putri, Telanaipura, Sungai Putri, Telanaipura, Kota Jambi, Jambi 36122', '(0741) 60673', '-1.6048811', '103.5933896', '');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi_profil` text NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `isi_profil`) VALUES
(1, 'Profile Kami', '<p>Profile Sekolah &amp; Universitas ....</p>\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
