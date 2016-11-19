
	(function($)
	{
		$.fn.extend({
			bgrotate: function(options)
			{
				var defaults = {
					delay: 4000,
					images: [],
					imagedir: "/images/"
				}

				var o = $.extend(defaults, options);
				var $obj = $(this);
				var cache = [];
				var i = 0;
				var preCache = true;

				return this.each(function()
				{
					setTimeout(function() { setBack($obj, o.images, o.imagedir) }, o.delay);
				});

				function setBack(elem, backgrounds, imagedir)
				{
					//elem.css("background-image", "url(" + imagedir + backgrounds[i] + ")");
					var newElement = elem.clone();
					$(newElement).css({'background-image': "url(" + imagedir + backgrounds[i] + ")"})
					$(newElement).css("position","absolute");
					$(newElement).css("top",$(elem).position().top + "px");
					$(newElement).css("left",$(elem).position().left + "px");
                    $(newElement).hide();
					$(elem).after(newElement);
					$(newElement).fadeIn('slow', function() {
						$(newElement).css("position",$(this).css("position"));
						$(newElement).css("top",$(this).css("top"));
						$(newElement).css("left",$(this).css("left"));
						$(elem).remove();
						setTimeout(function() { setBack($(newElement), o.images, o.imagedir) }, o.delay);
					});
					i++;
					if (i == backgrounds.length)
					{
						i = 0;
						preCache = false;
					}
					if (preCache)
					{
						var cacheImage = document.createElement('img');
						cacheImage.src = imagedir + backgrounds[i];
						cache.push(cacheImage);
					}
				}
			}
		});
	})(jQuery);

$("#BGchanger").bgrotate({ delay: 3000, imagedir: "http://www.soulstat.com/organizations/braza_roja/images/", images: ["IMG_4578.jpg", "IMG_5133.jpg", "IMG_5178.jpg", "IMG_4555.jpg", "IMG_4552.jpg", "IMG_5134.jpg"] });