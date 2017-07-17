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
  
 2、http://phalcontest.io/index.php?_url=/signUp
 去访问连接？是否可以改进
