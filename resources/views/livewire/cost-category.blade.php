<div>
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif                
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addCostCategory)
            @include('livewire.cost-category.create')
        @endif            
        @if($updateCostCategory)
            @include('livewire.cost-category.update')
        @endif
    </div>    
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if(!$addCostCategory)
                <button wire:click="addCostCategory()" class="btn btn-primary btn-sm float-right">Add New Post</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($cost_category) > 0)
                                @foreach ($cost_category as $row)
                                    <tr>
                                        <td>
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            <button wire:click="editCostCategory({{$row->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deleteCostCategory({{$row->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Posts Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
    <script>
        function deletePost(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deleteCostListner',id);
        }
    </script>
</div>