<?php

namespace App\Clinical;

class ClinicalArticle
{
    public function __construct(
        public readonly string $key,
        public readonly string $locale,
        public readonly string $title,
        public readonly string $slug,
        public readonly string $description,
        public readonly string $keywords,
        public readonly bool $published,
        public readonly int $order,
        public readonly string $html,
        public readonly string $plainText,
    ) {}

    public function url(): string
    {
        return route('clinical-articles.show', [
            'locale' => $this->locale,
            'slug' => $this->slug,
            'hl' => $this->locale,
        ]);
    }
}
