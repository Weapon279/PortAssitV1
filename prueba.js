const settings = {
	async: true,
	crossDomain: true,
	url: 'https://visual-crossing-weather.p.rapidapi.com/forecast?aggregateHours=24&location=Washington%2CDC%2CUSA&contentType=csv&unitGroup=us&shortColumnNames=0',
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'd90b2918c3mshb49a90365965292p1e8c4djsn5a3801f5b577',
		'X-RapidAPI-Host': 'visual-crossing-weather.p.rapidapi.com'
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});