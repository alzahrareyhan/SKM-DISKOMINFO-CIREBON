<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Indeks Kepuasan Masyarakat</title>
		<style>
			.chart-container {
				text-align: center;
			}

			.chart-img {
				max-width: 50%;
				margin: 0 auto;
				display: block;
			}

			table {
				font-size: .8rem;
			}

			table td,
			table th {
				text-align: left;
			}

			.title {
				text-align: center;
				margin: 20px 0;
			}

			.text-md {
				font-size: 1.1rem;
			}

			.table {
				width: 100%;
				border-collapse: collapse;
			}

			.table tr>th,
			.table tr>td {
				border: 1px solid black;
				padding: 5px;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div>
			<!--koop surat  -->
			<table style="border-bottom: 1px solid black; width: 100%; text-align: center;">
				<tr>
					<td style="vertical-align: middle; width: 15%; padding-left: 15px;">
						<img src="{{ public_path('assets/logo.png') }}" alt="Logo" style="width: 90px; height: auto;">
					</td>
					<td style="vertical-align: middle; line-height: 1.5;">
						<div style="text-align: center;">
							<h4 style="font-size: 1.2rem; margin: 0;">PEMERINTAH KABUPATEN CIREBON</h4>
							<div style="margin: 5px 0;">DINAS KOMUNIKASI DAN INFORMATIKA</div>
							<div>Jl. Sunan Drajat No.15, Sumber, Kec. Sumber, Cirebon, Jawa Barat 45611.</div>
						</div>
					</td>
					<td style="width: 15%;"></td>
				</tr>
			</table>
			<div class="title">
				<span class="text-md">LAPORAN TABEL RESPONDEN <br>
					INDEKS KEPUASAN MASYARAKAT DINAS KOMUNIKASI DAN INFORMATIKA<br>
					KABUPATEN CIREBON
				</span>
			</div>
			{{-- <table style="width: 100%;">
				<tr>
					<td>
						<table>
							<tr>
								<th>Tanggal Mulai</th>
								<td>:</td>
								<td>{{ request('start_date') }}</td>
							</tr>
							<tr>
								<th>Tanggal Selesai</th>
								<td>:</td>
								<td>{{ request('end_date') }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Jenis Kelamin</th>
								<td>:</td>
								<td>{{ request('gender') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Umur</th>
								<td>:</td>
								<td>{{ request('age') ?? 'Semua' }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Pendidikan</th>
								<td>:</td>
								<td>{{ request('education') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Pekerjaan</th>
								<td>:</td>
								<td>{{ request('job') ?? 'Semua' }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Instansi</th>
								<td>:</td>
								<td>{{ request('village') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Pencarian</th>
								<td>:</td>
								<td>{{ request('search') }}</td>
							</tr>
						</table>
					</td>
				</tr>
			</table> --}}
		</div>

		<table class="table" style="margin-top: 25px;">
			<thead class="bg-blue-100 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
				<tr>
					<th scope="col" class="px-6 py-3">
						Pertanyaan
					</th>
					<th scope="col" class="px-6 py-3">
						Jumlah Nilai/Unsur
					</th>
					<th scope="col" class="px-6 py-3">
						NRR/Unsur
					</th>
					<th scope="col" class="px-6 py-3">
						Bobot Nilai Tertimbang
					</th>
					<th scope="col" class="px-6 py-3">
						NRR Tertimbang/Unsur
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $item)
					<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
						<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
							{{ $item->question }}
						</td>
						<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
							{{ number_format($item->totalNilaiPersepsiPerUnit, 2) }}
						</td>
						<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
							{{ number_format($item->NRRPerUnsur, 2) }}
						</td>
						<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
							{{ number_format($bobotNilaiTertimbang, 2) }}
						</td>
						<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
							{{ number_format($item->NRRTertimbangUnsur, 2) }}
						</td>
					</tr>
				@endforeach
				<tr class="border-b bg-gray-50 font-bold">
					<td scope="row" colspan="4" class="border-r px-6 py-4 text-gray-900 dark:text-white">
						IKM
					</td>
					<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
						{{ number_format($IKM, 2) }}
					</td>
				</tr>
				<tr class="border-b bg-gray-50 font-bold">
					<td scope="row" colspan="4" class="border-r px-6 py-4 text-gray-900 dark:text-white">
						Konversi IKM
					</td>
					<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
						{{ number_format($konversiIKM, 2) }}
					</td>
				</tr>
				<tr class="border-b bg-gray-50 font-bold">
					<td scope="row" colspan="4" class="border-r px-6 py-4 text-gray-900 dark:text-white">
						Mutu Pelayanan (Hasil Penilaian)
					</td>
					<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
						{{ nilaPersepsi($konversiIKM)->mutu }}
					</td>
				</tr>
				<tr class="border-b bg-gray-50 font-bold">
					<td scope="row" colspan="4" class="border-r px-6 py-4 text-gray-900 dark:text-white">
						Kinerja Unit Pelayanan
					</td>
					<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
						{{ nilaPersepsi($konversiIKM)->kinerja }}
					</td>
				</tr>
			</tbody>
		</table>


<!-- Tanda Tangan -->
<table style="margin-top: 50px; width: 100%;">
			<tr>
				<td></td>
				<td style="text-align: center; width: 40%;">
					<div>Cirebon, {{ now()->format('d/m/Y') }}</div>
					<div style="margin-bottom: 50px;">Kepala Diskominfo Kabupaten Cirebon</div>
					<div>Bambang Sudaryanto, SH., MH.</div>
					<div>Nip. 197810242006041015</div>
				</td>
			</tr>
		</table>
		
	</body>

</html>
