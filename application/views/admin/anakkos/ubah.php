<form action="" method="post">
  <?php foreach ($kos as $anakkos) { ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?= $anakkos['nama'] ?>" />
        </div>
        <div class="form-group">
          <label for="asal">Asal</label>
          <input type="text" name="asal" id="asal" class="form-control" value="<?= $anakkos['asal'] ?>" />
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" name="status" id="status" class="form-control" value="<?= $anakkos['status'] ?>" />
        </div>
        <input type="text" name="idkos" value="1" style="display:none;">
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label for="nohp">No. HP</label>
          <input type="text" name="nohp" id="nohp" class="form-control" value="<?= $anakkos['no_hp'] ?>" />
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control" value="<?= $anakkos['username'] ?>" />
        </div>
        <div class="form-group">
          <label for="nohp">Password</label>
          <input type="password" name="password" id="password" class="form-control" />
        </div>
      </div>
    </div>
  <?php } ?>
  <input type="submit" value="Simpan" name="submit" class="btn btn-success" />
  <a href="<?= base_url() ?>/admin/anakkos" class="btn btn-secondary">Batal</a>
</form>