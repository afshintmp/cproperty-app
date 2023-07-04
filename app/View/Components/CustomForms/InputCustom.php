<?php

namespace App\View\Components\CustomForms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputCustom extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $inputLabel,
                                public string $svg,
                                public string $type,
                                public string $name,
                                public string $placeholderTxt ,
                                public string $value = '' )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-forms.input-custom');
    }
}
