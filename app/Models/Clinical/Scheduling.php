<?php

namespace App\Models\Clinical;

use Illuminate\Database\Eloquent\Model;


class Scheduling extends Model
{
    protected $fillable = ['professional_id','specialty_id','name', 'met', 'birth', 'cpf'];

    /**
     * recover data and save to base
     *
     * @return \Illuminate\Http\Response
     */
    public function newScheduling($data) {
        return $this->create($data);
    }

}
