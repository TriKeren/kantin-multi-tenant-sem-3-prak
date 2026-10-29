<?php

namespace Tests\Fixtures\Modules\Probe;

use App\Modules\ModuleServiceProvider;
use Livewire\Livewire;
use Tests\Fixtures\Modules\Probe\Livewire\Counter;

final class ProbeServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        Livewire::component('probe::counter', Counter::class);
    }

    protected function moduleAlias(): string
    {
        return 'probe';
    }
}