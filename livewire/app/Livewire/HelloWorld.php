<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{	
	public $name = 'shahbaz';
	public $ne = null;
    public function render()
    {
        return view('livewire.hello-world');
    }
    public function update($value)
    {
    	$this->ne = $value;
    }
}
