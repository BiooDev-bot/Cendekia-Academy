<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = trim($_POST["textbot"]);

    // Cek apakah ada input user
    if (!empty($userMessage)) {
        // Contoh respons chatbot sederhana
        $responses = [
            "program" => [
                "Kami menyediakan berbagai bidang mata pelajaran. Kamu minatnya kemana nih? biar kita bisa bahas lebih lanjut.",
                "Program bimbel kami meliputi Matematika, Fisika, Kimia, Bahasa Inggris, dan banyak lagi.",
                "Kami memiliki kelas reguler, intensif UTBK, dan persiapan ujian nasional."
            ],
            "biaya" => [
                "Biaya bimbel bervariasi tergantung program. Silakan cek website atau hubungi admin untuk detailnya.",
                "Kami punya beberapa paket harga yang bisa disesuaikan dengan kebutuhan kamu!",
                "Silakan hubungi customer service kami untuk informasi biaya lengkap."
            ],
            "online" => [
                "Ya, kami menyediakan kelas online dengan jadwal fleksibel.",
                "Kelas online kami dilakukan melalui Zoom dengan rekaman yang bisa diakses kembali.",
                "Selain offline, kami juga punya bimbel online dengan tutor interaktif!"
            ],
            "durasi" => [
                "Setiap sesi bimbel berlangsung sekitar 90 menit.",
                "Durasi kelas kami rata-rata 1,5 jam, bisa lebih lama untuk kelas intensif.",
                "Sesi belajar biasanya berlangsung antara 60-120 menit tergantung jenis kelas."
            ],
            "uji coba" => [
                "Ya! Kami menyediakan sesi uji coba gratis untuk calon siswa baru.",
                "Kamu bisa coba kelas pertama secara gratis sebelum memutuskan untuk daftar.",
                "Coba dulu kelas gratis kami! Hubungi admin untuk jadwalnya."
            ],
            "mendaftar kapan saja" => [
                "Pendaftaran dibuka sepanjang tahun! Kamu bisa daftar kapan saja.",
                "Kamu bisa bergabung kapan pun, tapi untuk program intensif ada batas waktu tertentu.",
                "Pendaftaran selalu terbuka, namun ada batasan kuota untuk beberapa kelas."
            ],
            "cara mendaftar" => [
                "Mudah! Kamu bisa daftar lewat website atau langsung ke kantor kami.",
                "Pendaftaran bisa dilakukan secara online melalui website atau WhatsApp admin.",
                "Hubungi admin kami untuk panduan pendaftaran lebih lanjut!"
            ],
            "materi tambahan" || "latihan soal" => [
                "Tentu! Kami menyediakan banyak latihan soal dan materi tambahan untuk siswa.",
                "Setiap siswa mendapatkan modul dan akses ke latihan soal online.",
                "Selain kelas, kami juga menyediakan bank soal dan pembahasan untuk latihan."
            ],
            "menghubungi admin" => [
                "Kamu bisa menghubungi admin melalui WhatsApp atau email kami.",
                "Silakan kontak kami di nomor 081234567890 atau email info@bimbel.com.",
                "Admin kami siap membantu! Hubungi kami di halaman kontak di website."
            ]
        ];

        $userMessageLower = strtolower($userMessage);
        foreach ($responses as $key => $value) {
            if(strpos($userMessageLower,$key)!==false){
                $answer = array_rand($value);
                $botResponse = $responses[$key][$answer] ?? "Maaf, saya tidak mengerti.";
            }
        }
        echo $botResponse; // Kirim respons ke AJAX
    }
}
?>
