<div class="card ">
  <div class="card-body p-0">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Nominal</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $a = 1;
        foreach ($pembayaran as $data) { ?>
          <tr>
            <td> <?= $a++; ?></td>
            <td> <?= $data['nama'] ?> </td>
            <td> <?= $data['tanggal'] ?> </td>
            <td> <?= $data['nominal'] ?> </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>