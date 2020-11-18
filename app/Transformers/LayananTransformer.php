<?php

namespace App\Transformers;

use App\Layanan;
use League\Fractal\TransformerAbstract;

class LayananTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Layanan $layanan)
    {
        return [
            'id_layanan'    => $layanan->id_layanan,
            'nama'          => $layanan->nama,
            'deskripsi'     => $layanan->deskripsi,
            'harga'         => $layanan->harga,
            'pilihan'       => $layanan->pilihan,
            'publish'       => $layanan->created_at->diffForHumans(),
        ];
    }
}
