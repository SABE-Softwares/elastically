<?php

/*
 * This file is part of the jolicode/elastically library.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Elastically\Messenger;

use App\Core\Infrastructure\Elastic\Article\ArticleDTO as ArticleDTO;

final class IndexationRequest implements IndexationRequestInterface
{
    private string $className;
    private string $id;
    private ArticleDTO $articleDTO;
    private string $operation;

    public function __construct(string $className, string $id, ArticleDTO $articleDTO, $operation = IndexationRequestHandler::OP_INDEX)
    {
        if (!\in_array($operation, IndexationRequestHandler::OPERATIONS, true)) {
            throw new \InvalidArgumentException(sprintf('Not supported operation "%s" given.', $operation));
        }

        $this->className = $className;
        $this->id = $id;
        $this->articleDTO = $articleDTO;
        $this->operation = $operation;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getArticleDTO(): ArticleDTO
    {
        return $this->articleDTO;
    }
}
