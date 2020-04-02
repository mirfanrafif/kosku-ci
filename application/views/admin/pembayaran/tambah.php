<form action="<?= base_url() ?>api/pembayaran" method="post" class="form-group">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header bg-info">
          <h3 class="card-title">Data Pembayaran</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <select class="custom-select" id="username" name="username">
              <option selected value="">Pilih</option>
              <?php foreach ($kos as $anakkos) { ?>
                <option value="<?= $anakkos['username'] ?>"><?= $anakkos['nama'] ?></option>
              <?php } ?>
            </select>
          </div>
          Pembayaran Untuk :
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="bulan">Bulan</label>
                <select name="bulan" id="bulan" class="custom-select">
                  <option value="">Pilih</option>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="tahun">Nominal</label>
            <input type="text" name="tahun" id="tahun" class="form-control" />
          </div>
        </div>
      </div>
      <input type="submit" value="Simpan" name="submit" class="btn btn-success" />
      <a href="/admin/pembayaran/index.php" class="btn btn-secondary">Batal</a>

    </div>
  </div>
</form>