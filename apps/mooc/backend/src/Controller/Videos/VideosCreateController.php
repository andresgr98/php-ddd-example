<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Videos;

use CodelyTv\Mooc\Videos\Application\Create\CreateVideoCommand;
use CodelyTv\Mooc\Videos\Application\Update\UpdateVideoTitleCommand;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class VideosCreateController extends ApiController
{
    public function __invoke(Request $request): Response
    {
        $this->dispatch(
            new CreateVideoCommand(
                (string) $request->request->get('id'),
                (string) $request->request->get('type'),
                (string) $request->request->get('title'),
                (string) $request->request->get('url'),
                (string) $request->request->get('courseId'),
            )
        );

        return new Response('', Response::HTTP_CREATED);
    }

    protected function exceptions(): array
    {
        return [];
    }
}
