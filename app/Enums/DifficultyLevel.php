<?php


namespace App\Enums;

enum DifficultyLevel: string
{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case EXPERT = 'expert';

    public function label(): string
    {
        return match ($this) {
            self::BEGINNER => 'Beginner',
            self::INTERMEDIATE => 'Intermediate',
            self::EXPERT => 'Expert',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::BEGINNER => 'success',
            self::INTERMEDIATE => 'info',
            self::EXPERT => 'purple',
        };
    }
}
