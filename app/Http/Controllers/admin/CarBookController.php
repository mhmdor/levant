<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarBookController extends Controller
{
    public function index()
    {
        return view("admin.car-book");
    }

    public function car_book()
    {
        $output = "";
        $car_books = BookCar::orderBy("id", "DESC")->get();
        if (count($car_books) > 0) {
            $output .= " <div class='table-responsive'>
            <table class='table'>
               <thead>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Car Name</th>
                    <th>Days</th>
                    <th>Book</th>
                    <th>Update Status</th>
                </tr>
               </thead>
               <tbody>";
            foreach ($car_books as $book) {
                $output .= "
                <tr>
                <td>{$book->id}</td>
                <td>{$book->customar_books->fname} {$book->customar_books->lname }</td>
                <td>{$book->book_car->car_model->car_model_name}</td>
                <td>{$book->days}</td>
                <td>{$book->book}</td>
                <td>
                    <a  data-id='{$book->id}' id='confirm' class='btn btn-success'>Confirm</a>
                    <button data-id='{$book->id}' id='not-confirm' class='btn btn-danger'>Not</button>
                </td>
            </tr>";
            }
            $output .= " </tbody>
            </table>
        </div>";

            echo $output;
        }
    }


        public function getCurrentBook()
    {
        $books = BookCar::where('status',0)->orderBy("id", "DESC")->get();
        $Type='NEW';
        return view("admin.order", compact('books', 'Type'));

    }

    public function getAcceptBook()
    {
        $books = BookCar::where('status',1)->orderBy('id','DESC')->get();
        $Type='Accepted';
        return view("admin.order", compact('books', 'Type'));
    }


    public function getFinishedBook()
    {
        $books = BookCar::where('status',2)->orderBy('id',"DESC")->get();
        $Type='Finished';
        return view("admin.order", compact('books', 'Type'));
    }
    

    public function acceptBook($id)
    {
        $book = BookCar::find($id);
        $book->status = 1;
        $car = Car::find($book->car_id);
        $car->status = 2;
        $book->save();
        $car->save();
        // BookCar::where('car_id',$book->car_id)->where('status',0)->delete();
        $new_start_date = $book->start_book;
        $new_end_date =  $book->end_book;
        //  $new_end_date = date('Y-m-d H:i:s',strtotime($book->end_book.' + 1 days'));

        $result1 =  BookCar::where(function ($query) use ($new_start_date, $new_end_date) {
            $query->whereBetween('start_book', [$new_start_date, $new_end_date])
                ->orWhereBetween('end_book', [$new_start_date, $new_end_date]);
        })->where([['car_id', '=', $book->car_id], ['status', '=', 0]])->delete();

        // $result = BookCar::whereBetween('start_book',[$book->start_book,$book->end_book])
        // ->orWhereBetween('end_book',[$book->start_book,$book->end_book])
        // ->where([ ['car_id','=',$book->car_id], ['status','=',0] ])
        // ->get();

        return redirect()->back()->with("message", "the car book has been accepted");
    }
    
    public function finishBook( $id )
    {
        $book = BookCar::find( $id );
        $book->status = 2 ;
        $book->save();
        $car = Car::find( $book->car_id );
        $car->status = 1 ;
        $car->save();

        return redirect()->back()->with("message", "the car book has been Finished");
    }
    
}