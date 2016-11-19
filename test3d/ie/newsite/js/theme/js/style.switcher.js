var pinc = "assets/svg/map-pin-1.svg";
var ind = 1;

jQuery(function($) {
	var styleSwitcher = {

		initialized : false,
		initialize : function() {
			var $this = this;
			if (this.initialized)
				return;
			this.initialized = true;
			// Style Switcher CSS
			$("head").append($('<link rel="stylesheet">').attr("href", "assets/js/theme-option/style-switcher/assets/css/font-awesome.css"));
			$("head").append($('<link rel="stylesheet">').attr("href", "assets/js/theme-option/style-switcher/assets/css/theme_panel.css"));
			$("head").append($('<link rel="stylesheet">').attr("href", "http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"));
			$("head").append($('<script />').attr("src", "http://code.jquery.com/ui/1.11.1/jquery-ui.js"));

			$("head").append($('<link rel="stylesheet/less">').attr("href", "assets/js/theme-option/style-switcher/assets/css/skin.less"));

			$.getScript("assets/js/theme-option/style-switcher/assets/js/less.js", function(data, textStatus, jqxhr) {
				$.getScript("assets/js/theme-option/style-switcher/assets/js/jquery.easing.js", function(data, textStatus, jqxhr) {
				$("body").append('<div id="theme_panel"></div>');
				$("#theme_panel").load("assets/js/theme-option/style-switcher/switcher.html");

				setTimeout(function() {
					$this.build();
					$this.events();
					

					if ($.cookie("skin") != null) {
						$this.setColor($.cookie("skin"));
					}
					if ($.cookie("initialized") == null) {
						$this.container.find("h4 a").click();
						$.cookie("initialized", true);
					}
					if ($.cookie("sticky") != null) {
						$this.stickyHeader($.cookie("sticky"),'');
					}
					if ($.cookie("layout") != null) {
						$this.layoutStyle($.cookie("layout"));
					}
					
					//	alert($.cookie("transitionlayer"))
						if ($.cookie("transitionlayer") != null) {
						$this.transitionlayerfun($.cookie("transitionlayer"));
					}
						
				}, 100)

				setTimeout(function() {
					if ($.cookie("header") != null) {
						$('.header-items').removeClass('select-active')

						$('#header-style .theme-pager li').removeClass('current');
						//alert($.cookie("main_index"))

						$('.header-items-slider').eq($.cookie("main_index")).find('.header-items').eq($.cookie("index")).addClass('select-active')
						$('#header-style .theme-pager li').eq($.cookie("main_index")).addClass('current');
						var headerItemsWidth = $('.header-items-slider').width();
						lefty = $.cookie("main_index") * headerItemsWidth;

						$('.header-group').css('marginLeft', -lefty);

					} else {

						$('.header-items').removeClass('select-active')

						$('#header-style .theme-pager li').removeClass('current');
						$('.header-items-slider').eq(0).find('.header-items').eq(0).addClass('select-active')
						$('#header-style .theme-pager li').eq(0).addClass('current');

						$('.header-group').css('marginLeft', 0);
					}

				}, 500)

			});
			});

		},

		build : function() {

			var $this = this;

			this.container = $("#theme_panel");

			// Colors Skins
			var colors = [{
				"Hex" : "#f38929",
				"colorName" : "default"
			}, {
				"Hex" : "#28c2e4",
				"colorName" : "skyBlue"
			}, {
				"Hex" : "#d5586d",
				"colorName" : "pink"
			}, {
				"Hex" : "#9fb035",
				"colorName" : "green"
			}, {
				"Hex" : "#935397",
				"colorName" : "purple"
			}, {
				"Hex" : "#2ba09a",
				"colorName" : "greenblue"
			}, {
				"Hex" : "#f2ba66",
				"colorName" : "orange"
			}, {
				"Hex" : "#b33b1c",
				"colorName" : "darkred"
			}, {
				"Hex" : "#f0a01a",
				"colorName" : "darkyellow"
			}, {
				"Hex" : "#7e8588",
				"colorName" : "greyish"
			}];
			var colorList = this.container.find('.swatches');
			
		//	alert(colorList)

			$.each(colors, function(i, value) {

				var color = $("<li />").append($("<a class='color-fill' />").css("background-color", colors[i].Hex).attr({
					"data-color-hex" : colors[i].Hex,
					"data-color-name" : colors[i].colorName,
					"href" : "#",
					"title" : colors[i].colorName
				}).append($('<i/>').addClass('fa fa-check active-color')));

				colorList.append(color);

			});

			colorList.find("a").removeClass('color-fillactive')
			colorList.find('li:first').find("a").addClass('color-fillactive')

			colorList.find("a").click(function(e) {
				e.preventDefault();
               
				$this.setColor($(this).attr("data-color-hex"));
			});
			$('.swatches li').click(function(){
				ind = $(this).index()+1;
				$.cookie("index", ind);
				 
				 pinc = "assets/svg/map-pin-"+ind+".svg";
				 icons(pinc);
				
			})
				// fonts List
			var fontFamily = [{
				'familyName' : "'Montserrat',sans-serif"
			}, {
				'familyName' : "'Open Sans', sans-serif"
			}, {
				'familyName' : "'Libre Baskerville', sans-serif"
			}];

			//fonts List Builder
			var fontList = this.container.find('#fonts .select-font')
			$.each(fontFamily, function(i, value) {
				var fonts = $("<option />").text(fontFamily[i].familyName);
				fontList.append(fonts);
			});

			//fonts List events
			fontList.change(function(e) {
				$this.setFamily($(this).val());
			});

		},

		events : function() {

			var $this = this;

			// switcher on-off
			$(document).on('click', '#theme_panel .theme-setting i', function() {

				var left = $('#theme_panel').outerWidth();
				if (!$('#theme_panel').hasClass('active')) {
					$('#theme_panel').addClass('active');
					$('#theme_panel').animate({
						'left' : 0
					}, 1000, 'easeInBack')
				} else {
					$('#theme_panel').removeClass('active');
					$('#theme_panel').animate({
						'left' : -left
					}, 1000, 'easeOutBack')
				}

				//for custom slider
				$this.slider();

			})
			//on off latest
			$(document).on('click', '.theme-heading', function() {

				$('.theme-heading').removeClass('on');
				$('.theme_panel_option').slideUp('normal');
				$('.fa-minus').removeClass('fa-minus');

				if ($(this).next().is(':hidden') == true) {
					$(this).addClass('on');
					$(this).next().slideDown('normal');
					$(this).find('.fa-plus').addClass('fa-minus');
				} else {
					$(this).find('.fa-plus').removeClass('fa-minus');
				}
			});
			$(document).on('mouseover', '.theme-heading', function() {
				$(this).addClass('over');
			}).mouseout(function() {
				$(this).removeClass('over');
			});
			$('.theme_panel_option').hide();

			//Radio active
			$(document).on('click', '#layout .layout-column', function() {
				$('#layout .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var layoutStyle = $(this).attr('data-layout')
				styleSwitcher.layoutStyle(layoutStyle)
			})

			$(document).on('click', '#sticky .layout-column', function() {
				$('#sticky .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var sticky = $(this).attr('rel')
				styleSwitcher.stickyHeader(sticky,$(this))
			})
			
			
						$(document).on('click', '#theme_effect .layout-column', function() {
							
							$('#theme_effect .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var transitionVal = $(this).attr('rel');
				$.cookie('transitionlayer', transitionVal);
				styleSwitcher.transitionlayerfun(transitionVal)
				if($.cookie('transitionlayer')=='yes'){
					$('html,body').scrollTop(0)
					  location.reload();
				}
				
		

			})
			// Active Devices
			$(document).on('click', '.device-highlight', function() {
				$('.iphone-p-active').removeClass('iphone-p-active')
				$(this).addClass('iphone-p-active');

			})

			$(document).on('click', '.header-items', function() {
				$('.select-active').removeClass('select-active')
				$(this).addClass('select-active')
			})
			// Active Pages
			$(document).on('click', '.page-group a', function() {
				$('.active-page').removeClass('active-page')
				$(this).addClass('active-page')
			})		
			
			
		if ($.cookie('transition-right') == "yes") {
			
            $(".anim-section").addClass("transition-right");
             $(".anim-section").removeClass("effect-bottom");
            
        }
      

        // When the span is clicked
        $(".theme-transition").click(function () {
            // Check the current cookie value
            // If the cookie is empty or set to no, then add highcontrast
            if ($.cookie('transition-right') == "undefined" || $.cookie('transition-right') == "no") {
                // Set cookie value to yes
                $.cookie('transition-right','yes', {expires:1000, path: '/'});
                // Add the class to the body
                $(".anim-section").addClass("transition-right");
                $(".anim-section").removeClass("effect-bottom");
                location.reload();
            }  
            // If the cookie was already set to yes then remove it
            else {
                $.cookie('transition-right','no',  {expires:1000, path: '/'});
                $(".anim-section").removeClass("transition-right");
            }
        }); 
        
          if ($.cookie('effect-bottom') == "yes") {
        	
            $(".anim-section").removeClass("effect-bottom");
            
        }
			    // When the span is clicked
        $(".theme-translate").click(function () {
            // Check the current cookie value
            // If the cookie is empty or set to no, then add highcontrast
            if ($.cookie('effect-bottom') == "undefined" || $.cookie('effect-bottom') == "no") {
                // Set cookie value to yes
                $.cookie('effect-bottom','yes', {expires:1000, path: '/'});
                // Add the class to the body
                $(".anim-section").addClass("effect-bottom");
                $(".anim-section").removeClass("effect-bottom");
                location.reload();
            }  
            // If the cookie was already set to yes then remove it
            else {
                $.cookie('transition-right','no',  {expires:1000, path: '/'});
                $(".anim-section").removeClass("transition-right");
            }
        }); 
			
			var headerHeight = $('#header').outerHeight()
			var st = $(window).scrollTop();
			stickOnScroll = function() {
				if ($.cookie('sticky') == "intelligent") {
					
					$('#header').removeClass('normal');
					$('#slider').addClass('top');
					$('#header').addClass('intelligent');
					var pos = $(window).scrollTop();

					if (pos > headerHeight) {
						if (pos > st) {						
							$('#header').addClass('simple')
							$('#header.simple').removeClass('down')
							$('#header.simple').addClass('fixed up')

						} else {
							$('#header.simple').removeClass('up')
							$('#header.simple').addClass('fixed down')

						}
						st = pos;

					} else {
						$('#header.simple').removeClass('fixed down up simple')
					}
					if (pos == $(document).height() - $(window).height()) {
						$('#header.simple').removeClass('up')
						$('#header.simple').addClass('fixed down')
					}

				} else  if ($.cookie('sticky') == "fix"){
					
					$('#slider').removeClass('top')
					$('#header').addClass('simple fixed')
					$('#header').removeClass('down up')
					$('#header').removeClass('intelligent');
					$('#wrapper').css({
						paddingTop : 0
					})
				}
				else  {

					$('#header.simple').removeClass('fixed down up simple')
					$('#header').addClass('normal');
					$('#slider').removeClass('top');
					$('#header').removeClass('intelligent');
					$('#wrapper').css({
						paddingTop : 0
					})
				}
			}
			stickOnScroll()
			$(window).scroll(function() {
				stickOnScroll()
			})
			// end for sticky header
		},

		setColor : function(color) {

			less.modifyVars({
				skinColor : color
			});

			$.cookie("skin", color);
			this.container.find(".swatches").find('.color-fill').removeClass('color-fillactive');
			this.container.find(".swatches a[data-color-hex=" + color + "]").addClass('color-fillactive');
		},
		
			setFamily : function(fontFamily) {
			less.modifyVars({
				fontFamily : fontFamily
			});
			$('#fonts .select-font').find('option').each(function() {
				if ($(this).val() == fontFamily) {
					$(this).attr('selected', 'selected')
				}
			})
			$.cookie("fontFamily", fontFamily);
		},

		stickyHeader : function(sticky,$this) {
			setTimeout(function(){
				stickOnScroll()
				$('#sticky .layout-column').removeClass('radio-active');
				if ($this != '') {
					$($this).addClass('radio-active');
				} else {
					$("#sticky-" + sticky).addClass("radio-active");
					console.log($("#sticky-fix").attr("class"));
				}
				console.log(sticky); 
			},100)
			$.cookie('sticky', sticky)
		},
		
		transitionlayerfun : function(transitionVal){
				if (transitionVal == 'yes') { $('html,body').scrollTop(0)
					$('#theme_effect .layout-column').removeClass('radio-active');
					$('#theme-transition.layout-column').addClass('radio-active');
					$('.animate-effect').each(function() {
					$(this).addClass('anim-section');
				//animSection();
		
					});
				
					
				//stickOnScroll()
				//$('#sticky .layout-column').removeClass('radio-active')
				//$('#sticky-yes').addClass('radio-active')
			} else {
						$('#theme_effect .layout-column').removeClass('radio-active');
					$('.animate-effect').removeClass('anim-section');
					$('#theme-translate.layout-column').addClass('radio-active');
				//stickOnScroll()
				//$('#layout .layout-column').removeClass('radio-active')
				//$('#sticky-no').addClass('radio-active')
			}
			$.cookie('transitionlayer', transitionVal);
			
		},
		layoutStyle : function(layout) {
			if (layout == 'fullWidth') {
				$('#wrapper').removeClass('boxed')
				$('#layout .layout-column').removeClass('radio-active')
				$('#full-width').addClass('radio-active')
			} else {
				$('#wrapper').addClass('boxed')
				$('#layout .layout-column').removeClass('radio-active')
				$('#boxed').addClass('radio-active')
			}
			$.cookie('layout', layout)
		},

		reset : function() {
			$.removeCookie("skin");
			$.removeCookie("layout");
			$.removeCookie("pattern");
			$.cookie("showSwitcher", true);
			window.location.reload();
		},

		slider : function() {
			var headerItemsLength = $('.header-items-slider').length;
			var headerItemsWidth = $('.header-items-slider:first-child').width();
			var totalWidth = headerItemsLength * headerItemsWidth;
			$('.header-group').width(totalWidth);

			$(document).on('click', '#header-style .theme-pager li', function() {
				$('#header-style .theme-pager li').removeClass('current')
				$(this).addClass('current');
				ind = $(this).index();
				lefty = ind * headerItemsWidth;
				$('.header-group').animate({
					'marginLeft' : -lefty
				}, 500)

			})
		}
	};

	styleSwitcher.initialize();
	icons(pinc);

})


 
function icons(pinc)
{
	if ($.cookie("index") != null) {
		
			var getId = $.cookie("index");
			 pinc = "assets/svg/map-pin-"+getId+".svg";
		}
	
	 var markers = [
            {
   "title": 'Amsterdam',
   "lat": '52.369752',
   "lng": '4.890097'
},
 {
   "title": 'Amsterdam',
   "lat": '52.371595',
   "lng": '4.870633'
},
{
   "title": 'Amsterdam',
   "lat": '52.369149',
   "lng": '4.901233'
   
}
    ];

   	
// Set style
   var styles = [
    {
      featureType: "all",
      elementType: "all",
      stylers: [
        { saturation: -100 } // <-- THIS
      ]
    }
];

// call style map
   	var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

   	
   	// define map options
	 var mapOptions = {
						center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
						zoom: 15,
						scrollwheel: false

		           };
		
	// create infowindo object..
       // var infoWindow = new google.maps.InfoWindow();
   // create map object
        
          var map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
 
 
 
         
        var i = 0;
  // Set interval
        var interval = setInterval(function () {
        	
            var data = markers[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
          // define markar option
            var marker = new google.maps.Marker({
                position: myLatlng,
                icon:pinc,
                map: map,
                title: data.title,
                animation: google.maps.Animation.DROP
            });
         
         // set style
             map.mapTypes.set('map_style', styledMap);
             map.setMapTypeId('map_style');
        // generate markar and set markar
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                   // infoWindow.setContent(data.description);
                    //infowindow.open(map, marker);
                    // boxText.innerHTML = data.description;
                    // ib.open(map, marker)
                     map.panTo(myLatlng);
                });
            })(marker, data);
            // var ib = new InfoBox(myOptions);
                   //ib.open(map, this)
            i++;
            if (i == markers.length) {
                clearInterval(interval);
            }
        }, 200);
        
        
}
