<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatkulResource extends JsonResource
{
    public $status;
    public $message;
    /**
     * Transform the resource into an array.
     * * @param mixed $status
     * * @param mixed $message
     * * @param mixed $resource
     * @return void
     */

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status= $status;
        $this->message=$message;
    }
    /**
    * @param \Illuminate\Http\Request $request
    * @return  array
     */
    public function toArray(Request $request): array
    {
        return [
            'succes'=>$this->status,
            'message'=> $this->message,
            'data'=>$this->resource,
        ];
    }
}
