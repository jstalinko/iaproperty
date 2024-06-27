<?php

namespace App\Filament\Pages;

use App\Models\Setting as ModelsSetting;
use Filament\Pages\Page;

class Setting extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $view = 'filament.pages.setting';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'General Settings';

    public ?string $domain;
    public ?string $name;
    public ?string $tag;
    public ?string $meta;



    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        $data = \App\Models\Setting::first();
        //$this->data = $data;
        $metaForms = [];
        $metaFill = [];
        foreach(json_decode($data['meta'],true) as $name=>$val)
        {
            $metaForms[] = \Filament\Forms\Components\TextInput::make($name)->default($val);
            $metaFill[] = $val;
        }
        $logoSchema = [
            \Filament\Forms\Components\FileUpload::make('logo'),
            \Filament\Forms\Components\FileUpload::make('icon')
        ];

        $formSchema = [
            \Filament\Forms\Components\TextInput::make('domain')->default($data['domain']),
            \Filament\Forms\Components\TextInput::make('name')->default($data['name']),
            \Filament\Forms\Components\TextInput::make('tag')->default($data['tag']),
            \Filament\Forms\Components\Section::make('Logo')->icon('heroicon-o-photo')->schema($logoSchema),
            \Filament\Forms\Components\Section::make('Meta Setting')->icon('heroicon-o-cog')
            ->schema($metaForms)
        ];



        return $form->schema($formSchema)->fill(\App\Models\Setting::first()->toArray())->statePath('setting');
    }

    public function save(): void
    {
        $this->form->validate();
        dd($this->form->getState());
    }
}
