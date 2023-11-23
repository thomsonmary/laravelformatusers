-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 04.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravelrpssap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanajar`
--

CREATE TABLE `bahanajar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `buku` text NOT NULL,
  `jurnal` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bahanajar`
--

INSERT INTO `bahanajar` (`id`, `judul`, `buku`, `jurnal`, `created_at`, `updated_at`) VALUES
(1, 'PemrogramanWeb', 'PemrogramanWeb', 'PemrogramanWeb', NULL, NULL),
(2, 'PemrogramanObjek', 'PemrogramanObjek', 'PemrogramanObjek', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `nidn_dosen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nama_dosen`, `nidn_dosen`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Faiza Rini,M.Kom', '1013067901', NULL, NULL),
(2, 'Anggri Y Pernanda, M.Kom', '1001079301', NULL, NULL),
(3, 'Thomson Mary, M.Kom​', '1017058002', NULL, NULL),
(4, 'Ade Pratama, M.Kom', '1020048403', NULL, NULL),
(5, 'Mourend Devegi, M.Kom', '1005108802', NULL, NULL),
(6, 'Rahayu T Untari, M.Kom', '1019028901', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaprodi`
--

CREATE TABLE `kaprodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL,
  `nidn_kaprodi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kaprodi`
--

INSERT INTO `kaprodi` (`id`, `nama_kaprodi`, `nidn_kaprodi`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Faiza Rini,M.Kom', '1013067901', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `sks_mk` varchar(255) NOT NULL,
  `semester_rps` varchar(255) NOT NULL,
  `kota_waktu` varchar(255) NOT NULL,
  `ketua_prodi` varchar(255) NOT NULL,
  `sinopsis_mk` text NOT NULL,
  `cpl_prodi` text NOT NULL,
  `media_software` text NOT NULL,
  `media_hardware` text NOT NULL,
  `prasyarat_mk` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_mk`, `kode_mk`, `sks_mk`, `semester_rps`, `kota_waktu`, `ketua_prodi`, `sinopsis_mk`, `cpl_prodi`, `media_software`, `media_hardware`, `prasyarat_mk`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web', 'TI1010', '3', 'Genap2022/2023', 'Padang, 17 Mei 2023', 'Faiza', 'P.web adalah...', 'Cpl prodi adalah...', 'xampp', 'laptop', 'Algo', NULL, NULL),
