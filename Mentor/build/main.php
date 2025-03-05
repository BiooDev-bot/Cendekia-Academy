<section class="content">
  <div class="container-fluid">
      <div class="row">
        
        <!-- Profil Siswa -->
        <div class="col-md-4">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="profile/<?=$pp?>.jpg"
                   alt="User profile picture">
              <h3 class="profile-username"><?=$nama?></h3>
              <p class="text-muted">Kelas X IPA 1</p>
            </div>
          </div>
        </div>

        <!-- Status Kehadiran -->
        <div class="col-md-4">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-user-check"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Status Kehadiran</span>
              <span class="info-box-number">Hadir</span>
            </div>
          </div>
        </div>

        <!-- Total Nilai Rata-rata -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Progress Nilai</h3>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="nilaiChart" height="150"></canvas>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Jadwal Pelajaran -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jadwal Pelajaran Hari Ini</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Jam</th>
                <th>Mata Pelajaran</th>
                <th>Guru</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>07:00 - 08:30</td>
                <td>Matematika</td>
                <td>Mr. Budi</td>
              </tr>
              <tr>
                <td>08:30 - 10:00</td>
                <td>Bahasa Indonesia</td>
                <td>Mrs. Sari</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</section>