<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use CodelyTv\Mooc\Courses\Application\Find\FindAll\AllCoursesResponse;
use CodelyTv\Mooc\Courses\Application\Find\FindAll\FindAllCoursesQuery;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use CodelyTv\Mooc\Courses\Domain\CoursesResponseFormatter;

final class CoursesGetAllController extends ApiController
{

    public function __invoke(Request $request): Response
    {
        /** @var AllCoursesResponse $response */
        $response = $this->ask(
            new FindAllCoursesQuery()
        );

        return new JsonResponse(
            CoursesResponseFormatter::getArray($response->getCourses()),
            Response::HTTP_OK
        );
    }

    protected function exceptions(): array
    {
        return [];
    }
}
