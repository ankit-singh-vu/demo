<?php

namespace App\Filament\Clusters\Products\Resources\UserResource\Pages;

use App\Filament\Clusters\Products\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
