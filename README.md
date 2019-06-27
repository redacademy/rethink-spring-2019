# RC Forward New Website  ![My Awsome badge](https://img.shields.io/badge/%F0%9F%90%99-Awsome-red.svg)
This is the WordPress Custom Theme for RC Forward new webiste

# Motivation
It is our first Group real Client Project in school. It tooks us three weeks to complete the project from scratch. Before we start, We spent 3 days only to do the planning, the main focus is how can we make the site more users friendly with maximized dynemic functionality. We decided to create some custom post types and a lot of custom fields for the site.

We have put 110% our effort towards this site , we are so grateful of the teamwork, and we are so proud of the result.


# Challenges
One of the challenges we were facing is in the donate page. The section allows user to choose charities by category. The problem came to us: how can we provide the best user experience?
For you the owner of the website, we want you to edit and change the content easily (without hiring another developer) and for users, we want them to have the best visual effect which is showing the charities without refreshing the page.

# Javascript
## Charity Category
Using Ajax method and Rest API to get the content and append into the page.
```
    function getCharity(taxId, name){
            $.ajax({
                method: "get",
                url: api_vars.rest_url + "wp/v2/charity?_embed",
```
Need to filter throught the duplicated charities since some of the charities have been include in two category
```
 }).done(function (data) {
                let idArray = [];
                $.each(data, function (index, value){
                    $.each(value.charity_tax, function(index, id){
                        // console.log(taxId);
                        if(name==="see all" || id == taxId){
                            if($.inArray(value.id, idArray) === -1){
                                idArray.push(value.id);
```
# PHP
We used a lot of custom field in the template
```
<?php foreach ($fund_posts as $post) : setup_postdata($post); ?>
	<div class="fund-entry">
		<h4> <?php echo CFS()->get('fund_name_short'); ?></h4>
			<img src="<?php echo CFS()->get('fund_icon'); ?>" alt="Fund Icon">
			    <p class="fund-description"><?php echo CFS()->get('fund_description'); ?></p>
				<a class="learn-more-button" href="<?php echo get_the_permalink(); ?>">Learn More</a>
	</div>
<?php endforeach;?>
```
# Screenshot
## Donate Pgae Category
![Charity Category](readme-img/rcforward-category.gif)


