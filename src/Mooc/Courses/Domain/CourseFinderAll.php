<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Domain;

final class CourseFinderAll
{
    public function __construct(private readonly CourseRepository $repository)
    {
    }

    public function __invoke(): Courses
    {
        $courses = $this->repository->findAll();

        $this->guard($courses);

        return $courses;
    }
    
    public function guard(Courses $courses): void
    {
        if ($courses->isEmpty()) {
            throw new CoursesNotFound();
        }
    }
}
