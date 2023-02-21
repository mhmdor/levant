<x-app-layout>
    <x-slot name="title">Car</x-slot>

    <x-slot name="content">
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title> Admin 2 - Tables</title>

            <!-- Custom fonts for this template -->
            <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
            <link
                href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
                rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

            <!-- Custom styles for this page -->
            <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

        </head>

        <body id="page-top">

            <div class="jumbotron">
                <h1 class="display-4">{{ $Type }} Orders In LEVANT</h1>

            </div>
            @if ($books->count() > 0)
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ads in Car Rental</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>Book id</td>
                                        <td>Car</td>
                                        <td>Customer</td>
                                        <td>Start</td>
                                        <td>End</td>
                                        <td>Days</td>
                                        <td>Time</td>
                                        @if ($Type == 'NEW')
                                            <td>Accept</td>
                                        @elseif($Type == 'Accepted')
                                            <td>finished</td>
                                        @endif


                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Book id</td>
                                        <td>Car</td>
                                        <td>Customer</td>
                                        <td>Start</td>
                                        <td>End</td>
                                        <td>Days</td>
                                        <td>Time</td>
                                        @if ($Type == 'NEW')
                                            <td>Accept</td>
                                        @elseif($Type == 'Accepted')
                                            <td>finished</td>
                                        @endif

                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($books as $ad)
                                        <tr>
                                            <th scope="row">{{ $ad->id }}</th>
                                            <td>
                                                <a tabindex="0" class="btn btn-outline-dark btn-lg" role="button"
                                                    data-toggle="popover" data-trigger="focus"
                                                    title="<h4>Car Information</h4>"
                                                    data-content="
             <h5> Model : {{ $ad->book_car->car_model->car_model_name }}</h5>
              <br />
              <h5> Year : {{ $ad->book_car->year }}</h5>
              <br />
              <h5> color : {{ $ad->book_car->car_color }}</h5>
              <br />
             
              "
                                                    data-html="true"
                                                    id="example">{{ $ad->book_car->car_model->car_model_name }}</a>

                                            </td>

                                            <td>
                                                <a tabindex="0" class="btn btn-outline-dark btn-lg" role="button"
                                                    data-toggle="popover" data-trigger="focus"
                                                    title="<h4>Customer Information</h4>"
                                                    data-content="
                <h5> Name : {{ $ad->customar_books->fname }} {{ $ad->customar_books->lname }}</h5>
                <br />
                <h5> Mobile :  {{ $ad->customar_books->phone }}</h5>
                <br />
                <h5> Email :  {{ $ad->customar_books->email }}</h5>
                <br />
             
              "
                                                    data-html="true" id="example">{{ $ad->customar_books->fname }}
                                                    {{ $ad->customar_books->lname }}</a>

                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($ad->start_book)->format('d-m-Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($ad->end_book)->format('d-m-Y') }}</td>
                                            <td>{{ $ad->days }}</td>
                                            <td>{{ $ad->time }}</td>
                                            @if ($Type == 'NEW')
                                                <td><a href="{{ route('acceptBook', $ad->id) }}" type="button"
                                                        class="btn btn-success btn-lg">Accept This Book</a></td>
                                            @elseif($Type == 'Accepted')
                                                <td><a href="{{ route('FinishedBook', $ad->id) }}" type="button"
                                                        class="btn btn-danger btn-lg">finished This Book</a></td>
                                            @endif











                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        No Car Here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    </div>
            @endif






            <div>




            </div>
            </div>
            </div>





        </body>

        </html>
    </x-slot>
</x-app-layout>
