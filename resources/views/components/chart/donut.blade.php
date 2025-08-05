		<div class="w-full rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
			<div class="py-6" id="grafik-berdasarkan-jawaban"></div>
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
