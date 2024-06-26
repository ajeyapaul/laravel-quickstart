<?php

namespace App\Enums;

enum RolesEnum: string
{
    case SYSTEM = 'system';
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case USER = 'user';

    public function label(): string
    {
        return match ($this) {
            static::SYSTEM => 'System',
            static::ADMIN => 'Admins',
            static::MANAGER => 'Managers',
            static::USER => 'Users',
        };
    }
}
