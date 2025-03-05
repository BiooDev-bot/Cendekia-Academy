<?php
if (isset($_GET['query'])) {
    $query = strtolower($_GET['query']);

    // Contoh data (bisa diganti dengan database)
    $data = [
        // Matematika
        "Penjumlahan dan Pengurangan",
        "Perkalian dan Pembagian",
        "Pecahan dan Desimal",
        "Bilangan Bulat dan Negatif",
        "Kelipatan dan Faktor",
        "Persamaan dan Pertidaksamaan Linear",
        "Bangun Datar dan Bangun Ruang",
        "Teorema Pythagoras",
        "Trigonometri Dasar",
        "Peluang dan Statistika",
        "Limit dan Turunan",
        "Integral dan Aplikasinya",
        
        // IPA (Sains)
        "Gaya dan Gerak",
        "Hukum Newton",
        "Energi dan Daya",
        "Suhu dan Kalor",
        "Bunyi dan Gelombang",
        "Listrik dan Magnet",
        "Cahaya dan Optik",
        "Struktur dan Fungsi Sel",
        "Reproduksi Makhluk Hidup",
        "Genetika dan Pewarisan Sifat",
        "Ekosistem dan Lingkungan",
        "Reaksi Kimia",
        "Stoikiometri",
        "Ikatan Kimia",
        "Asam dan Basa",
        "Hidrokarbon dan Minyak Bumi",
        
        // IPS (Sosial)
        "Perkembangan Kerajaan Hindu-Buddha",
        "Sejarah Islam di Nusantara",
        "Peristiwa Proklamasi Kemerdekaan",
        "Demokrasi dan Pemerintahan",
        "Sistem Ekonomi",
        "Globalisasi dan Dampaknya",
        "Urbanisasi dan Masalah Sosial",
        "Hukum dan Hak Asasi Manusia",
        "Peta dan Koordinat Geografis",
        "Dinamika Penduduk dan Migrasi",
        
        // Bahasa Indonesia
        "Membaca Pemahaman",
        "Menulis Esai dan Opini",
        "Struktur Kalimat dan Paragraf",
        "Majas dan Gaya Bahasa",
        "Teks Eksposisi dan Argumentasi",
        
        // Bahasa Inggris
        "Grammar Dasar (Tenses, Preposition, Pronoun)",
        "Speaking dan Pronunciation",
        "Reading Comprehension",
        "Writing Formal dan Informal",
        "Listening dan Vocabulary Building",
        
        // Teknologi dan Informatika
        "Dasar-Dasar Algoritma dan Logika",
        "Pemrograman Python Dasar",
        "Pemrograman C++ Dasar",
        "Struktur Data dan Algoritma",
        "Basis Data dan SQL",
        "Jaringan Komputer dan Internet",
        "Cyber Security Dasar",
        "Artificial Intelligence Introduction",
        "Machine Learning Dasar",
        "Internet of Things (IoT)",
        
        // Ekonomi dan Bisnis
        "Akuntansi Dasar",
        "Manajemen Keuangan",
        "Investasi dan Pasar Modal",
        "Kewirausahaan dan Startup",
        "Pemasaran Digital",
        
        // Fisika Lanjutan
        "Dinamika Rotasi dan Momentum Sudut",
        "Fluida Statis dan Dinamis",
        "Termodinamika",
        "Relativitas Dasar",
        "Fisika Kuantum",
        
        // Kimia Lanjutan
        "Termokimia",
        "Elektrokimia",
        "Kinetika Reaksi",
        "Kimia Organik Sintesis",
        
        // Biologi Lanjutan
        "Bioteknologi dan Rekayasa Genetika",
        "Neurosains Dasar",
        "Imunologi dan Sistem Kekebalan",
        "Biologi Evolusi",
        
        // Geografi
        "Geografi Fisik dan Geomorfologi",
        "Perubahan Iklim Global",
        "Peta dan Sistem Informasi Geografis (SIG)",
        
        // Sejarah
        "Perang Dunia I dan II",
        "Sejarah Revolusi Industri",
        "Kolonialisme dan Imperialisme",
        
        // Ilmu Sosial Lanjutan
        "Psikologi Dasar",
        "Sosiologi Digital",
        "Hukum Internasional",
        "Filsafat Ilmu",
        
        // Seni dan Desain
        "Dasar-Dasar Desain Grafis",
        "Prinsip Animasi 2D dan 3D",
        "Sinematografi dan Editing Video",
        "Fotografi Digital",
        
        // Lainnya
        "Metodologi Penelitian",
        "Statistika Inferensial",
        "Etika Profesi dan Hukum Teknologi",
        "Pemikiran Kritis dan Logika",
        "Keamanan Siber Lanjutan",
    ];
    

    $result = array_filter($data, function ($item) use ($query) {
        return strpos(strtolower($item), $query) !== false;
    });

    echo json_encode(array_values($result));
}
?>
