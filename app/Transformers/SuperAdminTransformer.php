<?php

namespace App\Transformers;

use App\SuperAdmin;
use League\Fractal\TransformerAbstract;

class SuperAdminTransformer extends TransformerAbstract
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
    public function transform(SuperAdmin $superadmin)
    {
        return [
            'id_superadmin' => $superadmin->id_superadmin,
            'nama'          => $superadmin->nama,
            'email'         => $superadmin->email,
            'publish'       => $superadmin->created_at->diffForHumans(),
        ];
    }
}
