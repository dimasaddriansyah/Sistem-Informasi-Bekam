<?php

namespace App\Transformers;

use App\Pesanan;
use League\Fractal\TransformerAbstract;

class PesananTransformer extends TransformerAbstract
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
    public function transform(Pesanan $pesanan)
    {
        return [
            'id_pesanan'        => $pesanan->id_pesanan,
            'id_pelanggan'      => $pesanan->id_pelanggan,
            'id_layanan'        => $pesanan->id_layanan,
            'bukti_pembayaran'  => $pesanan->bukti_pembayaran,
            'tanggal'           => $pesanan->tanggal,
            'publish'           => $pesanan->created_at->diffForHumans(),
        ];
    }
}
