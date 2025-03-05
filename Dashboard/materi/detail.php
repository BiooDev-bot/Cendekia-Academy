
  <section class="content">
    <div class="container">
      <h2 class="mb-4"><i class="fas fa-file-alt"></i> Materi: Pemrograman Dasar</h2>

      <div class="row">
        <!-- Video Pembelajaran -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-video"></i> Video Pembelajaran</h3>
            </div>
            <div class="card-body text-center">
              <iframe width="100%" height="400" src="https://www.youtube.com/embed/TanFwAcHBqE" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <!-- E-Book dan Download -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-book"></i> E-Book</h3>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fas fa-file-pdf text-danger"></i> 
                  <a href="ebook1.pdf" target="_blank"> Panduan Pemrograman Dasar</a>
                </li>
                <li class="list-group-item">
                  <i class="fas fa-file-pdf text-danger"></i> 
                  <a href="ebook2.pdf" target="_blank"> Logika & Algoritma</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Quiz / Latihan Soal -->
      <div class="card mt-4">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-question-circle"></i> Latihan Soal</h3>
        </div>
        <div class="card-body">
          <form id="quizForm">
            <div class="mb-3">
              <label>Pertanyaan 1: Apa output dari `print(5 + 3)` dalam Python?</label>
              <select class="form-control" id="jawaban1">
                <option value="">Pilih jawaban...</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="53">53</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Cek Jawaban</button>
          </form>
          <div id="quizResult" class="mt-3"></div>
        </div>
      </div>

    </div>
  </section>
<script>
  document.getElementById("quizForm").addEventListener("submit", function(e) {
    e.preventDefault();
    let jawaban = document.getElementById("jawaban1").value;
    let resultBox = document.getElementById("quizResult");

    if (jawaban === "8") {
      resultBox.innerHTML = `<div class="alert alert-success"><i class="fas fa-check-circle"></i> Jawaban Benar!</div>`;
    } else {
      resultBox.innerHTML = `<div class="alert alert-danger"><i class="fas fa-times-circle"></i> Jawaban Salah, coba lagi!</div>`;
    }
  });
</script>
