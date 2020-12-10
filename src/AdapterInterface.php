<?php

namespace Anyparse;

interface AdapterInterface
{
    public function collectCategories();

    public function collectCategoriesSync(): array;

    public function collectElements();

    public function collectElementsSync(): array;

    public function parseElement(ElementInterface $element);

    public function parseElementSync(ElementInterface $element): ElementInterface;
}