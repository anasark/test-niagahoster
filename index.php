<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($loader);

echo $twig->render('view.html', [
    'title' => 'Niagahoster',

    'info'  => array(
        array( 'link' => 'telp', 'text' => '', 'class' => 'telp link-telp', 'icon' => 'call' ),
        array( 'link' => 'javascript: void(0);', 'text' => 'Live Chat', 'class' => '', 'icon' => 'question_answer', 'onclick' => 'jivo_api.open();' ),
        array( 'link' => '#member', 'text' => 'Member Area', 'class' => '', 'icon' => 'account_circle' ),
    ),

    'banner' => array(
        'Solusi PHP untuk performa query yang lebih cepat.',
        'Konsumsi memori yang lebih rendah.',
        'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.',
        'Fitur enkripsi IonCube dan Zend Guard Loaders.'
    ),

    'footer' => array(
        array( 'text' => 'Hubungi Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'info' ),
        array( 'text' => 'Layanan', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'layanan' ),
        array( 'text' => 'Service Hosting', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'service' ),
        array( 'text' => 'Tutorial', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tutorial' ),
        array( 'text' => 'Tentang Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tentang' ),
        array( 'text' => 'Kenapa Milih Niagahoster', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'why' ),
        array( 'text' => 'Newsletter', 'class' => 'col-12 col-sm-6 order-sm-2 col-lg-6 order-lg-1 col-xl-3 order-xl-1', 'nama' => 'newsletter' ),
        array( 'text' => 'Sosmed', 'class' => 'col-12 col-sm-12 order-sm-3 col-lg-6 order-lg-3 col-xl-3 order-xl-2', 'nama' => 'sosmed' ),
        array( 'text' => 'Pembayaran', 'class' => 'col-12 col-sm-6 order-sm-1 col-lg-6 order-lg-2 col-xl-12 order-xl-3', 'nama' => 'pembayaran' ),
    ),

]);