<div class="row">
  <?php foreach ($komplains as $komplain) { ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $komplain['username'] ?></h3>
        </div>
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
          <h4 class="card-title"><?= $komplain['judul'] ?></h4>
          <p class="card-text"><?= $komplain['deskripsi'] ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>