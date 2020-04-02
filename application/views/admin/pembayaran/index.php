<div class="card ">
  <div class="card-header">
    <h3 class="card-title">Data Pembayaran Bulan Ini</h3>
  </div>
  <div class="card-body">
    <table class="table table-striped" id="list_bulan_ini">
      <thead>
        <tr>
          <!-- <th>No.</th> -->
          <th>Nama</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>Nominal</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<div class="card ">
  <div class="card-header">
    <h3 class="card-title">Semua Data</h3>
  </div>
  <div class="card-body">
    <table class="table table-striped" id="list_pembayaran">
      <thead>
        <tr>
          <!-- <th>No.</th> -->
          <th>Nama</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>Nominal</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<a href="<?= base_url() ?>admin/pembayaran/tambah" class="btn btn-primary float-right">Tambah</a>

<script>
  $('document').ready(function() {
    var url = "http://localhost/kosku-ci/api/"
    var bulan = new Date().getMonth() + 1;
    console.log(bulan);
    var table = $('#list_bulan_ini').DataTable({
      "ajax": url + "pembayaran?month=" + bulan,
      "columns": [{
          "data": "nama"
        },
        {
          "data": "bulan"
        },
        {
          "data": "tahun"
        },
        {
          "data": "nominal"
        },
      ],
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    var table = $('#list_pembayaran').DataTable({
      "ajax": url + "pembayaran",
      "columns": [{
          "data": "nama"
        },
        {
          "data": "bulan"
        },
        {
          "data": "tahun"
        },
        {
          "data": "nominal"
        },
      ],
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  })
</script>