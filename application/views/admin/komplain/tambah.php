<form action="/admin/komplain/insert.php" method="post">
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="nama">Nama</label>
        <select class="custom-select" name="id">
          <option selected value="">Pilih</option>
          <?php
          foreach ($kos as $anakkos) { ?>
            <option value="<?= $anakkos["username"] ?>"><?= $anakkos["nama"] ?></option>
          <?php }
          ?>
        </select><br><br>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label for="judul">Judul Komplain</label>
        <input type="text" name="judul" id="judul" class="form-control" />
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"></textarea>
      </div>
    </div>
  </div>
  <input type="submit" value="Simpan" name="submit" class="btn btn-success" />
  <a href="/admin/komplain/index.php" class="btn btn-secondary">Batal</a>
</form>