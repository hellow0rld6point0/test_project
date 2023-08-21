<?php

namespace App\Model;

class BookCategoryListResponse
{
    /**
     * @var BookCategoryListItem[]
     */
    private array $items;

    /**
     * @return BookCategoryListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param BookCategoryListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

}
