<? require "Items.php"; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Заголовок страницы</title>
</head>

<body>

<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse" style="overflow: auto;">
                <ul class="nav navbar-nav" id="sidenav01">
                    <li class="active">
                        <a href="#" data-toggle="collapse" data-target="#toggleDemoProfile" data-parent="#sidenav01" class="collapsed">
                            <h4>
                                Control Panel
                                <br>
                                <small>IOSDSV <span class="caret"></span></small>
                            </h4>
                        </a>
                        <div class="collapse" id="toggleDemoProfile" style="height: 0px;">
                            <ul class="nav nav-list">
                                <li><a href="#">ProfileSubMenu1</a></li>
                                <li><a href="#">ProfileSubMenu2</a></li>
                                <li><a href="#">ProfileSubMenu3</a></li>
                            </ul>
                        </div>
                    </li>
                    <? foreach ($items as $index => $item) : ?>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#toggleDemo<?=$index?>" data-parent="#sidenav01" class="collapsed">
                            <span class="glyphicon <?=$item['icon']?>"></span> <?=$item['caption']?> <span class="caret pull-right"></span>
                        </a>
                        <div class="collapse" id="toggleDemo<?=$index?>" style="height: 0px;">
                            <ul class="nav nav-list">
                                <? foreach($item['content'] as $element) : ?>
                                <li><a href="<?="/{$item['controller']}/$element"?>"><?=$element?></a></li>
                                <? endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <? endforeach; ?>
                    <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Normalmenu</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="col-sm-9 col-md-10 affix-content">
    <div class="container">
        <div class="page-header">
            <h3><span class="glyphicon glyphicon-th-list"></span> Navigation</h3>
        </div>
        <div class="col pt-2">
            <?=$body?>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</body>

</html>
