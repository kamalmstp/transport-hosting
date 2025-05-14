<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cost_category as Cost_category;

class CostCategory extends Component
{
  public $cost_category, $name, $cost_categoryId, $updateCostCategory = false, $addCostCategory = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteCostListner'=>'deleteCost'
    ];

    /**
     * List of add/edit form rules 
     */
    protected $rules = [
        'name' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->name = '';
    }
    

    /**
     * Open Add Post form
     * @return void
     */
    public function addCostCategory()
    {
        $this->resetFields();
        $this->addCostCategory = true;
        $this->updateCostCategory = false;
    }
     /**
      * store the user inputted post data in the posts table
      * @return void
      */
    public function storePostCategory()
    {
        $this->validate(); 
        try {
            Cost_category::create([
                'name' => $this->name
            ]);
            session()->flash('success','Berhasil ditambahkan');
            $this->resetFields();
            $this->addCostCategory = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function editCostCategory($id){
        try {
            $cost_category = Cost_category::findOrFail($id);
            if( !$cost_category) {
                session()->flash('error','Post not found');
            } else {
                $this->name = $cost_category->name;
                $this->updateCostCategory = true;
                $this->addCostCategory = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
        
    }

    /**
     * update the post data
     * @return void
     */
    public function updateCostCategory()
    {
        $this->validate();
        try {
            Cost_category::whereId($this->cost_categoriesId)->update([
                'name' => $this->name
            ]);
            session()->flash('success','Post Updated Successfully!!');
            $this->resetFields();
            $this->updateCostCategory = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelCostCategory()
    {
        $this->addCostCategory = false;
        $this->updateCostCategory = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deleteCostCategory($id)
    {
        try{
            Cost_category::find($id)->delete();
            session()->flash('success',"Post Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
    
    public function render()
    {
        $this->cost_category = Cost_category::select('name')->get();
        return view('livewire.cost-category');
    }
}
