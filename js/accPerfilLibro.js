// ________________________________________________________________________________ PERFIL AUTOR
//alert('JS Perfil Libro');

// ________________________________________________________________________________ PERFIL AUTOR

// ______________________________________________________________________ "ROSQUILLA" CHART



/*var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
	type: 'doughnut',
	options: {
		legend: {
	        display: false
	    }
	},
	data: {
		labels: ['Loading data...', 'Loading data...', 'Loading data...'],
		datasets: [{
			label: '# of Votes',
			data: [100, 19, 3],
			backgroundColor: [
				'rgba(178, 178, 178, 1)',
				'rgba(0, 141, 204, 1)',
				'rgba(0, 164, 228, 1)'
			],
			borderColor: [
				'rgba(87, 87, 86, 1)',
				'rgba(0, 141, 204, 1)',
				'rgba(0, 164, 228, 1)'
			],
			borderWidth: 0
		}]
	}
});*/
// ______________________________________________________________________ "ROSQUILLA" CHART


$(document).ready(function(){
	// __________________________________________________________________ OWL CAROUSEL - VISTA PREVIA
	$("#owl_carr-vista_p").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		nav:true,
		dots:true,
		margin:10,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	// _______________________________________________________________ OWL CAROUSEL - VISTA PREVIA

	// _______________________________________________________________ OWL CAROUSEL: MEDIOS
	$("#owl_carr-medios").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		nav:true,
		dots:true,
		margin:10,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});
	// _______________________________________________________________ OWL CAROUSEL: MEDIOS
});


