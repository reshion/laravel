$('document').ready(function() {

    dynMenuObject = {};
    dynMenuObject.main = {};
    dynMenuObject.sub = {};
    resizeFunction();
    $(window).resize(function(){
        resizeFunction();
        
    });
    function resizeFunction() {
        $('.test-menu div').each(function(index) {
            dynMenuObject.main[index] = {top: $(this).offset().top, left: $(this).offset().left};
        })
        $('.test-menu-2 div').each(function(index) {
            dynMenuObject.sub[index] = {top: $(this).offset().top, left: $(this).offset().left};
        })
    }
    
})