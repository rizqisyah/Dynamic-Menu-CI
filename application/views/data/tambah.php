<div class="content-wrapper">  
    <section class="content-header">
    <h1>Tambah</h1>
       <small>Menu Dinamis</small>
         
  <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                <div class="col-md-5">
                <?php
                    echo form_open('dataikan/add');
                ?> 
                  
                    <div class="box-body">
                        <div class="form-group">
                            <label for="example">Jenis Ikan</label>
                            <input type="tex" name="nama" class="form-control" required oninvalid="setCustomValidity('Nama Menu Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Jenis Ikan" >
                                   <?php echo form_error('nama', '<div class="text-red">', '</div>'); ?>
                        </div>                                           
                        <div class="form-group">
                            <label for="">Makanan</label>
                            <input type="text" class="form-control" name="icon" required oninvalid="setCustomValidity('Icon di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex : Makan Ikan">
                            <?php echo form_error('icon', '<div class="text-red">', '</div>'); ?>
                        </div>   
                         <div class="form-group">
                            <label for="">Penangkaran</label>
                            <input type="text" class="form-control" name="link" required oninvalid="setCustomValidity('Link Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="ex :Penangkaran">
                            <?php echo form_error('link', '<div class="text-red">', '</div>'); ?>
                        </div>   
                        
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>                        
                        <a href="<?php echo site_url('dataikan'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    
</div>