<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

//    protected static string $view = 'settings.main';
    protected static string $view = 'filament.pages.settings';

    protected static ?string $title = 'Settings';
    protected static ?string $navigationLabel = 'Custom Navigation Label';
    protected ?string $heading = 'Custom Page Heading';
    protected ?string $subheading = 'Custom Page Subheading';

    public static function canAccess(): bool
    {
        //return auth()->user()->canManageSettings();
        return true;
    }
}
