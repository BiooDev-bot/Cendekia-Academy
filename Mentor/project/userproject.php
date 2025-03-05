<div class="content-wrapper">
    <section class="content">
        <div class="container mt-4">
            
            <!-- Judul & Gambar -->
            <div class="text-center mb-4">
                <h2 class="font-weight-bold" id="projectTitle">Nama Proyek</h2>
                <p class="text-muted">Dibuat oleh <span id="projectOwner">Nama Siswa</span></p>
                <img id="projectImage" src="https://via.placeholder.com/600x300" class="img-fluid rounded shadow-sm" alt="Project Image">
            </div>

            <!-- Deskripsi & Info Teknologi -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fas fa-info-circle"></i> Deskripsi</h5>
                            <p id="projectDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><i class="fas fa-tools"></i> Teknologi yang Digunakan</h5>
                            <ul id="projectTech">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Like & Komentar -->
            <div class="mt-4">
                <h5>💬 Komentar</h5>
                <textarea class="form-control mb-2" placeholder="Tulis komentar..."></textarea>
                <button class="btn btn-primary"><i class="fas fa-paper-plane"></i> Kirim</button>

                <h5 class="mt-3">❤️ Likes</h5>
                <button class="btn btn-danger" id="likeButton">👍 Like</button> 
                <span id="likeCount">0</span> Suka
            </div>

        </div>
    </section>
</div>
