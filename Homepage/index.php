<?php 
$lesson=[
    [
        "img"=> "mtk.jpg",
        "materi"=> "Geometri Diferensial",
        "pemateri"=> "Darman Wiyanto",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Expert"
    ],
    [
        "img"=> "mtk.jpg",
        "materi"=> "Turunan",
        "pemateri"=> "Darman Wiyanto",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Hard"
    ],
    [
        "img"=> "ipa.jpg",
        "materi"=> "Stoikiometri",
        "pemateri"=> "Cella Hananta",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Hard"
    ],
    [
        "img"=> "ipa-2.jpg",
        "materi"=> "Struktur atom & Konfigurasi Elektron",
        "pemateri"=> "Cella Hananta",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Normal"
    ],[
        "img"=> "bing.jpg",
        "materi"=> "AP English Language & Composition",
        "pemateri"=> "Fuji Sastra Minarwa",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Expert"
    ],[
        "img"=> "bing-2.jpg",
        "materi"=> "IB English Language & Literature",
        "pemateri"=> "Fuji Sastra Minarwa",
        "page"=> "Belajar matematika tidak sesuah itu kok, jika tau apa yang harus kita lakukan. sama halnya cerita, matematika adalah cerita dengan angka, yuk belajar dengan Kak Darman agar Matematika lebih menarik dimata kamu.",
        "hard"=> "Expert"
    ]
];

