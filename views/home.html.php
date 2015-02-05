<?php $view->extend('_layout.html.php') ?>

<?php $view['slots']->start('content') ?>
<h1>Nice</h1>
<h4>A framework for PHP 5.4+</h4>
<p>
    Nice integrates
    <a href="https://github.com/nikic/FastRoute">FastRoute</a> with
    <a href="https://github.com/symfony">Symfony 2 components</a>
    to provide a stable, fast base for your application.
</p>
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
<p>
    Nice is designed to be easy to get up and running. Throw together a dynamic website in just a
matter of minutes. Installation is as simple as:
</p>
<pre><code class="language-bash">composer require nice/framework:~1.0</code></pre>
<h2>Leverage the HttpKernel.</h2>
<p>
    Nice is built on top of Symfony's HttpKernel. Combine Nice with HttpKernel middlewares to quickly and
cleanly separate your application into logical layers.
</p>
<h2>Discard nothing.</h2>
<p>
    Nice utilizes Symfony's Dependency Injection and Config components, providing powerful configuration
    options. Prototypes are no longer throwaway work, instead growing to become stable, maintainable applications.
</p>
<h3>Expand your application:</h3>
<ul>
    <li>Make use of pre-existing extensions that integrate Doctrine DBAL or ORM. Render your templates with Twig or Plates.</li>
    <li>Secure your application with basic username/password authentication, or easily implement API authentication tokens.</li>
    <li>Write your own dependency injection extensions and compiler passes to harness the power of the Symfony DIC.</li>
</ul>
<hr>
<h2>Check out the examples.</h2>
<p>
    From toy websites to actually-useful-things, we've got a small showcase of Nice projects. <a href="<?php echo $view['router']->getPath('examples') ?>">Check them out!</a>
</p>
<?php $view['slots']->stop() ?>
