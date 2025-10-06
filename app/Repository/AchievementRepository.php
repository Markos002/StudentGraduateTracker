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

        return Achievements::create($data);

    }

    public function update($data)
    {

        $find = $this->findById($data['achievement_id']);

        return $find->update($data);

    }


    public function findPersonalSummaryById($userId)
    {

        return Achievements::where('user_id', $userId)
                       ->latest()
                       ->value('personal_summary');
    }

    public function getCertificateListById($userId)
    {

        return Achievements::where('user_id', $userId)
                       ->select([
                          'achievement_id',
                          'cert_name',
                          'year',
                          'term',
                       ])
                       ->get();
    }

}