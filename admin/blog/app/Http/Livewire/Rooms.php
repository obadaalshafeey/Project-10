<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\romms;

class Rooms extends Component
{

    public $rooms, $name, $price, $room_id, $des, $img;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    public function render()

    {
        
        $this->rooms= rooms::all();
      
        return view('livewire.rooms');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->price = '';
        $this->room_id = '';
        $this->img = '';
        $this->des = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'img' => 'required',
            'des' => 'required',
        ]);
   
        rooms::updateOrCreate(['id' => $this->room_id], [
            'name' => $this->name,
            'price' => $this->body,
            'img' => $this->img,
            'des' => $this->des
        ]);
  
        session()->flash('message', 
            $this->rooms_id ? 'rooms Updated Successfully.' : 'rooms Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $room = Rooms::findOrFail($id);
        $this->room_id = $id;
        $this->name = $room->name;
        $this->price = $room->price;
        $this->img = $room->img;
        $this->des = $room->des;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        rooms::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
