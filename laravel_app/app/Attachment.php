<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    /**
     * Get the owning commentable model.
     */
    public function attachable()
    {
        return $this->morphTo();
    }
}
