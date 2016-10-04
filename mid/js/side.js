$(document).scroll(function(){    
    if ($(window).height()<=580){
        var sidebarObj=$(".leftsidebar");
        var extraSidebar=sidebarObj.height()-$(window).height();        
        if ($(document).scrollTop()>extraSidebar){            
            if (sidebarObj.css("position")!="fixed"){
                sidebarObj.css({
                    "position": "fixed",
                    "top": -extraSidebar+"px"
                });
            }
        }
        else{
            sidebarObj.css({
                "position": "static",
                "top": 0+"px"
            });
        }
    }
});
