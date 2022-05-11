
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '7e69df762cmshe280e4c6d692627p1a233ejsn364e1cc65bdb'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=hero', options)
	.then(response => response.json())
    .then(data=> {
        const list =data.d;
        list.map((item)=>{
            const name= item.l;
            const poster= item.i.imageUrl;
            const movie = '<li><img src="'+poster+'"> <h2>"'+name+'"</h2></li>'
            document.querySelector('.hero').innerHTML +=movie;
        })
    })
	.then(response => console.log(response))
	.catch(err => {
        console.error(err)
    });
