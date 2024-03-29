<?php

declare(strict_types=1);

namespace Yiiliveext\Yii\Debug\Panels\Panels\Routes;

use Psr\Http\Message\ResponseInterface;
use Yiisoft\DataResponse\DataResponseFactoryInterface;

final class PanelRoutesController
{
    private DataResponseFactoryInterface $responseFactory;

    /**
     * PanelRoutesController constructor.
     */
    public function __construct(
        DataResponseFactoryInterface $responseFactory
    ) {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @return ResponseInterface
     */
    public function view(): ResponseInterface
    {
        return $this->responseFactory->createResponse(file_get_contents(__DIR__ . '/view.html'));
    }
}
