<html >
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Welcome to CodeIgniter</title>
    <base href="<?php echo base_url();?>" />
    <link type="text/css" href="<?php echo base_url();?>/assets/menu/menu.css" rel="stylesheet" />
    <!-- set javascript base_url -->
    <Script type="text/javascript">
        <![CDATA[
        var base_url = '<?php echo base_url();?>';
        ]]>
    </Script>
    <Script type="text/javascript" src="<?php echo base_url();?>/assets/menu/jquery.js"></Script>
    <Script type="text/javascript" src="<?php echo base_url();?>/assets/menu/menu.js"></Script>
 
</head>
<body>
    //echo base_url();
    echo $this->dynamic_menu->build_menu('1');
<br />
<p><br />Page rendered in {elapsed_time} seconds</p>
<p><br /><a href="http://apycom.com/">jQuery Menus by Apycom</a></p>
</body>
</html>