<div class="row">
	<div class="col-md-12 col-xs-12 d-flex ">
		<div class="d-flex flex-1 flex-column p-2">
			<div class="p-2 bg-dark text-light font-weight-bold">
				Arkusz ASRS
			</div>
			<div class="p-2 border">
				{{ $test->identifier }}
			</div>
		</div>
		<div class="d-flex flex-1 flex-column p-2">
			<div class="p-2 bg-dark text-light font-weight-bold">
				Utworzono
			</div>
			<div class="p-2 border">
				{{ $test->created_at }}
			</div>
		</div>
		<div class="d-flex flex-1 flex-column p-2">
			<div class="p-2 bg-dark text-light font-weight-bold">
				Zakończono
			</div>
			<div class="p-2 border">
				{{ $test->finished_at }}
			</div>
		</div>
		<div class="d-flex flex-1 flex-column p-2">
			<div class="p-2 bg-dark text-light font-weight-bold">
				Osoba badająca
			</div>
			<div class="p-2 border">
				{{ Auth::user()->name }}
			</div>
		</div>
	</div>
</div>

<div class="row results">
	<div class="col-md-12">
		<h3>Skale ASRS</h3>

		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Skale</th>
					<th>Wynik surowy</th>
					<th>Wynik tenowy</th>
					<th>Centyl</th>
					<th>Klasyfikacja</th>
					<th>Przedział ufności</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Relacje społeczne / komunikacja (RSK)</td>
					<td class="text-center">{{ $results['rsk']->raw() }}</td>
					<td>{{ $results['rsk']->ten() }}</td>
					<td>{{ $results['rsk']->centyl() }}</td>
					<td>{{ $results['rsk']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Nietypowe zachowania (NZ)</td>
					<td class="text-center">{{ $results['nz']->raw() }}</td>
					<td>{{ $results['nz']->ten() }}</td>
					<td>{{ $results['nz']->centyl() }}</td>
					<td>{{ $results['nz']->class() }}</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<h3>Wynik ogólny</h3>
		<div class="d-flex align-items-end">
			<table class="table table-bordered w-20">
				<thead class="thead-dark">
					<tr>
						<th>RSK wynik tenowy</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $results['rsk']->ten() }}</td>
					</tr>
				</tbody>
			</table>
			<div class="pb-3">+</div>
			<table class="table table-bordered w-20">
				<thead class="thead-dark">
					<tr>
						<th>NZ wynik tenowy</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $results['nz']->ten() }}</td>
					</tr>
				</tbody>
			</table>
			<div class="pb-3">=</div>
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>Suma RSK + NZ</th>
						<th>Wynik tenowy</th>
						<th>Centyl</th>
						<th>Klasyfikacja</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $results['wo']->raw() }}</td>
						<td>{{ $results['wo']->ten() }}</td>
						<td>{{ $results['wo']->centyl() }}</td>
						<td>{{ $results['wo']->class() }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<h3>Skala DSM</h3>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Skale</th>
					<th>Wynik surowy</th>
					<th>Wynik tenowy</th>
					<th>Centyl</th>
					<th>Klasyfikacja</th>
					<th>Przedział ufności</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>DSM</td>
					<td class="text-center">{{ $results['dsm']->raw() }}</td>
					<td>{{ $results['dsm']->ten() }}</td>
					<td>{{ $results['dsm']->centyl() }}</td>
					<td>{{ $results['dsm']->class() }}</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<h3>Skale terapeutyczne</h3>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Skale</th>
					<th>Wynik surowy</th>
					<th>Wynik tenowy</th>
					<th>Centyl</th>
					<th>Klasyfikacja</th>
					<th>Przedział ufności</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Relacje z rówieśnikami (RR)</td>
					<td class="text-center">{{ $results['rr']->raw() }}</td>
					<td>{{ $results['rr']->ten() }}</td>
					<td>{{ $results['rr']->centyl() }}</td>
					<td>{{ $results['rr']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Relacje z dorosłymi (RD)</td>
					<td class="text-center">{{ $results['rd']->raw() }}</td>
					<td>{{ $results['rd']->ten() }}</td>
					<td>{{ $results['rd']->centyl() }}</td>
					<td>{{ $results['rd']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Wzajemność społeczna i emocjonalna (WSE)</td>
					<td class="text-center">{{ $results['wse']->raw() }}</td>
					<td>{{ $results['wse']->ten() }}</td>
					<td>{{ $results['wse']->centyl() }}</td>
					<td>{{ $results['wse']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Nietypowy język (NJ)</td>
					<td class="text-center">{{ $results['nj']->raw() }}</td>
					<td>{{ $results['nj']->ten() }}</td>
					<td>{{ $results['nj']->centyl() }}</td>
					<td>{{ $results['nj']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Stereotypie (ST)</td>
					<td class="text-center">{{ $results['st']->raw() }}</td>
					<td>{{ $results['st']->ten() }}</td>
					<td>{{ $results['st']->centyl() }}</td>
					<td>{{ $results['st']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Sztywność w zachowaniu (SZ)</td>
					<td class="text-center">{{ $results['sz']->raw() }}</td>
					<td>{{ $results['sz']->ten() }}</td>
					<td>{{ $results['sz']->centyl() }}</td>
					<td>{{ $results['sz']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Wrażliwość sensoryczna (WS)</td>
					<td class="text-center">{{ $results['ws']->raw() }}</td>
					<td>{{ $results['ws']->ten() }}</td>
					<td>{{ $results['ws']->centyl() }}</td>
					<td>{{ $results['ws']->class() }}</td>
					<td></td>
				</tr>
				<tr>
					<td>Uwaga/samoregulacja (US)</td>
					<td class="text-center">{{ $results['us']->raw() }}</td>
					<td>{{ $results['us']->ten() }}</td>
					<td>{{ $results['us']->centyl() }}</td>
					<td>{{ $results['us']->class() }}</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
