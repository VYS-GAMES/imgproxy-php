<?php

declare(strict_types=1);

namespace Onliner\ImgProxy\Options;

final class Crop extends AbstractOption
{
    private Width $width;
    private Height $height;
    private ?Gravity $gravity = null;

    public function __construct(float $width, float $height, Gravity|string|null $gravity = null)
    {
        $this->width = new Width($width);
        $this->height = new Height($height);
        $this->gravity = is_string($gravity) ? Gravity::fromString($gravity) : $gravity;
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return 'c';
    }

    /**
     * @inheritDoc
     */
    public function data(): array
    {
        return array_merge(
            $this->width->data(),
            $this->height->data(),
            $this->gravity ? $this->gravity->data() : []
        );
    }
}