$faq = [
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
    "gratis" => [
        "Ya! Kami menyediakan sesi uji coba gratis untuk calon siswa baru.",
        "Kamu bisa coba kelas pertama secara gratis sebelum memutuskan untuk daftar.",
        "Coba dulu kelas gratis kami! Hubungi admin untuk jadwalnya."
    ],
    "mendaftar kapan saja" => [
        "Pendaftaran dibuka sepanjang tahun! Kamu bisa daftar kapan saja.",
        "Kamu bisa bergabung kapan pun, tapi untuk program intensif ada batas waktu tertentu.",
        "Pendaftaran selalu terbuka, namun ada batasan kuota untuk beberapa kelas."
    ],
    "bagaimana cara mendaftar" => [
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
function get_response($question){
    global $faq;
    $question=strtolower($question);
    foreach ($faq as $key=>$value) {
        if(strpos($question,$key)!==false){
            $response=array_rand($value);
            $i=1;
            return $faq[$key][$response];
        }
    }
    if(!isset($i)){
        return "Maaf bot belum mengerti...";
    }
}
if(isset($_POST["chatsum"])){
    $on=true;
}

// button materi
if(isset($_POST["submit"])){
    header("Location: ../Login/login-v2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cendekia Academy</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
    />
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="" class="img-navbar"><img src="img/Cendekia Primary Logo.png" width="100%" alt=""></a>
        <div class="navbar-nav">
            <a href="">Beranda</a>
            <a href="#materi">Materi</a>
            <a href="#about">Tentang kami</a>
            <a href="#FAQ">FAQ</a>
            <a href="#kontak">Kontak</a>
        </div>
        <a href="" class="cta" id="openModal">Login</a>
    </nav>
    <!-- Navbar end -->

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close"><i data-feather="x"></i></span>
            <h2>Login Sebagai</h2>
            <button onclick="window.location.href='../Mentor/login-v2.php'">Mentor</button>
            <button onclick="window.location.href='../Login/login-v2.php'">Student</button>
        </div>
    </div>

     <!-- Chatbot start -->
    <div class="chatbot-container">
    <div class="chatbot-button" id="cB" onclick="toggleChat()">
        <img src="img/Cendekia Primary Logo.png" alt="Chatbot">
    </div>
    <div class="chatbot-window" id="chatWindow">
        <div class="chat-header">
            <h3>AI Assistant</h3>
            <a onclick="toggleChat()" style="cursor: pointer;"><i data-feather="x"></i></a>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="bot-typing" id="botTyping" style="display: none;">
                EduBot sedang mengetik<span class="dots">...</span>
            </div>
            <p class="bot-message">
                EduBot : <br>
                Halo! Ada yang bisa saya bantu?
            </p>
        </div>
        <div class="chat-footer">
            <form action="" method="post" class="chat-form" id="chat-form">
            <input type="text" id="chatInput" name="textbot" placeholder="Ketik pesan..." autocomplete="off">
            <button type="submit" name="chatsum">Send</button>
            </form>
        </div>
    </div>
    </div>
     <!-- Chatbot End -->



     <!-- Hero Section Start -->
    <section class="hero" id="home">
    <main class="content">
        <div class="hero-text">
            <p class="subheading">Kami ada untuk anda, <span>Kami ada untuk Ilmu</span></p>
            <h1>Belajar Kapan Saja, Di Mana Saja.</h1>
            <h2><span class="highlight">Cendekia Academy</span> Hadir dalam Genggaman Anda.</h2>
            <p class="description">
                Dari pemula hingga ahli, kami menyediakan jalur pembelajaran yang sesuai dengan kebutuhan Anda.
            </p>
            <a href="../Login/login-v2.php" class="cta-button">Mulai Sekarang</a>
            <p class="voucher">Gunakan kode voucher <span class="voucher-code">"SEMANGATKSATRIA"</span> untuk diskon 20%</p>
        </div>
    </main>
        <img src="img/img_org.png" alt="Orang Belajar" class="person-img">
    <div class="stats-container">
        <img src="img/lingkar1.png" alt="" class="circle1">
        <img src="img/lingkar2.png" alt="" class="circle2">
        <img src="img/lingkar3.png" alt=""class="circle3">
    </div>
    </section>
    <!-- Hero Materi End -->

    <!-- About Section Start -->
    <section class="about" id="materi">
    <h2>Kamu mau cari program apa?</h2>
    <h3>Temukan Disini!</h3>

    <form action="" method="post" class="search-form">
    <div class="input-container">
        <label for="kelas">Kelas</label>
        <div class="input-box">
            <input type="text" id="kelas" placeholder="Pilih Disini">
            <i class="search-icon" data-feather="search"></i>
        </div>
    </div>

    <div class="input-container">
        <label for="topik">Topik</label>
        <div class="input-box">
            <input type="text" id="topik" placeholder="Pilih Disini">
            <i class="search-icon" data-feather="search"></i>
        </div>
    </div>
        <button type="submit" name="submit" class="button-cari" style="width: 100px; height: 50px;">Cari</button>
    </form>

    <div class="materi-container">
        <?php foreach ($lesson as $key): ?>
            <div class="materi-card">
                <img src="img/<?= $key['img'] ?>" alt="<?= $key['materi'] ?>">
                <div class="materi-content">
                    <div class="card-header">
                        <h4 style="font-size:larger;"><?=$key["materi"]?></h4>
                        <img src="img/Cendekia Sub Logo.png" alt="Cendekia Logo">
                    </div>
                    <p class="pemateri"><?= $key['pemateri'] ?></p>
                    <p ></p><span class="level <?= strtolower($key['hard']) ?>"><?= $key['hard'] ?></span></p>
                    <p class="description"><?= $key['page'] ?></p>
                    <a href="../Login/login-v2.php" class="btn">Lihat Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="../Login/login-v2.php" class="more-program-btn">Lebih banyak program</a>
</section>
<!-- Section Materi End -->

<!-- Section About -->
<section class="tentang" id="about">
    <div class="tentang-header">
        <div class="tentang-text">
            <h2>Kami adalah Platform pendidikan tanpa batas yang dapat diakses kapan saja dan di mana saja melalui pembelajaran interaktif dan gamifikasi</h2>
            <br>
            <p>Platform ini juga berfokus pada peserta didik memperoleh keterampilan digital dan guru menjadi lebih mahir dalam menggunakan teknologi untuk meningkatkan pembelajaran.</p>
        </div>
        <div class="tentang-logo">
            <a href="../Login/login-v2.php"><img src="img/Cendekia Primary Logo.png" alt="Cendekia Academy"></a>
        </div>
    </div>
    <div class="tentang-images">
        <img src="img/image.jpg" alt="Students Learning">
        <img src="img/image (1).jpg" alt="Online Learning">
    </div>
    <div class="tentang-vision-mission">
        <div class="vision">
            <h3>Visi Kami</h3>
            <p>Menjadi platform pembelajaran online terdepan yang memberdayakan setiap individu untuk meraih potensi maksimal mereka.</p>
        </div>
        <div class="mission">
            <h3>Misi Kami</h3>
            <ul>
                <li>Menyediakan akses mudah ke pendidikan berkualitas tinggi, kapan saja dan di mana saja.</li>
                <li>Menciptakan pengalaman belajar yang interaktif, menarik, dan relevan.</li>
                <li>Membangun komunitas pembelajar yang saling mendukung.</li>
            </ul>
        </div>
    </div>
</section>
<!-- FAQ Section -->
<section class="faq-container" id="FAQ">
        <div class="faq-left">
            <h2>Punya Pertanyaan?<br> Kita bisa bantu kok!</h2>
            <p>Kita sebisa mungkin akan menjawab pertanyaan dari kamu, atau jika kamu punya pertanyaan lain bisa hubungi kami di bawah ya!</p>
        </div>
        <div class="faq-right">
            <div class="faq-item">
                <div class="faq-question">Bagaimana Cara untuk mendaftar? <span>+</span></div>
                <div class="faq-answer">Anda dapat mendaftar di Cendekia Academy dengan membuat akun melalui website kami. Cukup masukkan nama, email, dan kata sandi, kemudian lengkapi profil Anda. Setelah itu, Anda bisa langsung mengakses kelas yang tersedia di website kami.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Ada berapa Mentor disini? <span>+</span></div>
                <div class="faq-answer">Kami memiliki sejumlah mentor yang berpengalaman di bidang nya masing-masing. Saat ini, kami terus menambah jumlah mentor agar bisa memberikan pengalaman belajar yang lebih baik.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah akan mendapatkan sertifikat? <span>+</span></div>
                <div class="faq-answer">Ya! Setelah menyelesaikan kelas dan memenuhi syarat, Anda akan mendapatkan sertifikat penghargaan karena telah menyelesaikan pembelajaran di Cendekia Academy.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah ada Diskon? <span>+</span></div>
                <div class="faq-answer">Kami tentunya sering menawarkan promo dan diskon menarik! Selalu pantau website atau media sosial kami untuk informasi terbaru tentang penawaran spesial.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Apakah ada grup diskusinya? <span>+</span></div>
                <div class="faq-answer">Ya, kami menyediakan grup diskusi bagi pengguna untuk berdiskusi, bertanya, dan berbagi pengalaman tentang bidang yang mereka minati.</div>
            </div>
        </div>
</section>

<!-- Contact -->
<section class="contact-section" id="kontak">
    <div class="container">
        <h2 class="contact-title">Hubungi Kami</h2>
        <p class="contact-subtitle">Ini adalah kontak kami ya! Jika ingin bertanya jangan sungkan!</p>
        
        <div class="contact-grid">
            <div class="contact-box instagram">
                <h3 class="contact-label">Instagram</h3>
                <p class="contact-info">@cendekiaacademy</p>
            </div>
            <div class="contact-box gmail">
                <h3 class="contact-label">Gmail</h3>
                <p class="contact-info">cendekiaacademy@gmail.com</p>
            </div>
            <div class="contact-box map">
                <h3 class="contact-label">Map</h3>
                <p class="contact-info">Jl. Perintis no 5 RT 10 RW09, Kec Ayam Kampung, Kel Saripati, Kota Jakarta Pusat</p>
            </div>
            <div class="contact-box phone">
                <h3 class="contact-label">Telepon</h3>
                <p class="contact-info">+62 852-6675-7620 <br>+62 859-2034-6964</p>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-left">
            <img src="img/Cendekia Primary Logo.png" alt="Cendekia Logo" class="footer-logo">
            <p>Kami ada untuk Anda <br> Kami ada untuk Ilmu.</p>
        </div>
        <div class="footer-right">
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#materi">Materi</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#FAQ">FAQ</a></li>
                </ul>
            </nav>
            <p>cendekiaacademy@gmail.com | +62 852-6675-7620</p>
        </div>
    </footer>
</section>

<!-- feather icons -->
<script>
      feather.replace();

        document.querySelectorAll(".faq-item").forEach(item => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        question.addEventListener("click", () => {
        const isActive = item.classList.contains("active");

        // Tutup semua yang lain dulu
        document.querySelectorAll(".faq-item").forEach(faq => {
            faq.classList.remove("active");
            faq.querySelector(".faq-answer").style.maxHeight = "0px";
        });

        // Kalau sebelumnya tertutup, buka yang ini
        if (!isActive) {
            item.classList.add("active");
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
        });
        });

    function toggleChat() {
        const chatWindow = document.getElementById("chatWindow");
        const chatButton = document.getElementById("cB");
        if (chatWindow.classList.contains("show")) {
        chatWindow.classList.remove("show");
        setTimeout(() => {
            chatButton.style.display = "flex";
            chatWindow.style.display = "none";
        }, 300); // Waktu delay sesuai animasi
    } else {
        chatWindow.style.display = "flex";
        chatButton.style.display = "none";
        setTimeout(() => {
            chatWindow.classList.add("show");
        }, 10);
    }
    }
</script>

<script>
        var modal = document.getElementById("loginModal");
        var btn = document.getElementById("openModal");
        var close = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            event.preventDefault();
            modal.style.display = "block";
        }
        close.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let kelasInput = document.getElementById("kelas");
    let topikInput = document.getElementById("topik");

    function fetchSuggestions(inputField) {
        let query = inputField.value.trim();
        if (query.length < 2) return; // Mulai cari setelah 2 huruf

        let xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?query=" + encodeURIComponent(query), true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                let suggestions = JSON.parse(xhr.responseText);
                showSuggestions(suggestions, inputField);
            }
        };

        xhr.send();
    }

    function showSuggestions(suggestions, inputField) {
        let suggestionBox = document.createElement("div");
        suggestionBox.classList.add("suggestion-box");
        suggestionBox.innerHTML = suggestions.map(item => `<div class="suggestion-item">${item}</div>`).join("");

        // Hapus suggestion sebelumnya
        let oldBox = inputField.nextElementSibling;
        if (oldBox && oldBox.classList.contains("suggestion-box")) {
            oldBox.remove();
        }

        inputField.parentNode.appendChild(suggestionBox);

        // Pilih suggestion
        suggestionBox.querySelectorAll(".suggestion-item").forEach(item => {
            item.addEventListener("click", function () {
                inputField.value = this.textContent;
                suggestionBox.remove();
            });
        });
    }

    kelasInput.addEventListener("input", () => fetchSuggestions(kelasInput));
    topikInput.addEventListener("input", () => fetchSuggestions(topikInput));

    document.addEventListener("click", function (e) {
        if (!e.target.classList.contains("suggestion-item")) {
            document.querySelectorAll(".suggestion-box").forEach(box => box.remove());
        }
    });
});
</script>



