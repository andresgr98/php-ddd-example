<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

final class CourseFinderAll
{
    public function __construct(private readonly CourseRepository $repository)
    {
    }

    public function __invoke(): array
    {
        $courses = $this->repository->findAll();

        if (empty($courses)) {
            throw new CoursesNotFound();
        }

        return $courses;
    }
}
