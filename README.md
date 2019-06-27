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
## Mobile Version
For the mobile version of the website, I was in charge of using JavaScript for the FAQ page.

Inside the faq page, I used the hide & toggle method. This would hide other questions that have been opened initially when another question has been clicked by the user

![Desktop FAQ](readme-img/faq-desktop.png)
![Mobile FAQ](readme-img/faq.gif)

Considering that the desktop version of the faq page has no hide and toggle methods, it displays all the answers without having the click on the questions.

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

# SCSS

When styling a big website with responsive designs, I find that minimizing the use of mixins on a particular page-template class really helps. (e.g. have only a “@include tablet” and a “@include desktop”)

In our content.scss file, me and my team thought it would be helpful to add all the basic stylings to our body class (e.g. background-color, color, font-family)

Considering that our website had 30 donate buttons in total, all with the same class and the  same styling, I targeted that class once in the content.scss file to avoid repeated code for the donate button all over our page-template file. Efficiency is key!
![Chimp Donate Form Code](readme-img/chimp-donate-form.png)

# Screenshot
## Donate Pgae Category
![Charity Category](readme-img/rcforward-category.gif)

# Goals
-Make that hamburger menu appear in the mobile screen size.
![Hamburger Menu](readme-img/hamburger-menu.gif)
-Counter-up amount funded for funded page and charity page.
-Show one post at blog page and keep loading post when load more is being pressed using ajax load more plugins.

-Make charity and fund page easy to add and change content by creating custom post type for those two category and set of custom field suite plugins.

-CSS styling for charity page to take in effect for all the types of page with or without images /videos.
-Validate emails and comments at the contact page by adding contact form plugins.


# Learnings
-Basically how custom fields are very useful to make add and change content for website who have many pages that keeps repeatings the content page.
-How to make that hamburger menu transition into the main navigation for desktop version or the other way around.
