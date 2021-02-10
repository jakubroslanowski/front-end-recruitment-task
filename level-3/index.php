<?php declare(strict_types = 1);

include_once 'vendor/autoload.php';

$content = [
    'title' => 'Lorem Ipsum',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipis scing elit. Pellentesque ac
    nisi felis. Suspendisse ut finibus augue.',
    'button' => 'Button',
    'img' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_c_scale,w_1400.jpg',
    'tooltip' => 'Some tooltip text!',
    'modal' => [
      'title' => 'Super modal',
      'text' => 'Lorem Ipsum',
      'send' => 'Send message',
      'close' => 'Close'
    ]
];

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render('pages/index.html', $content);