<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionR extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_produk' => $this->id_produk,
            'nama_pelanggan' => $this->nama_pelanggan,
            'nomor_unik' => $this->nomor_unik,
            'uang_bayar' => $this->uang_bayar,
            'uang_kembali' => $this->uang_kembali,
            'created_at' => date_format($this->created_at, 'd-m-Y H:i:s')
        ];
    }
}