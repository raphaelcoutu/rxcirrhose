<?php

namespace App\Clinical;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class ClinicalArticleRepository
{
    public function __construct(
        private readonly GithubFlavoredMarkdownConverter $markdown,
    ) {}

    public function all(?string $locale = null): Collection
    {
        $articles = collect();

        foreach (File::directories($this->basePath()) as $directory) {
            $key = basename($directory);

            foreach (File::files($directory) as $file) {
                if ($file->getExtension() !== 'md') {
                    continue;
                }

                $article = $this->parseArticle($key, $file->getPathname());

                if (! $article->published) {
                    continue;
                }

                if ($locale !== null && $article->locale !== $locale) {
                    continue;
                }

                $articles->push($article);
            }
        }

        return $articles
            ->sortBy([
                ['order', 'asc'],
                ['title', 'asc'],
            ])
            ->values();
    }

    public function findBySlug(string $locale, string $slug): ?ClinicalArticle
    {
        return $this->all($locale)->firstWhere('slug', $slug);
    }

    public function findByKeyAndLocale(string $key, string $locale): ?ClinicalArticle
    {
        $path = $this->basePath($key.'/'.$locale.'.md');

        if (! File::exists($path)) {
            return null;
        }

        $article = $this->parseArticle($key, $path);

        if (! $article->published) {
            return null;
        }

        return $article;
    }

    public function localesForKey(string $key): Collection
    {
        return collect(['fr', 'en'])
            ->mapWithKeys(fn (string $locale) => [$locale => $this->findByKeyAndLocale($key, $locale)])
            ->filter();
    }

    private function parseArticle(string $key, string $path): ClinicalArticle
    {
        $contents = File::get($path);
        [$frontMatter, $body] = $this->splitFrontMatter($contents);

        $locale = pathinfo($path, PATHINFO_FILENAME);
        $metadata = $this->parseFrontMatter($frontMatter);
        $html = (string) $this->markdown->convert($body);
        $plainText = trim(preg_replace('/\s+/', ' ', strip_tags($html)));

        return new ClinicalArticle(
            key: $key,
            locale: $locale,
            title: (string) ($metadata['title'] ?? ''),
            slug: (string) ($metadata['slug'] ?? $key),
            description: (string) ($metadata['description'] ?? ''),
            keywords: (string) ($metadata['keywords'] ?? ''),
            published: (bool) ($metadata['published'] ?? false),
            order: (int) ($metadata['order'] ?? 999),
            html: $html,
            plainText: $plainText,
        );
    }

    private function splitFrontMatter(string $contents): array
    {
        if (! Str::startsWith($contents, "---\n")) {
            return ['', $contents];
        }

        $parts = preg_split("/^-{3}\R/m", $contents, 3);

        if (! is_array($parts) || count($parts) < 3) {
            return ['', $contents];
        }

        return [trim($parts[1]), ltrim($parts[2])];
    }

    private function parseFrontMatter(string $frontMatter): array
    {
        $metadata = [];

        foreach (preg_split("/\R/", $frontMatter) as $line) {
            if (! str_contains($line, ':')) {
                continue;
            }

            [$key, $value] = explode(':', $line, 2);
            $key = trim($key);
            $value = trim($value, " \t\n\r\0\x0B\"'");

            if ($value === 'true') {
                $value = true;
            } elseif ($value === 'false') {
                $value = false;
            } elseif (is_numeric($value)) {
                $value = (int) $value;
            }

            $metadata[$key] = $value;
        }

        return $metadata;
    }

    private function basePath(string $path = ''): string
    {
        $basePath = resource_path('content/clinical');

        if ($path === '') {
            return $basePath;
        }

        return $basePath.'/'.$path;
    }
}
