<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drug extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function articleTranslation(): BelongsTo
    {
        return $this->belongsTo(ArticleTranslation::class);
    }

    public function childClass(string $value)
    {
        $childs = ['A' => $this->childa_category, 'B' => $this->childb_category, 'C' => $this->childc_category];

        return $this->childIntToClass($childs[$value]);
    }

    public function childString(string $value)
    {
        $childs = ['A' => $this->childa_category, 'B' => $this->childb_category, 'C' => $this->childc_category];

        return $this->childIntToString($childs[$value]);
    }

    private function childIntToClass(int $value)
    {
        if($value === 1) {
            return 'securitaire';
        } else if($value === 2) {
            return 'precaution';
        } else if($value === 3) {
            return 'absence-donnees';
        } else if($value === 4) {
            return 'non-recommande';
        }
    }

    private function childIntToString(int $value)
    {
        if($value === 1) {
            return 'Sécuritaire';
        } else if($value === 2) {
            return 'Utiliser avec précaution';
        } else if($value === 3) {
            return 'Absence de données';
        } else if($value === 4) {
            return 'Non recommandé';
        }
    }
}
