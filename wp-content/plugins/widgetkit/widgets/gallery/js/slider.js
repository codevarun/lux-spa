(function(d){var h=[],c=function(){},i={width:200,height:"auto",total_width:"auto",sticky:!1,spacing:0,easing:"easeOutCirc",duration:500};c.prototype=d.extend(c.prototype,{name:"galleryslider",initialize:function(b){this.options=d.extend({},i,b);this.init_options=d.extend({},this.options);var a=this;this.ul=this.element.find(".slides:first");this.items=this.ul.children();this.wrapper=this.element;this.resize();this.items.each(function(){var b=d(this);b.bind("mouseover",function(){a.items.stop().removeClass("active");
var c=[];b.width();var g=a.items.not(b).filter(function(){return d(this).width()>a.min2});g.each(function(){c.push(d(this).width())});b.animate({width:a.options.width},{complete:function(){g.css("width",a.min2)},easing:a.options.easing,duration:a.options.duration}).addClass("active");g.animate({width:a.min2},{easing:a.options.easing,duration:a.options.duration})})});this.options.sticky||this.wrapper.bind("mouseleave",function(){a.items.stop().animate({width:a.min}).removeClass("active")});d(window).bind("resize",
function(){a.resize()})},resize:function(){this.items.stop().removeClass("active");this.ul.css({width:"",height:""});this.wrapper.css({width:"",height:""});var b="auto"==this.init_options.total_width?this.wrapper.width():this.init_options.total_width>this.wrapper.width()?this.wrapper.width():this.init_options.total_width;this.min=b/this.items.length-this.options.spacing;this.options.width=this.init_options.width;this.options.height=this.init_options.height;this.items.css("background-size","");if(b<
this.options.width){var a=this.init_options.width/(b/2);this.items.css("background-size",this.init_options.width/a+"px "+this.init_options.height/a+"px");this.options.width=this.init_options.width/a;this.options.height=this.init_options.height/a}this.min2=(b-this.options.width)/(this.items.length-1)-this.options.spacing;this.items.css({width:this.min,"margin-right":this.options.spacing});this.ul.width(2*this.items.eq(0).width()*this.items.length);this.wrapper.css({width:b,height:this.options.height})}});
d.fn[c.prototype.name]=function(){var b=arguments,a=b[0]?b[0]:null;return this.each(function(){var e=d(this);if(c.prototype[a]&&e.data(c.prototype.name)&&"initialize"!=a)e.data(c.prototype.name)[a].apply(e.data(c.prototype.name),Array.prototype.slice.call(b,1));else if(!a||d.isPlainObject(a)){var f=new c;f.element=e;h.push(f);c.prototype.initialize&&f.initialize.apply(f,b);e.data(c.prototype.name,f)}else d.error("Method "+a+" does not exist on jQuery."+c.prototype.name)})}})(jQuery);
