$(window).load(function() {

    $("#barajar").click(function() {
        $(".top-demo td").each(function() {
            $(this).circulate({
                speed: Math.floor(Math.random()*300) + 100,
                height: Math.floor(Math.random()*1000) - 470,
                width: Math.floor(Math.random()*1000) - 470
            });
        });
    });

});