<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model {

    /**
     * Returns the relation of nodes for a Location.
     */
    public function nodes() : HasMany {
        return $this->hasMany(Node::class);
    }
}
