<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> HelloWorld
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">UReport</h3>
                    <div class="box-tools">
                       
                    </div>
                </div><!-- /.box-header -->
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
            jQuery("#searchList").attr("action", baseURL + "Reports/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
