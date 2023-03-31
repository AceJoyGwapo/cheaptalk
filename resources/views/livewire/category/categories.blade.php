

<div>
    @if (session()->has('message'))
        <div class="alert  mt-3 alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('deleted'))
        <div class="alert mt-3 alert-danger text-center">
            {{ session('deleted') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert mt-3 alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

<div class="body">
    <div class="container">
        <div class="float-end mt-3">
            <h1 class="text-white">Create New Category Here</h1>
        </div> <br> <br> <br> <br>

        <div class="mb-3">
            <input type="text" class="form-control mb-3" placeholder="Category" wire:model="category">
            <textarea rows="1" cols="5" type="text" placeholder="Remarks" class="form-control" wire:model="remarks"></textarea>
        </div>


    <table class="table table-bordered table-hover text-white shadow">
        <thead class="bghdcolor">
            <tr class="text-center">
                <th>Category</th>
                <th>Remarks</th>

            </tr>
        </thead>
        <tbody class="">
            @foreach ( $categories as $category )
                <tr>
                    <td class="text-center">{{ $category->category }}</td>
                    <td class="text-center">{{ $category->remarks }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn mt-3 float-end btn btn-danger pt-2 pb-2 pe-5 ps-5 text-white" data-bs-dismiss="modal" wire:click="store()">Add Category</button> <br> <br> <br>
</div>
<style>
    .body{
        display: grid;
        place-content: center;
    }


</style>
</div>


   <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="newCategory" aria-hidden="true">
        <div class="modal-dialog">

        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteCategoryModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="deleteCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bghdcolor theadclr">
                    <h1 class="modal-title fs-5" id="newCategory">Are you sure you want to remove this category?</h1>
                </div>
                <div class="modal-body bgcolor">
                    <div class="mt-3 col-md-7 mx-auto">
                        <input type="text" class="form-control text-center createcolor" placeholder="Category" wire:model="dltCategory" readonly>
                    </div>
                    <div class="input-group input-group-lg mt-3">
                        <textarea class="form-control form-control-lg createcolor" placeholder="Remarks" wire:model="dltRemarks" readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer bghdcolor">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn addcatebtnclr" data-bs-dismiss="modal" wire:click="destroy()">Remove</button>
                </div>
            </div>
        </div>
    </div>
</div>




