<x-app-layout>
    <x-slot name="title">Car Model</x-slot>
    <x-slot name="content">
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Car Model ( <span id="total-car-model"></span> )</h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#carmodel">
                            Add model
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-2">
            <input type="text" placeholder="Search Here..." name="search" id="search-carModel"
                class="form-control form-control-lg mb-3 m-auto w-50">
        </div>
        <div class="container">
            <div id="table-data-model"></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="carmodel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Car model</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="addcarModel" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Enter model</label>
                                <input type="text" name="car_model_name" id="car_model_name"
                                    class="form-control form-control-lg">
                            </div>

                            <div class="form-group">
                                <label for="">Enter Car Brand</label>
                                <select name="car_id" id="car_brand" class="form-control form-control-lg">
                                    <option disabled selected>Select Car Brand</option>
                                    @foreach ($brand as $cat)
                                    <option value="{{$cat->id}}">{{$cat->car_brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='editmodel' tabindex='-1' role='dialog' aria-labelledby='modelTitleId'
            aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Add Car model</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>

                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>

                    <div class='modal-body'>
                        <form action='' id='editcarModel' enctype='multipart/form-data'>
                            @csrf
                            <div id="form-data"></div>
                            <div class='form-group'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='submit' class='btn btn-primary'>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>