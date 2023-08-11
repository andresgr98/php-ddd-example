<?php

namespace CodelyTv\Mooc\Courses\Application\Find\FindAll;

class AllCoursesResponseConverter
{
    public function __invoke(array $courses): AllCoursesResponse
    {
        return new AllCoursesResponse($courses);
    }

}