<script>
    document.getElementById("chat-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah reload

        let userMessage = document.getElementById("chatInput").value;
        let chatBody = document.getElementById("chatBody");

        if (userMessage.trim() === "") return; // Cegah kirim pesan kosong

        // Tampilkan pesan user di chat-box
        chatBody.innerHTML += `<div class="user-message" style="text-align:right">User : ${userMessage}</div>`;

        // Tampilkan animasi "Bot sedang mengetik..."
        let typingIndicator = document.createElement("div");
        typingIndicator.classList.add("bot-message");
        typingIndicator.innerHTML = "EduBot : <br> <i>Sedang mengetik...</i>";
        chatBody.appendChild(typingIndicator);
        chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll

        // Kirim pesan ke PHP tanpa reload (AJAX)
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "chatbot.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (xhr.status === 200) {
                setTimeout(function() { // Delay 5 detik
                    typingIndicator.remove(); // Hapus teks "Bot sedang mengetik..."
                    chatBody.innerHTML += `<div class="bot-message">EduBot : <br> ${xhr.responseText}</div>`;
                    chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll
                },      2000); // Delay 5 detik (5000ms)
            }
        };

        xhr.send("textbot=" + encodeURIComponent(userMessage));

        // Kosongkan input setelah kirim
        document.getElementById("chatInput").value = "";
    });
</script>

</body>
</html>