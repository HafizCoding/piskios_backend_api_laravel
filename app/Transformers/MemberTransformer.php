<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Pengguna;

class MemberTransformer extends TransformerAbstract
{
    public function transform(pengguna $member) {
        return [
            'id' => $member->id,
            'name' => $member->name,
            'no_handphone' => $member->no_handphone,
            'age' => $member->age,
            'address' => $member->address
        ];
    }
}
