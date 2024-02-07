<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookFormRequest;
use App\Mail\Book\BookingMail;
use App\Models\Book;
use App\Models\City;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{


    public function index()
    {
        $types = Type::select(['id', 'name', 'uuid'])->get();
        $cities = City::select(['id', 'name', 'uuid'])->get();
        return view('home.index', compact('types', 'cities'));
    }

    public function store(BookFormRequest $request)
    {
        // $request->dd();

        $book = new Book();
        $book->name = $request->name;
        $book->phone = $request->phone;
        $book->address = $request->address;
        $book->book_date = $request->date('book_date');
        $book->book_time = $request->date('book_time');
        $book->city()->associate(City::first());
        $book->type()->associate(Type::whereUuid($request->type)->first());
        $book->save();

        Mail::to(config('book.email'))->send(new BookingMail(array_merge($request->validated(), ['pole' => $book->type?->toArray()])));

        if (empty(Mail::flushMacros())) {

            return redirect()->back()->with('success', "Merci votre demande a été envoyer avec succès");
        } else {
            return redirect()->back()->with('error', "Erreur de réservation merci de ressayer");
        }
    }
}