$('a[data-toggle="tab"]').on('hidden.bs.tab', function (e) {
	if (e.relatedTarget.id == 'imp_invs') {
		$(function () {
			$(".mapcontainer").mapael({
				map: {
					name: "world_countries",
					zoom: {
						enabled: true,
						maxLevel: 10
					},
					defaultArea: {
						attrs: {
							stroke: "#FFF",
							"stroke-width": 1
						}
					}
				},
				legend: {
					area: {
						mode: "horizontal",
						title: "Población de paises",
						labelAttrs: {
							"font-size": 12
						},
						marginLeft: 5,
						marginLeftLabel: 5,
						slices: [
							{
								max: 5000000,
								attrs: {
									fill: "#6aafe1"
								},
								label: "< 5 millones"
							},
							{
								min: 5000000,
								max: 10000000,
								attrs: {
									fill: "#459bd9"
								},
								label: "> 5 millones and < 10 millones"
							},
							{
								min: 10000000,
								max: 50000000,
								attrs: {
									fill: "#2579b5"
								},
								label: "> 10 millones and < 50 millones"
							},
							{
								min: 50000000,
								attrs: {
									fill: "#1a527b"
								},
								label: "> 50 millones"
							}
						]
					}
				},
				areas: {
					"AF": {
						"value": "0",
						"attrs": {
							"href": "#"
						},
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Afghanistan<\/span><br \/>Población : 1"
						}
					},
					"ZA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">South Africa<\/span><br \/>Población : 1"
						}
					},
					"AL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Albania<\/span><br \/>Población : 1"
						}
					},
					"DZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Algeria<\/span><br \/>Población : 1"
						}
					},
					"DE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Germany<\/span><br \/>Población : 1"
						}
					},
					"AD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Andorra<\/span><br \/>Población : 1"
						}
					},
					"AO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Angola<\/span><br \/>Población : 1"
						}
					},
					"AG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Antigua And Barbuda<\/span><br \/>Población : 1"
						}
					},
					"SA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Saudi Arabia<\/span><br \/>Población : 1"
						}
					},
					"AR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Argentina<\/span><br \/>Población : 1"
						}
					},
					"AM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Armenia<\/span><br \/>Población : 1"
						}
					},
					"AU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Australia<\/span><br \/>Población : 1"
						}
					},
					"AT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Austria<\/span><br \/>Población : 1"
						}
					},
					"AZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Azerbaijan<\/span><br \/>Población : 1"
						}
					},
					"BS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bahamas<\/span><br \/>Población : 1"
						}
					},
					"BH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bahrain<\/span><br \/>Población : 1"
						}
					},
					"BD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bangladesh<\/span><br \/>Población : 1"
						}
					},
					"BB": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Barbados<\/span><br \/>Población : 1"
						}
					},
					"BE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Belgium<\/span><br \/>Población : 1"
						}
					},
					"BZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Belize<\/span><br \/>Población : 1"
						}
					},
					"BJ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Benin<\/span><br \/>Población : 1"
						}
					},
					"BT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bhutan<\/span><br \/>Población : 1"
						}
					},
					"BY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Belarus<\/span><br \/>Población : 1"
						}
					},
					"MM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Myanmar<\/span><br \/>Población : 1"
						}
					},
					"BO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bolivia, Plurinational State Of<\/span><br \/>Población : 1"
						}
					},
					"BA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bosnia And Herzegovina<\/span><br \/>Población : 1"
						}
					},
					"BW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Botswana<\/span><br \/>Población : 1"
						}
					},
					"BR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Brazil<\/span><br \/>Población : 1"
						}
					},
					"BN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Brunei Darussalam<\/span><br \/>Población : 1"
						}
					},
					"BG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Bulgaria<\/span><br \/>Población : 1"
						}
					},
					"BF": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Burkina Faso<\/span><br \/>Población : 1"
						}
					},
					"BI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Burundi<\/span><br \/>Población : 1"
						}
					},
					"KH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Cambodia<\/span><br \/>Población : 1"
						}
					},
					"CM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Cameroon<\/span><br \/>Población : 1"
						}
					},
					"CA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Canada<\/span><br \/>Población : 1"
						}
					},
					"CV": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Cape Verde<\/span><br \/>Población : 1"
						}
					},
					"CF": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Central African Republic<\/span><br \/>Población : 1"
						}
					},
					"CL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Chile<\/span><br \/>Población : 1"
						}
					},
					"CN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">China<\/span><br \/>Población : 1"
						}
					},
					"CY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Cyprus<\/span><br \/>Población : 1"
						}
					},
					"CO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Colombia<\/span><br \/>Población : 1"
						}
					},
					"KM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Comoros<\/span><br \/>Población : 1"
						}
					},
					"CG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Congo<\/span><br \/>Población : 1"
						}
					},
					"CD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Congo, The Democratic Republic Of The<\/span><br \/>Población : 1"
						}
					},
					"KP": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Korea, Democratic People's Republic Of<\/span><br \/>Población : 1"
						}
					},
					"KR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Korea, Republic Of<\/span><br \/>Población : 1"
						}
					},
					"CR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Costa Rica<\/span><br \/>Población : 1"
						}
					},
					"CI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">C\u00d4te D'ivoire<\/span><br \/>Población : 1"
						}
					},
					"HR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Croatia<\/span><br \/>Población : 1"
						}
					},
					"CU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Cuba<\/span><br \/>Población : 1"
						}
					},
					"DK": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Denmark<\/span><br \/>Población : 1"
						}
					},
					"DJ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Djibouti<\/span><br \/>Población : 1"
						}
					},
					"DM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Dominica<\/span><br \/>Población : 1"
						}
					},
					"EG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Egypt<\/span><br \/>Población : 1"
						}
					},
					"AE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">United Arab Emirates<\/span><br \/>Población : 1"
						}
					},
					"EC": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Ecuador<\/span><br \/>Población : 1"
						}
					},
					"ER": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Eritrea<\/span><br \/>Población : 1"
						}
					},
					"ES": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Spain<\/span><br \/>Población : 1"
						}
					},
					"EE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Estonia<\/span><br \/>Población : 1"
						}
					},
					"US": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">United States<\/span><br \/>Población : 1"
						}
					},
					"ET": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Ethiopia<\/span><br \/>Población : 1"
						}
					},
					"FJ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Fiji<\/span><br \/>Población : 1"
						}
					},
					"FI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Finland<\/span><br \/>Población : 1"
						}
					},
					"FR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">France<\/span><br \/>Población : 1"
						}
					},
					"GA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Gabon<\/span><br \/>Población : 1"
						}
					},
					"GM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Gambia<\/span><br \/>Población : 1"
						}
					},
					"GE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Georgia<\/span><br \/>Población : 1"
						}
					},
					"GH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Ghana<\/span><br \/>Población : 1"
						}
					},
					"GR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Greece<\/span><br \/>Población : 1"
						}
					},
					"GD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Grenada<\/span><br \/>Población : 1"
						}
					},
					"GT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Guatemala<\/span><br \/>Población : 1"
						}
					},
					"GN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Guinea<\/span><br \/>Población : 1"
						}
					},
					"GQ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Equatorial Guinea<\/span><br \/>Población : 1"
						}
					},
					"GW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Guinea-bissau<\/span><br \/>Población : 1"
						}
					},
					"GY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Guyana<\/span><br \/>Población : 1"
						}
					},
					"HT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Haiti<\/span><br \/>Población : 1"
						}
					},
					"HN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Honduras<\/span><br \/>Población : 1"
						}
					},
					"HU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Hungary<\/span><br \/>Población : 1"
						}
					},
					"JM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Jamaica<\/span><br \/>Población : 1"
						}
					},
					"JP": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Japan<\/span><br \/>Población : 1"
						}
					},
					"MH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Marshall Islands<\/span><br \/>Población : 1"
						}
					},
					"PW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Palau<\/span><br \/>Población : 1"
						}
					},
					"SB": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Solomon Islands<\/span><br \/>Población : 1"
						}
					},
					"IN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">India<\/span><br \/>Población : 1"
						}
					},
					"ID": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Indonesia<\/span><br \/>Población : 1"
						}
					},
					"JO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Jordan<\/span><br \/>Población : 1"
						}
					},
					"IR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Iran, Islamic Republic Of<\/span><br \/>Población : 1"
						}
					},
					"IQ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Iraq<\/span><br \/>Población : 1"
						}
					},
					"IE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Ireland<\/span><br \/>Población : 1"
						}
					},
					"IS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Iceland<\/span><br \/>Población : 1"
						}
					},
					"IL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Israel<\/span><br \/>Población : 1"
						}
					},
					"IT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Italy<\/span><br \/>Población : 1"
						}
					},
					"KZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Kazakhstan<\/span><br \/>Población : 1"
						}
					},
					"KE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Kenya<\/span><br \/>Población : 1"
						}
					},
					"KG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Kyrgyzstan<\/span><br \/>Población : 1"
						}
					},
					"KI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Kiribati<\/span><br \/>Población : 1"
						}
					},
					"KW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Kuwait<\/span><br \/>Población : 1"
						}
					},
					"LA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Lao People's Democratic Republic<\/span><br \/>Población : 1"
						}
					},
					"LS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Lesotho<\/span><br \/>Población : 1"
						}
					},
					"LV": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Latvia<\/span><br \/>Población : 1"
						}
					},
					"LB": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Lebanon<\/span><br \/>Población : 1"
						}
					},
					"LR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Liberia<\/span><br \/>Población : 1"
						}
					},
					"LY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Libya<\/span><br \/>Población : 1"
						}
					},
					"LI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Liechtenstein<\/span><br \/>Población : 1"
						}
					},
					"LT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Lithuania<\/span><br \/>Población : 1"
						}
					},
					"LU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Luxembourg<\/span><br \/>Población : 1"
						}
					},
					"MK": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Macedonia, The Former Yugoslav Republic Of<\/span><br \/>Población : 1"
						}
					},
					"MG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Madagascar<\/span><br \/>Población : 1"
						}
					},
					"MY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Malaysia<\/span><br \/>Población : 1"
						}
					},
					"MW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Malawi<\/span><br \/>Población : 1"
						}
					},
					"MV": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Maldives<\/span><br \/>Población : 1"
						}
					},
					"ML": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mali<\/span><br \/>Población : 1"
						}
					},
					"MT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Malta<\/span><br \/>Población : 1"
						}
					},
					"MA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Morocco<\/span><br \/>Población : 1"
						}
					},
					"MU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mauritius<\/span><br \/>Población : 1"
						}
					},
					"MR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mauritania<\/span><br \/>Población : 1"
						}
					},
					"MX": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mexico<\/span><br \/>Población : 1"
						}
					},
					"FM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Micronesia, Federated States Of<\/span><br \/>Población : 1"
						}
					},
					"MD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Moldova, Republic Of<\/span><br \/>Población : 1"
						}
					},
					"MC": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Monaco<\/span><br \/>Población : 1"
						}
					},
					"MN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mongolia<\/span><br \/>Población : 1"
						}
					},
					"ME": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Montenegro<\/span><br \/>Población : 1"
						}
					},
					"MZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Mozambique<\/span><br \/>Población : 1"
						}
					},
					"NA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Namibia<\/span><br \/>Población : 1"
						}
					},
					"NP": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Nepal<\/span><br \/>Población : 1"
						}
					},
					"NI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Nicaragua<\/span><br \/>Población : 1"
						}
					},
					"NE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Niger<\/span><br \/>Población : 1"
						}
					},
					"NG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Nigeria<\/span><br \/>Población : 1"
						}
					},
					"NO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Norway<\/span><br \/>Población : 1"
						}
					},
					"NZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">New Zealand<\/span><br \/>Población : 1"
						}
					},
					"OM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Oman<\/span><br \/>Población : 1"
						}
					},
					"UG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Uganda<\/span><br \/>Población : 1"
						}
					},
					"UZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Uzbekistan<\/span><br \/>Población : 1"
						}
					},
					"PK": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Pakistan<\/span><br \/>Población : 1"
						}
					},
					"PS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Palestine, State Of<\/span><br \/>Población : 1"
						}
					},
					"PA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Panama<\/span><br \/>Población : 1"
						}
					},
					"PG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Papua New Guinea<\/span><br \/>Población : 1"
						}
					},
					"PY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Paraguay<\/span><br \/>Población : 1"
						}
					},
					"NL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Netherlands<\/span><br \/>Población : 1"
						}
					},
					"PE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Peru<\/span><br \/>Población : 1"
						}
					},
					"PH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Philippines<\/span><br \/>Población : 1"
						}
					},
					"PL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Poland<\/span><br \/>Población : 1"
						}
					},
					"PT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Portugal<\/span><br \/>Población : 1"
						}
					},
					"QA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Qatar<\/span><br \/>Población : 1"
						}
					},
					"DO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Dominican Republic<\/span><br \/>Población : 1"
						}
					},
					"RO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Romania<\/span><br \/>Población : 1"
						}
					},
					"GB": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">United Kingdom<\/span><br \/>Población : 1"
						}
					},
					"RU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Russian Federation<\/span><br \/>Población : 1"
						}
					},
					"RW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Rwanda<\/span><br \/>Población : 1"
						}
					},
					"KN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Saint Kitts And Nevis<\/span><br \/>Población : 1"
						}
					},
					"SM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">San Marino<\/span><br \/>Población : 1"
						}
					},
					"VC": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Saint Vincent And The Grenadines<\/span><br \/>Población : 1"
						}
					},
					"LC": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Saint Lucia<\/span><br \/>Población : 1"
						}
					},
					"SV": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">El Salvador<\/span><br \/>Población : 1"
						}
					},
					"WS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Samoa<\/span><br \/>Población : 1"
						}
					},
					"ST": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Sao Tome And Principe<\/span><br \/>Población : 1"
						}
					},
					"SN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Senegal<\/span><br \/>Población : 1"
						}
					},
					"RS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Serbia<\/span><br \/>Población : 1"
						}
					},
					"SC": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Seychelles<\/span><br \/>Población : 1"
						}
					},
					"SL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Sierra Leone<\/span><br \/>Población : 1"
						}
					},
					"SG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Singapore<\/span><br \/>Población : 1"
						}
					},
					"SK": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Slovakia<\/span><br \/>Población : 1"
						}
					},
					"SI": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Slovenia<\/span><br \/>Población : 1"
						}
					},
					"SO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Somalia<\/span><br \/>Población : 1"
						}
					},
					"SD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Sudan<\/span><br \/>Población : 1"
						}
					},
					"SS": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">South Sudan<\/span><br \/>Población : 1"
						}
					},
					"LK": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Sri Lanka<\/span><br \/>Población : 1"
						}
					},
					"SE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Sweden<\/span><br \/>Población : 1"
						}
					},
					"CH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Switzerland<\/span><br \/>Población : 1"
						}
					},
					"SR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Suriname<\/span><br \/>Población : 1"
						}
					},
					"SZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Swaziland<\/span><br \/>Población : 1"
						}
					},
					"SY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Syrian Arab Republic<\/span><br \/>Población : 1"
						}
					},
					"TJ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Tajikistan<\/span><br \/>Población : 1"
						}
					},
					"TZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Tanzania, United Republic Of<\/span><br \/>Población : 1"
						}
					},
					"TD": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Chad<\/span><br \/>Población : 1"
						}
					},
					"CZ": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Czech Republic<\/span><br \/>Población : 1"
						}
					},
					"TH": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Thailand<\/span><br \/>Población : 1"
						}
					},
					"TL": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Timor-leste<\/span><br \/>Población : 1"
						}
					},
					"TG": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Togo<\/span><br \/>Población : 1"
						}
					},
					"TO": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Tonga<\/span><br \/>Población : 1"
						}
					},
					"TT": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Trinidad And Tobago<\/span><br \/>Población : 1"
						}
					},
					"TN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Tunisia<\/span><br \/>Población : 1"
						}
					},
					"TM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Turkmenistan<\/span><br \/>Población : 1"
						}
					},
					"TR": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Turkey<\/span><br \/>Población : 1"
						}
					},
					"TV": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Tuvalu<\/span><br \/>Población : 1"
						}
					},
					"VU": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Vanuatu<\/span><br \/>Población : 1"
						}
					},
					"VE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Venezuela, Bolivarian Republic Of<\/span><br \/>Población : 1"
						}
					},
					"VN": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Viet Nam<\/span><br \/>Población : 1"
						}
					},
					"UA": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Ukraine<\/span><br \/>Población : 1"
						}
					},
					"UY": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Uruguay<\/span><br \/>Población : 1"
						}
					},
					"YE": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Yemen<\/span><br \/>Población : 1"
						}
					},
					"ZM": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Zambia<\/span><br \/>Población : 1"
						}
					},
					"ZW": {
						"value": "0",
						"href": "#",
						"tooltip": {
							"content": "<span style=\"font-weight:bold;\">Zimbabwe<\/span><br \/>Población : 1"
						}
					}
				}
			});
		});
	}
});


/*$(document).ready(function() {
    $("body *").html(function(buscayreemplaza, reemplaza) {
        return reemplaza.replace('[…]', '...');
    });
});*/

