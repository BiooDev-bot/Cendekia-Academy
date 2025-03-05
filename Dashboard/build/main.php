<section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- Kartu Profil User -->
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-body text-center">
                                <img src="profile/<?= $user['profile_pic'] ?>" alt="User Avatar" class="img-circle elevation-2" width="100" height="100">
                                <h3 class="mt-2"><?= $user['name'] ?></h3>
                                <p class="text-muted"><i class="fas fa-envelope"></i> <?= $user['email'] ?></p>
                                <p class="text-muted"><i class="fas fa-phone"></i> <?= $user['phone'] ?></p>
                                <blockquote class="blockquote">
                                    <p>"<?= $user['quote'] ?>"</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Statistik Tipe Belajar (VARK) -->
                    <div class="col-md-6">
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Tipe belajar</h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <canvas id="learningChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>

                    <!-- Progress Bakat -->
                    <div class="col-md-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-lightbulb"></i> Bakat & Keahlian</h3>
                            </div>
                            <div class="card-body">
                                <?php foreach ($user['skills'] as $skill => $percentage) : ?>
                                    <div class="mb-3">
                                        <strong><?= $skill ?></strong>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: <?= $percentage ?>%;" aria-valuenow="<?= $percentage ?>" aria-valuemin="0" aria-valuemax="100"><?= $percentage ?>%</div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>