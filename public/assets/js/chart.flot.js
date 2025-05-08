$(function() {
	'use strict';
	$.plot('#flotBar1', [{
		data: [
			[0, 126],
			[1, 19],
			[2, 55],
		]
	}], {
		series: {
			bars: {
				show: true,
				lineWidth: 0,
				fillColor: '#ed1c24',
				barWidth: .2,
                align: "center"
			},
			highlightColor: '#cb070e'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true,
			labelMargin: 15,
		},
		yaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#5f6d7a',
				size: 10
			}
		},
		xaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#5f6d7a',
				size: 10,
			},
			ticks:[
				[0, 'Alekh Gangle (0 Leads)'],
				[1, 'Donika Yadav (126 Leads)'],
				[2, 'Danish Hilal (19 Leads)'],
			],
			autoscaleMargin: 0.5,
		},
	});
	

	
	$.plot('#flotBar2', [{
		data: [
			[0, 3],
			[1, 8],
			[2, 5],
			[3, 13],
			[4, 5],
			[5, 7],
			[6, 8],
			[7, 12],
			[8, 8],
			[9, 4],
			[10, 7],
			[11, 10],
		],
		bars: {
			show: true,
			lineWidth: 0,
			fillColor: '#ed1c24',
			barWidth: .5,
			align: "center"
		}
	}], {
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)'
		},
		yaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#666',
				size: 10
			}
		},
		xaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#666',
				size: 10,
				min: 0.5,
				max: 1.5,
			},
			ticks:[
				[0, 'January'],
				[1, 'February'],
				[2, 'March'],
				[3, 'April'],
				[4, 'May'],
				[5, 'June'],
				[6, 'July'],
				[7, 'August'],
				[8, 'September'],
				[9, 'October'],
				[10, 'November'],
				[11, 'December'],
			],
		}
	});

	
	$.plot('#flotBar3', [{
		data: [
			[0, 126],
			[1, 19],
			[2, 55],
		]
	}], {
		series: {
			bars: {
				show: true,
				lineWidth: 0,
				fillColor: '#ed1c24',
				barWidth: .2,
                align: "center"
			},
			highlightColor: '#cb070e'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true,
			labelMargin: 15,
		},
		yaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#5f6d7a',
				size: 10
			}
		},
		xaxis: {
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				color: '#5f6d7a',
				size: 10,
			},
			ticks:[
				[0, 'Alekh Gangle (0 PO)'],
				[1, 'Donika Yadav (126 PO)'],
				[2, 'Danish Hilal (19 PO)'],
			],
			autoscaleMargin: 0.5,
		},
	});
	/**************** PIE CHART *******************/
	var piedata = [{
		label: 'Present Strength',
		data: [
			[1, 75]
		],
		color: '#cdd3ff'
	}, {
		label: 'Abesnt Strength',
		data: [
			[1, 25]
		],
		color: '#ffdcf1'
	}];
	$.plot('#flotPie2', piedata, {
		series: {
			pie: {
				show: true,
				radius: 1,
				innerRadius: 0.5,
				label: {
					show: true,
					radius: 500 / 3,
					formatter: function (label, series) {
						// Custom label styling with inline CSS
						return `<span style="color: #000;">${label}: ${Math.round(series.percent)}%</span>`;
					},
					threshold: 0.1,
				},
			}
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true
		},
	});

	$.plot('#flotPie1', piedata, {
		series: {
			pie: {
				show: true,
				radius: 1,
				label: {
					show: true,
					radius: 2 / 3,
					//formatter: labelFormatter,
					threshold: 0.1
				}
			}
		},
		grid: {
			hoverable: true,
			clickable: true
		}
	});

	var newCust = [
		[0, 2],
		[1, 3],
		[2, 6],
		[3, 5],
		[4, 7],
		[5, 8],
		[6, 10]
	];
	var retCust = [
		[0, 1],
		[1, 2],
		[2, 5],
		[3, 3],
		[4, 5],
		[5, 6],
		[6, 9]
	];
	var plot = $.plot($('#flotLine1'), [{
		data: newCust,
		label: 'New Customer',
		color: '#007bff'
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#f7557a'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 2
			},
			shadowSize: 0
		},
		points: {
			show: false,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true
		},
		yaxis: {
			min: 0,
			max: 15,
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotLine2'), [{
		data: newCust,
		label: 'New Customer',
		color: '#560bd0'
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#f7557a'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 2
			},
			shadowSize: 0
		},
		points: {
			show: true,
		},
		legend: {
			noColumns: 1,
			position: 'ne'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true
		},
		yaxis: {
			min: 0,
			max: 15,
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotArea1'), [{
		data: newCust,
		label: 'New Customer',
		color: '#f7557a '
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#007bff'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 1,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.8
					}]
				}
			},
			shadowSize: 0
		},
		points: {
			show: false,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true
		},
		yaxis: {
			min: 0,
			max: 15,
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotArea2'), [{
		data: newCust,
		label: 'New Customer',
		color: '#f7557a'
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#560bd0'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 1,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.3
					}]
				}
			},
			shadowSize: 0
		},
		points: {
			show: true,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(171, 167, 167,0.2)',
			hoverable: true
		},
		yaxis: {
			min: 0,
			max: 15,
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: '#eee',
			tickColor: 'rgba(171, 167, 167,0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});

	function labelFormatter(label, series) {
		return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
	}
});