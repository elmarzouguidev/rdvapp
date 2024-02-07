<p>Nom Complet : {{ $data['name'] }}</p>
<hr>
<p>Téléphone : <b>{{ $data['phone'] }}</b></p>
<br>
<p>Adresse : {{ $data['address'] }}</p>
<hr>
<p> <b>Date de réservation : {{ Carbon\Carbon::parse($data['book_date'])->format('d/m/Y') }}</b></p>
<br>
<p><b>Heure de réservation : {{ $data['book_time'] }}</b></p>

<br>
<p><b>POLE : {{ $data['pole']['name'] }}</b></p>
