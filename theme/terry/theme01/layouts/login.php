<?php
$jsOptions = [ # js的配置部分
    [
        # js options ，来定义位置，条件等
        # 在当前options下的js文件
        'js' => [
          'js/jquery-3.3.1.min.js',
        ],
    ]

];
$cssOptions = [
    # css配置
    [
        'css'	=>[

        ],
    ],
];
\Yii::$service->page->asset->jsOptions = $jsOptions;
\Yii::$service->page->asset->cssOptions = $cssOptions;
\Yii::$service->page->asset->register($this);


?>

<?php $this->beginPage() ?>
  <!doctype html>
  <html lang="en">
  <head>
    <title>晋彤管理系统-登录页面</title>
      <?php $this->beginBody() ?>
      <?php $this->endBody() ?>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <?= $content ?>
  </body>
  </html>

<?php $this->endPage() ?>
