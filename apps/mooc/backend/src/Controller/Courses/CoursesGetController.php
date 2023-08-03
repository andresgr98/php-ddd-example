<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use CodelyTv\Mooc\Courses\Application\Find\FindCourseCommand;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CoursesGetController extends ApiController
{

    public function __invoke(string $id, Request $request): Response
    {
        $course = $this->dispatch(
            new FindCourseCommand(
                $id,
            )
        );
 
        return new JsonResponse(json_encode($course), Response::HTTP_OK);
    }

    protected function exceptions(): array
    {
        return [];
    }
}
