<?php

namespace App\Livewire\Orders;

use App\Livewire\Forms\OrderForm;
use App\Models\Order;
use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public OrderForm $form;
  

    public function mount(Order $order)
    {
        $this->form->setOrderModel($order);
    }

    public function save()
    {
      
        $this->form->store();

        return $this->redirectRoute('orders.index', navigate: true);
    }

    public function render()
    {
      $clients = Client::all();
      
        return view('livewire.order.create', compact('clients'));
    }
}
