<?php $view->extend('_layout.html.php') ?>

<?php $view['slots']->set('title', 'Examples') ?>

<?php $view['slots']->start('content') ?>
<h1>Examples</h1>
<p>Nice applications start out small, but can grow without becoming a maintenance nightmare. Check out some of these examples.</p>
<div class="row">
<div class="col-md-4">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Nice/Polymer.js</h3>
        </div>
        <div class="panel-body">
            An example Polymer app using the Nice PHP Framework<br><br>
            <a href="https://github.com/veonik/nice-polymer">View on GitHub</a>.
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Playground</h3>
        </div>
        <div class="panel-body">
            A simple demonstration of various Nice features<br><br>
            <a href="https://github.com/veonik/nice-example">View on GitHub</a>.
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Anaiel</h3>
        </div>
        <div class="panel-body">
            Anaiel is a simple documentation editor and generator<br><br>
            <a href="https://github.com/tyler-sommer/anaiel">View on GitHub</a>.
        </div>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-4">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Packages</h3>
        </div>
        <div class="panel-body">
            Enhances Composer Satis with webhook integrations with GitHub and GitLab<br><br>
            <a href="https://github.com/terramar-labs/packages">View on GitHub</a>.
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Documentation!</h3>
        </div>
        <div class="panel-body">
            Get started with Nice in just a few minutes.<br><br>
            <a href="http://docs.niceframework.com">Take me to the docs!</a>
        </div>
    </div>
</div>
</div>
<?php $view['slots']->stop() ?>
