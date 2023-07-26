<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Create;

use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Courses\Domain\CourseDuration;
use CodelyTv\Mooc\Courses\Domain\CourseName;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\LogRepository;
use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Shared\Domain\Bus\Event\EventBus;

final class CourseCreator
{
    public function __construct(private readonly CourseRepository $repository, private readonly EventBus $bus, private readonly LogRepository $logRepository)
    {
    }

    public function __invoke(CourseId $id, CourseName $name, CourseDuration $duration): void
    {
        $course = Course::create($id, $name, $duration);

        $this->repository->save($course);
        $this->bus->publish(...$course->pullDomainEvents());
        $this->logRepository->info("Se ha creado un nuevo curso con id {$course->id()}");
    }
}
