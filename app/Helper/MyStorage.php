<?php

use Aws\S3\S3Client;
use Symfony\Component\HttpKernel\Profiler\FileProfilerStorage;

class BiznetStorageHelper
{
    public $client = new S3Client([
        'credentials' => [
            'key'    => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
        ],
        'region' => 'idn',
        'version' => 'latest',
        'endpoint' => env('AWS_ENDOPINT'),
        'use_path_style_endpoint' => true, // Jika menggunakan penyimpanan selain AWS S3
    ]);


    public function upload($namaFile, $filePath)
    {
        $this->client->putObject([
            'Bucket'     => env('AWS_BUCKET'),
            'Key'        => $namaFile,
            'Body'   => fopen($filePath, 'r'),
            'ACL'    => 'public-read', // Buat file bisa diakses publik
        ]);
    }
}
