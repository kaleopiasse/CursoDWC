var nomeCanal = 'backtotriangle';
var upload_id;
$(document).ready(function () {
  $.get("https://www.googleapis.com/youtube/v3/channels", {
    part:'contentDetails',
    forUsername: nomeCanal,
    key:'AIzaSyCJc47o_MuXEaCeTW3vEhQE355cOpgcRFE'},
    function (data) {
      upload_id=  data.items[0].contentDetails.relatedPlaylists.uploads;
      pegarVideos(upload_id)
    }
  )

  function pegarVideos(id){
    $.get('https://www.googleapis.com/youtube/v3/playlistItems', {
      part:'snippet',
      maxResults:10,
      playlistId: id,
      key:'AIzaSyCJc47o_MuXEaCeTW3vEhQE355cOpgcRFE'
    },
      function (data){
        console.log(data)
      }
    )
  }
});