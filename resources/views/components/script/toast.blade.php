<script>
	const isError = @json($errors->any());
	const errors = @json($errors->all());
	const isSuccess = @json(session('success'));
	const isDanger = @json(session('danger'));

	const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3500,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	})

	if (isSuccess) {
		Toast.fire({
			icon: 'success',
			title: isSuccess
		})
	}

	if (isDanger) {
		Toast.fire({
			icon: 'error',
			title: error
		})
	}

	if (isError) {
		errors.forEach(error => {
			Toast.fire({
				icon: 'error',
				title: error
			})
		})
	}
</script>
