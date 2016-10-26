<?php

namespace FacebookAnonymousPublisher\Firewall\Models;

use Illuminate\Database\Eloquent\Model;

class Firewall extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ip';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'binary';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Get the ip address.
     *
     * @param string $value
     *
     * @return string
     */
    public function getIpAttribute($value)
    {
        return inet_ntop($value);
    }

    /**
     * Set the ip address.
     *
     * @param string $value
     *
     * @return void
     */
    public function setIpAttribute($value)
    {
        $this->attributes['ip'] = inet_pton($value);
    }
}