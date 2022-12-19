<?php

namespace App\Http\Livewire;

use App\Models\OnOff;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Table extends Component implements HasTable
{
    use InteractsWithTable;

    public function render()
    {
        return view('livewire.table');
    }

    protected function getTableQuery(): Builder
    {
        return OnOff::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            ToggleColumn::make('on'),
        ];
    }

}
