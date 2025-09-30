<?php

namespace App\Repository;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Models\Achievements;
class AchievementRepository implements AchievementRepositoryInterface
{

    public function findById($achievementId)
    {

        return Achievements::findOrFail($achievementId);

    }

    public function store($data)
    {

        return Achievements::created($data);

    }

    public function update($data)
    {

        $find = $this->findById($data['achievement_id']);

        return $find->update($data);

    }   
}