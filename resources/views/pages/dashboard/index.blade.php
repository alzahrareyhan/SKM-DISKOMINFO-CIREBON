@extends('layouts.dashboard', [
    'breadcrumbs' => [],
])
@section('title', 'Dasbor')
@section('content')
	<div class="my-10 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
		<div class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
			<div class="flex h-20 items-center justify-between bg-red-400">
				<p class="mr-0 pl-5 text-lg text-white">KUESIONER</p>
			</div>
			<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
				<p>TOTAL</p>
			</div>
			<p class="ml-5 py-4 text-3xl">{{ $total->kuesioner }}</p>
		</div>
		<div class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
			<div class="flex h-20 items-center justify-between bg-blue-500">
				<p class="mr-0 pl-5 text-lg text-white">JAWABAN</p>
			</div>
			<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
				<p>TOTAL</p>
			</div>
			<p class="ml-5 py-4 text-3xl">{{ $total->answer }}</p>
		</div>
		<div class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
			<div class="flex h-20 items-center justify-between bg-purple-400">
				<p class="mr-0 pl-5 text-lg text-white">RESPONDEN</p>
			</div>
			<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
				<p>TOTAL</p>
			</div>
			<p class="ml-5 py-4 text-3xl">{{ $total->responden }}</p>
		</div>
		<div class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
			<div class="flex h-20 items-center justify-between bg-purple-900">
				<p class="mr-0 pl-5 text-lg text-white">KRITIK & SARAN</p>
			</div>
			<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
				<p>TOTAL</p>
			</div>
			<p class="ml-5 py-4 text-3xl">{{ $total->feedback }}</p>
		</div>
	</div>

	<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
		<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Berdasarkan Jawaban</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-jawaban"></div>
		</div>
		<div class="col-span-2 rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Jawaban Kuesioner Harian</h5>
				</div>
			</div>
			<div id="grafik-jawaban-harian"></div>
		</div>
	</div>
	<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
		<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Jenis Kelamin</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-jenis-kelamin"></div>
		</div>
		<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Umur</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-umur"></div>
		</div>
		<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Pendidikan</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-pendidikan"></div>
		</div>
	</div>
	<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
		<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Pekerjaan</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-pekerjaan"></div>
		</div>
		<div class="col-span-2 rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="mb-3 flex justify-between">
				<div class="flex items-center justify-center">
					<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Instansi</h5>
				</div>
			</div>
			<div class="py-6" id="grafik-berdasarkan-desa"></div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script>
		// ApexCharts options and config
		window.addEventListener("load", function() {
			const answers = @json($answers);
			const percentages = answers.details.map((e) => parseFloat(e.percentage.toFixed(2)))
			const labels = answers.details.map((e) => e.label)

			const getChartOptions = () => {
				return {
					series: percentages,
					colors: ["#F63326", "#F07F00", "#ECBD00", "#4CD440"],
					chart: {
						height: 320,
						width: "100%",
						type: "donut",
					},
					stroke: {
						colors: ["transparent"],
						lineCap: "",
					},
					plotOptions: {
						pie: {
							donut: {
								labels: {
									show: true,
									name: {
										show: true,
										fontFamily: "Inter, sans-serif",
										offsetY: 20,
									},
									total: {
										showAlways: true,
										show: true,
										label: "Jawaban",
										fontFamily: "Inter, sans-serif",
										formatter: function(w) {
											return `${answers.total}`
										},
									},
									value: {
										show: true,
										fontFamily: "Inter, sans-serif",
										offsetY: -20,
										formatter: function(value) {
											return value + "%"
										},
									},
								},
								size: "80%",
							},
						},
					},
					grid: {
						padding: {
							top: -2,
						},
					},
					labels: labels,
					dataLabels: {
						enabled: false,
					},
					legend: {
						position: "bottom",
						fontFamily: "Inter, sans-serif",
					},
					yaxis: {
						labels: {
							formatter: function(value) {
								return value + "%"
							},
						},
					},
					xaxis: {
						labels: {
							formatter: function(value) {
								return value + "%"
							},
						},
						axisTicks: {
							show: false,
						},
						axisBorder: {
							show: false,
						},
					},
				}
			}

			if (document.getElementById("grafik-berdasarkan-jawaban") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-jawaban"), getChartOptions());
				chart.render();
			}
		});
	</script>
	<script>
		// ApexCharts options and config
		window.addEventListener("load", function() {
			const answers = @json($answers);
			const colors = ["#F63326", "#F07F00", "#ECBD00", "#4CD440"]
			let series = []
			let data = []


			answers.details.forEach((detail, key) => {
				series.push({
					name: detail.label,
					color: colors[key],
					data: []
				})
			});

			for (e in answers.daily) {
				answers.daily[e].map((element) => series[element.label].data.push({
					x: e,
					y: element.total
				}))
			}

			const options = {
				colors,
				series,
				chart: {
					type: "bar",
					height: "320px",
					fontFamily: "Inter, sans-serif",
					toolbar: {
						show: false,
					},
				},
				plotOptions: {
					bar: {
						horizontal: false,
						columnWidth: "70%",
						borderRadiusApplication: "end",
						borderRadius: 8,
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					style: {
						fontFamily: "Inter, sans-serif",
					},
				},
				states: {
					hover: {
						filter: {
							type: "darken",
							value: 1,
						},
					},
				},
				stroke: {
					show: true,
					width: 0,
					colors: ["transparent"],
				},
				grid: {
					show: false,
					strokeDashArray: 4,
					padding: {
						left: 2,
						right: 2,
						top: -14
					},
				},
				dataLabels: {
					enabled: false,
				},
				legend: {
					show: false,
				},
				xaxis: {
					floating: false,
					labels: {
						show: true,
						style: {
							fontFamily: "Inter, sans-serif",
							cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
						}
					},
					axisBorder: {
						show: false,
					},
					axisTicks: {
						show: false,
					},
				},
				yaxis: {
					show: false,
				},
				fill: {
					opacity: 1,
				},
			}

			if (document.getElementById("grafik-jawaban-harian") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-jawaban-harian"), options);
				chart.render();
			}
		});
	</script>
	<script>
		window.addEventListener("load", function() {
			const getChartOptions = (series, labels, total, colors) => {
				return {
					series,
					labels,
					colors,
					chart: {
						height: 320,
						width: "100%",
						type: "donut",
					},
					stroke: {
						colors: ["transparent"],
						lineCap: "",
					},
					plotOptions: {
						pie: {
							donut: {
								labels: {
									show: true,
									name: {
										show: true,
										fontFamily: "Inter, sans-serif",
										offsetY: 20,
									},
									total: {
										showAlways: true,
										show: true,
										label: "Responden",
										fontFamily: "Inter, sans-serif",
										formatter: function(w) {
											return `${total}`
										},
									},
									value: {
										show: true,
										fontFamily: "Inter, sans-serif",
										offsetY: -20,
										formatter: function(value) {
											return value + "%"
										},
									},
								},
								size: "80%",
							},
						},
					},
					grid: {
						padding: {
							top: -2,
						},
					},
					dataLabels: {
						enabled: false,
					},
					legend: {
						position: "bottom",
						fontFamily: "Inter, sans-serif",
					},
					yaxis: {
						labels: {
							formatter: function(value) {
								return value + "%"
							},
						},
					},
					xaxis: {
						labels: {
							formatter: function(value) {
								return value + "%"
							},
						},
						axisTicks: {
							show: false,
						},
						axisBorder: {
							show: false,
						},
					},
				}
			}

			const dataGrafikJenisKelamin = @json($dataGrafikJenisKelamin);
			if (document.getElementById("grafik-berdasarkan-jenis-kelamin") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-jenis-kelamin"), getChartOptions(dataGrafikJenisKelamin.series, dataGrafikJenisKelamin.labels, dataGrafikJenisKelamin.total, dataGrafikJenisKelamin.colors));
				chart.render();
			}

			const dataGrafikUmur = @json($dataGrafikUmur);
			if (document.getElementById("grafik-berdasarkan-umur") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-umur"), getChartOptions(dataGrafikUmur.series, dataGrafikUmur.labels, dataGrafikUmur.total, dataGrafikUmur.colors));
				chart.render();
			}

			const dataGrafikPendidikan = @json($dataGrafikPendidikan);
			if (document.getElementById("grafik-berdasarkan-pendidikan") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-pendidikan"), getChartOptions(dataGrafikPendidikan.series, dataGrafikPendidikan.labels, dataGrafikPendidikan.total, dataGrafikPendidikan.colors));
				chart.render();
			}

			const dataGrafikPekerjaan = @json($dataGrafikPekerjaan);
			if (document.getElementById("grafik-berdasarkan-pekerjaan") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-pekerjaan"), getChartOptions(dataGrafikPekerjaan.series, dataGrafikPekerjaan.labels, dataGrafikPekerjaan.total, dataGrafikPekerjaan.colors));
				chart.render();
			}

			const dataGrafikDesa = @json($dataGrafikDesa);
			if (document.getElementById("grafik-berdasarkan-desa") && typeof ApexCharts !== 'undefined') {
				const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-desa"), getChartOptions(dataGrafikDesa.series, dataGrafikDesa.labels, dataGrafikDesa.total, dataGrafikDesa.colors));
				chart.render();
			}
		});
	</script>
@endsection
