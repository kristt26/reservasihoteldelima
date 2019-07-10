<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 mb-5">
        <div class="block-3 d-md-flex">
            <form method="POST">
            </div>
              <div class="form-group">
                <label for="nama"> id reservasi:</label>
                <input type="text" name="Id_Reservasi"class="form-control">
              
              </div>
              <div class="form-group">
                <label for="nama"> id Tamu:</label>
                <input type="text" name="id_tamu"class="form-control">
              </div>
              <div class="form-group">
                <label for="nama"> fasilitas:</label>
                <input type="text" name="fasilitas"class="form-control">
              </div>
              <div class="form-group">
                <label for="nama"> pesanan:</label>
                <input type="text" name="pesanan"class="form-control">
              </div>
              <div class="form-group">
                <label for="nama"> check in:</label>
                <input type="text"name="check_in" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama"> Tanggal:</label>
                <input type="text"name="tanggal" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama"> Tipe:</label>
                <input type="text"name="tipe"class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat"> laporan:</label>
                <input type="text"name="laporan"class="form-control" id="alamat">
              		
              <button type="submit" name="Submit" value="Add" class="btn btn-default">Submit</button>
            </form>
            <?php
            // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
        $ID_reservasi = $_POST['Id_Reservasi'];
        $ID_tamu = $_POST['id_tamu'];
        $fasilitas = $_POST['fasilitas'];
        $pesanan = $_POST['pesanan'];
        $check_in = $_POST['check_in'];
        $tanggal = $_POST['tanggal'];
        $tipe = $_POST['tipe'];
        $laporan = $_POST['laporan'];

        
       

        // include database connection file
        include_once("config.php");
       // Insert user data into table
         $result = mysqli_query($mysqli, "INSERT INTO tabel_reservasi(ID_reservasi,ID_tamu,fasilitas,pesanan,check_in,tanggal,tipe,laporan) VALUES('$Id_Reservasi','$id_tamu','$fasilitas','$pesanan','$check_in','$tanggal','$tipe','$laporan')");
 
         // Show message when user added
         echo "User added successfully. <a href='index.php'>View Users</a>"; 
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>
