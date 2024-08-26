<?= $this->extend('template') ?>

<?= $this->section('content') ?>

    <div class="container">
      <!-- User Information-->
      <div class="card user-info-card mb-3">
        <div class="card-body d-flex align-items-center">
          <div class="user-profile me-3">
            <img src="img/bg-img/2.jpg" alt="">
          </div>
          <div class="user-info">
            <div class="d-flex align-items-center">
              <h5 class="mb-1"><?= session('nama')?></h5>
              <span class="badge bg-warning ms-2 rounded-pill"><?= session('nip')?></span>
            </div>
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
              <label class="form-label" for="koordinat">Latitude</label>
              <input class="form-control" id="lat" type="text" value="0">
            </div>

            <div class="form-group mb-3">
              <label class="form-label" for="koordinat">Longitude</label>
              <input class="form-control" id="lon" type="text" value="0">
            </div>

            <button class="btn btn-success w-100" type="button" onclick="prosesCheckin()">Submit</button>
          </form>
        </div>
      </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
<script type="text/javascript">
function prosesCheckin() {
  axios.post('presensi/checkin', {
    ip: document.getElementById("ip").value,
    lat: document.getElementById("lat").value,
    lon: document.getElementById("lon").value
  })
  .then(function (response) {
    console.log(response);

    alert(response.data.message);
    if(response.data.error == false){
      window.location.replace("<?= site_url()?>");
    }

  })
  .catch(function (error) {
    console.log(error);
  });
}
</script>
<?= $this->endSection() ?>
