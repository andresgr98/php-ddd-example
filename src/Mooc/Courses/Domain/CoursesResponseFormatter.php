<?php

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Mooc\Courses\Application\Find\FindAll\AllCoursesResponse;

class CoursesResponseFormatter
{

    public static function getArray(array $courses): array
    {
        $arr = [];
        foreach ($courses as $key => $course) {
            $arr[$key]["id"] = $course->id();
            $arr[$key]["name"] = $course->name();
            $arr[$key]["duration"] = $course->duration();
        }
        return $arr;
    }
}