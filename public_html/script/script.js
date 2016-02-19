window.onload = function () {
//    $("#accordion").accordion({
//        collapsible: true,
//        heightStyle: "content",
//        navigation: false 
//    })

    //$("h4:nth-child(5)").css("border", "3px solid red")
    
//    $("#achievements").hide();
//    $("#qualification").hide();
//    $("#experience").hide();
//    $("#education").hide();
    
    $("#t1").click(function() {
        $("#achievements").toggle("fast");
    });
    
    $("#t2").click(function() {
        $("#qualification").toggle("fast");
    });
    
    $("#t3").click(function() {
        $("#experience").toggle("fast");
    });
    
    $("#t4").click(function() {
        $("#education").toggle("fast");
    });
    
//    $(window).scroll(
//    {
//        previousTop: 0
//    }, 
//    function () {
//    var currentTop = $(window).scrollTop();
//        if (currentTop < this.previousTop) {
//            //$(".sidebar em").text("Up");
//            $("#wrapper").show('slow');
//        } else {
//            //$(".sidebar em").text("Down");
//            $("#wrapper").hide('slow');
//        }
//        this.previousTop = currentTop;
//    });
    
//    $("#accordion1 a").click(function() {
//        //$("div p:first-child").css("border", "3px solid red");
//        //$((elem.next()).toggle("fast");
//        $("#accordion1").children().css("border", "3px solid red");
//    });
    $(document).ready(function(){ 
    $('#characterLeft').text('250 characters left');
    $('#message').keydown(function () {
        var max = 250;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
};