<?php

namespace CodelyTv\Mooc\Courses\Application\Find\FindAll;

use CodelyTv\Shared\Domain\Bus\Query\Response;

class AllCoursesResponse implements Response
{

    public function __construct(private readonly array $courses)
    {
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

}