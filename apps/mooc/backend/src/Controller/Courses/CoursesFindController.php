<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use CodelyTv\Mooc\Courses\Application\Find\GetCourseCommand;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CoursesFindController extends ApiController
{

    public function __invoke(Request $request): Response
    {
        $course = $this->dispatch(
            new GetCourseCommand(
                (string) $request->request->get('id'),
            )
        );

        return new Response($course, Response::HTTP_OK);
    }

    protected function exceptions(): array
    {
        return [];
    }
}
