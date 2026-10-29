<?php

namespace Tests\Fixtures\Modules\Probe\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            Probe count: {{ $count }}
        </div>
        HTML;
    }
}