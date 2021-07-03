<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Producto extends Component
{

    public $nombre;
    public $img;
    public $precio;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $nombre, $precio)
    {
        $this->nombre= $nombre;
        $this->img= $img;
        $this->precio= $precio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.producto');
    }
}
