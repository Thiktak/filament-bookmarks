<?php

namespace Thiktak\FilamentBookmarks\Livewire;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Thiktak\FilamentBookmarks\Actions\BookmarkAction;
use Filament\Support\Contracts\TranslatableContentDriver;

class TopbarBookmark extends Component implements HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public function bookmarkAction(): Action
    {
        return BookmarkAction::make('topbar')
            ->activatePageFeatures(false);
    }

    public function render(): View
    {
        //dd(0);
        return view('thiktak-filament-bookmarks::components.topbar.index');
    }
}
