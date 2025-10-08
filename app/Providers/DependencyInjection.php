<?php

namespace App\Providers;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Repository\MasterListRepositoryInterface;
use App\Interfaces\Repository\ReportsRepositoryInterface;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Interfaces\Repository\UserDataRepositoryInterface;
use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\Auth\CheckStudentIfExistServiceInterface;
use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Interfaces\Services\Auth\UpdatePersonalDetailsServiceInterface;
use App\Interfaces\Services\ReportsServiceInterface;
use App\Interfaces\Services\StudentReadServiceInterface;
use App\Interfaces\Services\StudentRecordServiceInterface;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use App\Interfaces\Services\StudentWriteServiceInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Repository\AchievementRepository;
use App\Repository\JobRepository;
use App\Repository\MasterListRepository;
use App\Repository\ReportsRepository;
use App\Repository\StudentRegistryRepository;
use App\Repository\UserDataRepository;
use App\Repository\UserRepository;
use App\Services\Auth\CheckStudentIfExistService;
use App\Services\Auth\RegisterService;
use App\Services\Auth\UpdatePersonalDetailsService;
use App\Services\ReportsService;
use App\Services\StudentReadService;
use App\Services\StudentRecordService;
use App\Services\StudentRegistryService;
use App\Services\StudentWriteService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class DependencyInjection extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Repositories
        $this->app->bind(MasterListRepositoryInterface::class, MasterListRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
        $this->app->bind(ReportsRepositoryInterface::class, ReportsRepository::class);
        $this->app->bind(StudentRegistryRepositoryInterface::class, StudentRegistryRepository::class);
        $this->app->bind(AchievementRepositoryInterface::class, AchievementRepository::class);
        $this->app->bind(UserDataRepositoryInterface::class, UserDataRepository::class);

        // Services
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(ReportsServiceInterface::class, ReportsService::class);
        $this->app->bind(StudentRegistryServiceInterface::class, StudentRegistryService::class);
        $this->app->bind(StudentRecordServiceInterface::class, StudentRecordService::class);
        $this->app->bind(StudentWriteServiceInterface::class, StudentWriteService::class);
        $this->app->bind(StudentReadServiceInterface::class, StudentReadService::class);
        $this->app->bind(UpdatePersonalDetailsServiceInterface::class, UpdatePersonalDetailsService::class);
        $this->app->bind(CheckStudentIfExistServiceInterface::class, CheckStudentIfExistService::class);
    }

    /**
     * Bootstrap services.  
     */
    public function boot(): void
    {
        //
    }
}
