/**
 * Script to test site for cookies. Never inserted for visitors, only for admin.
 */
	//create an element we can click on to accept cookies
	let html = '<div id="cmplz_test_cookies_div" class="cmplz-accept-cookies"></div>';
	document.body.insertAdjacentHTML('beforeend', html);

	/**
	 * Force all cookies to be accepted, starting with complianz
	 */
	document.addEventListener("cmplz_cookie_warning_loaded", cmplzForceAcceptCookies);

	function cmplzForceAcceptCookies(consentData) {
		document.querySelector('.cmplz-accept-cookies').click();
	}

	var cookies = get_cookies_array();
	var lstorage = get_localstorage_array();
	var request = new XMLHttpRequest();
	request.open('POST', '{admin_url}' + 'store_cookies', true);
	request.setRequestHeader('X-WP-Nonce', '{nonce}');

	var data = {
		'cookies': cookies,
		'lstorage': lstorage,
		'token': '{token}',
		'complianz_id': '{id}'
	};

	request.setRequestHeader('Content-type', 'application/json');
	request.send(JSON.stringify(data));

	function get_localstorage_array() {
		var lstorage = {};
		for (i = 0; i < localStorage.length; i++) {

			lstorage[localStorage.key(i)] = localStorage.key(i);
		}
		for (i = 0; i < sessionStorage.length; i++) {
			lstorage[sessionStorage.key(i)] = sessionStorage.key(i);
		}


		return lstorage;
	}

	function get_cookies_array() {
		var cookies = {};
		if (document.cookie && document.cookie != '') {
			var split = document.cookie.split(';');
			for (var i = 0; i < split.length; i++) {
				var name_value = split[i].split("=");
				name_value[0] = name_value[0].replace(/^ /, '');
				cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
			}
		}

		return cookies;

	}


	function cmplz_function_exists(function_name) {
		if (typeof function_name == 'string') {
			return (typeof window[function_name] == 'function');
		} else {
			return (function_name instanceof Function);
		}
	}

	function deleteAllCookies() {
		document.cookie.split(";").forEach(function (c) {
			document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
		});
	}

