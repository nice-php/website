<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="http://docs.niceframework.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://docs.niceframework.com/favicon.ico" type="image/x-icon">

    <title><?php $view['slots']->output('title', 'Nice, a framework for PHP 5.4+') ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/css/material-wfont.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/css/ripples.min.css">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/prettify/theme.css') ?>">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('css/nice.css') ?>">
</head>
<body>
<div class="header-panel shadow-z-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h1>Nice PHP Framework</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav class="menu">
                <ul>
                    <li<?php echo $view['router']->isCurrentRoute('home') ? ' class="active"' : '' ?>><a href="<?php echo $view['router']->getPath('home') ?>">Home</a></li>
                    <li<?php echo $view['router']->isCurrentRoute('examples') ? ' class="active"' : '' ?>><a href="<?php echo $view['router']->getPath('examples') ?>">Examples</a></li>
                    <li><a href="http://docs.niceframework.com">Documentation</a></li>
                    <li><a href="http://docs.niceframework.com/nice/latest/contributing">Contributing</a></li>
                    <li<?php echo $view['router']->isCurrentRoute('license') ? ' class="active"' : '' ?>><a href="<?php echo $view['router']->getPath('license') ?>">License</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-md-9 pages">
            <div class="col-md-10">
                <div class="well page active documentation">
                    <?php $view['slots']->output('content') ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/material.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/ripples.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
<script src="<?php echo $view['assets']->getUrl('js/nice.js') ?>"></script>
<script type="text/javascript">
    $(function() {
        $.material.init();
    });
</script>
</body>
</html>
