<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find\FindAll;

use CodelyTv\Mooc\Courses\Domain\CourseFinderAll;
use CodelyTv\Shared\Domain\Bus\Query\QueryHandler;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;
use const Lambdish\Phunctional\apply;

final class FindAllCoursesQueryHandler implements QueryHandler
{
    private $finder;

    public function __construct(CourseFinderAll $finder)
    {
        $this->finder = pipe($finder, new AllCoursesResponseConverter());
    }

    public function __invoke(FindAllCoursesQuery $query): AllCoursesResponse
    {
        return apply($this->finder);
    }
}