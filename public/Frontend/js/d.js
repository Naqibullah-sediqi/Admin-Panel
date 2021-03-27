function getVids(PageToken){
    pid = 'PLEeJpSo-id08ksawSM0EAjCxUvIlBQlXl';
    $.get(
        "https://www.googleapis.com/youtube/v3/playlistItems",{
        part : 'snippet', 
        
        maxResults : 50,
        playlistId : pid,
        pageToken : PageToken,
        key: 'AIzaSyBwa5vNVp7bBBLQGN68BTQp7fb4FRQd378'
        },
        function(data){
              myPlan(data);
        }        
    );  
 }



function myPlan(data){
      total = data.pageInfo.totalResults;
      nextPageToken=data.nextPageToken;
      console.log(data);
      for(i=0;i<data.items.length;i++){
        
         //var vidId = data.items[i].snippet.resourceId.videoId;
         console.log(data.items);
          sum++ ; sumN++;
          if(sum == (total-1) ){              
              sum = 0;  
              return;      
          }

      }
      if(sum <(total-1)){
          getVids(nextPageToken);
      }     
}

