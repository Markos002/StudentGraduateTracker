<?php

namespace App\Interfaces\Repository;

interface AchievementRepositoryInterface
{

    public function findById($achievementId);

    public function store($data);

    public function update($data);


}