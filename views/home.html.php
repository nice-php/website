<?php $view->extend('_layout.html.php') ?>

<?php $view['slots']->start('content') ?>
<h1>Nice, a PHP microframework</h1>
<p>Nice is a simple microframework for PHP 5.4 and later. Nice integrates nikic's
    <a href="https://github.com/nikic/FastRoute">FastRoute</a> router with
    the <a href="https://github.com/symfony/HttpKernel">Symfony2 HttpKernel</a> and
    <a href="https://github.com/symfony/DependencyInjection">Dependency Injection</a> components.</p>
<pre><code class="language-php">&lt;?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nice\Application;
use Nice\Router\RouteCollector;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app-&gt;set('routes', function (RouteCollector $r) {
    $r-&gt;map('/', 'home', function (Request $request) {
        return new Response('Hello, world');
    });
});
$app-&gt;run();</code></pre>
<hr>
<h2>Prototype quickly.</h2>
<p>Nice is designed to be easy to get up and running. Throw together a dynamic website in just a
matter of minutes. Installation is as simple as:
<pre><code class="language-bash">composer require nice/framework:~1.0</code></pre></p>
<h2>Discard nothing.</h2>
<p>Nice leverages the Symfony 2 Dependency Injection component. This means the work you've done
can transfer nicely to a full-fledged Symfony 2 application with very little hassle.
</p>
<h3>Expand your application:</h3>
<ul>
    <li>Make use of pre-existing extensions that integrate Doctrine DBAL or ORM, or even Twig or Plates PHP templating.</li>
    <li>Secure your application with basic username/password authentication, or easily implement API authentication tokens.</li>
    <li>Write your own dependency injection extensions and compiler passes to harness the true, raw power of the Symfony DIC.</li>
</ul>
<?php $view['slots']->stop() ?>
