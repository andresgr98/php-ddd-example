<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\Course;

final class CourseResponseConverter
{
    public function __invoke(Course $course): CourseResponse
    {
        return new CourseResponse(
            $course->id()->value(),
            $course->duration()->value(),
            $course->name()->value()
            );
    }
} 