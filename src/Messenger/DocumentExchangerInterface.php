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

use Elastica\Document as ElasticaDocument;
use App\Core\Infrastructure\Elastic\Article\ArticleDTO as ArticleDTO;

interface DocumentExchangerInterface
{
    public function fetchDocument(string $className, string $id, ArticleDTO $articleDTO): ?ElasticaDocument;
}
