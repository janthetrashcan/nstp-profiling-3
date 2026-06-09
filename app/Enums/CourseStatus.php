<?php

namespace App\Enums;

enum CourseStatus: string
{
    case PASSED = 'passed';
    case FAILED = 'failed';
    case INCOMPLETE = 'inc';
    case DROPPED = 'dropped';
}
