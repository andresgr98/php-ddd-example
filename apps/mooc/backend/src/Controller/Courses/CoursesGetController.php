<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use CodelyTv\Mooc\Courses\Application\Find\CourseResponse;
use CodelyTv\Mooc\Courses\Application\Find\FindCourseQuery;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CoursesGetController extends ApiController
{

    public function __invoke(string $id, Request $request): Response
    {
        /** @var CourseResponse $response */
        $response = $this->ask(
            new FindCourseQuery(
                $id,
            )
        );

        return new JsonResponse(
            [
                "id" => $response->id(),
                "name" => $response->name(),
                "duration" => $response->duration()
            ],
            Response::HTTP_OK
        );
    }

    protected function exceptions(): array
    {
        return [];
    }
}
