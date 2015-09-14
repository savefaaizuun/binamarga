-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2015 pada 08.48
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbmp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_article`
--

CREATE TABLE IF NOT EXISTS `dbmp_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title_article` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `dbmp_article`
--

INSERT INTO `dbmp_article` (`article_id`, `user_id`, `title_article`, `article`, `image`, `create_at`) VALUES
(1, 3, 'Menjelang Puasa, Perbaikan Jalan Pantura Dikebut ', '<p style="text-align: justify;"><span style="color: #666666;"><strong>TEMPO.CO </strong></span>, <span style="color: #666666;"><strong>Jakarta -</strong></span>Kementerian Pekerjaan Umum dan Perumahan Rakyat&nbsp; sedang mengejar target percepatan penyelesaian pengerjaan infrastruktur jalan menjelang Lebaran 2015. Tak hanya membuat jalan baru, Kementerian juga memperbaiki jalan di jalur Pantai Utara (Pantura) Pulau Jawa.<br /><br />Direktur Bina Pelaksanaan Wilayah II Ditjen Bina Marga Kementerian Pekerjaan Umum dan Perumahan Rakyat Adriananda menargetkan perbaikan jalan selesai menjelang arus mudik Lebaran tahun ini.<br /><br />"Selama ini yang menjadi masalah di Jawa Barat, (pembangunan) Jalan Tol Cikapali sudah 99 persen, Juni sudah bisa difungsikan," katanya dalam keterangan tertulis, Rabu, 27 Mei 2015.<br /><br />Proses pengerjaan yang saat ini sedang dilakukan berupa penutupan lubang yang menjadi bagian dari program pemeliharaan jalan dan jembatan. Adriananda memprediksi semua pekerjaan penutupan lubang tersebut selesai pada awal Juni.<br /><br />Meski tidak ada pekerjaan berat di jalur Pantura, dia mengatakan, ada kerusakan jalan di wilayah kadipaten yang sedang diperbaiki.<br /><br />Tahun ini, anggaran pemeliharaan dan perbaikan jalur Pantura mencapai Rp1,3 triliun. Alokasi terbesar mencapai Rp 600 miliar di wilayah Jawa Tengah, lantaran jalur alternatif tol belum terbangun.<br /><br />Jalur Pantura&nbsp; merupakan jalan nasional sepanjang 1.316 kilometer yang menjadi penghubung lima provinsi yaitu Banten, DKI Jakarta, Jawa Tengah, Jawa Barat, dan Jawa Timur. Jalur ini memiliki peran yang sangat penting karena letaknya yang strategis dan juga menjadi urat nadi utama transportasi darat karena setiap hari dilalui 20.000-70.000 kendaraan per hari.</p>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__zsc_once">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', 'jalan.jpg', '2015-08-22 16:29:31'),
(2, 4, '200 PJU Klasik Hiasi Jalanan Kota Bandung', '<p style="text-align: justify;"><span style="font-weight: bold;">BANDUNG</span> - Demi mem percantik estetika kota jelang peringatan Konferensi Asia Afrika (KAA), Pemkot Bandung memasang lebih dari 200 penerangan jalan umum (PJU) bergaya klasik di se jumlah ruas jalan di Kota Bandung dengan total anggaran sekitar Rp3,5 miliar. <br /><br />Kabid Pengadaan Bahan dan PJU Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung Rosyidi Santono mengatakan, 200 PJU baru tersebut di pasang di sekitar Gedung Merdeka seperti Jalan Asia Afrika, Cikapundung Timur, Braga, Dalem Kaum. &ldquo;Dari perempatan Tamblong hingga perempatan Otis ta ada 55 tiang PJU yang di pasang. Di Jalan Cika pundung Timur ada 32 PJU, di Naripan 10 PJU, Jalan Dalem Kaum 34 PJU, dan di Braga yang dipasang hingga gedung Bank Indonesia ada 109 PJU. 10 hari lagi, PJU-nya terpasang semua,&rdquo; ujar Rosyidi kepada wartawan di Bandung kemarin. <br /><br />Rosyidi mengatakan, tiang tersebut sengaja dibuat secara unik dan berbeda dari PJU lainnya. Menurut dia, hal tersebut atas instruksi Wali Kota Bandung, agar PJU dibuat sedemikian dekoratif agar estetikanya terkesan lebih klasik. Satu hal yang unik, PJU bergaya klasik ini terdapat ornamen singa tepat di atas PJU. Hal itu sebagai simbol Jawa Barat dan Kota Bandung sebagai ibu kotanya.<br /><br />&nbsp;&ldquo;Kalau pemasangan ham pir semua selesai, cuman di Jalan Braga Pendek sama Da lem Kaum ada yang belum dipasang karena menunggu pembe tonan dulu,&rdquo; katanya. Untuk pemasangan PJU bergaya klasik ini, biaya yang dikeluarkan mencapai Rp3,5 miliar yang berasal dari APBD. Dengan perincian di Jalan Asia Afrika menghabiskan Rp1,7 miliar, Naripan-Cikapundung Timur Rp800 juta, Braga Rp289 juta, dan Dalem Kaum Rp730 juta. &ldquo;Yang di Jalan Braga kenapa lebih murah, karena barangnya sudah ada. Kemarin kan tidak jadi dipasang karena trotoar belum selesai,&rdquo; ucapnya. <br /><br />Sementara itu, Pemkot Bandung melalui Dinas Bina Marga dan Pengairan (DBMP) terus mengebut perbaikan infrastruktur lainnya, jelang peringatan KAA pada April mendatang. Selama tiga ming gu berjalan, progres pengerjaan diklaim sudah men capai 85%. &ldquo;Kalau infrastruktur su dah 85% lah, tinggal 15% lagi. Dalam waktu dua minggu juga selesai,&rdquo; ujar Wali Kota Ban dung Ridwan Kamil kepada wartawan di Bandung ke ma rin. <br /><br />Perbaikan infrastruktur me liputi perbaikan ruas jalan, perbaikan Masjid Agung Bandung, dan penambahan se jumlah ornamen. Ada sembilan ruas jalan yang terbagi ke dalam lima paket pekerjaan. Adapun sembilan ruas jalan tersebut meliputi Braga pendek, Jalan Cikapundung Timur, Naripan dan Asia Afrika, Dalem Kaum, Tamblong, Lembong, Wastukancana, dan Braga panjang. Proyek pengerjaan meliputi perbaikan trotoar dan jalan. <br /><br />Namun khusus ruas Jalan Dalem Kaum dan Ci kapundung mencakup perbaikan trotoar dan jalan. Emil mengatakan, untuk mempercepat pengerjaan proyek, dia mengaku menggunakan jasa 10 kontraktor. Ke- 10 kontraktor yang dipilih melalui mekanisme penun jukan langsung ini, diberikan tugas untuk menyelesaikan in frastruktur paling lambat 18 April. &ldquo;Rencananya 10 kontraktor itu akan bertemu pada 15 April 2015 mendatang. Nanti masing-masing kontraktor akan melaporkan pekerjaannya,&rdquo; katanya.<br /><br />&nbsp;Dia mengatakan, sejauh ini proses perbaikan berjalan nor mal. Namun faktor cuaca diakuinya menjadi salah satu hambatan pengerjaan proyek. &ldquo;Setiap malam saya jadi man - dor untuk mengecek progres pengerjaan,&rdquo; katanya. Lebih lanjut Emil menjelaskan, saat ini ada sekitar 14.000 relawan yang ikut berpartisipasi dalam pe - ringatan KAA. Relawan ini akan membantu sa at pelaksanaan acara pada hari H. &ldquo;Kami ada 14.000 relawan, nanti akan ada rapat akbar 12 April di alun alun. Harus optimistis,&rdquo; ungkapnya. <br /><br />Sementara itu, Sekretaris Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung Didi Ruswandi menuturkan pihaknya terus melakukan segala upaya agar proses pengerjaan proyek selesai tepat waktu. Pasalnya Ia tak ingin mengulang kesalahan yang sama seperti saat pengerjaan trotoar di Jalan Riau dan Braga. &ldquo;Untuk itu kami kebut pengerjaannya selama 24 jam, agar proses pengerjaan selesai tepat waktu,&rdquo; ujarnya. <br /><br />Menurut Didi, ada dua tipe yang digunakan dalam penataan infrastruktur, yaitu gra nit dan patterned concrete atau beton berpola. Untuk jalan yang dekat dengan Gedung Merdeka, trotoarnya akan dipasangi granit, sementara yang lokasiya tidak terlalu de kat akan dipasangi beton ber pola. Didi mencontohkan, untuk Jalan Asia Afrika, Bra ga, Cikapundung Timur, trotoarnya akan dipasangi granit.<br /><br />&nbsp;Sementara untuk Jalan Naripan, Dalem Kaum, Tamblong dan Lembong akan dipasangi beton berpola. Didi menargetkan seluruh pe kerjaan dapat selesai ku rang lebih selama 40 hari, te pat pada 18 April mendatang. Pa salnya pada 22 April, perhelatan KAA sudah dimulai. &ldquo;Jadi 18 April mudah-mudahan beres dan harus beres. Jadi sekarang, semua daya kami upayakan,&rdquo; tandasnya.</p>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__zsc_once">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', 'pju.jpg', '2015-08-22 16:29:34'),
(4, 4, 'Rp 60 Miliar untuk Perbaikan Sungai dan Tanggul di Bandung', '<p style="text-align: justify;"><strong>BANDUNG, TRIBUN -</strong> Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung menyiapkan anggaran sebesar Rp 60 miliar untuk perbaikan sungai dan tanggul di Kota Bandung. <br />"Untuk pemeliharaan sungai dan drainase akan menambah pasukan ungu di setiap daerah," ujar&nbsp; Kepala DBMP Kota Bandung, Iskandar Zulkarnain, di Balai Kota Bandung, Selasa (4/3). <br />Iskandar mengatakan DBMP fokus membenahi tanggul yang jebol di beberapa titik di Kota Bandung seperti&nbsp; sungai Cinambo, Cipagalo, Cilameta, dan Citepus. "Perbaikan tanggul masih sementara dengan memasang 1.000 karung sedangkan untuk perbaikan permanen harus menunggu musim kemarau," ujarnya..<br />Menurut Iskandar perbaikan tanggul di musim hujan tak akan berjalan optimal. <br />Banjir Cinambo dan Panyileukan dengan cara disedot oleh dua alat penyedot banjir&nbsp; di kawasan Jalan Rumahsakit dan Panyileukan. <br />"Untuk tahun 2014 alat penyedot banjir akan ditanbah dua unit pompa besar,"ujar Iskandar,<br />Iskandar mengakui sejumlah sungai yang rawan berada di kawasan Bandung Timur, ternasuk Sungai Citepus juga&nbsp; rawan jebol karena sudah tua.. <br />Iskandar minta agar masyarakat tak lagi membuang sampah sembarangan terutama ke sungai-sungai. "Sampah terlalu banyak, aliran sungai jadi tersendat dan tanggul bisa pecah kan," ujarnya. <strong>(tsm)</strong></p>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__zsc_once">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', 'sungai.jpg', '2015-08-22 16:29:47'),
(5, 3, 'Perbaikan Jalan Protokol Kota Bandung Mulai Berjalan', '<div class="txt-detailberita" style="text-align: justify;">\r\n<p>REPUBLIKA.CO.ID, BANDUNG -- Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung menyatakan proses lelang untuk perbaikan jalan protokol di Kota Bandung sudah selesai. Diperkirakan proses pengerjaan jalan ini akan dimulai pada Juni mendatang.<br /><br />"Saat ini sedang proses tanda tangan kontrak," ujar Kepala Bidang Pembangunan dan Pemeliharaan Kebinamargaan DBMP Kota Bandung Agoes Sjafroedin saat ditemui di ruangannya, Jumat (22/5).<br /><br />Agoes menyatakan ada 71 paket lelang yang dimenangkan oleh 71 perusahaan swasta dari total ratusan perusahaan yang berpartisipasi. Masing-masing paket, lanjut Agoes, terdiri dari pengerjaan beberapa ruas jalan. Proses lelang itu sendiri berlangsung sekitar dua bulan.</p>\r\n<p>Total nilai proyek perbaikan jalan protokol ini, jelas Agoes, mencapai Rp 160 miliar. Dalam satu proyek, nilai terkecil sebesar Rp 250 juta dan yang terbesar mencapai Rp 24 miliar. Sedangkan total panjang ruas yang dikerjakan ialah sekitar 60 km. "Ini perbaikan jalan baik <em>hotmix</em> (aspal beton) atau pun beton semen," tambah Agoes.<br /><br />Agoes menyatakan ada beberapa proses yang harus dilalui sebelum proses pengerjaan berlangsung. Usai penandatanganan kontrak, Agoes menjelaskan akan ada tim yang turun ke lapangan untyuk melakukan perhitngan atau <em>field engineering</em> (FE). Agoes menyatakan setelah proses di lapangan selesai, baru dilakukan mobilisasi peralatan.<br /><br />Menurut Agoes, normalnya proses pengerjaan perbaikan jalan tersebut, khususnya <em>hotmix</em>, berlangsung sekitar tiga hingga empat bulan. Akan tetapi Agoes mengusahakan agar pengerjaan dapat selesai dengan lebih cepat. Pasalnya, Agoes ingin menghindari pengerjaan proyek di musim penghujan. "Kemungkinan bisa mulai serentak itu sekitar awal bulan Juni. Juni itu sudah banyak yang melakuan," lanjut Agoes.<br /><br />Dalam pengerjaan jalan protokol tersebut, proyek yang mencapai nilai Rp 24 miliar merupakan proyek pembangunan jalan baru. Agoes menyatakan pembangunan jalan baru ini akan dilakukan di dua lokasi sekitar Stadion Utama Sepakbola (SUS) Gedebage.</p>\r\n<p>Pembangunan jalan baru di sekitar SUS Gedebage ini, lanjut Agoes, dilakukan untuk mendukung akses tol menuju tol, SUS Gedebage dan juga bisa digunakan untuk mengakses kawasan Teknopolis nantinya.<br /><br />Agoes menyatakan proyek jalan protokol lainnya lebih menitikberatkan pada peningkatan dan pemeliharaan jalan. Untuk daerah yang lebih tinggi, Agoes menyatakan material yang digunakan ialah beton. Di antaranya ialah Jalan Ahmad Dahlan, Pasir Impun, hingga Cigagap Tengah. "Yang kebanyakan sekarang beton itu. Terutama di daerah-daerah yang labil, banyak menggunakan beton," jelasnya.<br /><br />Proyek pengerjaan jalan ini akan terus berlangsung pada bulan Ramadhan. Untuk ityu, DBMP nantinya akan bekerjasama dengan tiga pihak dalam pengalihan arus. Ketiga pihak yang akan bekerjasama membantu DBMP terkait pengalihan arus ialah kepolisian, Dinas Perhubungan dan Kewilayahan. Agoes memperkirakan proyek baru akan berhenti sementara pada H-7 hingga H+7 Lebaran. <br /><br />Selain melakukan perbaikan di jalan protokol, DBMP juga tetap melakukan perbaikan untuk jalan-jalan kecil yang berlubang. Tidak seperti jalan protokol yang ditangani melalui proses lelang, untuk perbaikan dan penambalan jalan kecil dilakukan langsung oleh tim Unit Reaksi Cepat (URC) DBMP.<br /><br />Area penambalan ini, jelas Agoes, tersebar di enam wilayah utama yaitu tiga wilayah di barat dan tiga wilayah di timur. Bagian barat mencakup wilayah Banjarnegara, Tegalega dan Cibeunying. Sedangkan bagian timur mencakup wilayah Karees, Gedebage dan Ujung Berung. "Per wilayah kebanyakan di jalan-jalan lingkungan," ujar Agoes.</p>\r\n</div>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__zsc_once">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', 'jalan_rusak.jpg', '2015-06-04 04:00:14'),
(6, 3, 'Jalan Mulus, Bina Marga Kini Fokus Drainase', '<p>Bisnis.com, SOREANG - Pada tahun ini, Dinas Pekerjaan Umum (PU) Bina Marga Kabupaten Bandung memprioritaskan pembangunan dan pemeliharaan saluran air (drainase). Hal ini karena proses perbaikan jalan telah mencapai 90%.</p>\r\n\r\n<p>Kepala Dinas PU Bina Marga Kab Bandung Agus Nuria mengatakan, fokus perbaikan pada drainase karena proses perbaikan jalan di Kabupaten Bandung sepanjang 1.155 kilometer saat ini sudah bagus. Jalan yang masih rusak berat dan sedang tinggal 10%.</p>\r\n\r\n<p>&quot;Karena drainase yang menjadi prioritas, maka kami akan menormalisasi dan membangun drainase baru,&quot; kata Agus Nuria kepada wartawan, Kamis (12/3/2015).</p>\r\n\r\n<p>Dia menjelaskan, alasan memprioritaskan perbaikan jalan dengan cara beton dan aspal lantaran dengan akses jalan yang prima bisa mendorong perekonomian dan mobilitas masyarakat.</p>\r\n\r\n<p>Diakuinya, selama ini anggaran untuk perbaikan drainase dan trotoar masih relatih kecil. Akan tetapi, pihaknya berupaya anggaran bisa bertambah agar perbaikan drainase dan pembangunan bisa maksimal.</p>\r\n\r\n<p>&quot;Kami berharap pada APBD Perubahan anggaran bisa ditambah. Pada anggaran murni untuk perbaikan drainase dan trotoar sebesar Rp2 miliar,&quot; ujarnya.</p>\r\n\r\n<p>Upaya untuk perbaikan drainase dan trotoar, pihaknya saat ini melakukan survei dalam rangka inventarisasi fasilitas publik yang harus diperbaiki. Sekaligus mengantisipsi adanya perubahan panjang drainase dan trotoar yang mesti dibangun atau diperbaiki.</p>\r\n\r\n<p>&quot;Survei perlu kami lakukan lagi agar lebih akurat. Dengan begitu, perbaikan dan pembangunannya nanti tepat sasaran,&quot; ujarnya.</p>\r\n', 'jalan1.jpg', '2015-06-04 05:01:30'),
(7, 3, 'Pejalan Kaki Keluhkan Ketidaknyamanan Trotoar Granit di Kota Bandung', '<p>Pejalan kaki menghindari trotoar yang berantakan di Jalan L.R.E Martadinata, Kota Bandung, Kamis (7/5/2015). Trotoar dengan keramik granit tersebut, nampak dibiarkan begitu saja.</p>\r\n\r\n<p>Trotoar granit di Jln. L.L.R.E Martadinata atau terkenal dengan Jln. Riau, Kota Bandung, masih terbengkalai. Belum terlihat lagi &lrm;?ada pekerjaan perbaikan yang dilakukan.</p>\r\n\r\n<p>Sejumlah material pembangunan trotoar juga masih berserakan di sisi-sisi jalan. Bahkan tak jarang ditemukan lubang, bekas galian kabel dan saluran air serta kabel-kabel yang menjulang di atas trotoar.</p>\r\n\r\n<p>Berdasarkan pantauan &quot;GM&quot;, di sejumlah titik pemasangan granit sudah terlihat di sepanjang Factory Outlet (FO) dan tempat makan. Sama seperti di depan Pengadilan Negeri Bandung, granit sudah terpasang tapi belum seluruhnya rapi.</p>\r\n\r\n<p>Di sisi lainnya, trotoar masih dicor dengan semen dan masih &lrm;?ada beberapa lubang yang dibiarkan tanpa papan peringatan, baru sebatas dipasang tali tanda galian. &lrm;?Ada pula, lubang galian hanya ditutupi dengan papan besi dan tentu berbahaya bagi pengguna jalan.</p>\r\n\r\n<p>Seorang pelajar yang sering melintasi jalan tersebut, Vadila (17) mengatakan, lubang bekas penggalian perbaikan trotoar sangat berbahaya bagi pejalan kaki. Pasalnya, lubang-lubang itu dibiarkan tanpa adanya tanda perbaikan trotoar.</p>\r\n\r\n<p>&quot;Kondisi trotoar seperti ini tidak bagus dilihat apalagi kalau hujan kan jadi becek. Ada lubang-lubang penggalian, juga berbahaya bagi pengguna jalan terlebih malam itu tidak kelihatan. Saya harap segera diselesaikan pengerjaannya supaya nyaman dilintasi,&rdquo; ujarnya kepada &ldquo;GM&rdquo;, Senin (18/5).</p>\r\n\r\n<p>Hal senada juga diungkapkan Herlan (28) yang menyebut kondisi trotoar di Jalan Riau belum nyaman bagi pejalan kaki. Ia menuturkan, masih adanya lubang di sejumlah titik tentu berbahaya dan perlu segera diperbaiki sebelum terjadi hal yang tidak diinginkan.</p>\r\n\r\n<p>&ldquo;Lubang-lubang penggalian itu berbahaya bagi pejalan kaki dan jadi tidak nyaman. Seharusnya Pemkot Bandung dan pihak yang bersangkutan segera perbaiki trotoar di Jalan Riau. Apalagi kan Jalan Riau sebagai wajah kota, karena banyak objek wisata kuliner dan FO yang dikunjungi wisatawan,&rdquo; ujarnya.<br />\r\nUmumkan hasil lelang<br />\r\nMenanggapi hal itu, Sekretaris Dinas Bina Marga Kota Bandung, Didi Ruswandi mengatakan, pihaknya akan segera mengumumkan hasil lelang perbaikan trotoar di Jalan Riau pekan ini. Menurutnya, perbaikan trotoar kali ini, harus ada garansi dari pihak kontraktor supaya tidak terulang. Ia menambahkan, Wali Kota Bandung Ridwan Kamil sebelumnya, juga meminta presentasi strategi pembangunan trotoar dari Dinas Bina Marga dan pihak kontraktor yang ikut lelang ulang.</p>\r\n\r\n<p>&ldquo;Rencananya pekan ini akan ada pengumuman hasil lelang. Kami juga melakukan presentasi supaya mengetahui strategi pembangunan trotoar dan ada garansi supaya tidak terulang kesalahan sebelumnya,&rdquo; kata Didi kepada &ldquo;GM&rdquo;, Senin (18/5).</p>\r\n\r\n<p>Berdasarkan pantauan lainnya, kondisi PJU (lampu lalu lintas) di perempatan Jalan Riau dan Jalan Banda depan Kantor Pos terpantau mati dan situasi ini membuat arus lalu lintas menjadi tersendat. Namun, petugas kepolisian sudah diturunkan ke lapangan untuk mengatur arus lalu lintas.</p>\r\n\r\n<p>Selain itu, masih ditemukan pedagang kaki lima (PKL) di sepanjang Jalan Riau yang membuat lintasan bagi pejalan kaki menjadi berkurang. Padahal menurut Undang-undang nomor 11 tahun 2005 menyebutkan trotoar hanya digunakan untuk pejalan kaki. (deden.job)</p>\r\n', 'perbaikan.jpg', '2015-08-23 07:59:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_berita`
--

