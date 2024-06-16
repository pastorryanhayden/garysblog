<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\Action;
use Filament\Support\Exceptions\Halt;


use App\Models\Settings as SettingsModel;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = []; 

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 3;

    public function mount(): void 
    {

        $settings = SettingsModel::first();

        if(!isset($settings))
        {
            $settings = new SettingsModel;
            $settings->title = "Gary's Bible Blog";
            $settings->description = "Thoughts on the scripture and living the Christian life.";
            $settings->save();
        }


        $this->form->fill($settings->attributesToArray()); 
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextArea::make('description')
                    ->required(),
                FileUpload::make('photo')
                    ->required()
                    ->image()
            ])
            ->statePath('data');
    } 

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
 
            SettingsModel::first()->update($data);
        } catch (Halt $exception) {
            return;
        }
    }
}
