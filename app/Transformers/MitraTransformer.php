<?php

namespace App\Transformers;

use App\Mitra;
use League\Fractal\TransformerAbstract;

class MitraTransformer extends TransformerAbstract
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
    public function transform(Mitra $mitra)
    {
        return [
            'id_mitra'      => $mitra->id_mitra,
            'nama'          => $mitra->nama,
            'email'         => $mitra->email,
            'alamat'         => $mitra->alamat,
            'no_hp'         => $mitra->no_hp,
            'publish'       => $mitra->created_at->diffForHumans(),
        ];
    }
}
