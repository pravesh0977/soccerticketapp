<!DOCTYPE html>
<html>
    <head>
        <title>Stadium Tickets App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php require_once "nav.php"; ?>
           <p>Please click here to see all the Premier League Teams</p>
            <button id="fetchteamsbutton">See Teams</button>
            <div class="putteamshere"></div>
            
      
      
      
      <?php require_once "footer.php";?>
       <script>
           
        const fetchteamsbutton = document.getElementById('fetchteamsbutton');
        const putteamshere = document.querySelector('.putteamshere');
        fetchteamsbutton.addEventListener('click', fetchstuffyo);
         
        function fetchstuffyo (){
            fetch('http://api.football-data.org/v1/competitions/398/teams', {
              method: 'get',
              headers: {
                "X-Auth-Token": "2d4e53c7ff084f2f92921c8a1436c754",
                "Accept": "json"
      }
    })
      .then((response) => {
        return response.json();
      }).then((TeamData) => {

 console.log(TeamData);
    renderteams(TeamData);
})
}
           
        function renderteams(TeamData){
              //console.log(TeamData.teams[2].name);
             let unorderteams = document.createElement('ul');
                TeamData.teams.map((elem)=>{
                    let listofteams = document.createElement('li');
                    listofteams.innerHTML = elem.name;
                    let cresturl = document.createElement('img');
                    cresturl.setAttribute('class', 'cresturl');
                    cresturl.src=elem.crestUrl;
                    unorderteams.appendChild(listofteams);
                    unorderteams.appendChild(cresturl);
                    listofteams.addEventListener('click', fetchsquad);
                        function fetchsquad() {
                            fetch(elem._links.players.href, {
              method: 'get',
              headers: {
                "X-Auth-Token": "2d4e53c7ff084f2f92921c8a1436c754",
                "Accept": "json"
      }
    })
      .then((response) => {
        return response.json();
      }).then((fullsquad) => {
        console.log(fullsquad);
})
}
                
                        
                })
            putteamshere.appendChild(unorderteams);
           }
        </script>          
               
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>