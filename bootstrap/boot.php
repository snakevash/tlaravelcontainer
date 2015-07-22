<?php
/**
 *
 * Author: snake
 * Date: 15-7-22
 * Time: 上午11:14
 */

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Container\Container;

// 用法
$container = new Container();
$container->instance('app',$container);

// 构造函数自动注入
/**
 * @var Desktop $d
 */
//$d = $container->make('Desktop');
//$d->description();


// 绑定
// 把一个类起一个重命名
//$container->bind('SnakeBox',function(){
//    return new Box();
//});
//
///**
// * @var Box $b
// */
//$b = $container->make('SnakeBox');
//$b->description();

// 别名注入
//$container->alias('Box','SnakeBox');
///**
// * @var Box $b
// */
//$b = $container->make('SnakeBox');
//$b->description();

// 标签注入
//$container->tag(['Box','Computer','Desktop'],'boot');
//$classes = $container->tagged('boot');
//foreach($classes as $class){
//    $class->description();
//}