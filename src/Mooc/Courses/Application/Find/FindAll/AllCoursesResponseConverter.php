<?php

namespace CodelyTv\Mooc\Courses\Application\Find\FindAll;

use CodelyTv\Mooc\Courses\Application\Find\CourseResponseConverter;
use CodelyTv\Mooc\Courses\Domain\Courses;
use function Lambdish\Phunctional\map;

class AllCoursesResponseConverter
{
    public function __invoke(Courses $courses): AllCoursesResponse
    {
        return new AllCoursesResponse(map(new CourseResponseConverter(), $courses));
    }

}