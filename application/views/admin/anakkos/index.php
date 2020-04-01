<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-pie mr-1"></i>
      Data Anak Kos
    </h3>
  </div><!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>No. HP</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $a = 1;
        foreach ($kos as $anakkos) :
        ?>
          <tr>
            <td><?= $a++ ?></td>
            <td><?= $anakkos['nama'] ?></td>
            <td><?= $anakkos['no_hp'] ?></td>
            <td><?= $anakkos['status'] ?></td>
            <td>
              <a href="<?= base_url() ?>admin/anakkos/edit/<?= $anakkos['id'] ?>" class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i> Edit
              </a>
              <a href="<?= base_url() ?>admin/anakkos/hapus/<?= $anakkos['id'] ?>" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i> Hapus
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div><!-- /.card-body -->
</div>
<a href="<?= base_url() ?>/admin/anakkos/tambah" class="btn btn-primary float-right">Tambah</a>