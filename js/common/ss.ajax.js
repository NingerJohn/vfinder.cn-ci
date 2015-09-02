/**
 * @var class SsAjax ，封装ajax的请求，依赖jquery.js
 * @author sunwei 
 * @crtime 2015/09/02
 */
var SsAjax = {}

SsAjax.request = function(data, actionUrl, method, onSuccessFunc, onErrorFunc, thisCxt) {
	var formData = data;
	if(actionUrl.indexOf("?") > 0 ) {
		actionUrl += "&isajax=1";
	} else {
		actionUrl += "?isajax=1";
	}
	var ajaxOptions = {type:method, url:actionUrl, data:formData, success:onSuccessFunc,timeout:120000};
	if (thisCxt) {
		ajaxOptions.context = thisCxt;
	}
	if (onErrorFunc) {
		ajaxOptions.error = onErrorFunc;
	}
	
	var jqxhr = $.ajax(ajaxOptions);
	return jqxhr;
}

SsAjax.postForm = function(formId, actionUrl, onSuccessFunc, onErrorFunc, thisCxt) {
	var formData = $("#"+formId).serialize();
	var jqxhr = SsAjax.request(formData, actionUrl, "POST", onSuccessFunc, onErrorFunc, thisCxt);
	return jqxhr;
}
SsAjax.post = function(data, actionUrl, onSuccessFunc, onErrorFunc, thisCxt) {
	var jqxhr = SsAjax.request(data, actionUrl, "POST", onSuccessFunc, onErrorFunc, thisCxt);
	return jqxhr;
}
SsAjax['get'] = function(data, actionUrl, onSuccessFunc, onErrorFunc, thisCxt) {
	var jqxhr = SsAjax.request(data, actionUrl, "GET", onSuccessFunc, onErrorFunc, thisCxt);
	return jqxhr;
}

SsAjax['postForm'] = SsAjax.postForm;
SsAjax['post'] = SsAjax.post;
SsAjax['get'] = SsAjax.get;
window['SsAjax'] = SsAjax;
