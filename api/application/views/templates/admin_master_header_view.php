<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $page_title;?></title>
<?php echo $before_head; ?>
</head>
<link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">
<body>

<nav class="navbar navbar-inverse navbar-top">
  <div class="container">
    <div class="navbar-header">
      <?php if($this->ion_auth->logged_in()) { ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php } ?>
      <a class="navbar-brand" href="<?php echo site_url('admin');?>">Test App</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
     <?php if($this->ion_auth->logged_in()) { ?>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('admin/theatres');?>">Theatres</a></li>
        <li><a href="#">RSVPs</a></li>
        <li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>
      </ul>
      <?php } ?>
    </div><!--/.nav-collapse -->
  </div>
</nav>
