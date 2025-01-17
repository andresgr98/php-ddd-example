<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Courses;

use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\LogRepository;
use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Tests\Shared\Infrastructure\PhpUnit\UnitTestCase;
use Mockery\MockInterface;

abstract class CoursesModuleUnitTestCase extends UnitTestCase
{
    private CourseRepository|MockInterface|null $repository;
    private LogRepository|MockInterface|null $logRepository;

    protected function shouldSave(Course $course): void
    {
        $this->repository()
            ->shouldReceive('save')
            ->with($this->similarTo($course))
            ->once()
            ->andReturnNull();
    }

    protected function shouldSearch(CourseId $id, ?Course $course): void
    {
        $this->repository()
            ->shouldReceive('search')
            ->with($this->similarTo($id))
            ->once()
            ->andReturn($course);
    }

    protected function shouldLog(): void
    {
        $this->logRepository()
            ->shouldReceive('info')
            ->once();
    }

    protected function repository(): CourseRepository|MockInterface
    {
        return $this->repository = $this->repository ?? $this->mock(CourseRepository::class);
    }

    public function logRepository(): LogRepository|MockInterface
    {
        return $this->logRepository = $this->logRepository ?? $this->mock(LogRepository::class);
    }
}