CREATE TABLE IF NOT EXISTS `dbmp_berita` (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `dbmp_berita`
--

INSERT INTO `dbmp_berita` (`berita_id`, `judul_berita`, `isi_berita`, `image`, `user_id`, `link`, `create_at`) VALUES
(5, 'Proyek Trotoar Granit Rp 30 Miliar di Bandung Akhirnya Berlanjut', '<p><strong>BANDUNG, KOMPAS.com</strong> - Pemerintah Kota Bandung akhirnya melelang kembali proyek trotoar granit di beberapa ruas jalan di Kota Bandung. Pemkot Bandung kini mendapat kontraktor baru, yakni PT. Latanindo yang ditugaskan untuk merenovasi pengerjaan trotoar yang mangkrak sejak Desember 2014 lalu.<br />\r\n<br />\r\nWali Kota Bandung Ridwan Kamil mengatakan, proyek senilai Rp 30 miliar itu sempat tersendat lantaran kontraktor lama, PT Sliva Andia kedapatan memasang trotoar granit tidak sesuai dengan spesifikasi yang dijanjikan.<br />\r\n<br />\r\n&quot;Kontraktor baru sudah terpilih. Mudah-mudahan tidak terlalu lama semua selesai. Dulu trotoar yang licin karena &#39;spek&#39;-nya tidak sesuai yang kita sepakati, akan diperbaiki dengan cara dibakar di tempat, harusnya dibakar saat di pabriknya,&quot; kata Ridwan Kamil saat meninjau proyek perbaikan trotoar granit di Jalan R.E Martadinata (Riau), Kota Bandung, Kamis (30/7/2015).<br />\r\n<br />\r\nUntuk menuntaskan proyek tersebut, PT Latanindo mesti menggelontorkan dana senilai Rp 15 miliar. &quot;Pergantian kontraktor tidak mengubah regulasi. Saya hanya menekankan Pemkot Bandung jangan dikecewakan lagi. Makanya kalau perlu saya turun, saya turun,&quot; kata Emil, begitu Ridwan Kamil biasa disapa.<br />\r\n<br />\r\nEmil berharap kontraktor pemenang lelang bisa merampungkan proyek mangkrak ini paling lambat bulan Oktober 2015 mendatang. &quot;Kalau bisa saat ulang tahun Kota Bandung sudah beres. Semua juga kalau kerja <em>bener</em> dan sesuai, ya nyaman,&quot; ungkap dia.<br />\r\n<br />\r\nSementara itu, Kepala Dinas Binamarga dan Pengairan Kota Bandung Iskandar Zulkarnaen menerangkan, PT. Silva Andia Utama telah diputuskan bersalah oleh PTUN karena tidak mampu menyelesaikan proyek tersebut.<br />\r\n<br />\r\nSebagai kompensasinya, Pemkot Bandung hanya membayar 73,8 persen pekerjaan yang telah diselesaikan sesuai dengan penelitian yang dilakukan Politeknik Bandung. PT. Silva Andia Utama juga diminta membayar sanksi berupa denda sebesar 5 persen dari total nilai proyek pertama.<br />\r\n<br />\r\n&quot;Trotoar yang sekarang diperbaiki sepanjang tiga kilometer dari Wastukencana sampai Taman Pramuka,&quot; kata Emil.</p>\r\n', 'granit.jpg', 4, 'http://regional.kompas.com/read/2015/07/30/14065881/Proyek.Trotoar.Granit.Rp.30.Miliar.di.Bandung.Akhirnya.Berlanjut', '2015-08-22 16:45:43'),
(6, 'Tahun 2015, DBMP Kota Bandung Anggarkan Dana Rp62 Miliar untuk PJU', '<p style="text-align:justify"><strong>BANDUNG, FOKUSJabar.com :</strong> Kepala Bidang Pengadaan Bahan dan Penerangan Jalan Umum (PJU) Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung, Rosyidi Santono menyebutkan, pihaknya menganggarkan dana sebesar Rp62 miliar&nbsp;untuk PJU di tahun 2015. Sebesar Rp30 miliar&nbsp;dianggarkan untuk pemeliharaan dan Rp32 miliar&nbsp;untuk penambahan PJU baru.</p>\r\n\r\n<p>&ldquo;Pemeliharannya mencakup penggantian box panel, dan lampu. Untuk lampu rencananya akan diganti menggunakan lampu LED secara bertahap. Selain efisien juga ramah lingkungan,&rdquo; ucap Rosyidi saat dihubungi wartawan, Sabtu (27/6/2015).</p>\r\n\r\n<p>Rosyidi juga mengaku, pihaknya telah membentuk tim pengawas yang tersebar di beberapa wilayah di Kota Bandung. Tim ini bertugas untuk mengontrol dan memperbaiki PJU yang rusak.</p>\r\n\r\n<p>&ldquo;Kita mempunyai enam tim untuk mengawasi seluruh Kota Bandung.&nbsp; Jadi ada regu Utara, Selatan, Barat, Timur, Cijaura dan Ujungberung. Kalau ada laporan atau komplain bahwa PJU&nbsp;padam, kita langsung cek sesuai dengan wilayah kerja,&rdquo;&nbsp;terangnya.</p>\r\n\r\n<p>Untuk diketahui, berdasarkan catatan, saat ini ada sekitar 30 ribu titik PJU&nbsp;yang ada di Kota Bandung. Sebanyak 30 ribu titik pju ini terdiri dari 21 ribu titik PJU&nbsp;standar (terpasang di ruas jalan),&nbsp; 8000 titik PJU&nbsp;lingkungan (terpasang di pemukiman penduduk) dan sisanya PJU&nbsp;klasik dan PJU&nbsp;<em>highmast</em> (memiliki ketinggian 25 m).</p>\r\n', 'street-lights-1.jpg', 3, 'http://fokusjabar.com/2015/06/27/tahun-2015-dbmp-kota-bandung-anggarkan-dana-rp62-miliar-untuk-pju/', '2015-08-22 16:45:45'),
(7, 'DBMP Kota Bandung akan Luncurkan Tim Khusus Penerangan Jalan Umum', '<p>Dinas Bina Marga dan Pengairan (DBMP) Kota Bandung akan meluncurkan tim khusus untuk menangani Penerangan Jalan Umum (PJU). Dalam waktu dekat, tim ini akan bertugas untuk memonitor seluruh PJU yang tersebar di Kota Bandung.</p>\r\n\r\n<p>Hal ini disampaikan Kepala Bidang Pengadaan Bahan dan PJU DBMO Kota Bandung Rosyidi Santono seperti diberitakan laman <a href="http://infobandung.co.id/dbmp-kota-bandung-akan-luncurkan-tim-khusus-penerangan-jalan-umum/www.inilahkoran.com">inilahkoran.</a></p>\r\n\r\n<p>&ldquo;Nantinya tim akan memonitor setiap PJU, sistemnya keliling. Jadi diharapkan tidak ada lagi PJU yang mati,&rdquo; ujarnya.</p>\r\n\r\n<p>Menurut Rosyidi, tim khusus tersebut akan terbagi menjadi enam regu yang akan mewakili setiap daerah seperti wilayah timur, barat, utara dan selatan. Sementara dua regu akan berada di kawasan Ujungberung dan Cijaura Kota Bandung.</p>\r\n\r\n<p>&ldquo;Kita masih menunggu armadanya selesai, mudah-mudahan bulan ini sudah bisa beroperasi. Tim ini mirip tim URC jalan raya,&rdquo; ucapnya.</p>\r\n\r\n<p>Rosyidi berharap, keberadan tim khusus dapat membuat Kota Bandung tetap aman terkendali. Pasalnya, menurut dia, kurangnya penerangan jalan menjadi salah satu penyebab terjadinya tindak kriminal.</p>\r\n\r\n<p>&ldquo;Ini sudah tugas pokok kami, jangan sampai masyarakat kurang nyaman apalagi mengundang kejahatan karena kurangnya penerangan. Untuk warga yang ingin mengadu, silakan melalui akun Twitter DBMP. Kita akan respons cepat,&rdquo; tandas dia</p>\r\n', 'PJU.jpg', 3, 'http://infobandung.co.id/dbmp-kota-bandung-akan-luncurkan-tim-khusus-penerangan-jalan-umum/', '2015-08-22 16:45:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_galeri`
--

CREATE TABLE IF NOT EXISTS `dbmp_galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `dbmp_galeri`
--

INSERT INTO `dbmp_galeri` (`id`, `url`, `create_at`) VALUES
(23, '017f5-130702_perbaikan-jalan-5.jpg', '2015-08-15 06:12:13'),
(26, '9bddb-203317849.jpg', '2015-08-15 06:12:35'),
(27, '5a03a-32651166943jalan-diperbaiki.jpg', '2015-08-15 06:12:40'),
(28, 'd8c5b-dom-1403349301.jpg', '2015-08-15 06:12:43'),
(29, '743c8-e5cd60d8-5754-4686-9cae-3e38c4ba53d1_169.jpg', '2015-08-15 06:12:47'),
(30, '51646-infrastruktur-jalan.jpg', '2015-08-15 06:12:52'),
(31, 'a1845-perbaikan.jpg', '2015-08-15 06:12:55'),
(32, 'b1ac4-perbaikan-jalan-brawijaya-y.jpg', '2015-08-15 06:12:58'),
(33, '347de-jalan.jpg', '2015-08-15 06:13:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_galeri_drainase`
--

CREATE TABLE IF NOT EXISTS `dbmp_galeri_drainase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `dbmp_galeri_drainase`
--

INSERT INTO `dbmp_galeri_drainase` (`id`, `url`, `create_at`) VALUES
(18, 'bfd15-2411gorong-gorong.jpg', '2015-08-15 06:36:33'),
(19, '4606c-1797639.jpg', '2015-08-15 06:36:36'),
(20, 'a7f96-20100403baz_MENEMBUS_BANJIR_2.jpg', '2015-08-15 06:36:39'),
(21, '489b8-banjir-cileuncang1.jpg', '2015-08-15 06:36:46'),
(22, '32eb7-drainase.jpg', '2015-08-15 06:36:49'),
(23, '225be-Perencanaan-Ikut-Pengaruhi-Keterlambatan.jpg', '2015-08-15 06:36:52'),
(24, '3f39a-proyek-perbaikan-drainase-molor.jpg.gif', '2015-08-15 06:36:56'),
(25, 'a510c-url.jpg', '2015-08-15 06:36:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_galeri_pju`
--

CREATE TABLE IF NOT EXISTS `dbmp_galeri_pju` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `dbmp_galeri_pju`
--

INSERT INTO `dbmp_galeri_pju` (`id`, `url`, `create_at`) VALUES
(11, 'd451c-maxresdefault.jpg', '2015-08-15 06:18:47'),
(12, 'd9023-2.jpg', '2015-08-15 06:20:17'),
(13, 'a29a9-200-pju-klasik-hiasi-jalanan-kota-bandung-gpX.jpg', '2015-08-15 06:20:20'),
(14, '2cfa3-52466047555Gedung-Sate-pada-malam-hari-2.jpg', '2015-08-15 06:20:24'),
(15, '4a54e-pju-beng.jpg', '2015-08-15 06:20:28'),
(16, '6dcdd-satgaspju61.jpg', '2015-08-15 06:20:33'),
(17, '76f69-51540450565lampu-jalan.jpg', '2015-08-15 06:20:42'),
(18, 'e338b-150628173409-dbmp-akan-bangun-800-titik-smart-pju-system-.jpg', '2015-08-15 06:20:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_galeri_sungai`
--

CREATE TABLE IF NOT EXISTS `dbmp_galeri_sungai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `dbmp_galeri_sungai`
--

INSERT INTO `dbmp_galeri_sungai` (`id`, `url`, `create_at`) VALUES
(10, '3fa6a-16032011354.jpg', '2015-08-15 06:37:09'),
(11, '017d3-150223164228-yes--sungai-di-samping-kantor-ridwan-kamil-semakin-cantik.jpg', '2015-08-15 06:37:16'),
(12, '8abb6-150417043727-dbmp-kota-bandung-membersihkan-sungai-cikapundung.JPG', '2015-08-15 06:37:18'),
(13, '331f5-CByzFt9UoAERv7T.jpg', '2015-08-15 06:37:21'),
(14, 'ecf3b-CGI7pXIUgAAURMa-600x350.jpg', '2015-08-15 06:37:24'),
(15, '6fbe1-maxresdefault.jpg', '2015-08-15 06:37:26'),
(16, 'affbb-maxresdefault2.jpg', '2015-08-15 06:37:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_jawaban`
--

CREATE TABLE IF NOT EXISTS `dbmp_jawaban` (
  `jawaban_id` int(11) NOT NULL AUTO_INCREMENT,
  `kuisioner_id` int(11) NOT NULL,
  `jawaban_a` varchar(50) NOT NULL,
  `jawaban_b` varchar(50) NOT NULL,
  `jawaban_c` varchar(50) NOT NULL,
  `jawaban_d` varchar(50) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`jawaban_id`),
  KEY `fk_cat_answer` (`kuisioner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `dbmp_jawaban`
--

INSERT INTO `dbmp_jawaban` (`jawaban_id`, `kuisioner_id`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `update_at`) VALUES
(1, 1, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', '2015-08-09 03:43:52'),
(2, 2, 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', '2015-08-09 03:52:07'),
(3, 3, 'Tidak Jelas', 'Kurang Jelas', 'Jelas', 'Sangat Jelas', '2015-08-09 03:52:08'),
(4, 4, 'Tidak Disiplin', 'Kurang Disiplin', 'Disiplin', 'Sangat Disiplin', '2015-08-09 03:52:09'),
(5, 5, 'Tidak Bertanggung Jawab', 'Kurang Bertanggung Jawab', 'Bertanggung Jawab', 'Sangat Bertanggung Jawab', '2015-08-09 03:52:09'),
(6, 6, 'Tidak Mampu', 'Kurang Mampu', 'Mampu', 'Sangat Mampu', '2015-08-09 03:52:10'),
(7, 7, 'Tidak Cepat', 'Kurang Cepat', 'Cepat', 'Sangat Cepat', '2015-08-09 03:52:11'),
(8, 8, 'Tidak Adil', 'Kurang Adil', 'Adil', 'Sangat Adil', '2015-08-09 03:52:11'),
(9, 9, 'Tidak Sopan dan Ramah', 'Kurang Sopan dan Ramah', 'Sopan dan Ramah', 'Sangat Sopan dan Ramah', '2015-08-09 03:52:12'),
(10, 10, 'Tidak Wajar', 'Kurang Wajar', 'Wajar', 'Sangat wajar', '2015-08-09 03:52:14'),
(11, 11, 'Selalu Tidak Sesuai', 'Kadang-kadang Sesuai', 'Banyak Sesuainya', 'Selalu Sesuai', '2015-08-09 03:52:15'),
(12, 12, 'Selalu Tidak Tepat', 'Kadang-kadang Tepat', 'Banyak Tepatnya', 'Selalu Tepat', '2015-08-09 03:52:16'),
(13, 13, 'Tidak Nyaman', 'Kurang Nyaman', 'Nyaman', 'Sangat Nyaman', '2015-08-09 03:52:17'),
(14, 14, 'Tidak Aman', 'Kurang Aman', 'Aman', 'Sangat Aman', '2015-08-09 03:52:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_kategori`
--

CREATE TABLE IF NOT EXISTS `dbmp_kategori` (
  `kategori_id` int(1) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dbmp_kategori`
--

INSERT INTO `dbmp_kategori` (`kategori_id`, `nama_kategori`, `create_at`) VALUES
(1, 'jalan', '2015-08-08 14:25:24'),
(2, 'pju', '2015-08-08 14:25:29'),
(3, 'drainase', '2015-08-08 14:25:36'),
(4, 'sungai', '2015-08-08 14:25:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_kegiatan`
--

CREATE TABLE IF NOT EXISTS `dbmp_kegiatan` (
  `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(1) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kegiatan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `dbmp_kegiatan`
--

INSERT INTO `dbmp_kegiatan` (`kegiatan_id`, `kategori`, `judul`, `isi`, `image`, `user_id`, `create_at`) VALUES
(17, 1, 'Kegiatan 1', '<p >Bandung (14/4) Dinas Bina Marga dan Pengairan Kota Bandung (DBMP) mengadakan kunjungan terkait permasalahan dibidang sumber daya air yang terjadi khususnya di Kota Bandung. Beberapa permasalahan yang timbul diantaranya tidak berfungsinya saluran drainase yang menyebabkan banjir, pencemaran air dan kurangnya supply air baku yang dibutuhkan. Oleh karena itu dalam pemecahannya adalah sinergitas antara berbagai pihak yang berperan sebagai pemangku kepentingan SDA.</p>\r\n\r\n <p >Kepala Puslitbang SDA, Suprapto memberikan apresiasi yang tinggi terhadap DBMP Kota Bandung yang bermaksud untuk memperkenalkan program penjajakan kerja sama di bidang pengairan.&quot;Atas terselenggaranya acara ini saya ucapkan terimakasih, semoga kita dapat menjalin kerjasama antar instansi untuk menghasilkan sesuatu yang sangat berharga dan bermanfaan untuk kemajuan dan kebaikan bagi masyarakat, bangsa dan negara&quot; tutur Suprapto ketika memberikan sambutan.Target DBMP kota Bandung, dalam tiga tahun ke depan Kota Bandung terbebas dari banjir. Dengan kondisi yang dihadapi sekarang ini ada beberapa kegiatan yang akan dilakukan seperti usaha penanggulangan banjir dan pengeloaan sungai yang ada di Kota Bandung.DBMP kota Bandung, Iskandar Zulkarnain, menyatakan &quot;Bandung harus menjadi kota layak huni nomor satu se Indonesia di tahun 2017. &quot;Dengan kunjungan ini nantinya diharapkan menjadi solusi dalam pengembangan dan penyebarluasan ilmu di bidang sumber daya air sehingga tujuan mewujudkan Kota Bandung terbebas dari banjir dan layak huni bisa tercapai. (humas)</p>\r\n', 'kunjngBM.png', 5, '2015-08-28 15:35:42'),
(18, 2, 'Kegiatan 1', '<p >Bandung (14/4) Dinas Bina Marga dan Pengairan Kota Bandung (DBMP) mengadakan kunjungan terkait permasalahan dibidang sumber daya air yang terjadi khususnya di Kota Bandung. Beberapa permasalahan yang timbul diantaranya tidak berfungsinya saluran drainase yang menyebabkan banjir, pencemaran air dan kurangnya supply air baku yang dibutuhkan. Oleh karena itu dalam pemecahannya adalah sinergitas antara berbagai pihak yang berperan sebagai pemangku kepentingan SDA.</p>\r\n\r\n <p >Kepala Puslitbang SDA, Suprapto memberikan apresiasi yang tinggi terhadap DBMP Kota Bandung yang bermaksud untuk memperkenalkan program penjajakan kerja sama di bidang pengairan.&quot;Atas terselenggaranya acara ini saya ucapkan terimakasih, semoga kita dapat menjalin kerjasama antar instansi untuk menghasilkan sesuatu yang sangat berharga dan bermanfaan untuk kemajuan dan kebaikan bagi masyarakat, bangsa dan negara&quot; tutur Suprapto ketika memberikan sambutan.Target DBMP kota Bandung, dalam tiga tahun ke depan Kota Bandung terbebas dari banjir. Dengan kondisi yang dihadapi sekarang ini ada beberapa kegiatan yang akan dilakukan seperti usaha penanggulangan banjir dan pengeloaan sungai yang ada di Kota Bandung.DBMP kota Bandung, Iskandar Zulkarnain, menyatakan &quot;Bandung harus menjadi kota layak huni nomor satu se Indonesia di tahun 2017. &quot;Dengan kunjungan ini nantinya diharapkan menjadi solusi dalam pengembangan dan penyebarluasan ilmu di bidang sumber daya air sehingga tujuan mewujudkan Kota Bandung terbebas dari banjir dan layak huni bisa tercapai. (humas)</p>\r\n', 'kunjngBM1.png', 5, '2015-08-28 15:36:14'),
(19, 3, 'Kegiatan 1', '<p >Bandung (14/4) Dinas Bina Marga dan Pengairan Kota Bandung (DBMP) mengadakan kunjungan terkait permasalahan dibidang sumber daya air yang terjadi khususnya di Kota Bandung. Beberapa permasalahan yang timbul diantaranya tidak berfungsinya saluran drainase yang menyebabkan banjir, pencemaran air dan kurangnya supply air baku yang dibutuhkan. Oleh karena itu dalam pemecahannya adalah sinergitas antara berbagai pihak yang berperan sebagai pemangku kepentingan SDA.</p>\r\n\r\n <p >Kepala Puslitbang SDA, Suprapto memberikan apresiasi yang tinggi terhadap DBMP Kota Bandung yang bermaksud untuk memperkenalkan program penjajakan kerja sama di bidang pengairan.&quot;Atas terselenggaranya acara ini saya ucapkan terimakasih, semoga kita dapat menjalin kerjasama antar instansi untuk menghasilkan sesuatu yang sangat berharga dan bermanfaan untuk kemajuan dan kebaikan bagi masyarakat, bangsa dan negara&quot; tutur Suprapto ketika memberikan sambutan.Target DBMP kota Bandung, dalam tiga tahun ke depan Kota Bandung terbebas dari banjir. Dengan kondisi yang dihadapi sekarang ini ada beberapa kegiatan yang akan dilakukan seperti usaha penanggulangan banjir dan pengeloaan sungai yang ada di Kota Bandung.DBMP kota Bandung, Iskandar Zulkarnain, menyatakan &quot;Bandung harus menjadi kota layak huni nomor satu se Indonesia di tahun 2017. &quot;Dengan kunjungan ini nantinya diharapkan menjadi solusi dalam pengembangan dan penyebarluasan ilmu di bidang sumber daya air sehingga tujuan mewujudkan Kota Bandung terbebas dari banjir dan layak huni bisa tercapai. (humas)</p>\r\n', 'kunjngBM2.png', 5, '2015-08-28 15:37:13'),
(20, 4, 'Kegiatan 1', '<p >Bandung (14/4) Dinas Bina Marga dan Pengairan Kota Bandung (DBMP) mengadakan kunjungan terkait permasalahan dibidang sumber daya air yang terjadi khususnya di Kota Bandung. Beberapa permasalahan yang timbul diantaranya tidak berfungsinya saluran drainase yang menyebabkan banjir, pencemaran air dan kurangnya supply air baku yang dibutuhkan. Oleh karena itu dalam pemecahannya adalah sinergitas antara berbagai pihak yang berperan sebagai pemangku kepentingan SDA.</p>\r\n\r\n <p >Kepala Puslitbang SDA, Suprapto memberikan apresiasi yang tinggi terhadap DBMP Kota Bandung yang bermaksud untuk memperkenalkan program penjajakan kerja sama di bidang pengairan.&quot;Atas terselenggaranya acara ini saya ucapkan terimakasih, semoga kita dapat menjalin kerjasama antar instansi untuk menghasilkan sesuatu yang sangat berharga dan bermanfaan untuk kemajuan dan kebaikan bagi masyarakat, bangsa dan negara&quot; tutur Suprapto ketika memberikan sambutan.Target DBMP kota Bandung, dalam tiga tahun ke depan Kota Bandung terbebas dari banjir. Dengan kondisi yang dihadapi sekarang ini ada beberapa kegiatan yang akan dilakukan seperti usaha penanggulangan banjir dan pengeloaan sungai yang ada di Kota Bandung.DBMP kota Bandung, Iskandar Zulkarnain, menyatakan &quot;Bandung harus menjadi kota layak huni nomor satu se Indonesia di tahun 2017. &quot;Dengan kunjungan ini nantinya diharapkan menjadi solusi dalam pengembangan dan penyebarluasan ilmu di bidang sumber daya air sehingga tujuan mewujudkan Kota Bandung terbebas dari banjir dan layak huni bisa tercapai. (humas)</p>\r\n', 'kunjngBM3.png', 5, '2015-08-28 15:37:42'),
(21, 5, 'Kegiatan 1', '<p >Bandung (14/4) Dinas Bina Marga dan Pengairan Kota Bandung (DBMP) mengadakan kunjungan terkait permasalahan dibidang sumber daya air yang terjadi khususnya di Kota Bandung. Beberapa permasalahan yang timbul diantaranya tidak berfungsinya saluran drainase yang menyebabkan banjir, pencemaran air dan kurangnya supply air baku yang dibutuhkan. Oleh karena itu dalam pemecahannya adalah sinergitas antara berbagai pihak yang berperan sebagai pemangku kepentingan SDA.</p>\r\n\r\n <p >Kepala Puslitbang SDA, Suprapto memberikan apresiasi yang tinggi terhadap DBMP Kota Bandung yang bermaksud untuk memperkenalkan program penjajakan kerja sama di bidang pengairan.&quot;Atas terselenggaranya acara ini saya ucapkan terimakasih, semoga kita dapat menjalin kerjasama antar instansi untuk menghasilkan sesuatu yang sangat berharga dan bermanfaan untuk kemajuan dan kebaikan bagi masyarakat, bangsa dan negara&quot; tutur Suprapto ketika memberikan sambutan.Target DBMP kota Bandung, dalam tiga tahun ke depan Kota Bandung terbebas dari banjir. Dengan kondisi yang dihadapi sekarang ini ada beberapa kegiatan yang akan dilakukan seperti usaha penanggulangan banjir dan pengeloaan sungai yang ada di Kota Bandung.DBMP kota Bandung, Iskandar Zulkarnain, menyatakan &quot;Bandung harus menjadi kota layak huni nomor satu se Indonesia di tahun 2017. &quot;Dengan kunjungan ini nantinya diharapkan menjadi solusi dalam pengembangan dan penyebarluasan ilmu di bidang sumber daya air sehingga tujuan mewujudkan Kota Bandung terbebas dari banjir dan layak huni bisa tercapai. (humas)</p>\r\n', 'kunjngBM4.png', 5, '2015-08-28 15:38:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_kuisioner`
--

CREATE TABLE IF NOT EXISTS `dbmp_kuisioner` (
  `kuisioner_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kuisioner_id`),
  KEY `fk_category` (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data untuk tabel `dbmp_kuisioner`
--

INSERT INTO `dbmp_kuisioner` (`kuisioner_id`, `kategori_id`, `pertanyaan`, `create_at`) VALUES
(1, 1, 'Menurut Anda, seberapa mudah menyampaikan aspirasi pembangunan /perbaikan/pemeliharaan jalan?', '2015-05-30 03:29:33'),
(2, 1, 'Menurut Anda, Seberapa sesuai aspirasi pembangunan/perbaikan/pemeliharaan jalan ditangani?', '2015-05-30 03:30:28'),
(3, 1, 'Menurut Anda, seberapa jelas kemana aspirasi pembangunan/perbaikan /pemeliharaan jalan itu harus disampaikan?', '2015-05-30 03:30:40'),
(4, 1, 'Menurut Anda, seberapa disiplin aparat memberikan pelayanan pembangunan /perbaikan/pemeliharaan jalan?', '2015-05-30 03:31:01'),
(5, 1, 'Menurut Anda, seberapa bertanggung jawab petugas dalam memberikan pelayanan pembangunan/perbaikan /pemeliharaan jalan?', '2015-05-30 03:32:12'),
(6, 1, 'Menurut Anda, seberapa mampu petugas dalam memberikan pelayanan pembangunan/perbaikan/pemeliharaan jalan?', '2015-05-30 03:32:27'),
(7, 1, 'Menurut Anda, seberapa cepat petugas merespon kerusakan jalan?', '2015-05-30 03:32:54'),
(8, 1, 'Menurut Anda, seberapa adil petugas menentukan prioritas penanganan pembangunan/perbaikan/pemeliharaan jalan?', '2015-05-30 03:33:16'),
(9, 1, 'Menurut Anda, seberapa sopan dan ramah metugas dalam melaksanakan pembangunan/perbaikan/pemeliharaan jalan?', '2015-05-30 03:33:27'),
(10, 1, 'Menurut Anda, seberapa wajar kualitas pekerjaan jalan yang telah dilaksanakan dibanding biayanya?', '2015-05-30 03:33:57'),
(11, 1, 'Munurut Anda, seberapa sesuai kewajiban Anda tunaikan sebagai warga dengan hak pelayanan kualitas jalan yang diterima?', '2015-05-30 03:34:19'),
(12, 1, 'Menurut Anda, seberapa tepat waktu penanganan jalan terhadap jadwal pelaksanaan?', '2015-05-30 03:34:38'),
(13, 1, 'Menurut Anda, seberapa nyaman tata kelola (pengaturan) saat penanganan perbaikan jalan ?', '2015-05-30 03:35:11'),
(14, 1, 'Menurut Anda, seberapa aman infrastruktur jalan hasil perbaikan untuk digunakan?', '2015-05-30 03:35:20'),
(15, 2, 'Menurut Anda, seberapa mudah menyampaikan aspirasi pembangunan/perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-30 03:40:34'),
(16, 2, 'Menurut Anda, Seberapa sesuai aspirasi pembangunan/perbaikan/pemeliharaan Penerangan Jalan Umum (PJU) ditangani?', '2015-05-30 03:40:45'),
(17, 2, 'Menurut Anda, seberapa jelas kemana aspirasi pembangunan/perbaikan /pemeliharaan Penerangan Jalan Umum (PJU) itu harus disampaikan?', '2015-05-30 03:41:23'),
(18, 2, 'Menurut Anda, seberapa disiplin aparat memberikan pelayanan pembangunan/perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-30 03:41:36'),
(19, 2, 'Menurut Anda, seberapa bertanggung jawab petugas dalam memberikan pelayanan dalam pembangunan /perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-29 19:29:39'),
(20, 2, 'Menurut Anda, seberapa mampu petugas dalam memberikan pelayanan dalam pembangunan/perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-29 19:30:02'),
(21, 2, 'Menurut Anda, seberapa cepat petugas merespon kerusakan Penerangan Jalan Umum (PJU)?', '2015-05-29 19:30:27'),
(22, 2, 'Menurut Anda, seberapa adil petugas menentukan prioritas pembangunan /perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-29 19:30:55'),
(23, 2, 'Menurut Anda, seberapa sopan dan ramah petugas dalam melaksanakan pembangunan /perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)?', '2015-05-29 19:31:12'),
(24, 2, 'Menurut Anda, seberapa wajar kualitas pekerjaan Penerangan Jalan Umum (PJU) yang telah dilaksanakan dibanding biayanya', '2015-05-29 19:31:31'),
(25, 2, 'Munurut Anda, seberapa sesuai kewajiban Anda tunaikan sebagai warga dengan hak pelayanan kualitas Penerangan Jalan Umum (PJU) yang diterima', '2015-05-29 19:31:47'),
(26, 2, 'Menurut Anda, seberapa tepat waktu penanganan Penerangan Jalan Umum (PJU) terhadap jadwal pelaksanaan', '2015-05-29 19:32:04'),
(27, 2, 'Menurut Anda, seberapa nyaman tata kelola (pengaturan) saat penanganan pembangunan/perbaikan/pemeliharaan Penerangan Jalan Umum (PJU)? ', '2015-05-29 19:32:23'),
(28, 2, 'Menurut Anda, seberapa aman infrastruktur  Penerangan Jalan Umum (PJU) hasil pembangunan /perbaikan/pemeliharaan untuk digunakan', '2015-05-29 19:32:43'),
(29, 3, 'Menurut Anda, seberapa mudah menyampaikan aspirasi pembangunan/perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 07:19:07'),
(30, 3, 'Menurut Anda, Seberapa sesuai aspirasi pembangunan/perbaikan/pemeliharaan drainase jalan dan atau trotoar ditangani?', '2015-06-01 14:54:24'),
(31, 3, 'Menurut Anda, seberapa jelas kemana aspirasi pembangunan/perbaikan /pemeliharaan drainase jalan dan atau trotoar itu harus disampaikan?', '2015-06-01 14:54:50'),
(32, 3, 'Menurut Anda, seberapa disiplin aparat memberikan pelayanan pembangunan/perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 14:56:32'),
(33, 3, 'Menurut Anda, seberapa bertanggung jawab petugas dalam memberikan pelayanan dalam pembangunan /perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 14:56:44'),
(34, 3, 'Menurut Anda, seberapa mampu petugas dalam memberikan pelayanan dalam pembangunan/perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 14:56:58'),
(35, 3, 'Menurut Anda, seberapa cepat petugas merespon kerusakan drainase jalan dan atau trotoar?', '2015-06-01 14:57:30'),
(36, 3, 'Menurut Anda, seberapa adil petugas menentukan prioritas pembangunan /perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 14:57:40'),
(37, 3, 'Menurut Anda, seberapa sopan dan ramah petugas dalam melaksanakan pembangunan /perbaikan/pemeliharaan drainase jalan dan atau trotoar?', '2015-06-01 14:57:49'),
(38, 3, 'Menurut Anda, seberapa wajar kualitas pekerjaan drainase jalan dan atau trotoar yang telah dilaksanakan dibanding biayanya?', '2015-06-01 14:58:07'),
(39, 3, 'Munurut Anda, seberapa sesuai kewajiban Anda tunaikan sebagai warga dengan hak pelayanan kualitas drainase jalan dan atau trotoar yang diterima?', '2015-06-01 14:58:24'),
(40, 3, 'Menurut Anda, seberapa tepat waktu penanganan drainase jalan dan atau trotoar terhadap jadwal pelaksanaan?', '2015-06-01 14:58:49'),
(41, 3, 'Menurut Anda, seberapa nyaman tata kelola (pengaturan) saat penanganan pembangunan/perbaikan/pemeliharaan drainase jalan dan atau trotoar? ', '2015-06-01 14:59:02'),
(42, 3, 'Menurut Anda, seberapa aman infrastruktur  drainase jalan dan atau trotoar hasil pembangunan /perbaikan/pemeliharaan untuk digunakan', '2015-06-01 14:59:21'),
(43, 4, 'Menurut Anda, seberapa mudah menyampaikan aspirasi pembangunan/perbaikan/pemeliharaan sungai dan atau lingkungannya?', '2015-06-01 15:01:26'),
(44, 4, 'Menurut Anda, Seberapa sesuai aspirasi pembangunan/perbaikan/pemeliharaan sungai dan atau lingkungannya ditangani?', '2015-06-01 15:01:38'),
(45, 4, 'Menurut Anda, seberapa jelas kemana aspirasi pembangunan/perbaikan /pemeliharaan sungai dan atau lingkungannya itu harus disampaikan?', '2015-06-01 15:01:49'),
(46, 4, 'Menurut Anda, seberapa disiplin aparat memberikan pelayanan pembangunan/perbaikan/pemeliharaan sungai dan atau lingkungannya?', '2015-06-01 15:02:07'),
(47, 4, 'Menurut Anda, seberapa bertanggung jawab petugas dalam memberikan pelayanan dalam pembangunan /perbaikan/pemeliharaan sungai dan atau lingkungannya', '2015-06-01 15:02:18'),
(48, 4, 'Menurut Anda, seberapa mampu petugas dalam memberikan pelayanan dalam pembangunan/perbaikan/pemeliharaan sungai dan atau lingkungannya?', '2015-06-01 15:02:33'),
(49, 4, 'Menurut Anda, seberapa cepat petugas merespon kerusakan sungai dan atau lingkungannya?', '2015-06-01 15:02:43'),
(50, 4, 'Menurut Anda, seberapa adil petugas menentukan prioritas pembangunan /perbaikan/pemeliharaan sungai dan atau lingkungannya?', '2015-06-01 15:02:52'),
(51, 4, 'Menurut Anda, seberapa sopan dan ramah petugas dalam melaksanakan pembangunan /perbaikan/pemeliharaan sungai dan atau lingkungannya?', '2015-06-01 15:03:05'),
(52, 4, 'Menurut Anda, seberapa wajar kualitas pekerjaan sungai dan atau lingkungannya yang telah dilaksanakan dibanding biayanya?', '2015-06-01 15:03:18'),
(53, 4, 'Munurut Anda, seberapa sesuai kewajiban Anda tunaikan sebagai warga dengan hak pelayanan kualitas sungai dan atau lingkungannya yang diterima?', '2015-06-01 15:03:32'),
(54, 4, 'Menurut Anda, seberapa tepat waktu penanganan sungai dan atau lingkungannya terhadap jadwal pelaksanaan?', '2015-06-01 15:03:47'),
(55, 4, 'Menurut Anda, seberapa nyaman tata kelola (pengaturan) saat penanganan pembangunan/perbaikan/pemeliharaan sungai dan atau lingkungannya? ', '2015-06-01 15:03:57'),
(56, 4, 'Menurut Anda, seberapa aman infrastruktur  sungai dan atau lingkungannya hasil pembangunan /perbaikan/pemeliharaan untuk digunakan?', '2015-06-01 15:04:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_misi`
--

CREATE TABLE IF NOT EXISTS `dbmp_misi` (
  `misi_id` int(11) NOT NULL AUTO_INCREMENT,
  `misi` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`misi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `dbmp_misi`
--

INSERT INTO `dbmp_misi` (`misi_id`, `misi`, `create_at`) VALUES
(1, '<p>Meningkatkan aksesibilitas antar wilayah kota dan mobilisasi warga kota, di maksudkan untuk menghubungkan antar pusat kota dan sub sub pusat kota serta kemudahan pergerakan orang dan barang menjamin faktor keselamatan dan kecepatan.</p>', '2015-06-01 03:43:19'),
(3, '<p>Membangun jalan, trotoar dan drainase jalan kota dengan struktur yang berkualitas dan menjamin keselamatan pengguna, dimaksudkan untuk meningkatkan kualitas perkerasan jalan dan penyediaan trotoar dan drainase sehingga memberikan kenyamanan bagi kendaraaan dan pejalan kaki.</p>', '2015-06-01 03:44:17'),
(4, '<p>Menata sungai sebagai sistem drainase alami pengendali banjir dan bagian muka pembangunan kota (river-front city), dimaksudkan untuk mengakomodasi kebutuhan pengaliran air untuk mengalirkan air banjir, penggelontoran, dan fungsi lingkungan serta mewujudkan sistem drainase kota terpadu dengan konsep permanenan air hujan yang meminimalkan potensi banjir.</p>', '2015-06-01 03:57:43'),
(5, '<p>Pengembangan sistem penerangan jalan umum kota yang hemat energi, ramah lingkungan dan berestetika, dimaksudkan untuk melakukan pemerataan penerangan jalan dengan memanfaatkan teknologi yang hemat energi sehingga mampu mengurangi beban biaya bagi kota.</p>', '2015-06-01 03:58:41'),
(6, '<p>Meningkatkan akuntabilitas dan kinerja pelayanan SKPD Dinas Bina Marga da Pengairan, dimaksudkan untuk mengubah etos kerja dan kinerja dari birokrasi sebagai upaya mewujudkan reformasi birokrasi.</p>', '2015-06-01 03:59:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_polling`
--

CREATE TABLE IF NOT EXISTS `dbmp_polling` (
  `polling_id` int(20) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `no_1` int(2) NOT NULL,
  `no_2` int(2) NOT NULL,
  `no_3` int(2) NOT NULL,
  `no_4` int(2) NOT NULL,
  `no_5` int(2) NOT NULL,
  `no_6` int(2) NOT NULL,
  `no_7` int(2) NOT NULL,
  `no_8` int(2) NOT NULL,
  `no_9` int(2) NOT NULL,
  `no_10` int(2) NOT NULL,
  `no_11` int(2) NOT NULL,
  `no_12` int(2) NOT NULL,
  `no_13` int(2) NOT NULL,
  `no_14` int(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`polling_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `dbmp_polling`
--

INSERT INTO `dbmp_polling` (`polling_id`, `mobile`, `kategori`, `no_1`, `no_2`, `no_3`, `no_4`, `no_5`, `no_6`, `no_7`, `no_8`, `no_9`, `no_10`, `no_11`, `no_12`, `no_13`, `no_14`, `create_at`) VALUES
(1, '089657277334', '1', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-09-14 06:14:13'),
(2, '089657277334', '2', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2015-09-14 06:26:50'),
(3, '089657277334', '3', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2015-09-14 06:28:41'),
(4, '089657277334', '4', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-09-14 06:33:34'),
(5, '089657277335', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2015-09-14 06:25:13'),
(6, '089657277335', '2', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-09-14 06:27:58'),
(7, '089657277335', '3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2015-09-14 06:29:57'),
(8, '089657277335', '4', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2015-09-14 06:36:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_slide`
--

CREATE TABLE IF NOT EXISTS `dbmp_slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title_slide` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dbmp_slide`
--

INSERT INTO `dbmp_slide` (`slide_id`, `slide_name`, `image`, `title_slide`, `link`, `update_at`) VALUES
(1, '', 'trotoar3.jpg', 'Pejalan Kaki Keluhkan Ketidaknyamanan Trotoar Granit di Kota Bandung', 'http://localhost/binamarga/artikel/index/7', '2015-08-23 15:13:31'),
(2, '', 'jalan1.jpg', 'Jalan Mulus, Bina Marga Kini Fokus Drainase', 'http://localhost/binamarga/artikel/index/6', '2015-08-23 15:16:05'),
(3, '', 'jalan_rusak1.jpg', 'Perbaikan Jalan Protokol Kota Bandung Mulai Berjalan', 'http://localhost/binamarga/artikel/index/5', '2015-08-23 15:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_user`
--

CREATE TABLE IF NOT EXISTS `dbmp_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `dbmp_user`
--

INSERT INTO `dbmp_user` (`user_id`, `username`, `password`, `email`, `nama`, `level`) VALUES
(3, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'save.izuun@gmail.com', 'Admin 1', 'admin'),
(4, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'save_suarez@yahoo.com', 'Admin 2', 'admin'),
(5, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'savefaaizuun@gmail.com', 'SuperAdmin', 'super admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_visi`
--

CREATE TABLE IF NOT EXISTS `dbmp_visi` (
  `visi_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `visi` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`visi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `dbmp_visi`
--

INSERT INTO `dbmp_visi` (`visi_id`, `judul`, `visi`, `create_at`) VALUES
(1, 'Insfrastruktur Kebinamargaan : ', 'Adalah salah satu bidang pembangunan yang menangani jalan dan jembatan.', '2015-06-01 04:15:59'),
(2, 'Pengairan : ', 'Adalah salah satu bidang pembangunan yang menangani sungai dan sistem drainase.', '2015-06-01 04:15:56'),
(3, 'Penerangan Jalan Umum : ', 'Adalah salah satu bidang pembangunan yang menangani penerangan jalan umum.', '2015-06-01 04:16:24'),
(4, 'Unggul : ', 'Membangun insfrastruktur yang terbaik dan berkualitas sesuai dengan standar teknis yang di persyaratkan dan menjadi rujukan inovatif bagi kota lain.', '2015-06-01 04:17:49'),
(5, 'Nyaman : ', 'Merupakan suatu kondisi dimana kulaitas insfrastruktur terjaga baik dengan tingkat pelayanan yang optimal dalam menunjang aktivitas dan mobilisasi warga kota.', '2015-06-01 04:18:02'),
(6, 'Andal : ', 'Menjamin ketersediaan dan pelayanan insfrastruktur dalam rangka pemenuhan kebutuhan kota dan warganya.', '2015-06-01 04:18:24'),
(7, 'Kota Bandung Bermartabat : ', 'Adalah cita-cita jangka panjang tahun 2025 untuk mewujudkan Kota Bandung yang di cirikan dengan masyarakatnya bertaqwa pada Tuhan Yang Maha Esa, kota yang termakmur di indonesia, kota yang paling menonjol sisi keadilannya, kota terbersih di tingkat nasional, kota percontohan atas ketertiban semua aspek kehidupan perkotaan di indonesia, kota percontohan atas ketaatan serta kota yang teraman', '2015-06-01 04:18:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbmp_voter`
--

CREATE TABLE IF NOT EXISTS `dbmp_voter` (
  `voter_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(12) NOT NULL,
  `kode_verifikasi` varchar(6) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`voter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `dbmp_voter`
--

INSERT INTO `dbmp_voter` (`voter_id`, `mobile`, `kode_verifikasi`, `create_at`) VALUES
(1, '089657277334', '30bf', '2015-09-02 13:39:57'),
(2, '089657277334', '30bf', '2015-09-02 13:41:05'),
(3, '089657277334', '30bf', '2015-09-02 13:51:50'),
(4, '089657277334', '30bf', '2015-09-02 13:55:08'),
(5, '089657277335', '6289', '2015-09-14 06:23:56'),
(6, '089657277335', '6289', '2015-09-14 06:27:35'),
(7, '089657277335', '6289', '2015-09-14 06:28:56'),
(8, '089657277335', '6289', '2015-09-14 06:35:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