(2, 'Pemrograman Objek', 'TI2020', '3', 'Ganjil2022/2023', 'Padang 16 Mei 2023', 'Rini', 'P.objek adalah...', 'Cpl prodi adalah...', 'xampp8', 'PC labor', 'Algo', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(149, '2014_10_12_000000_create_users_table', 1),
(150, '2014_10_12_100000_create_password_resets_table', 1),
(151, '2019_08_19_000000_create_failed_jobs_table', 1),
(152, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(153, '2022_07_26_130409_create_roles_table', 1),
(154, '2022_07_26_130645_create_role_user_table', 1),
(155, '2022_07_26_131612_create_foreign_key_for_role_user_table', 1),
(156, '2023_01_28_095522_create_rps_table', 1),
(157, '2023_01_28_095534_create_sap_table', 1),
(158, '2023_01_28_095550_create_matakuliah_table', 1),
(159, '2023_01_28_095604_create_dosens_table', 1),
(160, '2023_01_28_095816_create_kaprodi_table', 1),
(161, '2023_01_28_095830_create_semesters_table', 1),
(162, '2023_01_28_095849_create_times_table', 1),
(163, '2023_01_28_100201_create_templaterps_table', 1),
(164, '2023_01_28_100202_create_templatesap_table', 1),
(165, '2023_01_28_100203_create_bahanajar_table', 1),
(166, '2023_01_28_100301_create_relations_table', 1),
(167, '2023_01_28_100302_create_foreign_key_for_relations_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `relations`
--

CREATE TABLE `relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rps_id` bigint(20) UNSIGNED NOT NULL,
  `sap_id` bigint(20) UNSIGNED NOT NULL,
  `mata_kuliah_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `kaprodi_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `template_rps_id` bigint(20) UNSIGNED NOT NULL,
  `template_sap_id` bigint(20) UNSIGNED NOT NULL,
  `bahan_ajar_id` bigint(20) UNSIGNED NOT NULL,
  `validasi_gkm` enum('valid','tidakvalid') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `relations`
--

INSERT INTO `relations` (`id`, `rps_id`, `sap_id`, `mata_kuliah_id`, `dosen_id`, `kaprodi_id`, `semester_id`, `time_id`, `template_rps_id`, `template_sap_id`, `bahan_ajar_id`, `validasi_gkm`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 3, 1, 4, 1, 1, 1, 1, 'valid', NULL, NULL),
(2, 2, 2, 2, 2, 1, 3, 2, 2, 2, 2, 'tidakvalid', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'dosen', NULL, NULL),
(3, 'gkm', NULL, NULL),
(4, 'homeless', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps`
--

CREATE TABLE `rps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rps` varchar(255) NOT NULL,
  `identitas_mk` varchar(255) NOT NULL,
  `team_teaching` text NOT NULL,
  `minggu_ke` text NOT NULL,
  `sub_cpmk` text NOT NULL,
  `bahan_kajian` text NOT NULL,
  `metode_pembelajaran` text NOT NULL,
  `estimasi_waktu` text NOT NULL,
  `bentuk_teknik` text NOT NULL,
  `indikator_penilaian` text NOT NULL,
  `bobot_penilaian` text NOT NULL,
  `norma_akademik` text NOT NULL,
  `nilai_akhir` text NOT NULL,
  `aturan_penilaian1` text NOT NULL,
  `aturan_penilaian2` text NOT NULL,
  `daftar_pustaka_wajib` text NOT NULL,
  `daftar_pustaka_pendukung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rps`
--

INSERT INTO `rps` (`id`, `nama_rps`, `identitas_mk`, `team_teaching`, `minggu_ke`, `sub_cpmk`, `bahan_kajian`, `metode_pembelajaran`, `estimasi_waktu`, `bentuk_teknik`, `indikator_penilaian`, `bobot_penilaian`, `norma_akademik`, `nilai_akhir`, `aturan_penilaian1`, `aturan_penilaian2`, `daftar_pustaka_wajib`, `daftar_pustaka_pendukung`, `created_at`, `updated_at`) VALUES
(1, 'Pemr.Web', 'Pemr.Web dg Laravel', 'Anggri', '2', 'Login Laravel', 'Pemr.web.dasar', 'Praktik.di.labor', '2x50Menit', 'pemb.luring', 'indikator..', '100', 'norma', '100', 'aturan1', 'aturan2', 'buku1,2,3,4', 'buku5,6,7,8', NULL, NULL),
(2, 'Pemr.Objek', 'Pemr.Objek dg PHP', 'Mourend', '4', 'Polymorphism', 'Class.dan.objek', 'Praktik.di.labor', '2x50Menit', 'pemb.luring', 'indikator..', '100', 'norma', '100', 'aturan1', 'aturan2', 'buku7,8,9,10', 'buku11,12,13,14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sap`
--

CREATE TABLE `sap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sap` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sap`
--

INSERT INTO `sap` (`id`, `nama_sap`, `created_at`, `updated_at`) VALUES
(1, 'Pemr.Web', NULL, NULL),
(2, 'Pemr.Objek', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL,
  `aktifkan_semester` enum('Y','N') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `aktifkan_semester`, `created_at`, `updated_at`) VALUES
(1, 'Semester Ganjil 2022/2023', 'Y', NULL, NULL),
(2, 'Semester Genap 2022/2023', 'Y', NULL, NULL),
(3, 'Semester Ganjil 2023/2024', 'Y', NULL, NULL),
(4, 'Semester Genap 2023/2024', 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `templaterps`
--

CREATE TABLE `templaterps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_template_rps` varchar(255) NOT NULL,
  `aktifkan_rps` enum('Y','N') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `templaterps`
--

INSERT INTO `templaterps` (`id`, `nama_template_rps`, `aktifkan_rps`, `created_at`, `updated_at`) VALUES
(1, 'Pertama', NULL, NULL, NULL),
(2, 'Kedua', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `templatesap`
--

CREATE TABLE `templatesap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_template_sap` varchar(255) NOT NULL,
  `aktifkan_sap` enum('Y','N') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `templatesap`
--

INSERT INTO `templatesap` (`id`, `nama_template_sap`, `aktifkan_sap`, `created_at`, `updated_at`) VALUES
(1, 'Pertama', NULL, NULL, NULL),
(2, 'Kedua', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `haritglblnthn` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `aktifkan_tahun` enum('Y','N') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `times`
--

INSERT INTO `times` (`id`, `haritglblnthn`, `tahun`, `aktifkan_tahun`, `created_at`, `updated_at`) VALUES
(1, 'Kamis, 25 Mei 2023', '2023', 'Y', NULL, NULL),
(2, 'Kamis, 26 Mei 2023', '2023', 'N', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `login`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$8CE3QxfZeGQAZ9B7h.CYKu1rCtndzYtPmWb4Zs4cmYK5ctsRcALDm', 'admin', NULL, NULL, NULL, NULL, NULL),
(2, 'dosen', 'dosen@dosen.com', NULL, '$2y$10$ORRXANO5NnCMhLxHd.PQKe9xz85REl5/96nbJ57fSh215O0YtjvQq', 'dosen', NULL, NULL, NULL, NULL, NULL),
(3, 'gkm', 'gkm@gkm.com', NULL, '$2y$10$YXCVXIPWWK0BTfgOf9a.k.aP89yPEWOB.B2qh9sBtOGYa52rsbW.K', 'gkm', NULL, NULL, NULL, NULL, NULL),
(4, 'HomeLess', 'homeless@homeless.com', NULL, '$2y$10$6KPAy9UrqrZw6e6Kfn3UI.0cYQuD9HcOSAFMfMYR5qhgxmJJkIFZ2', 'homeless', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahanajar`
--
ALTER TABLE `bahanajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kaprodi`
--
ALTER TABLE `kaprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations_rps_id_foreign` (`rps_id`),
  ADD KEY `relations_sap_id_foreign` (`sap_id`),
  ADD KEY `relations_mata_kuliah_id_foreign` (`mata_kuliah_id`),
  ADD KEY `relations_dosen_id_foreign` (`dosen_id`),
  ADD KEY `relations_kaprodi_id_foreign` (`kaprodi_id`),
  ADD KEY `relations_semester_id_foreign` (`semester_id`),
  ADD KEY `relations_time_id_foreign` (`time_id`),
  ADD KEY `relations_template_rps_id_foreign` (`template_rps_id`),
  ADD KEY `relations_template_sap_id_foreign` (`template_sap_id`),
  ADD KEY `relations_bahan_ajar_id_foreign` (`bahan_ajar_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sap`
--
ALTER TABLE `sap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `templaterps`
--
ALTER TABLE `templaterps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `templatesap`
--
ALTER TABLE `templatesap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahanajar`
--
ALTER TABLE `bahanajar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kaprodi`
--
ALTER TABLE `kaprodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `relations`
--
ALTER TABLE `relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rps`
--
ALTER TABLE `rps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sap`
--
ALTER TABLE `sap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `templaterps`
--
ALTER TABLE `templaterps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `templatesap`
--
ALTER TABLE `templatesap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_bahan_ajar_id_foreign` FOREIGN KEY (`bahan_ajar_id`) REFERENCES `bahanajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_kaprodi_id_foreign` FOREIGN KEY (`kaprodi_id`) REFERENCES `kaprodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_mata_kuliah_id_foreign` FOREIGN KEY (`mata_kuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_rps_id_foreign` FOREIGN KEY (`rps_id`) REFERENCES `rps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_sap_id_foreign` FOREIGN KEY (`sap_id`) REFERENCES `sap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_template_rps_id_foreign` FOREIGN KEY (`template_rps_id`) REFERENCES `templaterps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_template_sap_id_foreign` FOREIGN KEY (`template_sap_id`) REFERENCES `templatesap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relations_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
