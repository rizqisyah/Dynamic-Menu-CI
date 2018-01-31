<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Header Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>header/add"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Header List</h3>
                    <div class="box-tools">
                       
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table id="tb-datatables" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <tr>
                      <th>Menu Utama</th>
                      <th>Name</th>
                      <th>Url</th>
                      <th>Created at</th>
                      <th>Delete</th>                      
                    </tr>
                    <?php 
                      

                    foreach ($record as $r){    
                                     
                           echo"
                               <tr>
                               <td>".$r->m_name."</td>
                               <td>".$r->m_item_name."</td>
                               <td>".$r->m_item_url."</td>
                               <td>".$r->m_item_created_at."</td>
                              <td>" . anchor('header/delete/' . $r->m_item_id, '<i class="btn-sm btn-info glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete"></i>', array('onclick' => "return confirm('Data Akan di Hapus?')")) . "</td>
                               </tr>                               
                               ";
                           
                       }?>
                  
                  </table>
                  
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>