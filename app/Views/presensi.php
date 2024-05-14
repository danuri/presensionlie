<?= $this->extend('template') ?>

<?= $this->section('content') ?>

    <div class="container">
      <!-- User Information-->
      <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3">
            <img src="img/bg-img/2.jpg" alt="">
            <i class="bi bi-pencil"></i>
            <form action="#">
              <input class="form-control" type="file">
            </form>
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1">Affan Islam</h5>
              <span class="badge bg-warning ms-2 rounded-pill">Pro</span>
            </div>
            <p class="mb-0">UX/UI Designer</p>
          </div>
        </div>
      </div>

      <!-- User Meta Data-->
      <div class="card user-data-card">
        <div class="card-body">
          <form action="#" method="post">
            <div class="form-group mb-3">
              <label class="form-label" for="Username">IP</label>
              <input class="form-control" id="ip" type="text" value="103.7.15.78">
            </div>

            <div class="form-group mb-3">
              <label class="form-label" for="koordinat">Koordinat</label>
              <input class="form-control" id="koordinat" type="text" value="0,0">
            </div>

            <button class="btn btn-success w-100" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
<?= $this->endSection() ?>
