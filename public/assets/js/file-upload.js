$('.dropify').dropify({
	messages: {
		'default': 'Drag and drop ".xlsx" or ".csv" file here or click',
		'replace': 'Drag and drop or click to replace',
		'remove': 'Remove',
		'error': 'Ooops, something wrong appended.'
	},
	error: {
		'fileSize': 'The file size is too big (2M max).'
	},
	allowedFileTypes: ['image/png', 'image/jpeg', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
	maxFileSize: 10
});
	
