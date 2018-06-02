<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function childClass(string $value)
    {
        $childs = ['A' => $this->childA_category, 'B' => $this->childB_category, 'C' => $this->childC_category];

        return $this->childIntToClass($childs[$value]);
    }

    public function childString(string $value)
    {
        $childs = ['A' => $this->childA_category, 'B' => $this->childB_category, 'C' => $this->childC_category];

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
