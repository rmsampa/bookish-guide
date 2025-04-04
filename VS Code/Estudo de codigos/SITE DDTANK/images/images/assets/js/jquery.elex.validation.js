var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

;$.syncProcessSign = false;
(function($){
	$.fn.showInfo = function(info, type){
		var $this = this;
		var $info = $this.siblings('.info');

		if( type == 'error' ){
			$this.addClass('ui_input_error').removeClass('ui_input_focus');
			$info.addClass('info_error');
		}else{
			$this.removeClass('ui_input_error');
			$info.removeClass('info_error');
		}
		$info.html(info);
		return false;
	},
	$.fn.hideInfo = function(){
		var $this = this;
		var $info = $this.siblings('.info');

		if( $this.is(':focus') ){
			$this.addClass('ui_input_focus');
		}

		$this.removeClass('ui_input_error');
		$info.html('');
		return true;
	},
	$.onEventValidation = function(option) {
		$.each(option, function(k, v){
			$('#'+v).off().on({
				focus : function(){
					if( !$(this).hasClass('ui_input_error') ){
						$(this).addClass("ui_input_focus");
					}
				},
				input : function(){
					window[v+'_field_validation']( $(this) );
				},
				propertychange : function(){
					if($.syncProcessSign) return false;
					$.syncProcessSign = true;
					window[v+'_field_validation']( $(this) );
					$.syncProcessSign = false;
				},
				blur : function(){
					$(this).removeClass("ui_input_focus");
					window[v+'_field_validation']( $(this) );
				}
			});
		});
	},
	$.submitValidation = function(option) {
		var flag = true;
		$.each(option, function(k, v){
			eval('var tempFlag='+v+'_field_validation($("#'+v+'"), true)');
			if( flag && !tempFlag ){
				flag = false;
			}
		});
		return flag;
	}
}(jQuery));

}
/*
     FILE ARCHIVED ON 08:23:12 Jun 03, 2017 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 04:33:33 Jan 18, 2023.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 214.844
  exclusion.robots: 0.179
  exclusion.robots.policy: 0.172
  RedisCDXSource: 48.054
  esindex: 0.007
  LoadShardBlock: 148.573 (3)
  PetaboxLoader3.datanode: 141.434 (5)
  CDXLines.iter: 13.202 (3)
  load_resource: 111.01 (2)
  PetaboxLoader3.resolve: 63.341 (2)
*/