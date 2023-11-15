<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class BaseModel extends Model
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * Check Has Field In Table
     *
     * @param string $field field want to check
     *
     * @return bool
     */
    public function hasColumn($field): bool
    {
        $table = $this->getTable();
        return Schema::hasColumn($table, $field);
    }

    public function scopeActived($query)
    {
        return $query->where('actived', static::STATUS_ACTIVE);
    }

    public function scopeInactived($query)
    {
        return $query->where('actived', static::STATUS_INACTIVE);
    }

    public static function getStatusList()
    {
        return [
            self::STATUS_ACTIVE => 'Aktif',
            self::STATUS_INACTIVE => 'Tidak Aktif',
        ];
    }
}
