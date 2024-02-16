<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public static function canAccess(): bool
    {
        //return auth()->user()->canManageSettings();
        return true;
    }
}
