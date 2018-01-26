<?php include "head.php"; ?>
            <h2>Data barang</h2>
            <hr/>

<?php
      if(isset($_GET['aksi']) == 'delete'){
          $nama = $_GET['nama'];
          $cek = mysqli_query($koneksi, "SELECT * FROM brg_yg_bisa_diicicil WHERE nama='$nama'");
          if(mysqli_num_rows($cek) == 0){
             echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tidak Ditemukan.</div>';
            }else{
              $delete = mysqli_query($koneksi, "DELETE FROM brg_yg_bisa_diicicil WHERE nama='$nama'");
                if($delete){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus</div>';
                  }else{
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
                  }
          }
    }
      $pageSql="SELECT * FROM brg_yg_bisa_diicicil";
            if(isset($_POST['qcari'])){
                $qcari=$_POST['qcari'];
                $pageSql="SELECT * FROM brg_yg_bisa_diicicil WHERE nama like '%$qcari%' or size like '%$qcari%' or warna like '%$qcari%' ";
              }
?>
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="barang_add2.php">Tambah Data</a>
      <br/>
      <br/>
<div class="form-group">
  <!--<div class="left">
    <form class="form-inline" method="get">
          <select class="form-control" name="filter" onchange="form.submit()">
              <option value="0">Filter Data order</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
              <option value="Tetap" <?php if($filter=='Tetap'){echo 'selected';} ?>>Tetap</option>
              <option value="Kontrak" <?php if($filter=='Kontrak'){echo 'selected';} ?>>Kontrak</option>
              <option value="Outsourcing" <?php if($filter=='Outsourcing'){echo 'selected';} ?>>Outsourcing</option>
          </select>
    </form>

  </div>-->
  <div class="right">
    <form class="" method="POST" action="barang_data.php" >
      <input type="text" class="form-control" name="qcari" placeholder="Cari.." autofocus/>
    </form>


  </div>
</div>
    <br />
    <br />
     <div class="table-responsive">
       <table class="table table-striped table-hover">
             <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>jenis</th>
                  <th>warna</th>
                  <th>size</th>
				  <th>harga</th>
                  <th>Tools</th>
             </tr>
             <?php
                if($filter){
                    $sql = mysqli_query($koneksi, "SELECT * From brg_yg_bisa_diicicil WHERE status='$filter' ORDER BY nama ASC");
                }else{
                    $sql = mysqli_query($koneksi, $pageSql. " ORDER BY nama ASC");
                }
                if(mysqli_num_rows($sql) == 0 ){
                  ?>
                  <tr><td colspan="8">Data Tidak Ada.</td></tr>
                  <?php
                  }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['jenis']; ?></td>
                      <td><?php echo $row['warna']; ?></td>
                      <td><?php echo $row['size']; ?></td>
					  <td><?php echo $row['harga']; ?></td>
                      <td>
                        <a href="barang_edit.php?nama=<?php echo $row['nama']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_detail.php?nama=<?php echo $row['nama']; ?>" title="Detail" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

                        <a href="barang_data.php?aksi=delete&nama=<?php echo $row['nama']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Akan Menghapus Data <?php echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                      </td>
                    </tr>
                  <?php
                $no++;
            }
          }
    ?>
     </table>
   </div>
<?php include "foot.php"; ?>

