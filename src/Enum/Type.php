<?php   

namespace App\Enum;

enum Type: string
{
    case TEMPERATURE = 'temperature';
    case HUMIDITY = 'humidity';
    case PRESSURE = 'pressure';
}