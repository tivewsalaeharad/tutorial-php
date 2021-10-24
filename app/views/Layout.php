<? $items = require "Items.php"; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Песочница PHP</title>
    <link rel="shortcut icon" href="../public/favicon.ico" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="../public/images/new-php-logo.svg" alt="LOGO" width="12%" height="auto">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile </a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password </a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout </a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <? foreach ($items as $index => $item) : ?>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-<?=$index?>"><i class="fa fa-fw <?=$item['icon']?>"></i> <?=$item['caption']?> <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-<?=$index?>" class="collapse">
                        <? foreach($item['content'] as $element) : ?>
                        <li><a href="<?="/{$item['controller']}/$element"?>"><i class="fa fa-angle-double-right"></i> <?=$element?> </a></li>
                        <? endforeach; ?>
                    </ul>
                </li>
                <? endforeach; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <pre class='prettyprint' style="padding: 10px;"><?=htmlspecialchars(file_get_contents($code))?></pre>
        <?php /*<div style="background-color: #f9f2f4; padding: 10px;"><?php highlight_file($code)?></div>*/ ?>
        <div><?=$body?></div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="/public/js/script.js"></script>

</body>

</html>
