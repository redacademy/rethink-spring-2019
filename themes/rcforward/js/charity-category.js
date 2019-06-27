
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
                    if(name == value.name){
                        $taxId =  value.id;
                    }   
                })
                $(".show-results").append(`<span>Results: </span><a id="charity-tax-button" class="charity-tax-result" href="#">${name} <span> X</span></a>`);
                $(".show-results").addClass("active");
                getCharity($taxId, name);
                let result = document.getElementsByClassName("show-results");
                result[0].scrollIntoView({behavior: "smooth", block: "center"});

                
                
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
                let idArray = [];
                $.each(data, function (index, value){
                    $.each(value.charity_tax, function(index, id){
                        if(name==="see all" || id == taxId){
                            if($.inArray(value.id, idArray) === -1){
                                idArray.push(value.id);
                            let $thumbnailLink = value._embedded["wp:featuredmedia"][0].media_details.sizes.full.source_url;
                            let $logoLink = value.charity_logo;
                            let $title = value.title.rendered;
                            let $description = value.charity_description.substring(0, 90)+" [...]";
                            let $descriptionTab = value.charity_description.substring(0, 75)+" [...]";
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
                        <a class ="learn-more-button button" href="${$pageLink}">Learn More</a>
                    </div></div>`)
                        }  
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
            let scrollToTop = document.getElementsByClassName("choose-charity-category");
            scrollToTop[0].scrollIntoView({behavior: "smooth"});

        });
    
    });//end of doc ready

})(jQuery);