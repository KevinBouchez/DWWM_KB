function svgTip(a){a=a
    ||{},a.fontsize=a.fontsize
    ||"1.5rem",a.padding=a.padding||"10px",a.bgcolor=a.bgcolor
    ||"hsl(0, 0%, 0%)",a.color=a.color||"#fff",a.opacity=a.opacity
    ||.8,$.each($("[title]","svg"),

function(b,c){var d=$(this).attr("title"),
    e=$("<div class='svgtip'>"+d+"</div>");
    e.css({position:"absolute",
    top:"50%",
    left:"50%",
    transform:"translate(-50%,-50%)",
    display:"none","background-color":a.bgcolor,
    color:a.color,padding:a.padding,
    "font-size":a.fontsize,opacity:a.opacity,
    "pointer-events":"none"}),
    $(this).hover(function(a){e.css({left:a.clientX,top:a.clientY+$(window).scrollTop()}),
    e.addClass("active"),e.show()},

function(){e.hide(0),
    e.removeClass("active")}),
    $(this).on("mousemove",
    function(a){e.hasClass("active")&&e.css({left:a.clientX,top:a.clientY+$(window).scrollTop()-e.height()})}),
    $("body").append(e)})}
    
function lll(a){$("#debug").append(a+"<br/>")}new svgTip({fontsize:"var(--responsive)",padding:"5px"});

function openPopup(popup) {
	/* Open popup and make accessible screen readers */
	$(popup).show().attr("aria-hidden", "false");
	/* Focus on element to guide screen readers to popup */
	$("#closePopup").focus();
}

function closePopup(popup) {
	/* Close popup and hide from screen readers */
	$(popup).hide().attr("aria-hidden", "true");
	/* Focus screen readers back to button */
	$("#openMyPopup").focus();
}

