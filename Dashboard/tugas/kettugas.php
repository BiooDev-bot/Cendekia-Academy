
  <section class="content">
    <div class="container-fluid">
      
      <!-- Header -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-3"><i class="fas fa-book"></i> Tugas Matematika</h2>
          <p><strong>Deadline:</strong> 10 Maret 2024</p>
        </div>
      </div>

      <!-- Detail Tugas -->
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Instruksi Tugas</h3>
            </div>
            <div class="card-body">
              <p>Silakan kerjakan soal berikut ini dan unggah jawabannya dalam bentuk file PDF.</p>
            </div>
          </div>

          <!-- Form Jawaban -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kirim Jawaban</h3>
            </div>
            <div class="card-body">
              <form action="upload-jawaban.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Jawaban (Upload PDF/DOC)</label>
                  <input type="file" class="form-control" name="fileJawaban">
                </div>
                <button type="submit" class="btn btn-success">
                  <i class="fas fa-upload"></i> Kirim Jawaban
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- Feedback Mentor -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title">Feedback Mentor</h3>
            </div>
            <div class="card-body">
              <p><strong>Status:</strong> Sudah Diperiksa</p>
              <p><strong>Nilai:</strong> 85</p>
              <p><strong>Catatan:</strong> Jawaban sudah benar, hanya perlu sedikit perbaikan di bagian ke-2.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
