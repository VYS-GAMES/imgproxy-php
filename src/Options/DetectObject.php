<?php

declare(strict_types=1);

namespace Onliner\ImgProxy\Options;

final class DetectObject extends AbstractOption
{
    private bool $detectObjects;

    public function __construct(bool $detectObjects = true)
    {
        $this->detectObjects = $detectObjects;
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return 'detect_objects';
    }

    /**
     * @inheritDoc
     */
    public function data(): array
    {
        return [
            (int) $this->detectObjects,
        ];
    }
}
