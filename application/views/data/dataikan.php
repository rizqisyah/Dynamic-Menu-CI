<div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Data Ikan 
        <small>Add, Edit, Delete</small>
      </h1>
    
      <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                <div class='box-header with-border'>
                    <h3 class='box-title'><a href="<?php echo base_url('dataikan/add'); ?>" class="btn btn-primary btn-small">
                            <i class="glyphicon glyphicon-plus"></i>Add Data</a></h3>
                            <label calss='control-label' ></label>
                </div>
                 
                <div class="box-body table-responsive">

                    <table id="tb-datatables" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Ikan</th>
                                <th>Makanan</th>                                                            
                                <th>Penangkaran</th>   
                                <th>Edit</th>
                                <th>Delete</th>                                 
                            </tr>
                        </thead>
                               <?php
                       $no=1;
                       function chek($id) {
                            $CI = get_instance();
                            $result = $CI->db->get_where('dataikan', array('id_ikan' => $id))->row_array();
                            return $result['jenis_ikan'];
                        }

                      
                       foreach ($record as $r){    
                        $katmenu= $r->jenis_ikan == 0 ? 'Menu Utama' : chek($r->kat_menu);                                     
                           echo"
                               <tr>
                               <td>$no</td>
                               <td>".$r->jenis_ikan."</td>
                               <td>".$r->makanan."</td>       
                               <td>".$r->penangkaran."</td>                                                  
                               <td>" . anchor('dataikan/edit/' . $r->id_ikan, '<i class="btn btn-info btn-sm glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></i>') . "</td>
                               <td>" . anchor('dataikan/delete/' . $r->jenis_ikan, '<i class="btn-sm btn-info glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')")) . "</td>
                               </tr>";
                           $no++;
                       }
                       ?>

                    </table>
                    <?php 
                  echo $this->pagination->create_links();
                  ?>
                </div><!-- /.box-body -->
                  
              </div><!-- /.box -->
          </div>
    </div>
   </div>
  </div>  
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "dataikan/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>