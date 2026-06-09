<?php

namespace App\Enums;

enum EmploymentStatus: string
{
    case CONTRACTUAL = 'contractual';
    case FULL_TIME = 'full-time';
    case PART_TIME = 'part-time';
}
