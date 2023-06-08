let count = 0;

$("buttons").on("click", function() {
    let cart = $(".cart-nav");
    let imgtodrag = $(this)
        .parent(".buttons")
        .parent(".content")
        .parent(".card .mb-3")
        .find("img")
        .eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag
            .clone()
            .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left,
            })
            .css({
                opacity: "0.8",
                position: "absolute",
                height: "150px",
                width: "150px",
                objectFit: "cover",
                "z-index": "100"
            })
            .appendTo($("body"))
            .animate(
                {
                    top: cart.offset().top +20,
                    left: cart.offset().left +30,
                    width: 75,
                    height: 75
                },
                1000, 
                "easeInOutExpo"
            );
            
    }
})