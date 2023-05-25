<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <?php if ($_SESSION['user']['status_user'] !== 'Warga') { ?>
      <?php } else { ?>
        <div class="col-md-2">
          <a href="#" class="btn btn-primary" onclick="tambah(<?= $res[0]['id_warga'] ?>, <?= date('Y', strtotime($res[0]['tanggal_lahir_warga'])) ?>)">
            <i class="glyphicon glyphicon-file"></i> Tambah
          </a>
        </div>
      <?php } ?>
      <div class="col-md-2">
        <a href="index.php" class="btn btn-primary">
          <i class="glyphicon glyphicon-refresh"></i> Refresh
        </a>
      </div>
      <?php if ($_SESSION['user']['status_user'] == 'Admin') { ?>
        <div class="col-md-2">
          <a href="../pindah/cetak-index.php" class="btn btn-primary" target="_blank">
            <i class="glyphicon glyphicon-print"></i> Cetak
          </a>
        </div>
      <?php } else {} ?>
    </div>
  </div>
</div>
<br>