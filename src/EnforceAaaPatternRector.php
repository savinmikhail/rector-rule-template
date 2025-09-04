<?php

declare(strict_types=1);

namespace SavinMikhail\EnforceAaaPatternRector;

use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\Exception\PoorDocumentationException;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class EnforceAaaPatternRector extends AbstractRector
{
    /**
     * @throws PoorDocumentationException
     */
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            description: '',
            codeSamples: [
                new CodeSample(
                    badCode: <<<'PHP_WRAP'

                        PHP_WRAP,
                    goodCode: <<<'PHP_WRAP'

                        PHP_WRAP,
                ),
            ],
        );
    }

    public function getNodeTypes(): array
    {
        return [ClassMethod::class];
    }

    public function refactor(Node $node): ?Node
    {
        return $node;
    }
}
