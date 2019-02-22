<?php
$data = (object)array();

//menu
$data->menu = array(
    '#hosting'       => 'Hosting',
    '#domain'        => 'Domain',
    '#server'        => 'Server',
    '#website'       => 'Website',
    '#afiliasi'      => 'Afiliasi',
    '#promo'         => 'Promo',
    '#pembayaran'    => 'Pembayaran',
    '#review'        => 'Review',
    '#kontak'        => 'Kontak',
    '#blog'          => 'Blog',
);

$data->info = array(
    'telp'              => array( 'text' => '0274-5305505', 'link' => 'telp:02745305505' ),
    'hari_kerja'        => "Senin - Minggu \n24 Jam Non Stop",
    'alamat'            => "Jl. Selokan Mataram Monjali \nKarangjati MT 1/304 \nSinduadi, Mlati, Sleman \nYogyakarta 55581",
);

$data->footer = array(
    'tentang' => array(
        '#tim-niagahoster'   => 'Tim Niagahoster',
        '#karir'             => 'Karir',
        '#event'             => 'Event',
        '#promosi'           => 'Penawaran & Promo Spesial',
        '#kontak'            => 'Kontak Kami',
    ),
    'layanan' => array(
        '#domain-murah'          => 'Domain',
        '#hosting-indonesia'     => 'Shared Hosting',
        '#cloud-vps-hosting'     => 'Cloud VPS Hosting',
        '#promosi-transfer'      => 'Transfer Hosting',
        '#membuat-blog-webly'    => 'Web Builder',
        '#ssl-murah'             => 'Keamanan SSL / HTTPS',
        '#'                     => 'Jasa Pembuatan Website',
        '#afiliasi'              => 'Program Afiliasi',
    ),
    'service' => array(
        '#hosting-murah'         => 'Hosting Murah',
        '#hosting-indonesia'     => 'Hosting Indonesia',
        '#hosting-singapura'     => 'Hosting Singapura',
        '#hosting-php'           => 'Hosting PHP',
        '#hosting-wordpress'     => 'Hosting Wordpress',
        '#hosting-laravel'       => 'Hosting Laravel',
    ),
    'tutorial' => array(
        '#kb'            => 'Knowledgebase',
        '#blog'          => 'Blog',
        '#pembayaran'    => 'Cara Pembayaran',
    ),
    'why' => array(
        '#support-terbaik'       => 'Support Terbaik',
        '#garansi-murah'         => 'Garansi Harga Termurah',
        '#domain-gratis'         => 'Domain Gratis Selamanya',
        '#datacenter-hosting'    => 'Datacenter Hosting Terbaik',
        '#review'                => 'Review Pelanggan',
    ),
);

$data->sosmed = array(
    '#facebook'     => 'facebook',
    '#twitter'      => 'twitter',
    '#google-plus'  => 'google-plus',
);

$data->pembayaran = array(
    'bca', 'mandiri', 'bni', 'visa', 'mastercard', 'atmbersama', 'permata', 'prima', 'alto'
);

echo json_encode($data);
?>