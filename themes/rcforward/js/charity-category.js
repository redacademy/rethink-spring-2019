(function ($) {
    $(function () {
        //on click
        $(".charity-tax-button").on("click", function(event){
            event.preventDefault();
            const $name = $(this).val();
            getCharities($name);
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
                $(".show-results").append(`<span>Results: </span><a id="charity-tax-button" class="charity-tax" href="#">${name} <span> X</span></a>`);
                getCharity($taxId, name);
                
                
            }).fail(function () {
                $(".fail-message").html("");
                $("article").append(`<p class="fail-message">Sorry, somthing went wrong, please try again!</p>`);
            });


        }//end of get request
        function getCharity(taxId){
            $.ajax({
                method: "get",
                url: api_vars.rest_url + "wp/v2/charity?_embed",
            }).done(function (data) {

                $.each(data, function (index, value){
                    $.each(value.charity_tax, function(index, id){
                        console.log(taxId);
                        if(id == taxId){
                            console.log(id);
                            let $thumbnailLink = value._embedded["wp:featuredmedia"][0].source_url;
                            let $logoLink = value.charity_logo;
                            let $title = value.title.rendered;
                            let $description = value.charity_description.substring(75)+" [...]";
                            //TODO change the charity_description to short description
                            //TODO add a Chimp API KEY
                            //TODO add a Donate Button
                            let $pageLink=value.link;

                            $(".show-charities").append(`<div class="sigle-charity"><div class="thumbnail-wrapper">
                            <img class="thumbnail" src="${$thumbnailLink}" atl="Charity image"/>
                            <img class ="logo" scr="${$logoLink}" atl="Charity logo"/>
                        </div>
                    
                    <div class="content">
                        <h4 class="title">${$title}</h4>
                        <p class = "description">${$description}</p>
                    </div>
                    <div class="buttons">
                        <a class ="donate-button" href="">Donate</a>
                        <a class ="learn-more-button" href="${$pageLink}">Learn More</a>
                    </div></div>`)
                        }   
                    })
                })
            });

        }

        $(".show-results").on("click", '#charity-tax-button', function(event){
            event.preventDefault();
            console.log("clicked");
            $(".show-results").html("");
            $(".show-charities").html("");
        });
    
    });//end of doc ready

})(jQuery);