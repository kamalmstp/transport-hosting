<?php

namespace App\Livewire\Orders;

use App\Livewire\Forms\OrderForm;
use App\Models\Order;
use Livewire\Component;

class Edit extends Component
{
    public OrderForm $form;

    public function mount(Order $order)
    {
        $this->form->setOrderModel($order);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('orders.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.order.edit');
    }
}
