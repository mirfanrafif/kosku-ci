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
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div><!-- /.card-body -->
</div>