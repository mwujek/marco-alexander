var $ = jQuery.noConflict();


$(document).ready(function(){
	var menuBackBtn = $('.menu-toggle-off');
	var menuParent = $('.menu-item-has-children');
	var navItemChildren = menuParent.find('ul.sub-menu');
	function showBackBtn(){
		menuBackBtn.fadeIn(500);
		navItemChildren.css('opacity',1);
	}
	function hideBackBtn(){
		menuBackBtn.fadeOut(500);
		navItemChildren.css('opacity',0);
	}
	menuParent.click(showBackBtn);
	menuBackBtn.click(hideBackBtn);
	menuBackBtn.fadeOut(0);
	navItemChildren.css('opacity',0);

	$('.slider').flickity({
  		cellSelector: '.slide',
  		cellAlign: 'left',
  		contain: true
	});

});