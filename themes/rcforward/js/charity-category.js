(function ($) {
    $(function () {
        //on click
        $(".charity-tax").on("click",  function(event){
            event.preventDefault();
            $(".charity-tax").removeClass("active");
            const $name = $(this).val();
            getCharities($name);
            $(this).addClass("active");
        });

        //Get Request
        function getCharities(name) {
            $(".show-results").html("");
            $(".show-charities").html("");
            let $taxId;
            $.ajax({
                method: "get",
                url: api_vars.rest_url + "wp/v2/charity_tax",
            }).done(function (data) {
                $.each(data, function (index, value){
                    // console.log(value.name);
                    if(name == value.name){
                        // console.log(name);
                        // console.log(value.name);

                        $taxId =  value.id;
                        // console.log($taxId);
                    }   
                })
                // console.log(name);
                // console.log($taxId);
                $(".show-results").append(`<span>Results: </span><a id="charity-tax-button" class="charity-tax-result" href="#">${name} <span> X</span></a>`);
                $(".show-results").addClass("active");
                getCharity($taxId, name);
                
                
            }).fail(function () {
                $(".fail-message").html("");
                $("article").append(`<p class="fail-message">Sorry, somthing went wrong, please try again!</p>`);
            });


        }//end of get request
        function getCharity(taxId, name){
            $.ajax({
                method: "get",
                url: api_vars.rest_url + "wp/v2/charity?_embed",
            }).done(function (data) {
                
                $.each(data, function (index, value){
                    $.each(value.charity_tax, function(index, id){
                        // console.log(taxId);
                        if(name==="see all" || id == taxId){
                            console.log(value);
                            // let $thumbnailLink = value.featured_image_url;
                            let $thumbnailLink = value._embedded["wp:featuredmedia"][0].media_details.sizes.full.source_url;
                            let $logoLink = value.charity_logo;
                            // console.log($logoLink);
                            let $title = value.title.rendered;
                            let $description = value.charity_description.substring(0, 90)+" [...]";
                            let $descriptionTab = value.charity_description.substring(0, 75)+" [...]";
                            //TODO change the charity_description to short description
                            //TODO add a Chimp API KEY
                            //TODO add a Donate Button
                            let $pageLink=value.link;

                            $(".show-charities").append(`<div class="single-charity"><div class="thumbnail-wrapper">
                            <img class="thumbnail" src="${$thumbnailLink}" atl="Charity image"/><div class="logo-container">
                            <img class ="logo" src="${$logoLink}" atl="Charity logo"/></div>
                        </div>
                    
                    <div class="content">
                        <h4 class="title">${$title}</h4>
                        <p class = "description tablet-only-version">${$descriptionTab}</p>
                        <p class = "description desktop-version">${$description}</p>
                    </div>
                    <div class="buttons">
                        <a class ="donate-button button" href="">Donate</a>
                        <a class ="learn-more-button button" href="${$pageLink}">Learn More</a>
                    </div></div>`)
                        }   
                    })
                })
            });

        }

        $(".show-results").on("click", '#charity-tax-button', function(event){
            event.preventDefault();
            $(".charity-tax").removeClass("active");
            $(".show-results").addClass("active");
            $(".show-results").html("");
            $(".show-charities").html("");
        });
    
    });//end of doc ready

})(jQuery);