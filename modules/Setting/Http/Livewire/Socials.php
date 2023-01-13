<?php

namespace Modules\Setting\Http\Livewire;

use Modules\Setting\Entities\Social;
use Livewire\Component;

class Socials extends Component
{
    public $icon;
    public $url;
    public $social_id;

    public function delete(Social $social) 
    {
        $social->delete();

        flashify()->livewire($this)->fire('deleted');
    }

    public function edit(Social $social) 
    {

        $this->social_id = $social->id;

        $this->icon = $social->icon;

        $this->url = $social->url;
    }

    public function store()
    {
       $this->validate([
            'icon' => 'required',
            'url' => 'required',
        ]);

        Social::updateOrCreate(['id' => $this->social_id], [
            
            'icon' =>$this->icon,
            'url' =>$this->url,
        ]);

        flashify()->livewire($this)->fire($this->social_id ? 'updated' : 'created');

        $this->reset('icon', 'url');
      
    }

    public function render()
    {
        $socials = Social::all();
        return view('setting::livewire.socials', compact('socials'));
    }
}
