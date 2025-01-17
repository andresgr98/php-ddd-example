<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;

final class CourseFinder
{
    public function __construct(private readonly CourseRepository $repository)
    {
    }

    public function __invoke(CourseId $id): Course
    {
        $course = $this->repository->search($id);

        if (!$course instanceof Course) {
            throw new CourseNotExist($id);
        }

        return $course;
    }
}
