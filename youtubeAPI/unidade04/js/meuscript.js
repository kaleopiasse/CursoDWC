
$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/videos", {
            part: 'statistics',
            id: 'iFsZQ0kPNLs',
            key: 'AIzaSyCJc47o_MuXEaCeTW3vEhQE355cOpgcRFE'},
            function(data) {
                console.log(data);
            }
    )
});