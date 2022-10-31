<?php

namespace App\GraphQL\Mutations;

use App\Models\Article;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class ArticleMutator
{
    public function create($rootValue, array $args, GraphQLContext $context)
    {
        $article = new Article($args);
        $context->user()->articles()->save($article);

        return $article;
    }
}
