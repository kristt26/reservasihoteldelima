<?php
include "../../config.php";
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n hd-search-rp">
                      <div class="breadcome-heading">
                      <h1>Daftar Kamar</h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="header-right-info">
                    <a class="btn btn-custon-four btn-primary" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Primary</a>
                <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nomor Kamar</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="NomorKamar" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Fasilitas</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="Fasilitas" class="form-control" require/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Type</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <select class="form-control" name="Type">
																			<option value="Standar">Standar</option>
																			<option value="Deluxe">Deluxe</option>
																			<option value="Superior">Superior</option>
                                                                            <option value="Junior Suite">Junior Suite</option>
                                                                            <option value="Executive">Executive</option>
																		</select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Harga</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="Harga" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <input type="submit" name="tambah" value="Proses" class="btn btn-white"/>
                                                            <button data-dismiss="modal" class="btn btn-white" type="submit">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
       
        <div class="sparkline8-hd">
            <div class="main-sparkline8-hd">
                
            </div>
        </div>
        <div class="sparkline8-graph">
            <div class="static-table-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nomor Kamar</th>
                            <th>Fasilitas</th>
                            <th>Type</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = "select * from tabel_kamar";
                        $x = mysqli_query($mysqli, $q) or die();
                        while($xq = mysqli_fetch_array($x)){
                            ?>
                        <tr>
                            <td><?php echo "Testing"?></td>
                            <td><?php echo $xq[2]?></td>
                            <td><?php echo $xq[3]?></td>
                            <td><?php echo $xq[4]?></td>
                        </tr>
                            <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
               
            </div>
        </div>
</div>