<?php

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Mooc\Courses\Application\Find\FindAll\AllCoursesResponse;

class CoursesResponseFormatter
{

    private AllCoursesResponse $allCoursesResponse;

    public static function getArray(array $courses): array
    {
        $arr = [];
        foreach ($courses as $key => $course) {
            $arr[$key]["id"] = $course->id()->value();
            $arr[$key]["name"] = $course->name()->value();
            $arr[$key]["duration"] = $course->duration()->value();
        }
        return $arr;
    }
}