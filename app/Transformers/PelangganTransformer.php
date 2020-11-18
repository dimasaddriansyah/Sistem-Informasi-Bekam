<?php

namespace App\Transformers;

use App\Pelanggan;
use League\Fractal\TransformerAbstract;

class PelangganTransformer extends TransformerAbstract
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
        'pesanan'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Pelanggan $pelanggan)
    {
        return [
            'id_pelanggan'  => $pelanggan->id_pelanggan,
            'nama'          => $pelanggan->nama,
            'email'         => $pelanggan->email,
            'alamat'        => $pelanggan->alamat,
            'no_hp'         => $pelanggan->no_hp,
            'publish'       => $pelanggan->created_at->diffForHumans(),
        ];
    }

    public function includePesanan(Pelanggan $pelanggan)
    {
        $pesanan  = $pelanggan->pesanan()->get();

        return $this->collection($pesanan, new PesananTransformer);
    }
}
