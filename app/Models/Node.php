<?php

namespace App\Models;

use HiHaHo\EncryptableTrait\Encryptable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Node extends Model {
    use Encryptable;

    /**
     * @var string[] Encryptable traits
     */
    protected $encryptable = [
        'password'
    ];

    /**
     * Location relation, each node belongs to a single location.
     */
    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }

    /**
     * Creates a new API Client to authenticate and use the node's API.
     */
    public function newApiClient() {
        // TODO: API Client implementation, based off ZzAntares/ProxmoxVE but updated for Guzzle 7?
    }
}
