<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Handler;

/**
 * Describes a handler and the possible associated options, such as `from_transport`, `bus`, etc.
 *
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
final class HandlerDescriptor
{
    private \Closure $handler;
    private string $name;
    private ?BatchHandlerInterface $batchHandler = null;

    public function __construct(
        callable $handler,
        private array $options = [],
    ) {
        $handler = $handler(...);

        $this->handler = $handler;

        $r = new \ReflectionFunction($handler);

        if ($r->isAnonymous()) {
            $this->name = 'Closure';
        } elseif (!$handler = $r->getClosureThis()) {
            $class = $r->getClosureCalledClass();

            $this->name = ($class ? $class->name.'::' : '').$r->name;
        } else {
            if ($handler instanceof BatchHandlerInterface) {
                $this->batchHandler = $handler;
            }

            $this->name = $handler::class.'::'.$r->name;
        }
    }

    public function getHandler(): \Closure
    {
        return $this->handler;
    }

    public function getName(): string
    {
        $name = $this->name;
        $alias = $this->options['alias'] ?? null;

        if (null !== $alias) {
            $name .= '@'.$alias;
        }

        return $name;
    }

    public function getBatchHandler(): ?BatchHandlerInterface
    {
        return $this->batchHandler;
    }

    public function getOption(string $option): mixed
    {
        return $this->options[$option] ?? null;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
