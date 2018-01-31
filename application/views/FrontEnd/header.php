<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/botstrap.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.navbar-inverse{
background-color:black;
}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
        <?php foreach ($dropdown as $menu):?>
          <?php if($menu->menu_id != $menu->menu_item_id): ?>
          <li>
            <a href="#"> <?php echo $menu ->m_name; ?>
            </a>
          </li>
        <?php else: ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu ->m_name; ?>
            <span class=""></span></a>
            <ul class="dropdown-menu">
              <?php foreach ($dropdown_item as $item):?>
                  <?php if($menu->menu_id == $item->m_id): ?>
                    <li>
                      <a href="#"> <?php echo $item ->m_item_name; ?>
                      </a>
                    </li>
                  <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- Membuat SubMenu -->
          <?php endif; ?>
        <?php endforeach; ?>
    </ul>
  </div>
</nav>
