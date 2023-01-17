
$(window).on('load', function() {

var jstoken=$("#token-get").attr("data-token");
//alert(jstoken);

    //alert( "Instagram API wird Verbunden" );
    $.getJSON('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username&access_token=IGQVJYV3BQbFhkSzVmVF9WOG5BR0Q5NUZATWUlGamRnMGtfMktSVUlZAUEZAycmFHbmd2VDlCMzNvTUVTV2g3clhNYVRWT2c4LTk0WlNzOGc4TDZAtTjFTOWlfZAGdEWTV0TVNVamY1bGRGRTh5YUNLcDUxUwZDZD', function(data) {
        console.log(data);
        var count = Object.keys(data.data).length;
        console.log(count);
        var count=0;
        $( data.data).each(function( index,element ) {

            console.log( index + "ID: " + element.id );
            console.log( index + "caption: " + element.caption );
            console.log( index + "media_url: " + element.media_url );
            console.log( index + "permalink: " + element.permalink );
            if(element.media_type==="VIDEO"){return;}
            count=count+1;
           
            if(count===7){return false;}

            //Adding Pictures
            $("#instacont").append( '<div class="fentryinst col col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2"><div class="fimg"><a href="'+element.permalink+'" target="_blank"><img src='+element.media_url+' alt="'+element.caption.substring(0,100)+'..."></a></div></div>' );
        });


    });


});


