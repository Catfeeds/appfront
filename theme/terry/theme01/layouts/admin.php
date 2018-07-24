<?php
$jsOptions = [ # js的配置部分
    [
        # js options ，来定义位置，条件等
        # 在当前options下的js文件
        'js' => [

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
