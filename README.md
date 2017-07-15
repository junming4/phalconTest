# phalconTest
1、设置模板地址
# index.php 中这样可以设置模板地址
$di->set(
      "view",
      function () {
          $view = new \Phalcon\Mvc\View();
          $view->setViewsDir("../app/viewss/");
          return $view;
      }
  );
